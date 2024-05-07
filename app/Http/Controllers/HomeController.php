<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\About;
use App\Models\JobApply;
use App\Models\Slider;
use App\Models\TopCompany;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $top_companies = TopCompany::with('companyProfile.user')->get();

        $recent_jobs = Job::latest()
            ->where('dateline', '>=', now())
            ->where('status', true)->with('user', 'category', 'type', 'experience')
            ->take(6)
            ->get();

        $sliders = Slider::first();

        return view('front.pages.home', compact('top_companies', 'recent_jobs', 'sliders'));
    }

    public function CandidateDashboard()
    {
        $appliedJob = JobApply::where('user_id', auth()->user()->id)->get();
        $selectedJob = JobApply::where('user_id', auth()->user()->id)->where('status', true)->get();

        $countOfItems = count($appliedJob);
        $countOfSelectedJob = count($selectedJob);

        // dd($countOfSelectedJob);
        return view('pages.dashboard-page', compact('countOfItems','countOfSelectedJob'));
    }

    public function CompanyDashboard()
    {
        $Job = Job::where('user_id', auth()->user()->id)->get();
        $selectedJob = JobApply::where('user_id', auth()->user()->id)->where('status', true)->get();

        $Job = count($Job);
        // $countOfSelectedJob = count($selectedJob);

        // dd($countOfSelectedJob);
        return view('pages.dashboard-page', compact('Job'));
    }
}
