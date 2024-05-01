<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login-register');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if the user exists
        $user = User::where('name', $credentials['name'])->first();
        if (!$user) {
            return redirect()->route('login')->withErrors([
                'name' => 'Your account hasn\'t been registered in our system, please check again.',
            ]);
        }

        // Proceed with login attempt if user exists
        if (!Hash::check($credentials['password'], $user->password)) {
            // If the password is incorrect
            return redirect()->route('login')->withErrors([
                'name' => 'User name/ password maybe incorrect, Please check again.',
            ]);
        }

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user is not activated
            if ($user->status === '0') {
                Auth::logout(); // Log out the user
                return redirect()->route('login')->withErrors([
                    'name' => 'Tài khoản của bạn chưa được kích hoạt.',
                ]);
            }

            // Check if the user is not admin or seller
            if ($user->role === 'user') {
                Auth::logout(); // Log out the user
                return redirect()->route('login')->withErrors([
                    'name' => 'Your account was not activated.Please contact your administrator.',
                ]);
            }

            // Redirect the user based on their role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'seller') {
                return redirect()->route('seller.dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        // Authentication failed, redirect back with error message
        return redirect()->route('login')->withErrors([
            'name' => 'Tên người dùng hoặc mật khẩu không đúng.',
        ]);
    }



    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login-register');
    }
}
