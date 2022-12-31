<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $utype = Auth::user()->utype;

        if ( $utype == 'ADM') {
            return view('pages/admin/index');
        }

        if ( $utype == 'LEC') {
            return redirect()->action([DashController::class, 'lecturer']);
        }

        else {
            return redirect()->action([DashController::class, 'index']);
        }


    }
}
