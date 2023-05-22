<?php

namespace App\Http\Controllers\GS;
use App\Models\Staff;
use App\Models\Job;
use App\Http\Controllers\Controller;
use App\Models\File_Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class StaffGSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secretary.pages.staffs');
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
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'contacts' => 'required',
            'location' => 'required',
            'staff_contract' => 'required',
            'job_name' => 'required|exists:jobs,job_id',
        ]);

        $staff = Staff::create($validatedData);
    dd($staff);
        return response()->json([
            'message' => 'Staff created successfully',
            'staff' => $staff
        ], 201);
    }

    public function FileUpload(Request $request)
    {
        $validatedData =new File_Uploads();
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file',
        ]);

        $upload = File_Uploads::create($validatedData);

        return response()->json([
            'message' => 'Upload created successfully',
            'upload' => $upload
        ], 201);
    }

    public function RegisterJob(Request $request)
    {
    // dd($request->hasFile('job_file'));
        $validatedData = new Job();
        $validatedData->job_name =$request->input('job_name');
        $validatedData->job_location =$request->input('job_location');
        $validatedData->job_description =$request->input('job_description');
        $validatedData->position_name =$request->input('position_name');
        $validatedData->position_description =$request->input('position_description');
        if($request->hasFile('job_file')){
            $file = $request->file('job_file');
            $filename = time().'_'.$file->getClientOriginalName();
            // dd($filename);
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->job_file = $filePath;
            // $validatedData->job_file_path = $filePath;

            $validatedData->save();
        }
        if($request->hasFile('position_file')){
            $file = $request->file('position_file');
            $filename = time().'_'.$file->getClientOriginalName();
            // dd($filename);
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->position_file = $filePath;
            // $validatedData->job_file_path = $filePath;
            $validatedData->save();
        }
        // $validatedData->position_file =$request->input('position_file');

        
        if($validatedData->save()){
            return view('secretary.pages.staffs')->with('status','succesfull');
        }
     
   
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
