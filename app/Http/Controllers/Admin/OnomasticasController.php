<?php

namespace App\Http\Controllers\Admin;


use App\meses;
use App\lineas;
use App\añosemp;
use App\Onomasticas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnomasticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_unless(\Gate::allows('product_access'), 403);

        $onomasticas = Onomasticas::all();
        $ComboJV=lineas::All();
        $ComboMeses = meses::All()->whereNotNull('id');
        $AñosEmp = añosemp::orderBy('Id') ->get();

        return view('admin.onomasticas.index', compact('onomasticas', 'ComboJV','ComboMeses', 'AñosEmp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
