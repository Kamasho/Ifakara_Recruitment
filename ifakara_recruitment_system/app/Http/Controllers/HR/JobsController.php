<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public  function index(){
        return view('hr.pages.jobs');
    }

    public function receivedquery(){
        return view('hr.pages.receivedquery');
    }
}
