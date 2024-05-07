<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registationPage()
    {
        return view('front.pages.auth.ragistation-page');
    }

    public function registration(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed'
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Attempt to authenticate the new user
        auth()->login($user);

        // Redirect to the home route
        return redirect()->route('home');
    }

    public function loginPage()
    {
        return view('front.pages.auth.login-page');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('status', 'Invalid email or password');
        }
        if ($user->type === 1) {
            return back()->with('status', 'You are not authorized');
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->remember)) {
            if (auth()->user()->type === 2) {
                return redirect()->route('company.dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }

        return back()->with('status', 'Invalid email or password');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
