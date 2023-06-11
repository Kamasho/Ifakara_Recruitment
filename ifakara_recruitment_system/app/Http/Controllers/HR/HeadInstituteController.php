<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeadInstitute;

class HeadInstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headinstitutions = HeadInstitute::all();
        return view('hr.pages.Organization', compact('headinstitutions'));
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
        $data = new HeadInstitute();
        $data->fname = $request->input('fname');
        $data->mname = $request->input('mname');
        $data->lname = $request->input('lname');
        $data->contact = $request->input('contact');
        $data->institute_id = $request->input('institute_id');
        if ($data->save()) {
            return redirect('/institute')->with('status', 'ICAD Head Institution Added SuccessFully!');
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
        $data = HeadInstitute::find($id);
        $data->fname = $request->input('fname');
        $data->mname = $request->input('mname');
        $data->lname = $request->input('lname');
        $data->contact = $request->input('contact');
        $data->institute_id = $request->input('institute_id');
        $data->update();
        return redirect('/institute')->with('status', 'ICAD Head Institution was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HeadInstitute::find($id);
        $data->delete();
        return redirect('/institute')->with('statusDelete', 'ICAD Head Institution deleted Successfully');
    }
}
