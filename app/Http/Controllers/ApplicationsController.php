<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;
use App\Mail\AdmittanceMail;
use App\Mail\RejectionMail;
use Illuminate\Support\Facades\Mail;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Applications::all();
        // $applicant = Applications::find($id); 
        return view('pages.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applications = new Applications();
        $applications->name = $request->input('name');
        $applications->email = $request->input('email');
        $applications->number = $request->input('number');
        $applications->address = $request->input('address');
        $applications->cert = $request->input('cert');

        $applications->save();

        return redirect()->back()->with('status', 'Application sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function show(Applications $applications, $id)
    {
        $applications = Applications::find($id);
        return view('pages.applications.show', compact('applications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function edit(Applications $applications, $id)
    {
        $applications = Applications::find($id);
        return view('pages.applications.edit', compact('applications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applications $applications, $id)
    {
        $applications = Applications::findOrFail($id);
        $applications->status = $request->input('status');
        $applications->update();

        Mail::to($request->user())->send(new AdmittanceMail($applications));

        return redirect()->back()->with('status', 'Admission successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Applications $applications, $id)
    {
        Applications::find($id)->delete();

        Mail::to($request->user())->send(new RejectionMail($applications));

        return redirect()->back()->with('status', 'Application deleted successfully');
    }
}
