<?php

namespace App\Http\Controllers;

use App\Designation;
use App\employee;
use App\Department;
use App\Employee_type;
use http\Env\Response;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        
            $allemp=employee::all();

        //return array of data
        $this->data = array(
            
            'allemp'=>$allemp,
        );

        // dd($this);
        return view('pages.employees.employee_list', $this->data);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payslip()

    {

        
            $allemp=employee::all();

        //return array of data
        $this->data = array(
            
            'allemp'=>$allemp,
        );

        // dd($this);
        return view('pages.employees.payroll.create_payslip', $this->data);
    }

        /**
     * Show the form for editing the specified resource.
     *
     *@param int $employee
     * @return \Illuminate\Http\Response
     */

    public function details($employee)
    {
                   //fetch department
        $depts = Department::orderby("id", "asc")
            ->select('id', 'department')
            ->Get();

        //fetch employment type
        $type = Employee_type::orderby("id", "asc")
            ->select('id', 'emp_type')
            ->Get();

             //fetch employment type
        $des = Designation::orderby("desi_id", "asc")
            ->select( 'designation')
            ->Get();

                // get employee data from empno submited//
              
             $where = array('emp_id' => $employee);
             $emp = employee::where($where)->first();
             
          $Departmentid =array('id'=>$emp->department);
          $depadata=Department::where($Departmentid)->first();

          $designationid=array('desi_id'=>$emp->designation);
           $desidata=Designation::where($designationid)->first();
        
           $Employee_type=array('id'=>$emp->emp_type);
           $empdata=Employee_type::where($Employee_type)->first();
        


           $this->data = array(
            
            'emp'=>$emp,
            'depts'=>$depts,
            'type'=>$type,
            'des'=>$des,
            'empdata'=>$empdata,
            'desidata'=>$desidata,
            'depadata'=>$depadata
        );

        return view('pages.employees.show_employee',$this->data);
        
    }
      
    

 /**
     * Show the form for editing the specified resource.
     *
     *@param int $id
     * @return \Illuminate\Http\Response
     */

    public function getDesignationn($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $temployee = employee::Get()->count();
        //employee number
        $count = $temployee + 1;
        $emp_no = 'EMP0' . $count;

        //fetch department
        $depts = Department::orderby("id", "asc")
            ->select('id', 'department')
            ->Get();

        //fetch employment type
        $type = Employee_type::orderby("id", "asc")
            ->select('id', 'emp_type')
            ->Get();
            //Get all employees
            $allemp=employee::all();

        //return array of data
        $this->data = array(
            'emp_no' => $emp_no,
            'count' => $count,
            'depts' => $depts,
            'type' =>$type,
            'allemp'=>$allemp,
        );

        // dd($this);
        return view('pages.employees.add_employee', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //image processing
        if ($files = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/profile_images/'); // upload path
            // Upload Orginal Image
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";
            // Save In Database
            $imagemodel= new Photo();
            $imagemodel->photo="$profileImage";
            $imagemodel->save();
        }
             

        
       $empID = $request->empID;
       $empno=$request->empno;

       if (empty( $request->status)) {
           $status="Active";
       }
       else
       {
        $status= $request->status;
       }
        employee::updateOrCreate(
        ['id' => $empID,'emp_id'=>$empno],

        [  'emp_id' => $request->empno, 
           'fname' => $request->fname,
           'id_no' => $request->idno,
          
           'marital_status' => $request->marital,
           'dob' => $request->dob,
           'gender' => $request->gender,
           'contact1' => $request->phoneno1,
           'contact2' => $request->phoneno2,
           'email' => $request->email,
           'nationality' => $request->nationality,
           'photo' => $request->image,
           'department' => $request->department,
           'designation' => $request->designation,
           'emp_type' => $request->emp_type,
           'emp_date' => $request->edate,
           'start_salary' => $request->salary,
           'status' => $status,
           'kra' => $request->pin,
           'nssf' => $request->nssf,
           'nhif' => $request->nhif,
           'bank_name' => $request->bank_name,
           'acc_name' => $request->acc_name,
           'acc_no' => $request->acc_no,

        ]);
        if(empty($request->empID))
            $msg = 'Employee entry created successfully.';
        else
            $msg = 'Employee data is updated successfully';
        return redirect()->route('employee.index')->with('success',$msg); 
        

        
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $employee
     * @return \Illuminate\Http\Response
     */
    public function show( $employee)
    {
       

             // Fetch Employees by Departmentid
        $empData['data'] = Designation::orderby("desi_id","asc")
            ->select('desi_id','designation')
            ->where('department',$employee)
            ->get();

         
        return response()->json($empData);
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     *@param int $id
     * @return \Illuminate\Http\Response
     */
    public function editslip($id)
    {
           {
          $where = array('id' => $id);
        $department = Department::where($where)->first();
        return Response::json($department);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     *@param int $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($employee)
    {
         //fetch department
        $depts = Department::orderby("id", "asc")
            ->select('id', 'department')
            ->Get();

        //fetch employment type
        $type = Employee_type::orderby("id", "asc")
            ->select('id', 'emp_type')
            ->Get();

             //fetch employment type
        $des = Designation::orderby("desi_id", "asc")
            ->select( 'designation')
            ->Get();

                // get employee data from empno submited//
              
             $where = array('emp_id' => $employee);
             $emp = employee::where($where)->first();
             
          $Departmentid =array('id'=>$emp->department);
          $depadata=Department::where($Departmentid)->first();

          $designationid=array('desi_id'=>$emp->designation);
           $desidata=Designation::where($designationid)->first();
        
           $Employee_type=array('id'=>$emp->emp_type);
           $empdata=Employee_type::where($Employee_type)->first();
        


           $this->data = array(
            
            'emp'=>$emp,
            'depts'=>$depts,
            'type'=>$type,
            'des'=>$des,
            'empdata'=>$empdata,
            'desidata'=>$desidata,
            'depadata'=>$depadata
        );

        return view('pages.employees.edit_employee',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
