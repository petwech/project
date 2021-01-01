<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Redirect,Response;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deps= Department::all();

        return view('pages.employees.department',[
           'deps'=> $deps,
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
    {
       

      $r=$request->validate([
            'department' => 'required',
            'description' => 'required',
            
        ]);

        $depId = $request->depart_id;
        Department::updateOrCreate(
        ['id' => $depId],
        ['department' => $request->department, 'description'=>$request->description]
                                   );
        if(empty($request->depart_id))
            $msg = 'Department entry created successfully.';
        else
            $msg = 'Department data is updated successfully';
        return redirect()->route('department.index')->with('success',$msg);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
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
        $department = Department::where($where)->first();
        return Response::json($department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
          Department::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
    }
}
