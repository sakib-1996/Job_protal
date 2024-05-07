<?php

namespace App\Http\Controllers\admin;

use Log;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Add;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminProfileController extends Controller
{
    public function profilePage(Request $request)
    {
        $user_id = auth()->user()->id;
        $profile = Profile::where('user_id', $user_id)->first();

        $adds = Add::where('status', true)->get();

        return view('pages.admin.profile-page', compact('profile','adds'));
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string',
            'mobile' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        try {
            DB::beginTransaction();

            $user_id = auth()->user()->id;
            $user = User::find($user_id);

            if (!$user) {
                throw new \Exception('User not found');
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
            ]);

            $directory = 'uploads/profile';
            $image = $request->image;

            $profile = Profile::where('user_id', $user_id)->first();

            if ($image) {
                if ($profile && $profile->image) {
                    // Delete old image
                    $this->deleteOldImage($profile->image);

                    // Upload and update new image
                    $image_url = $this->uploadImage($image, $directory);
                    $profile->update(['image' => $image_url]);
                } else {
                    // Upload and set new image if no old image exists
                    $image_url = $this->uploadImage($image, $directory);
                    Profile::updateOrCreate(
                        ['user_id' => $user_id],
                        ['image' => $image_url, 'name' => $request->name]
                    );
                }
            }

            DB::commit();

            return back()->with('success', 'Profile Update Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
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
        $img->resize(150, 150, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path($path));

        return asset($path);
    }
}
