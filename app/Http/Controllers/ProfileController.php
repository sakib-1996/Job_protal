<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function comProfilePage()
    {
        $user_id = auth()->user()->id;

        $adds = Add::where('status',true)->get();
        // dd($adds);

        $profile = CompanyProfile::where('user_id', $user_id)->first();

        return view('pages.companyProfile-page', compact('profile','adds'));
    }

    public function comProfileEdite(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_des' => 'required|string',
            'location' => 'required|string',
            'name' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            $user_id = auth()->user()->id;
            $directory = 'uploads/logo';
            $image = $request->file("image");
            $companyProfile = CompanyProfile::where('user_id', $user_id)->first();
            if ($companyProfile) {
                $this->deleteOldImage($companyProfile->image);
                $image_url = $this->uploadImage($image, $directory);

                User::where('id', $user_id)->update(['name' => $request->name]);
                $companyProfile->update([
                    'user_id' => $user_id,
                    'image' => $image_url,
                    'short_des' => $request->short_des,
                    'location' => $request->location,
                ]);
            } else {
                $image_url = $this->uploadImage($image, $directory);

                CompanyProfile::create([
                    'user_id' => $user_id,
                    'image' => $image_url,
                    'short_des' => $request->short_des,
                    'location' => $request->location,
                ]);
            }

            DB::commit();

            return back()->with('success', 'Profile Update Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'An error occurred during profile update');
        }
    }


    public function CandidateprofilePage()
    {

        $user_id = auth()->user()->id;
        $profile = Profile::where('user_id', $user_id)->first();
        $adds = Add::get();
        return view('pages.candidate.candidateProfile-page',compact('profile','adds'));
    }


    public function CandidateprofileUpdate(Request $request)
    {
        // dd($request->all()); 

        $this->validate($request, [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string',
            'date_of_birth' => 'required|date',
            'name' => 'required|string',
            'blood_group' => 'nullable|string',
            'nid' => 'nullable|string',
            'passport_no' => 'nullable|string',
        ]);

        try {
            // DB::beginTransaction();
            $user_id = auth()->user()->id;
            $user = User::find($user_id);

            if (!$user) {
                throw new \Exception('User not found');
            }

            $user->update([
                'name' => $request->name,
            ]);

            $directory = 'uploads/profile';
            $image = $request->image;

            $profile = Profile::where('user_id', $user_id)->first();

            if ($image) {
                if ($profile && $profile->image) {
                    $this->deleteOldImage($profile->image);

                    $image_url = $this->uploadImage($image, $directory);
                    $profile->update([
                        'image' => $image_url,
                        'location' => $request->location,
                        'date_of_birth' => $request->date_of_birth,
                        'name' => $request->name,
                        'blood_group' => $request->blood_group,
                        'nid' => $request->nid,
                        'passport_no' => $request->passport_no,
                    ]);
                } else {
                    // Upload and set a new image if no old image exists
                    $image_url = $this->uploadImage($image, $directory);
                    Profile::updateOrCreate(
                        ['user_id' => $user_id],
                        [
                            'image' => $image_url,
                            'location' => $request->location,
                            'date_of_birth' => $request->date_of_birth,
                            'name' => $request->name,
                            'blood_group' => $request->blood_group,
                            'nid' => $request->nid,
                            'passport_no' => $request->passport_no,
                        ]
                    );
                }
            }

            return back()->with('success', 'Profile Update Successfully');
        } catch (\Exception $e) {
            // \Log::error('Profile update error: ' . $e->getMessage());

            return back()->with('error', 'An error occurred during profile update. Please try again.');
        }
    }





    private function deleteOldImage($old_img)
    {
        $directory = 'uploads/profile';
        $pathParts = explode('/', $old_img);
        $old_imgName = end($pathParts);
        File::delete(public_path("{$directory}/{$old_imgName}"));
    }

    private function uploadImage($image, $directory)
    {
        $t = time();
        $file_name = $image->getClientOriginalName();
        $newName = "{$t}-{$file_name}";

        $path = "{$directory}/{$newName}";

        File::ensureDirectoryExists(public_path($directory));

        $img = Image::make($image);
        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path($path));

        return asset($path);
    }
}
