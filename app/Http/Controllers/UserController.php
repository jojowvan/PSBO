<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\scholarship;
class UserController extends Controller
{
    public function readScholarship()
    {
        // $readScholarship = scholarship::orderBy('id')->get();
        $readScholarship   = scholarship::orderBy('created_at','desc')->get();
        return view('/index', compact('readScholarship'));
    }
}