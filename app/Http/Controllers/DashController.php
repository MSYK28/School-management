<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Courses;
use App\Models\Units;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $student = User::all();
        $courses = Courses::all();
        $units = Units::all();
         
        return view('pages.dashboards.studentDash', compact(['student', 'courses', 'units']));
    }

    public function lecturer()
    {
        $student = User::all();
        $courses = Courses::all();
        $units = Units::all();
         
        return view('pages.dashboards.lecturerDash', compact(['student', 'courses', 'units']));   
    }
}
