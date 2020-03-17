<?php

namespace App\Http\Controllers;
use App\Models\Cases;

class SolutionController extends Controller
{

    public function show(Cases $cases)
    {
        return view('solution.show',compact('cases'));
    }



}
