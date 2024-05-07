<?php

namespace App\Http\Controllers\admin;

use App\Models\Job;
use App\Models\Type;
use App\Models\User;
use App\Models\Category;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AdminJobController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $postedJobs = Job::where('user_id', $user_id)->paginate(10);

        return view('pages.jobIndex-page', compact('postedJobs'));
    }
    public function createJobPostPage()
    {
        $categories = Category::all();
        $type = Type::all();
        $experience = Experience::all();
        return view('pages.createJobPost-page', compact('categories', 'type', 'experience'));
    }








    public function createJobPost(Request $request)
    {

        
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'type' => 'required|exists:types,id',
            'job_details' => 'required|string',
            'short_des' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|string',
            'experience' => 'required|exists:experiences,id',
            'dateline' => 'required|date',
            'requirment' => 'required|string',
        ]);

        $user = auth()->user();

        
        $job = Job::create([
            'comp_name' => $request->name,
            'user_id' => $user->id,
            'title' => $request->title,
            'short_des' => $request->short_des,
            'location' => $request->location,
            'salary' => $request->salary,
            'experience_id' => $request->experience,
            'category_id' => $request->category,
            'type_id' => $request->type,
            'job_details' => $request->job_details,
            'requirment' => $request->requirment,
            'dateline' => $request->dateline,
        ]);
        
        if ($request->hasFile('logo')) {
            $image = $request->file("logo");
            $image_url = $this->uploadImage($image, 'uploads/logo');
            $job->update(['logo' => $image_url,]);
            // dd($request->all());
            return redirect()->route('admin.jobIndex')->with('success','Request Successfully');
        }
        return redirect()->route('admin.jobIndex')->with('success','Request Successfully');
    }













    public function jobView(Request $request, $id)
    {
        $job = Job::with('user', 'category', 'type')->find($id);
        $user = auth()->user();
        // dd($job);
        return view('pages.viewJobDetails-page', compact('job'));
    }

    public function postEditePage(Request $request, $id)
    {

        $job = Job::find($id);

        $categories = Category::all();
        $types = Type::all();
        $experience = Experience::all();


        return view('pages.postEdite-page', compact('job', 'categories', 'types', 'experience'));
    }

    public function postEdite(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'type' => 'required|exists:types,id',
            'job_details' => 'required|string',
            'requirment' => 'required|string',
            'short_des' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|string',
            'experience' => 'required|exists:experiences,id',
        ]);

        $job = Job::find($id);

        if (!$job) {
            return redirect()->route('jobIndex');
        }

        $user = auth()->user();
        if ($job->user_id !== $user->id) {
            return redirect()->route('jobIndex')->with('error', 'You are not authorized to job page, go to find job');
        }
        $user = auth()->user();
        if ($user->type === 3) {
            return redirect()->route('jobIndex')->with('error', 'You are not authorized to job page, go to find job');
        }


        $directory = 'uploads/logo';
        $image = $request->file("logo");
        $this->deleteOldImage($job->logo);
        $image_url = $this->uploadImage($image, $directory);

        $job->update([
            'comp_name' => $request->name,
            'user_id' => $user->id,
            'logo' => $image_url,
            'title' => $request->title,
            'category_id' => $request->category,
            'type_id' => $request->type,
            'job_details' => $request->job_details,
            'requirment' => $request->requirment,
            'short_des' => $request->short_des,
            'salary' => $request->salary,
            'location' => $request->location,
            'experience_id' => $request->experience,
        ]);


        return redirect()->back()->with('success','Request Successfully');
    }


    public function deletePost(Request $request, $id)
    {
        $user = auth()->user();

        $job = Job::find($id);
        if (!$job) {
            return redirect()->route('jobIndex');
        }
        $this->deleteOldImage($job->logo);
        $job->delete();
        return redirect()->back()->with('success','Request Successfully');
    }


    public function CompanyStatus($id)
    {
        // dd($id);
        $user = User::findOrFail($id);

        $newStatus = $user->status == 0 ? 1 : 0;

        $user->update(['status' => $newStatus]);

        return back();
    }

    public function CandidateStatus($id)
    {
        // dd($id);
        $user = User::findOrFail($id);

        $newStatus = $user->status == 0 ? 1 : 0;

        $user->update(['status' => $newStatus]);

        return back();
    }













    private function deleteOldImage($old_img)
    {
        $directory = 'uploads/logo';
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
