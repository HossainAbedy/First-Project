<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Log;
use App\Http\Resources\Log as LogResource;


class LogController extends Controller
{
    public function index()
    {
        $log=Log::orderBy('created_at','desc')->paginate(5);
        return LogResource::collection($log);
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
       $log=$request->isMethod('put') ? Log::findOrFail
       ($request->$log_id):new Log;
       $log->id = $request->input('log_id');
       $log->lead_this_month = $request->input('lead_this_month');
       $log->lead_till_this_month = $request->input('lead_till_this_month');
       $log->new_lead_this_month = $request->input('new_lead_this_month');
       $log->new_lead_till_this_month = $request->input('new_lead_till_this_month');
       $log->order = $request->input('order');
       $log->employee_id  = $request->input('employee_id ');
       $log->month= $request->input('month');
      
         
         if($log->save()){
             return new LogResource($log);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log=Log::findOrFail($id);
        return new LogResource($log);
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
        $log=Log::findOrFail($id);
        if($log->delete()){
        return new LogResource($log);
        }
    }
}
