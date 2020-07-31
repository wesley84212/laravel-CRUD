<?php

namespace App\Http\Controllers;

use App\changeLog;
use Illuminate\Http\Request;

class ChangeLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = changeLog::select('value','create_date')->get();
        return response()->json($data);
    }

    public function findOne($id)
    {
        $data = changeLog::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $input)
    {
        $data = new changeLog;

        $data->value = $input->value;
        $data->create_date = $input->create_date;
        if ($data->save() == 1) {
            $res = ['status' => 200, 'message' => 'create success'];
            return response()->json($res);
        } else {
            $res = ['status' => 400, 'message' => 'create error'];
            return response()->json($res);
        }
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
     * @param  \App\changeLog  $changeLog
     * @return \Illuminate\Http\Response
     */
    public function show(changeLog $changeLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\changeLog  $changeLog
     * @return \Illuminate\Http\Response
     */
    public function edit(changeLog $changeLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\changeLog  $changeLog
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, changeLog $changeLog)
    {
        //
        $data = changeLog::find($id);
        $data->value = $request->value;
        if ($data->save() == 1) {
            $res = ['status' => 200, 'message' => 'update success'];
            return response()->json($res);
        } else {
            $res = ['status' => 400, 'message' => 'update error'];
            return response()->json($res);
        }
    }

    public function delete($id)
    {
        $data = changeLog::find($id);
        if ($data->delete() == 1) {
            $res = ['status' => 200, 'message' => 'delete success'];
            return response()->json($res);
        } else {
            $res = ['status' => 400, 'message' => 'delete error'];
            return response()->json($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\changeLog  $changeLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(changeLog $changeLog)
    {
        //
    }
}
