<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{ 
    public function index(){
        return view('hr.pages.uploads');
    }
}
