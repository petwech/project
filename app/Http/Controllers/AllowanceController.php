<?php

namespace App\Http\Controllers;

use App\Allowance;
use Illuminate\Http\Request;
use Redirect,Response;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $allw= Allowance::all();

        return view('pages.employees.payroll.allowance_type',[
           'allw'=> $allw,
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
         
       $allID = $request->data_id;
      

       
        Allowance::updateOrCreate(
        ['id' => $allID],

        [  'allowance_type' => $request->f_row, 
           'description' => $request->s_row,
         

        ]);
        if(empty($request->data_id))
            $msg = 'Allowance entry created successfully.';
        else
            $msg = 'Allowance data is updated successfully';
        return redirect()->route('payroll.index')->with('success',$msg); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function show(Allowance $allowance)
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
        $allowance = Allowance::where($where)->first();
        return Response::json($allowance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allowance $allowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allowance $allowance)
    {
        //
    }
}
