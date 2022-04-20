<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearendController extends Controller
{
    public function index(){
    	return view('employee.yearend.yearendrules');
    }

    public function yearend(){
    	return view('employee.yearend.yearendreview');
    }
}
