<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use App\Models\Contact;
use App\Models\TopCompany;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $top_companies = TopCompany::with('companyProfile.user')->get();
        $sliders = Slider::first();
        $contact = Contact::first();
        return view('front.pages.contact-page',compact('top_companies','sliders','contact'));
    }

    public function contactPage()
    {

        $availableContact = Contact::first();
        $availableContactMessage = ContactMessage::get();
        return view('pages.contact-page', compact('availableContact', 'availableContactMessage'));
    }

    public function contactUpdate(Request $request)
    {
  
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $availableContact = Contact::first();

        if ($availableContact) {
            $availableContact->update([
                'email' => $request->email,
                'address' => $request->address
            ]);
        } else {
            Contact::create([
                'email' => $request->email,
                'address' => $request->address
            ]);
        }

        return back();
    }

    public function contactmassage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'mobile' => 'required|string',
            'message' => 'required|string',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // dd($request);
        ContactMessage::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'mobile' => $request->mobile,
            'message' => $request->message
        ]);


        return back();
    }


    public function messageView(Request $request, $id)
    {

        try {
            $message = ContactMessage::findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $message,
                'message' => 'Message retrieved successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving message',
                'error' => $e->getMessage(),
            ], 404);
        }
    }
    public function messageDelete(Request $request, $id)
    {


        $deleted = ContactMessage::destroy($id);

        if ($deleted) {
            return back()->with('success', 'Delete Successfully');
        } else {
            return back()->with('error', 'Delete Fail');
        }
    }
}
