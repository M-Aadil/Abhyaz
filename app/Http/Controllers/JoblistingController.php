<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
    public function index(Request $request)
    {
        //$salary = $request->query('sort');
       // $date = $request->query('date');
       // $jobType = $request->query('job_type');

        //$listings = Listing::query();
       // if($salary === 'salary_high_to_low'){
           // $listings->orderBy('salary', 'desc');

       // }else if($salary === 'salary_low_to_high'){
            //$listings->orderBy('salary', 'asc');
       // }

        return view('home');
    }

    public function show()
    {
        return view('show');
    }
}
