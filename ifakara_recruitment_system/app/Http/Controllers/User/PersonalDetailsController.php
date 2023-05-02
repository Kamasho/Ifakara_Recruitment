<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PersonalDetail;
use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.personaldetails');
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
        $data = new PersonalDetail();
        $data->full_name = $request->input('full_name');
        $data->gender = $request->input('gender');
        $data->country_of_residence = $request->input('country_of_residence');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->region_of_birth = $request->input('region_of_birth');
        $data->district_of_birth = $request->input('district_of_birth');
        $data->originality = $request->input('originality');
        $data->mobile = $request->input('mobile');
        $data->morital_status = $request->input('morital_status');
        $data->disability = $request->input('disability');
        $data->current_residence_region = $request->input('current_residence_region');
        $data->current_residence_district = $request->input('current_residence_district');
        if($data->save()){
            return redirect('/')->with('status', 'Personal Detail Added SuccessFully!');
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
        $data = PersonalDetail::find($id);
        $data->full_name = $request->input('full_name');
        $data->gender = $request->input('gender');
        $data->country_of_residence = $request->input('country_of_residence');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->region_of_birth = $request->input('region_of_birth');
        $data->district_of_birth = $request->input('district_of_birth');
        $data->originality = $request->input('originality');
        $data->mobile = $request->input('mobile');
        $data->morital_status = $request->input('morital_status');
        $data->disability = $request->input('disability');
        $data->current_residence_region = $request->input('current_residence_region');
        $data->current_residence_district = $request->input('current_residence_district');
        $data->update();
        return redirect('/')->with('status', 'Personal Detail was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PersonalDetail::find($id);
        $data->delete();
        return redirect('/')->with('status', 'Personal Detail deleted Successfully');
    }
}
