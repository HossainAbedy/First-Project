<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;
use App\Http\Resources\Employee as EmployeeResource;


class EmployeeController extends Controller
{
    public function index()
    {
        $employee=Employee::orderBy('created_at','desc')->paginate(5);
        return EmployeeResource::collection($employee);
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
       $employee=$request->isMethod('put') ? Employee::findOrFail
       ($request->$employee_id):new Employee;
       $employee->id = $request->input('employee_id');
       $employee->employee_name = $request->input('employee_name');
       
         
         if($employee->save()){
             return new EmployeeResource($employee);
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
        $employee=Employee::findOrFail($id);
        return new EmployeeResource($employee);
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
        $employee=Employee::findOrFail($id);
        if($employee->delete()){
        return new EmployeeResource($employee);
        }
    }
}
