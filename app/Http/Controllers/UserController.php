<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class UserController extends Controller
{
    //
=======
use App\scholarship;

class UserController extends Controller
{
    public function readScholarship()
    {
        // $readScholarship = scholarship::orderBy('id')->get();
        $readScholarship   = scholarship::orderBy('created_at','desc')->get();

        return view('/index', compact('readScholarship'));
    }
>>>>>>> 7938e2623dbc585c40a0451e0c1256fd2e254c13
}
