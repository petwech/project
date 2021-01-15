<?php

namespace App\Http\Controllers;

use App\Employee_type;
use Illuminate\Http\Request;
use Redirect,Response;

class EmployeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emptype= Employee_type::all();

        return view('pages.employees.employment_type',[
            'emptype'=>$emptype,
        ]);
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
    { $type= new Employee_type();
        $type->emp_type=$request ['emp_type'];
        $type->description=$request['description'];
        $type->created_by="Admin";
        $type->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee_type  $employee_type
     * @return \Illuminate\Http\Response
     */
    public function show(Employee_type $employee_type)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $where = array('id' => $id);
    $department = Employee_type::where($where)->first();
    return Response::json($department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee_type  $employee_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee_type $employee_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee_type  $employee_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee_type $employee_type)
    {
        //
    }
}
