<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withError(['email' => 'Mohon Periksa Kembali Email dan Password Anda'])->withInput();
        }
        // // Validate the form
        // $request->validate([
        //     'username' =>'required',
        //     'password' => 'required|min:8|max:20',
        // ]);

        // // Get the form data
        // $username = $request->input('username');
        // $password = $request->input('password');

        // // Check if the user exists in the database
        // $user = User::where('username', $username)->first();

        // // If the user exists and the password is correct
        // if ($user && Hash::check($password, $user->password)) {
        //     // Set the user's session
        //     session(['user_id' => $user->id]);

        //     // Redirect to the dashboard
        //     return redirect()->route('dashboard');
        // } else {
        //     // Redirect to the login page with an error message
        //     return redirect()->route('login')->with('error', 'Invalid username or password');
        // }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('login');
    }
}
