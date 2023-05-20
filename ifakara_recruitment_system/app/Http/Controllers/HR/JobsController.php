<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public  function index(){
        return view('hr.pages.jobs');
    }

    public function receivedquery(){
        return view('hr.pages.receivedquery');
    }

    public function RegisterJob(Request $request)
    {
        $validatedData = $request->validate([
            'job_name' => 'required',
            'job_location' => 'required',
            'job_description' => 'required',
            'position_name' => 'required',
            'position_description' => 'required',
        ]);

        $job = Jobs::create($validatedData);
        dd($job);

        return response()->json([
            'message' => 'Job created successfully',
            'job' => $job
        ], 201);
    }
}
