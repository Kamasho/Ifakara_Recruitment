<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Vacant;
use App\Models\institution;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class StaffController extends Controller
{
    public function index(){
        // $jobs = Job::get();
         $staffs = Staff::get();
        $vacants = Vacant::get();
        $institutions = institution::get();
        return view('hr.pages.staffs',[
            'staffs' => $staffs,
            'vacants' => $vacants,
            'institutions' => $institutions,
        ]);
    }

    public function store(Request $request){
        //dd($request->all());
        $validatedData = new Staff();
        $validatedData->fname = $request->input('fname');
        $validatedData->lname = $request->input('lname');
        $validatedData->mname = $request->input('mname');
        $validatedData->email = $request->input('email');
        $validatedData->gender = $request->input('gender');
        $validatedData->phone = $request->input('phone');
        $validatedData->end_date = $request->input('end_date');
        $validatedData->basic_salary = $request->input('basic_salary');
        $validatedData->allounce_salary = $request->input('allounce_salary'); 
        $validatedData->institution_id = $request->input('institution_id');
        $validatedData->vacant_id = $request->input('vacant_id');

        if ($request->hasFile('staff_contract')) {
            $file = $request->file('staff_contract');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->staff_contract = $filePath;
        }

        // if ($request->hasFile('job_file')) {
        //     $file = $request->file('job_file');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('public/documents', $filename);
        //     $validatedData->job_file = $filePath;
        // } else {
        //     $validatedData->job_file = ''; // Assign default value
        // }

        if ($validatedData->save()) {
            $staffs = Staff::get();
            $vacants = Vacant::get();
            $institutions = institution::get();
            return view('hr.pages.staffs',[
                'staffs' => $staffs,
                'vacants' => $vacants,
                'institutions' => $institutions,
            ]);
        }

        return back()->with('error', 'Failed to save vacant position.');
    }


    public function edit($id)
    {
        $vacants = Vacant::get();
        $institutions = Institution::get();
        $staffs = Staff::get();
        return view('hr.pages.staffs', compact('staffs', 'vacants', 'institutions'));
    }


    public function update(Request $request, $id)
    {
        // Update code
        
        return redirect()->route('staff.index')
            ->with('success', 'Staff record updated successfully.');
    }




    public function delete($id)
{
    $staff = Staff::find($id);

    if (!$staff) {
       return back()->with('error', 'Staff record not found.');
        // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
    }

    $staff->delete();
    $vacants = Vacant::get();
    $institutions = institution::get();
    $staffs = Staff::get();
    return view('hr.pages.staffs', ['staffs' => $staffs,
    'vacants' => $vacants,
    'institutions' => $institutions,

    ])->with('success', 'Staff record deleted successfully.');
}
}
