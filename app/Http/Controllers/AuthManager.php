<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
  function login()
  {
    return view(view: 'auth.login');
  }

  function loginpost(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    $credentials = $request->only(['email', 'password']);
    if(Auth::attempt($credentials)){
      return redirect()->intended(route(name: "home"));
    }
    return redirect(to: "login")->with('error', 'Invalid email or password');
  }
  function register()
  {
    return view(view: 'auth.register');
  }
  function registerpost(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required'
    ]);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    if($user->save()){
      return redirect()->intended(route(name: "login"))->with('success', 'You have been registered successfully');
    }
    return redirect(route(name:"register"))->with('error', 'Failed to register');
  }
}
