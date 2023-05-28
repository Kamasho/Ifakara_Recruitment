<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Post;
use App\Models\Staff;

class JobsController extends Controller
{
    public  function index(){
        $jobs = Job::get();
        $posts = Post::get();
        return view('hr.pages.jobs',compact('jobs','posts'));
    }

    public function receivedquery(){
        return view('hr.pages.receivedquery');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = new Post();
        $validatedData->application_date = $request->input('application_date');
        $validatedData->deadline_date = $request->input('deadline_date');
        $validatedData->post_description = $request->input('post_description');
        // $validatedData->post_file = $request->input('post_file');
        // $validatedData->email = $request->input('email');
        $validatedData->job_id = $request->input('job_id');
        // $validatedData->job_name = $request->input('job_name');
        $validatedData->job_location = $request->input('job_location');
        if ($request->hasFile('job_description')) {
            $file = $request->file('job_description');
            $filename = time() . '_' . $file->getClientOriginalName();
            // dd($filename);
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->job_description = $filePath;
            $validatedData->save();
        }

        if ($validatedData->save()) {
            $jobs = Job::get();
            $staffs = Staff::get();
            $posts = Post::get();
           // dd($posts);
            return view('hr.pages.jobs', compact('jobs','staffs','posts'))->with('posts', 'succesfull');
        }

    }
}
