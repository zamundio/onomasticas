<?php

namespace App\Http\Controllers\Admin;

use App\meses;
use App\añosemp;
use Carbon\Carbon;
use App\Onomasticas;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onomasticas = Onomasticas::all()->count();
        $cumples= Onomasticas::where('CUMP',Carbon::now()->month+1)->count();
        $arrayaños =añosemp::select('Id')->get();
        $años= Onomasticas::whereIn('AÑOSEMP', $arrayaños)->count();
        return view('home',compact('onomasticas','cumples','años'));
    }

}
