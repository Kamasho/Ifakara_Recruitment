<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeadInstitute;
use Illuminate\Validation\Rule;

class HeadInstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headinstitutions = HeadInstitute::with('institution')->get();
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
        $data = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'email' => 'required|email|unique:institutes,email',
            'category' => ['required', Rule::in(['school', 'health', 'parish'])],
        ], [
            'name.required' => 'The institution name is required.',
            'name.string' => 'The institution name must be a string.',
            'location.required' => 'The location is required.',
            'location.string' => 'The location must be a string.',
            'email.required' => 'The email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already taken.',
            'category.required' => 'The institution category is required.',
            'category.in' => 'Invalid institution category.',
        ]);
    
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
