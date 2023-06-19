<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Vacant;
use App\Models\institution;

class JobsController extends Controller
{
    public  function index()
    {
        $institutions = institution::get();
        $vacants = Vacant::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        $posts = Post::get();
        return view(
            'hr.pages.jobs',
            [
                'vacants' => $vacants,
                'institutions' => $institutions,
                'education_levels' => $education_levels,
                'education_categories' => $education_categories,
                'education_names' => $education_names,
                'posts' => $posts
            ]
        );
    }

    // public function receivedquery(){
    //     return view('hr.pages.receivedquery');
    // }

    public function store(Request $requste)
    {

        // dd($request->all());
        // $validatedData = new Post();
        // $validatedData->application_date = $request->input('application_date');
        // $validatedData->deadline_date = $request->input('deadline_date');
        // $validatedData->post_description = $request->input('post_description');
        // $validatedData->post_file = $request->input('post_file');
        // $validatedData->email = $request->input('email');
        // $validatedData->job_id = $request->input('job_id');
        // $validatedData->job_name = $request->input('job_name');
        // $validatedData->job_location = $request->input('job_location');
        // if ($request->hasFile('job_description')) {
        //     $file = $request->file('job_description');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     dd($filename);
        //     $filePath = $file->storeAs('public/documents', $filename);
        //     $validatedData->job_description = $filePath;
        //     $validatedData->save();
        // }

        // if ($validatedData->save()) {
        //     $jobs = Job::get();
        //     $staffs = Staff::get();
        //     $posts = Post::get();
        //     dd($posts);
        //     return view('hr.pages.jobs', compact('jobs', 'staffs', 'posts'))->with('posts', 'succesfull');
        // }
    }
    public function vacant_registration(Request $request)
    {
        $validatedData = new Vacant();
        $validatedData->name = $request->input('name');
        $validatedData->location = $request->input('location');
        $validatedData->description = $request->input('description');
        $validatedData->position_name = $request->input('position_name');
        $validatedData->position_description = $request->input('position_description');

        if ($request->hasFile('position_file')) {
            $file = $request->file('position_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->position_file = $filePath;
        }

        if ($request->hasFile('job_file')) {
            $file = $request->file('job_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->job_file = $filePath;
        } else {
            $validatedData->job_file = ''; // Assign default value
        }

        if ($validatedData->save()) {
            $institutions = institution::get();
            $vacants = Vacant::get();
            $education_levels = Education_level::get();
            $education_categories = Education_category::get();
            $education_names = Education_name::get();
            $posts = Post::get();
            return view('hr.pages.jobs', [
                'vacants'=>$vacants,
                'institutions'=>$institutions,
                'education_levels'=>$education_levels,
                'education_categories'=>$education_categories,
                'education_names'=>$education_names,
                'posts'=>$posts
                
            ])->with('jobs', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');
    }

    public function publish_vacant(Request $request)
    {
        //dd($request->all());
        $validatedData = new Post();
        $validatedData->application_date = $request->input('application_date');
        $validatedData->end_date = $request->input('end_date');
        $validatedData->summary = $request->input('summary');
        $validatedData->vacant_category = $request->input('vacant_category');
        $validatedData->age_range = $request->input('age_range');
        $validatedData->gender = $request->input('gender');
        $validatedData->year_experience = $request->input('year_experience');
        $validatedData->institution_id = $request->input('institution_id');
        $validatedData->vacant_id = $request->input('vacant_id');
        $validatedData->education_level_id = $request->input('education_level_id');
        $validatedData->education_category_id = $request->input('education_category_id');
        $validatedData->education_name_id = $request->input('education_name_id');
        //$validatedData->job_location = $request->input('job_location');
        // if ($request->hasFile('job_description')) {
        //     $file = $request->file('job_description');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     dd($filename);
        //     $filePath = $file->storeAs('public/documents', $filename);
        //     $validatedData->job_description = $filePath;
        //     $validatedData->save();
        // }
        if ($validatedData->save()) {
            $posts = Post::get();
            return view('hr.pages.jobs', compact('posts'))->with('posts', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');
    }
}
