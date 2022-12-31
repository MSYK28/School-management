<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;


use App\Models\Units;
use App\Models\Courses;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::all();
        $units = Units::all();
        return view('pages.admin.courses.index', compact(['units', 'courses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.courses.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = new Units();
        $unit->name = Request::input('name');
        $unit->lecturer = Request::input('lecturer');
        $unit->course = Request::input('course_name');

        $unit->save();

        return redirect('courses')->with('status', 'Unit created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(Units $units, $id, Courses $course)
    {
        $course = Courses::find($id);
        $unit = Units::where('course', $course->name)->get();

        return view('pages.admin.courses.show', compact(['course', 'units']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(Units $units, $id)
    {
        $unit = Units::find($id);
        return view('pages.admin.courses.units.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Units $units, $id)
    {
        $unit = Units::find($id);
        $unit->lecturer = Request::input('lecturer');

        $unit->update();

        return redirect('units')->with('status', 'Unit Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy(Units $units)
    {
        //
    }
}
