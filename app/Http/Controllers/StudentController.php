<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    function index() {
        return view('students.home');
    }

    function courses() {
        return view('students.courses');
    }

    function appointments() {
        return view('students.appointment');
    }

}
