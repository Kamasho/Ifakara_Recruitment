<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $jobs = Job::get();
        $staffs = Staff::get();
        return view('hr.pages.staffs');
    }
}
