<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pluging;
use App\Models\PlugingsRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PlugingsController extends Controller
{
    public function index()
    {
        $plugings = Pluging::get();
        return view('pages.plugings.adminPlugings', compact('plugings'));
    }

    public function createPlugingsPage()
    {
        return view('pages.plugings.createPlugings-page');
    }

    public function createPlugings(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'des' => 'required|string',
            'key_word' => 'required|string',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'des.required' => 'The description field is required.',
        ];

        $validatedData = $request->validate($rules, $messages);

        $pluging = Pluging::create([
            'name' => $request->name,
            'des' => $request->des,
            'key_word' => $request->key_word,
        ]);

        return back();
    }

    public function requestPluging(Request $request, $id)
    {
        $user = auth()->user();
        $allowCom = Pluging::where('id', $id)->where('key_word', 'job')->first();

        if ($user->type === 3 && $allowCom) {
            $isExist = PlugingsRequest::where('user_id', $user->id)
                ->where('plugings_id', $id)
                ->first();

            if ($isExist) {
                return back()->with('error', 'Request failed! Your request is already pending.');
            }

            PlugingsRequest::create([
                'user_id' => $user->id,
                'plugings_id' => $id,
            ]);

            return back()->with('success', 'Request successful');
        }

        if ($user->type === 2) {
            // Allow type 2 users to proceed with another request
            PlugingsRequest::create([
                'user_id' => $user->id,
                'plugings_id' => $id,
            ]);

            return back()->with('success', 'Request successful');
        }

        return back()->with('error', 'Request failed! You do not have the required permission.');
    }






    public function requestAccepts(Request $request, $id)
    {
        $plugingRequest = PlugingsRequest::find($id);

        if (!$plugingRequest) {
            return redirect()->back()->with('error', 'Pluging Not Found!');
        }

        $pluging = Pluging::find($plugingRequest->plugings_id);

        if (!$pluging) {
            return redirect()->back()->with('error', 'Related Pluging Not Found!');
        }

        if ($pluging->key_word === 'job') {
            $user = User::find($plugingRequest->user_id);
            optional($user->profile())->delete();
            $user->update(['type' => 2]);
        }

        $plugingRequest->update(['status' => true]);

        return redirect()->back()->with('success', 'Pluging Request Accepted!');
    }



    public function requestDelete(Request $request, $id)
    {
        $plugingRequest = PlugingsRequest::find($id);

        if (!$plugingRequest) {
            return redirect()->back()->with('error', 'Pluging Request Not Found!');
        }

        $pluging = Pluging::find($plugingRequest->plugings_id);

        if (!$pluging) {
            return redirect()->back()->with('error', 'Related Pluging Not Found!');
        }

        // if ($pluging->key_word === 'job') {
        //     $user = User::find($plugingRequest->user_id);

        //     if ($user) {
        //         optional($user->companyProfile())->delete();
        //         $user->update(['type' => 3]);

        //         PlugingsRequest::where('user_id', $user->id)->delete();
        //     } else {
        //         return redirect()->back()->with('error', 'User Not Found!');
        //     }
        // }

        $plugingRequest->delete();

        return redirect()->back()->with('success', 'Pluging Request Deleted!');
    }





    public function pluginsUser()
    {
        $pluginsUsers = PlugingsRequest::with('user', 'pluging')->get();
        
        return view('pages.plugings.plugingsUsers-page', compact('pluginsUsers'));
    }







    public function updateStatus($id)
    {
        $pluginRequest = PlugingsRequest::find($id);

        if ($pluginRequest) {
            $newStatus = ($pluginRequest->status == 1) ? 0 : 1;

            $pluginRequest->update(['status' => $newStatus]);

            return response()->json(['message' => 'Status updated successfully']);
        } else {
            return response()->json(['error' => 'PlugingsRequest not found'], 404);
        }
    }

    public function status($id)
    {
        // dd($id);
        $plugingStatus = Pluging::findOrFail($id);

        $newStatus = $plugingStatus->status == 0 ? 1 : 0;

        $plugingStatus->update(['status' => $newStatus]);

        return back();
    }
}
