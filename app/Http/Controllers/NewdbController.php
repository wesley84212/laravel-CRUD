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

        $inin = newdb::all();
        // $value = $inin[0]->get('id','status','content');
        return response()->json($inin);


    }


    //單一查找
    public function todofunc($id)
    {

        // $idhowmuch =newdb::all();
        // $idhowmuch = $idhowmuch->where('id', $id);
        // $idhowmuch->all();
        $idhowmuch = newdb::find($id);

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
    }

    public function store2($id , Request $request)
    {

        // $updatedata = newdb::find(1);
        // $updatedata->content = 'New Flight Name';
        // $updatedata->status = '1';
        // $updatedata->save();

        $updatedata = newdb::where('id', $id)
          ->update(['status'=>$request->status,'content' => $request->content]);


        return '更新成功';

    }


    public function store3($id)
    {

        $deldata = newdb::where('id',$id)->delete();

        return 'delete success';

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
