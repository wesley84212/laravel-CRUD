<?php

namespace App\Http\Controllers;

use App\newdb;
//use App\newdb::setTable();
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

        $inin = newdb::all();
        $value = $inin[0]->get('id');
        return response()->json($value);


    }

    public function index2()
    {



        $testcount =newdb::count();
        echo $testcount;


    }

    public function newdata()
    {

        $y =newdb::count();
        echo $testcount;


    }

    public function todofunc($id)
    {

        // $idhowmuch =newdb::all();
        // $idhowmuch = $idhowmuch->where('id', $id);
        // $idhowmuch->all();
        $idhowmuch = newdb::find($id);
        // echo $idhowmuch;
        echo($idhowmuch->content);


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
        //$newdata = new newdb;
        $newdata = newdb::create($request->all());

        return $newdata;

        // $newdata->status = $request->status;
        // $newdata->content = $request->content;

        // $newdata->save();
        // echo $request;
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
