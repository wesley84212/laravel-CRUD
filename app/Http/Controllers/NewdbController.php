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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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

    public function update($id , Request $request)
    {

        // $updatedata = newdb::find(1);
        // $updatedata->content = 'New Flight Name';
        // $updatedata->status = '1';
        // $updatedata->save();

        $updatedata = newdb::where('id', $id)
          ->update(['status'=>$request->status,'content' => $request->content]);

        if($updatedata ==1) {
            $result = ['status'=>200,'message'=>'update success'];
            return response()->json($result);
        }else {
            $result = ['status'=>400,'message'=>'update fail'];
            return response()->json($result);
        }

    }

    public function delete($id)
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
