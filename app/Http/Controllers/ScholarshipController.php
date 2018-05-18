<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholarship;
use Illuminate\Support\Facades\DB;
use Session, Redirect;
use View;

class ScholarshipController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function read()
    {
        $readScholarship = scholarship::orderBy('id')->get();

        return view('/scholarship', compact('readScholarship'));
    }
    public function create() 
    {
        return view('/addScholarship');
    }

    public function store()
    {
        scholarship::create([
            'name' => request('name'),
            'firm' => request('firm'),
            'description' => request('description')
        ]);

        return redirect()->route('scholarship.read');
    }

    public function edit(scholarship $editScholarship)
    {
        //$editScholarship = scholarship::find($id);

        return view('/editScholarship', compact('editScholarship'));

    }

    public function update(scholarship $updateScholarship)
    {
        //$updateScholarship = scholarship::find($id);

        $updateScholarship->update([
            'name' => request('name'),
            'firm' => request('firm'),
            'description' => request('description')
        ]);

        
        return redirect()->route('scholarship.read');
    }

    public function destroy(scholarship $deleteScholarship)
    {
        $deleteScholarship->delete();

        return redirect()->route('scholarship.read');
    }

    
}
