<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholarship;
use App\requirement;
use Alert;
use Illuminate\Support\Facades\DB;
use Session, Redirect;
use View;
use Storage;

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
        // switch ($type) {
        //     case 'message':
        //         alert()->message('Sweet Alert with message.');
        //         break;
        //     case 'basic':
        //         alert()->basic('Sweet Alert with basic.','Basic');
        //         break;
        //     case 'info':
        //         alert()->info('Sweet Alert with info.');
        //         break;
        //     case 'success':
        //         alert()->success('Sweet Alert with success.','Welcome to ItSolutionStuff.com')->autoclose(3500);
        //         break;
        //     case 'error':
        //         alert()->error('Sweet Alert with error.');
        //         break;
        //     case 'warning':
        //         alert()->warning('Sweet Alert with warning.');
        //         break;
        //     default:
        //         # code...
        //         break;
        // }

        return view('/test');
    }


    public function store(Request $request)
    {

        $program    = $request->d3.';'.$request->s1.';'.$request->s2;
        // dd($program);
        // $splitProgram = explode(';', $program, 3);
        // dd($splitProgram[1]);
        
        scholarship::create([
            'name'          => $request->input('name'),
            'firm'          => $request->input('firm'),
            'description'   => $request->input('description'),
            'applyOnline'   => 1,
            'image'         => $request->file('image')->store('beasiswa'),
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
        $requirements->program          = $program;
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

    public function edit($id)
    {
        //$editScholarship = scholarship::find($id);
        $requirements   = requirement::where('scholarship_id',$id)->first();
        $array_require = json_decode(json_encode($requirements), True);
        $scholarships   = scholarship::find($id);
        return view('/editScholarship', compact('scholarships', 'requirements'));

    }

    public function update(Request $request, $id)
    {
        //$updateScholarship = scholarship::find($id);

        $updateScholarship = scholarship::find($id);
        $updateRequirement = requirement::where('scholarship_id', $id)->first();
       
        if($request->file('image') != null){
            Storage::delete($updateScholarship->image);
            $image  = $request->file('image')->store('beasiswa');
        } else{
            $image  = $updateScholarship->image;
        }

        $updateScholarship->update([
            'name'          => $request->input('name'),
            'firm'          => $request->input('firm'),
            'description'   => $request->input('description'),
            'applyOnline'   => 1,
            'image'         => $image
        ]);

        $updateRequirement->update([
            'gda'               => $request->input('gda'),
            'semester'          => $request->input('semester'),
            'deadline'          => $request->input('deadline'),
            'faculty'           => $request->input('faculty'),
            'program'           => $request->input('program'),
        ]);

        
        return redirect()->route('scholarship.read');
    }

    public function destroy(scholarship $deleteScholarship)
    {
        $deleteScholarship->delete();

        return redirect()->route('scholarship.read');
    }

    public function view($id)
    {
        $scholarships   = scholarship::find($id);
        $requirements   = requirement::where('scholarship_id',$id)->first();
        $array_require = json_decode(json_encode($requirements), True);
        
        return view('admin.scholarshipView', compact('scholarships', 'requirements'));
    }

    
}
