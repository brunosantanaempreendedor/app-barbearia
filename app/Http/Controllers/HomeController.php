<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scheduling;
use App\Status;
use App\Services;
use App\About;
use App\Footer;
use Carbon\Carbon;


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
        $dt_atual = Carbon::today()->format('Y-m-d');
        $scheduling = Scheduling::where('date', $dt_atual)->get();

        $new = Scheduling::where('status_id', 1)->where('date', $dt_atual)->count();
        $confirmed   = Scheduling::where('status_id', 2)->where('date', $dt_atual)->count();
        $attended = Scheduling::where('status_id', 3)->where('date', $dt_atual)->count();
        $balance = Scheduling::where('status_id', 3)->where('date', $dt_atual)->sum('services_id');

        return view('backend.home.index', ['new' => $new,'confirmed' => $confirmed, 'attended' => $attended, 'scheduling' => $scheduling, 'balance' => $balance]);
    }

    public function receipt()
    {
        return view('frontend.scheduling.receipt');
    }
}
