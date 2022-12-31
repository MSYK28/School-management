<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('utype', 'STD')->get();
        return view('pages.admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new User();
        $student->name = Request::input('name');
        $student->email = Request::input('email');
        $student->course = Request::input('course');
        $student->hours = Request::input('hours');
        $student->marks = Request::input('marks');
        $student->password = Request::input('password');

        $student->save();

        return redirect('students')->with('status', 'Account Created!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students, $id)
    {
        $students = User::find($id);
        return view('pages.admin.students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students, $id)
    {
        $students = User::find($id);
        return view('pages.admin.students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students, $id)
    {
        $students = User::find($id);
        $students->course = Request::input('course');
        $students->status = Request::input('status');

        $students->update();

        return redirect('students')->with('status', 'Profile updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}
