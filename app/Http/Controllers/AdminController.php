<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Scholarship;
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
        $id             = Auth::user()->id;
        $admins         = Admin::find($id);
        $scholarships   = $admins->scholarship()->get();
        return view('admin.profile', compact('scholarships'));
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
        $id             = Auth::user()->id;
        $admins         = Admin::find($id);
        $scholarships   = $admins->scholarship()->orderBy('created_at','desc')->get();


        return view('admin', compact('scholarships'));
    }
}
