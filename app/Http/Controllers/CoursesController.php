<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Students;
use App\Models\Units;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();
        $courses = Courses::all();
        $units = Units::all();
            
        return view('pages.admin.courses.index', compact(['courses','units', 'students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Courses();
        $course->name = Request::input('name');
        $course->code = Request::input('code');
        $course->admin = Request::input('admin');
        $course->hours = Request::input('hours');
        $course->marks = Request::input('marks');

        $course->save();

        return redirect('courses')->with('status', 'Course Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses, $id)
    {
        $course = Courses::find($id);
        $units = Units::all();
        $students = User::all();

        return view('pages.admin.courses.show', compact(['course', 'units', 'students']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses, $id)
    {
        $course = Courses::find($id);
        return view('pages.admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses, $id)
    {
        $course = Courses::find($id);
        $course->status = Request::input('status');
        $course->admin = Request::input('admin');

        $course->update();

        return redirect('courses')->with('status', 'Course Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
