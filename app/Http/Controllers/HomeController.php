<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('posts', Post::where('user_id', Auth::user()->user_id)->get())
            ->with('user', $user = Auth::User())
            ->with('success', 'Login Successful..');
    }
}
