<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Post;

class JobsController extends Controller
{
    public  function index(){
        $jobs = Job::get();
        $posts = Post::get();
        return view('hr.pages.jobs',compact('jobs','posts'));
    }

    public function receivedquery(){
        return view('hr.pages.receivedquery');
    }

    
}
