<?php

namespace App\Http\Controllers;

use App\Models\Kategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.index',[
            'judul'=>'Adinistrator',
            'kategory'=>Kategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function show(kategory $kategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function edit(kategory $kategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,
    kategory $kategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategory $kategory)
    {
        //
    }
}
