<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Vacant;
use App\Models\institution;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = institution::get();
        $vacants = Vacant::get();
        $vacant = Vacant::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        $posts = Post::with('educationLevel','educationName')->get();
        $post=Post::get();
        return view('hr.pages.Publication_post', [
            'vacants' => $vacants,
            'vacant'=>$vacant,
            'institutions' => $institutions,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,
            'posts' => $posts,
            'post'=>$post
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'vacant_id.required' => 'Please select a vacant title.',
            'vacant_category.required' => 'Please select a vacant category.',
            'institution_id.required' => 'Please select an institution.',
            'application_date.required' => 'Please enter the application date.',
            'end_date.required' => 'Please enter the end date for applications.',
            'education_level_id.required' => 'Please choose an education level.',
            'education_category_id.required' => 'Please choose an education category.',
            'education_name_id.required' => 'Please choose an education program.',
            'age_range.required' => 'Please choose an age range.',
            'year_experience.required' => 'Please choose the applicant experience.',
            'gender.required' => 'Please choose the applicant gender.',
            'summary.required' => 'Please provide a summary overview.',
        ];

        // Validate the form data with custom error messages
        $validatedData = $request->validate([
            'vacant_id' => 'required',
            'vacant_category' => 'required',
            'institution_id' => 'required',
            'application_date' => 'required|date',
            'end_date' => 'required|date',
            'education_level_id' => 'required',
            'education_category_id' => 'required',
            'education_name_id' => 'required',
            'age_range' => 'required',
            'year_experience' => 'required',
            'gender' => 'required',
            'summary' => 'required',
        ], $messages);

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
            $post = Post::get();
            return view('hr.pages.Publication_post',[
                'post'=>$post,
                'posts'=>$posts
            ])->with('posts', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = Post::find($id);
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
            return view('hr.pages.Publication_post', compact('posts'))->with('posts', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);

        if (!$posts) {
            return back()->with('error', 'Staff record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $posts->delete();
         $vacants = Vacant::get();
         $institutions = institution::get();
        $posts = Post::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        return view('hr.pages.Publication_post', [
            'posts' => $posts,
            'vacants'=> $vacants,
            'institutions'=>$institutions,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,

         

        ])->with('success', 'posts record deleted successfully.');
    }
}
