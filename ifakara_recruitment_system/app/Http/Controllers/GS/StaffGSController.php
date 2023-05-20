<?php

namespace App\Http\Controllers\GS;
use App\Models\Staffs;
use App\Http\Controllers\Controller;
use App\Models\File_Uploads;
use Illuminate\Http\Request;

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

        $staff = Staffs::create($validatedData);
    dd($staff);
        return response()->json([
            'message' => 'Staff created successfully',
            'staff' => $staff
        ], 201);
    }

    public function FileUpload(Request $request)
    {
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
