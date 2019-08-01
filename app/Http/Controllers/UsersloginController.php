<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersloginController extends Controller
{
    protected $redirectTo = '/pelayan/home';

	public function __construct()
	{
	    $this->middleware('guest:pelayan ')->except('logout')->except('index');
	}

	public function index(){
	      return view('pelayan.home');
	}

	public function showLoginForm()
	{
	      return view('pelayan.auth.login');
	}

	public function showRegisterForm()
	{
	      return view('pelayan.auth.register');
	}

	public function username()
	{
	        return 'username';
	}

	protected function guard()
	{
	      return Auth::guard('pelayan');
	}

	public function register(Request $request)
	{
	      $request->validate([
	          'username'      => 'required|string|unique:pelayans',
	          'email'         => 'required|string|email|unique:pelayans',
	          'password'      => 'required|string|min:6|confirmed'
	      ]);
	      \App\pelayan::create($request->all());
	      return redirect()->route('pelayan.registerform')->with('success', 'Successfully register!');
	}
}
