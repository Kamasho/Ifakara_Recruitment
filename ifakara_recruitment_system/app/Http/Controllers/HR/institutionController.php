<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\institution;

class institutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = institution::all();
        return view('hr.pages.Organization', compact('institutions'));
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
        $data = new institution();
        $data->name = $request->input('name');
        $data->location = $request->input('location');
        $data->email = $request->input('email');
        $data->category = $request->input('category');
        if ($data->save()) {
            return redirect('/institute')->with('status', 'ICAD Institution Added SuccessFully!');
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
        $data = institution::find($id);
        $data->name = $request->input('name');
        $data->location = $request->input('location');
        $data->email = $request->input('email');
        $data->category = $request->input('category');
        $data->update();
        return redirect('/institute')->with('status', 'ICAD Institution was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = institution::find($id);
        $data->delete();
        return redirect('/institute')->with('statusDelete', 'ICAD Institution deleted Successfully');
    }
}
