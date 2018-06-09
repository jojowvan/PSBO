<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function profile()
    {
        return view('admin.profile');
    }

    public function editPhoto()
    {
        $users = Auth::user();
        return view('test', compact('users'));
    }

    public function updatePhoto(Request $request)
    {
        // dd($request->file('avatar'));
        $users = Auth::user();
        $avatar = $request->file('avatar')->store('avatar');
        $request->user()->update([
            'avatar'    => $avatar
        ]);

        return redirect()->back();
    }
    
     public function index()
    {
        return view('admin');
    }
}
