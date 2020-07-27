<?php

namespace App\Http\Controllers;

use App\newdb;
use Illuminate\Http\Request;

class NewdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newdb = newdb::all();
        return response()->json($newdb);
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
     * @param  \App\newdb  $newdb
     * @return \Illuminate\Http\Response
     */
    public function show(newdb $newdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newdb  $newdb
     * @return \Illuminate\Http\Response
     */
    public function edit(newdb $newdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newdb  $newdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newdb $newdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newdb  $newdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(newdb $newdb)
    {
        //
    }
}
