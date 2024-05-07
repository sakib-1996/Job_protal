<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function loginPage()
    {
        return view('pages.login-page');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials, $request->remember)) {
            return back()->with('status', 'Invalid email or password');
        }

        $user = auth()->user();

        if ($user->type === 3 || $user->type === 2) {
            auth()->logout();
            return back()->with('status', 'You are not authorized for this page');
        }
        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
