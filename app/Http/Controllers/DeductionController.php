<?php

namespace App\Http\Controllers;

use App\Deduction;
use Illuminate\Http\Request;
use Redirect,Response;

class DeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $dedw= Deduction::all();

        return view('pages.employees.payroll.deduction_type',[
           'allw'=> $dedw,
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
         
       $dedID = $request->data_id;
      

       
        Deduction::updateOrCreate(
        ['id' => $dedID],

        [  'deduction_type' => $request->f_row, 
           'description' => $request->s_row,
         

        ]);
        if(empty($request->data_id))
            $msg = 'Deduction entry created successfully.';
        else
            $msg = 'Deduction data is updated successfully';
        return redirect()->route('deduction.index')->with('success',$msg); 
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
        $deduction = Deduction::where($where)->first();
        return Response::json($deduction);
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
