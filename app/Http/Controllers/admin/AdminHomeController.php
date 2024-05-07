<?php

namespace App\Http\Controllers\admin;

use App\Models\Job;
use App\Models\User;
use App\Models\Pluging;
use App\Models\JobApply;
use Illuminate\Http\Request;
use App\Models\PlugingsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminHomeController extends Controller
{

    public function index()
    {
        $companies = User::where('type', 2)->get();
        $countCompanies = count($companies);

        $candidate = User::where('type', 3)->get();
        $countCandidates = count($candidate);

        $ActiveCompanies = User::where('type', 2)->where('status', true)->get();
        $countActiveCompanies = count($ActiveCompanies);

        $PandingCompanies = User::where('type', 2)->where('status', false)->get();
        $countPandingCompanies = count($PandingCompanies);
        // dd($companies);
        return view('pages.dashboard-page', compact('countCompanies', 'countCandidates', 'countActiveCompanies', 'countPandingCompanies'));
    }



    public function allCompany()
    {
        $companies = User::where('type', 2)->get();
        // dd($companies);
        return view('pages.allCompany-page', compact('companies'));
    }

    public function jobByCompany(Request $request, $id)
    {
        $postedJobs = Job::where('user_id', $id)->paginate(10);
        return view('pages.jobIndex-page', compact('postedJobs'));
    }

    public function allCandidate()
    {
        $candidate = User::where('type', 3)->get();
        return view('pages.allCandidate-page', compact('candidate'));
    }


    public function jobView(Request $request, $id, $jobId)
    {
        // dd($jobId);
        $job = Job::with('user', 'category', 'type')->find($jobId);
        // dd($job);
        return view('pages.viewJobDetails-page', compact('job'));
    }


    public function deletePost(Request $request, $id, $jobId)
    {


        $job = Job::find($jobId);
        // dd($job);
        if (!$job) {
            return redirect()->route('jobIndex');
        }

        $this->deleteOldImage($job->logo);
        $job->delete();
        return back()->with('success', "Request successful");
    }

    public function deleteCompany(Request $request, $id)
    {
        // dd($id);
        $company = User::find($id);
        // dd($job);
        if (!$company) {
            return back()->with('error', "Not Found");
        }
        $company->delete();
        return back()->with('success', "Request successful");
    }


    public function candidateForPost(Request $request, $id, $jobId)
    {
        // dd($jobId);
        $perPage = 10;
        $candidates = JobApply::where('job_id', $jobId)->with('user')->paginate($perPage);

        return view('pages.job.jobCandidateList-page', compact('candidates'));
    }


    public function jobApply($id)
    {
        $appliedJobLists = JobApply::where('user_id', $id)
            ->with('job', 'user')
            ->paginate(10);

        return view('pages.job.candidate.jobApplied-page', compact('appliedJobLists'));
    }

    public function candidateDelete($id)
    {
        // dd($id);
        $company = User::find($id);
        // dd($job);
        if (!$company) {
            return back()->with('error', "Not Found");
        }
        $company->delete();
        return back()->with('success', "Request successful");
    }



    public function plugings()
    {
        $user_pluging = PlugingsRequest::where('user_id', auth()->user()->id)->get();
        // dd($user_pluging);
        $pluging = Pluging::get();
        return view('pages.plugings-page', compact('pluging', 'user_pluging'));
    }

    private function deleteOldImage($old_img)
    {
        $directory = 'uploads/logo';
        $pathParts = explode('/', $old_img);
        $old_imgName = end($pathParts);
        File::delete(public_path("{$directory}/{$old_imgName}"));
    }
}
