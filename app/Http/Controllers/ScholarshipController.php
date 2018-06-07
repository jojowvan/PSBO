<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholarship;
use App\requirement;
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

    public function test() 
    {
        return view('/test');
    }


    public function store(Request $request)
    {
        // $scholarships = new scholarship;

        // $scholarships->name         = $request->input('name');
        // $scholarships->firm         = $request->input('firm');
        // $scholarships->description  = $request->input('description');
        // $scholarships->applyOnline  = 1;
        // $books->title = $request->input('title');

        scholarship::create([
            'name'          => $request->input('name'),
            'firm'          => $request->input('firm'),
            'description'   => $request->input('description'),
            'applyOnline'   => 1,
        ]);
        $nama = $request->input('name');
        // dd($nama);
        $beasiswa = \DB::table('scholarships')->where('name', $nama)->orderBy('created_at','desc')->first();
        // change object to array
        // dd($beasiswa);
        $array = json_decode(json_encode($beasiswa), True);
        $id = $array['id'];
        // dd($id);
        // $users->line_id = $request->input('line_id');
        
        $requirements = new requirement;
        $requirements->scholarship_id   = $id;
        $requirements->gda              = $request->input('gda');
        $requirements->semester         = $request->input('semester');
        $requirements->deadline         = $request->input('deadline');
        $requirements->faculty          = $request->input('faculty');
        $requirements->program          = $request->input('program');
        $requirements->save();
        // dd($requirements->program); 
        // requirement::create([
        //     'scholarship_id'    => $id,
        //     'gda'               => $request->input('gda'),
        //     'semester'          => $request->input('semester'),
        //     'deadline'          => $request->input('deadline'),
        //     'faculty'           => $request->input('faculty'),
        //     'program'           => $request->input('program'),
        // ]);

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
