<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login()
  {
    return view('Auth.login');
  }
  public function Auth(Request $request)
  {
    $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required', 'string'],

    ]);

    $credentials = $request->only('email', 'password');
    if (auth()->attempt($credentials)) {
      toastr()->success('Login Successful');
    } else {
      toastr()->error('Oops! Something went wrong!');
    }
    return back();
  }

  public function logout()
  {
    session()->flush();
    auth()->logout();
    toastr()->success('Logged Out Successfully');
    return back();
  }
}
