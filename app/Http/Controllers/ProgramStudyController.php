<?php

namespace App\Http\Controllers;
use App\Models\ProgramStudy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramStudyController extends Controller
{
    public function index()
    {   
        $programstudies = ProgramStudy::orderBy('id','desc')->paginate(10);
        return view('admin.programstudy-index', compact('programstudies'));
    }

    public function create() 
    {
        return view('admin.programstudy-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_studies_name' => 'required|unique:program_studies',
            'program_studies_slug' => 'required',
        ]);
        ProgramStudy::create($request->post());

        return redirect()->route('programstudy.index')->with('success','Company has been created successfully.');
    }

}
