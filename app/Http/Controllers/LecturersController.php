<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Request;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = User::where('utype', 'LEC')->get();
        return view('pages.admin.lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturers = User::where('utype', 'LEC')->get();
        return view('pages.admin.lecturers.create', compact('lecturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecturer = new User();
        $lecturer->name = Request::input('name');
        $lecturer->email = Request::input('email');
        $lecturer->course = Request::input('course');
        $lecturer->utype = Request::input('utype');
        $lecturer->password = Request::input('password');

        $lecturer->save();

        return redirect('lecturers')->with('status', 'Account Created!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecturers = User::find($id);
        return view('pages.admin.lecturers.show', compact('lecturers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturers = User::find($id);
        return view('pages.admin.lecturers.edit', compact('lecturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lectures = User::find($id);
        $lectures->course = Request::input('course');
        $lectures->status = Request::input('status');

        $lectures->update();

        return redirect('lectures')->with('status', 'Profile updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
