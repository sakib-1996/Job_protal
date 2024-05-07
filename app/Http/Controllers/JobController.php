<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Type;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Experience;
use App\Models\JobApply;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class JobController extends Controller
{
    public function index()
    {

        $user_id = auth()->user()->id;
        $postedJobs = Job::where('user_id', $user_id)->paginate(10);

        return view('pages.jobIndex-page', compact('postedJobs'));
    }

    public function createJobPostPage()
    {
        if (auth()->user()->status === 0) {
            return back()->with('error', 'You can not post job now');
        }
        $categories = Category::all();
        $type = Type::all();
        $experience = Experience::all();
        return view('pages.createJobPost-page', compact('categories', 'type', 'experience'));
    }


    public function createJobPost(Request $request)
    {
        // dd($request->logo);
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
            'experience' => 'required|string',
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
            return redirect()->route('jobIndex');
        }
        return redirect()->route('jobIndex');
    }


    public function jobView(Request $request, $id)
    {
        $job = Job::with('user', 'category', 'type')->find($id);
        $user = auth()->user();
        if ($job->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You are not authorized to job page, go to find job');
        }
        // dd($job);
        return view('pages.viewJobDetails-page', compact('job'));
    }

    public function postEditePage(Request $request, $id)
    {

        $job = Job::find($id);
        $user = auth()->user();
        if ($job->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You are not authorized to job page, go to find job');
        }
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
            'dateline' => 'required|date',
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
            'dateline' => $request->dateline,
        ]);


        return redirect()->route('jobIndex');
    }

    public function deletePost(Request $request, $id)
    {
        $user = auth()->user();

        $job = Job::find($id);
        if (!$job) {
            return redirect()->route('jobIndex');
        }
        if ($job->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You are not authorized to job page, go to find job');
        }
        $this->deleteOldImage($job->logo);
        $job->delete();
        return redirect()->route('jobIndex');
    }

    public function findJob(Request $request)
    {
        // Fetch initial data
        $categories = Category::all();
        $types = Type::all();
        $experienceOptions = Experience::all();
        $sliders = Slider::first();

        // Retrieve filters from the request
        $sort = $request->input('sort');
        $selectedCategory = $request->input('category');
        $selectedExperience = $request->input('experience');
        $selectedJobTypes = $request->input('job_types', []);
        $selectedLocation = $request->input('location');

        // Create the base query without executing it
        $query = Job::where('dateline', '>=', now())
            ->where('status', true)
            ->with('user', 'category', 'type', 'experience');

        // Apply sorting based on user's choice
        if ($sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // Apply category filter if selected
        if ($selectedCategory) {
            $query->where('category_id', $selectedCategory);
        }

        // Apply experience filter if selected
        if ($selectedExperience) {
            $query->where('experience_id', $selectedExperience);
        }

        // Apply job type filter if selected
        if (!empty($selectedJobTypes)) {
            $query->whereIn('type_id', $selectedJobTypes);
        }

        // Apply location filter if provided
        if ($selectedLocation) {
            $query->where('location', 'like', '%' . $selectedLocation . '%');
        }

        // Execute the query and paginate the results
        $perPage = 10;
        $allJob = $query->paginate($perPage);

        // If the user is authenticated, fetch job applications
        $jobAply = auth()->user() ? JobApply::where('user_id', auth()->user()->id)->get() : null;

        // Return the view with the necessary data
        return view('front.pages.allJobs-page', compact('allJob', 'categories', 'types', 'experienceOptions', 'jobAply', 'sliders', 'selectedCategory', 'selectedExperience', 'selectedJobTypes', 'sort', 'selectedLocation'));
    }


    public function jobDetails(Request $request, $id)
    {
        $job = Job::with('user', 'category', 'type')->find($id);
        if (auth()->user()) {
            $jobAply = JobApply::where('user_id', auth()->user()->id)->get();
            return view('front.pages.jobDetails-page', compact('job', 'jobAply'));
        }

        // dd($job);
        return view('front.pages.jobDetails-page', compact('job'));
    }



    public function applyPage(Request $request, $id)
    {
        if (auth()->user()->type != 3) {
            return back()->with('error', 'You can not apply job');
        }
        $check = JobApply::where('user_id', auth()->user()->id)
            ->where('job_id', $id)
            ->exists();

        if ($check) {
            return redirect()->route('find.job');
        }
        $job = Job::with('user')->find($id);

        $profile = Profile::where('user_id', auth()->user()->id)->first();

        return view('pages.job.jobApply-page', compact('profile', 'job'));
    }



    public function apply(Request $request, $id)
    {
        if (auth()->user()->type != 3) {
            return back()->with('error', 'You can not apply job');
        }
        if (auth()->user()->status != 1) {
            return back()->with('error', 'You can not apply job at this moment');
        }
        // Validate the request data
        $request->validate([
            'linkedIn_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'portfolio_website' => 'nullable|url',
            'edu_information' => 'nullable|string',
            'job_exp' => 'nullable|string',
            'expected_salary' => 'nullable|numeric',
            'credentials' => 'nullable|file|mimes:pdf,doc,jpeg,jpg,docx|max:2048',
        ]);

        $check = JobApply::where('user_id', auth()->user()->id)
            ->where('job_id', $id)
            ->exists();

        if ($check) {
            return redirect()->route('find.job')->with('error', 'You have already applied for this job.');
        }

        if ($request->hasFile('credentials')) {
            $t = time();
            $file = $request->file('credentials');
            $file_name = $file->getClientOriginalName();
            $newName = "{$t}-{$file_name}";

            $path = "uploads/credentials";

            File::ensureDirectoryExists(public_path($path));

            $file->move(public_path($path), $newName);

            JobApply::create([
                'user_id' => auth()->user()->id,
                'job_id' => $id,
                'linkedIn_link' => $request->linkedIn_link,
                'facebook_link' => $request->facebook_link,
                'portfolio_website' => $request->portfolio_website,
                'edu_information' => $request->edu_information,
                'job_exp' => $request->job_exp,
                'expected_salary' => $request->expected_salary,
                'credentials' => $newName,
            ]);
        } else {
            JobApply::create([
                'user_id' => auth()->user()->id,
                'job_id' => $id,
                'linkedIn_link' => $request->linkedIn_link,
                'facebook_link' => $request->facebook_link,
                'portfolio_website' => $request->portfolio_website,
                'edu_information' => $request->edu_information,
                'job_exp' => $request->job_exp,
                'expected_salary' => $request->expected_salary,
            ]);
        }

        return redirect()->route('find.job')->with('success', 'Job application successful');
    }


    public function candidateForPost(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $perPage = 10;
        $candidates = JobApply::where('job_id', $id)->with('user', 'job')->paginate($perPage);

        return view('pages.job.jobCandidateList-page', compact('candidates'));
    }


    public function candidate(Request $request, $id)
    {
        $jobAply = JobApply::find($id);
        $candidate = Profile::where('user_id', $jobAply->user_id)->first();

        if ($jobAply) {
            $job = Job::find($jobAply->job_id);

            if ($job) {
                $compName = $job;
            }
        }
        return response()->json([
            'data' => $candidate,
            'jobAply' => $jobAply,
            'status' => 'success',
            'compName' => $job
        ]);
    }


    public function accept(Request $request)
    {
        $id = $request->query('acceptID');
        // dd($id);
        $jobApply = JobApply::find($id);

        if ($jobApply) {
            $jobApply->update(['status' => true]);
            return back()->with('success', 'Request Successful.');
        } else {
            return back()->with('error', 'Job application not found.');
        }
    }


    public function delete(Request $request)
    {
        $id = $request->query('applicationId');
        // dd($id);
        $jobApplication = JobApply::find($id);

        if (!$jobApplication) {
            return back()->with('error', 'Job application not found.');
        }

        $jobApplication->delete();

        return back()->with('success', 'Job application deleted successfully.');
    }


    public function apliedJobList()
    {
        $appliedJobLists = JobApply::where('user_id', auth()->user()->id)
            ->with('job', 'user')
            ->paginate(10);

        return view('pages.job.candidate.jobApplied-page', compact('appliedJobLists'));
    }

    public function jobStatus($id)
    {
        // dd($id);
        $job = Job::findOrFail($id);

        $newStatus = $job->status == 0 ? 1 : 0;

        $job->update(['status' => $newStatus]);

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
