<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\About;
use App\Models\Slider;
use App\Models\TopCompany;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $top_comp = TopCompany::get();
        $about = About::first(); 
        $sliders = Slider::first();
        return view('front.pages.about-page',compact('top_comp', 'about','sliders'));
    }

    public function aboutUpdatePage()
    {
        $types = 2;
        $companies = User::where('type', $types)
            ->whereHas('companyProfile')
            ->with('companyProfile')
            ->get();
            // dd($companies);
    
        $top_comp = TopCompany::get();
        $about = About::first(); 
    
        if ($about) {
            return view('pages.aboutUpdate-page', compact('companies', 'top_comp', 'about'));
        } else {
            return view('pages.aboutUpdate-page', compact('companies', 'top_comp'));
        }
    }
    
    public function aboutUpdate(Request $request)
    {

        $about = About::first();
    
        if (!$about) {
            $about = About::create([
                'description' => $request->input('description'),
            ]);
    
            session()->flash('success', 'Record created successfully.');
        } else {
            $about->update([
                'description' => $request->input('description'),
            ]);
    
            session()->flash('success', 'Record updated successfully.');
        }
    
        $topCompaniesData = $request->input('top_comp', []);
        if ($topCompaniesData) {
            TopCompany::where('about_id', $about->id)->delete();
    
            foreach ($topCompaniesData as $topCompanyId) {
                TopCompany::updateOrCreate(
                    ['top_com' => $topCompanyId],
                    ['about_id' => $about->id]
                );
            }
        } else{
            TopCompany::where('about_id', $about->id)->delete();
        }
    
        $types = 2;
        $companies = User::where('type', $types)
            ->whereHas('companyProfile')
            ->with('companyProfile')
            ->get();
    
        $top_comp = TopCompany::get();
    
        return view('pages.aboutUpdate-page', compact('companies', 'top_comp', 'about'));
    }
    
}
