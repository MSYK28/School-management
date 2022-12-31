<?php

namespace App\Http\Controllers;

use App\Mail\RejectionMail;
use App\Mail\StaffAdmitMail;
use App\Models\StaffApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StaffApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = StaffApplications::all();
        // $applicant = Applications::find($id); 
        return view('pages.staffapplications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.staffapplications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applications = new StaffApplications();
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
     * @param  \App\Models\StaffApplications  $staffApplications
     * @return \Illuminate\Http\Response
     */
    public function show(StaffApplications $staffApplications, $id)
    {
        $applications = StaffApplications::find($id);
        return view('pages.staffapplications.show', compact('applications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffApplications  $staffApplications
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffApplications $staffApplications, $id)
    {
        $applications = StaffApplications::find($id);
        return view('pages.staffapplications.edit', compact('applications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffApplications  $staffApplications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffApplications $staffApplications, $id)
    {
        $applications = StaffApplications::find($id);
        $applications->status = $request->input('status');
        $applications->update();

        Mail::to($request->user())->send(new StaffAdmitMail($staffApplications));

        return redirect()->back()->with('status', 'Admission successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffApplications  $staffApplications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, StaffApplications $staffApplications, $id)
    {
        StaffApplications::find($id)->delete();

        Mail::to($request->user())->send(new RejectionMail($staffApplications));

        return redirect()->back()->with('status', 'Application deleted successfully');
   
    }
}
