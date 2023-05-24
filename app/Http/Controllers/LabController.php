<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Lab;
use App\Models\ProgramStudy;
use Illuminate\Http\Request;


class LabController extends Controller
{
  public function index()
  {
    $labs = ProgramStudy::with('lab')->get();
    return view('admin.lab.lab-index', compact('labs'));
  }

  public function create()
  {
    $programstudies = DB::table('program_studies')->select('id', 'program_study_name')->get();
    return view('admin.lab-create', compact('programstudies'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'lab_name' => 'required',
      'lab_description' => 'required',
      'program_study_id' => 'required',
    ]);
    Lab::create($request->post());

    return redirect()->route('programstudy.index')->with('success', 'Company has been created successfully.');
  }
}
