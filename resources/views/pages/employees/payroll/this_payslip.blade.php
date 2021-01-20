@extends('pages.layouts.tableslayout')

@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create Payslip
      <small>Human Resource</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Create Payslip</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
     <div class="col-md-12">
    <?php //echo $msg; ?>
    </div>
  <form action="" method="post">
  <div class="col-md-12">

    <div class="col-md-4">
    <?php //include('modal_hr.php'); ?>
    <a href="#editSalary<?php //echo $empno; ?>" data-toggle="modal" class="btn btn-success" style="margin-bottom: 10px"><i class="fa fa-edit"></i> Changes Salary</a>
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username"><?php //echo $row['fname']; ?></h3>
            <h5 class="widget-user-desc"><?php //echo $row['designation']; ?></h5>
          </div>
          <div class="widget-user-image">
            <?php //echo "<img class='img-circle' src='uploaded/".$row['photo']."' style='width:100px;height:100px;'  />";  ?>
          </div>
      <div class="box-body">

  <div class="col-md-12" style="border-bottom: 1px solid black;padding-top:20px;">
<table style="font-family:'Courier New', Courier, monospace;width:100%;margin-top: 30px;">
  <tr><th>Employee Number:</th><th style="text-align:right;font-size:14px"><?php// echo $row['empno']; ?></th></tr>
  <tr><th>Employee Name:</th><th style="text-align:right;font-size:14px"><?php //echo $row['fname']; ?></th></tr>

  <?php
    //$depaID=$row['department'];
   //$a = $db->query("SELECT * FROM departments WHERE depaID='$depaID'") or die(mysqli_error($db));
///$aa = mysqli_fetch_array($a);
//$depa= $aa['department'];
?>
  <tr><th>Employee Department:</th><th style="text-align:right;font-size:14px"><?php //echo $depa; ?></th></tr>
  <tr><th>Employee Designation:</th><th style="text-align:right;font-size:14px"><?php //echo $row['designation']; ?></th></tr>
  <tr><th>Payslip Period:</th><th style="text-align:right;font-size:14px"><?php //echo $month." ".$fyear; ?></th></tr>
  </table>
  </div>
  <div class="col-md-12" style="border-bottom: 1px solid black;padding-top:20px;">
  <table class="table table-striped" style="font-family:'Courier New', Courier, monospace;width:100%;">
  <tr><th>Basic Salary:</th><th style="text-align:right;font-size:14px"><?php //echo number_format($row['joining_salary'],2); ?></th></tr>

  <?php
//$alawa = $db->query("SELECT * FROM employee_allowances WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die (mysqli_error($db));
//if(mysqli_num_rows($alawa)>0){

//while($rowa = mysqli_fetch_array($alawa)){
?>
<tr><th><?php //echo $rowa['all_name']; ?></th><th style="text-align:right;font-size:14px"><?php //echo number_format($rowa['amount'],2); ?></th></tr>
  <?php
  //}
  //}
?>
<?php

//$alawa = $db->query("SELECT SUM(amount) as subAll FROM employee_allowances WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die (mysqli_error($db));
//$sub = mysqli_fetch_array($alawa);
//  $salary2 = $row['joining_salary'] + $sub['subAll'];
  ?>
  <tr><th style="font-size:16px;">TOTAL INCOME:</th><th style="text-align:right;font-size:16px"><?php// echo number_format($salary2,2); ?></th></tr>
  </table>
  </div>

  <div class="col-md-12" style="border-bottom: 1px solid black;padding-top:20px;">
  <table class="table table-striped" style="font-family:'Courier New', Courier, monospace;width:100%;">
  <tr><th style="font-size:16px;">DEDUCTIONS</th><th></th></tr>
  <?php
//$dedu = $db->query("SELECT * FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die (mysqli_error($db));
//while($rowd = mysqli_fetch_array($dedu)){
?>
<tr><th><?php //echo $rowd['deduction']; ?></th><th style="text-align:right;font-size:14px"><?php //echo number_format($rowd['amount'],2); ?></th></tr>
  <?php
//}
  //$dedu = $db->query("SELECT SUM(amount) as sudDed FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die (mysqli_error($db));
//  $sud = mysqli_fetch_array($dedu);
  //$deductions = $sud['sudDed'];

  ?>

  <tr><th style="font-size:16px;">TOTAL DEDUCTIONS:</th><th style="text-align:right;font-size:16px;"><?php //echo number_format($deductions,2); ?></th></tr>
  </table>
      </div>

  <div class="col-md-12" style="border-bottom: 1px solid black;padding-top:20px;">
  <table class="table table-striped" style="font-family:'Courier New', Courier, monospace;width:100%;">
  <tr><th style="font-size:16px;">NET PAY:</th>
  <th style="text-align:right;font-size:16px;"><?php //echo number_format(($salary2 - $deductions),2); ?></th></tr>
  </table>
  <input type="hidden" name="empno" value="<?php //echo $empno; ?>" />
  <input type="hidden" name="month" value="<?php //echo $month; ?>" />
  <input type="hidden" name="fyear" value="<?php //echo $fyear; ?>" />
  <input type="hidden" name="department" value="<?php //echo $row['department']; ?>" />
  <input type="hidden" name="designation" value="<?php //echo $row['designation']; ?>" />
<input type="hidden" name="csalary" value="<?php //echo $row['joining_salary']; ?>" />
<input type="hidden" name="sub_salary" value="<?php //echo $row['joining_salary']; ?>" />
  </div>
      </div>
        <!-- /.box-body -->
          <div class="box-footer">
           <button type="submit" name="createPayslip" class="btn btn-primary"><i class="fa fa-save"></i> Save Payslip</button>
          </div>
        </div>
        <!-- /.widget-user -->
</form>
      </div>
      <!-- /.col -->

  <div class="col-md-8">

    <div class="col-md-4">
         <div class="box box-primary">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add PAYE</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" name="empno" value="<?php //echo $empno; ?>" />
      <input type="hidden" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" name="month" value="<?php //echo $month; ?>" />
      <input type="hidden" name="csalary" value="<?php //echo $row['csalary']; ?>" />
      <input type="hidden" name="sub_salary" value="<?php //echo $row['joining_salary']; ?>" />
          <?php
  //$dde = $db->query("SELECT * FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear' AND deduction='PAYE'") or die(mysqli_error($db));
  //$rod = mysqli_num_rows($dde);
      ?>

      <?php //if($rod===0){ ?>
      Add <b style="color:red">PAYE</b> To Employee
      <?php// }else{ ?>
        <i class="fa fa-thumbs-o-up"></i> Already Added!
      <?php //} ?>


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
    <?php //if($rod===0){ ?>
          <button type="submit" name="addPAYE" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add PAYE</button>
    <?php //}else{ ?>
          <button class="btn btn-primary btn-block" disabled><i class="fa fa-plus"></i> Add PAYE</button>
    <?php //} ?>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>

    <div class="col-md-4">
         <div class="box box-warning">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add NHIF</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" name="empno" value="<?php// echo $empno; ?>" />
      <input type="hidden" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" name="month" value="<?php //echo $month; ?>" />
      <input type="hidden" name="csalary" value="<?php //echo $row['csalary']; ?>" />
      <input type="hidden" name="sub_salary" value="<?php //echo $row['joining_salary']; ?>" />


      <?php
  //$dde1 = $db->query("SELECT * FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear' AND deduction='NHIF'") or die(mysqli_error($db));
  //$rod1 = mysqli_num_rows($dde1);
      ?>

      <?php //if($rod1===0){ ?>
      Add <b style="color:red">NHIF</b> To Employee
      <?php //}else{ ?>
        <i class="fa fa-thumbs-o-up"></i> Already Added!
      <?php //} ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
    <?php //if($rod1===0){ ?>
          <button type="submit" name="addNHIF" class="btn btn-warning btn-block"><i class="fa fa-plus"></i> Add NHIF</button>
    <?php //}else{ ?>
          <button class="btn btn-warning btn-block" disabled><i class="fa fa-plus"></i> Add NHIF</button>
    <?php //} ?>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>

    <div class="col-md-4">
         <div class="box box-info">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add NSSF</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" name="empno" value="<?php //echo $empno; ?>" />
      <input type="hidden" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" name="month" value="<?php //echo $month; ?>" />
      <input type="hidden" name="csalary" value="<?php// echo $row['csalary']; ?>" />
      <input type="hidden" name="sub_salary" value="<?php //echo $row['sub_salary']; ?>" />


        <?php
  //$dde2 = $db->query("SELECT * FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear' AND deduction='NSSF'") or die(mysqli_error($db));
  //$rod2 = mysqli_num_rows($dde2);
      ?>

      <?php //if($rod2===0){ ?>
      Add <b style="color:red">NSSF</b> To Employee
      <?php //}else{ ?>
        <i class="fa fa-thumbs-o-up"></i> Already Added!
      <?php //} ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
    <?php //if($rod2===0){ ?>
          <button type="submit" name="addNSSF" class="btn btn-info btn-block"><i class="fa fa-save"></i> Add NSSF</button>
    <?php //}else{ ?>
          <button class="btn btn-info btn-block pull-right" disabled><i class="fa fa-trash"></i> Add NSSF</button>
    <?php// } ?>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>

    <div class="col-md-4">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add Allowance</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" class="form-control" name="empno" value="<?php //echo $empno; ?>" />
      <input type="hidden" class="form-control" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" class="form-control" name="month" value="<?php //echo $month; ?>" />

    <br />
    <select name="all_type" class="form-control select2" required>
      <option value="">--Select Allowance--</option>
               <?php
    //$dep = $db->query("SELECT * FROM allowance_types") or die(mysqli_error($db));
    //while($rowd=mysqli_fetch_array($dep)){
        ?>
    <option value="<?php //echo $rowd['allowance_type']; ?>"><?php //echo $rowd['allowance_type']; ?></option>
        <?php// } ?>
      </select>
      <br />

      <br />
    <input type="text" name="amount" class="form-control" placeholder="Enter Amount" required/>
      <br />
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
          <button type="submit" name="addAllowance" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Allowance</button>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>

  <div class="col-md-4">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add Deduction</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" class="form-control" name="empno" value="<?php //echo $empno; ?>" />
      <input type="hidden" class="form-control" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" class="form-control" name="month" value="<?php //echo $month; ?>" />

    <br />
    <select name="ded_type" class="form-control select2" required>
      <option value="">--Select Deduction--</option>
               <?php
    //$deps = $db->query("SELECT * FROM deduction_types") or die(mysqli_error($db));
    //while($rowds=mysqli_fetch_array($deps)){
        ?>
    <option value="<?php //echo $rowds['deduction_type']; ?>"><?php //echo $rowds['deduction_type']; ?></option>
        <?php } ?>
      </select>
      <br />

      <br />
      <input type="text" name="amount" class="form-control" placeholder="Enter Amount" required/>
      <br />
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
          <button type="submit" name="addDeduction" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add Deduction</button>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>


  <div class="col-md-4">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Add Tax Free Benefits</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body">
      <input type="hidden" class="form-control" name="empno" value="<?php //echo $empno; ?>" />
      <input type="hidden" class="form-control" name="fyear" value="<?php //echo $fyear; ?>" />
      <input type="hidden" class="form-control" name="month" value="<?php //echo $month; ?>" />

    <br />
    <select name="ded_type" class="form-control select2" required>
      <option value="">--Select Deduction--</option>
               <?php
    //$deps = $db->query("SELECT * FROM deduction_types") or die(mysqli_error($db));
  //  while($rowds=mysqli_fetch_array($deps)){
        ?>
    <option value="<?php //echo $rowds['deduction_type']; ?>"><?php //echo $rowds['deduction_type']; ?></option>
        <?php } ?>
      </select>
      <br />

      <br />
      <input type="text" name="amount" class="form-control" placeholder="Enter Amount" required/>
      <br />
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
          <button type="submit" name="addtaxfree" class="btn btn-danger pull-right"><i class="fa fa-plus"></i> Add Tax Free </button>
          </div>
          <!-- /.box-footer -->
          </form>
          </div>
          <!-- /.box- -->
          </div>







    <div class="col-md-12">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Allowances List</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body" style="overflow: auto;">
  <table class="table table-striped" id="example1" >
    <thead>
      <tr>
        <th>#</th>
        <th>Allowance</th>
        <th>Amount</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
    //  $i = 1;
  //$all = $db->query("SELECT * FROM employee_allowances WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die(mysqli_error($db));
      //while($allo=mysqli_fetch_array($all)){
        //$allID = $allo['allID'];
      ?>
        <tr>
        <td><?php //echo $i; ?></td>
        <td><?php //echo $allo['all_name']; ?></td>
        <td><?php //echo $allo['amount']; ?></td>
        <?php// include('modal_hr.php'); ?>
        <td align="center"><a href="#editAll<?php //echo $allID; ?>" data-toggle="modal"><i class="fa fa-edit text-success"></i></a></td>
        <td align="center"><a href="#deleteAll<?php //echo $allID; ?>" data-toggle="modal"><i class="fa fa-trash text-danger"></i></a></td>
      </tr>
      <?php //$i++; } ?>
    </tbody>
  </table>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box-->
  </div>

  <div class="col-md-12">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title"><i class="fa fa-user-plus"></i> Deductions List</div>
          </div>
          <!-- /.box-header -->
         <form action="" method="post">
          <div class="box-body" style="overflow: auto;">
  <table class="table table-striped" id="example3" >
    <thead>
      <tr>
        <th>#</th>
        <th>Deduction</th>
        <th>Amount</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
    //  $i = 1;
//  $ded = $db->query("SELECT * FROM employee_deductions WHERE empno='$empno' AND month='$month' AND year='$fyear'") or die(mysqli_error($db));
    //  while($deds=mysqli_fetch_array($ded)){
      //  $dedID = $deds['dedID'];
      ?>
        <tr>
        <td><?php //echo $i; ?></td>
        <td><?php //echo $deds['deduction']; ?></td>
        <td><?php //echo $deds['amount']; ?></td>
        <?php //include('modal_hr.php'); ?>
        <td align="center">
        <?php //if($deds['deduction']!='PAYE' && $deds['deduction']!='NHIF'){ ?>
          <a href="#editDed<?php //echo $dedID; ?>" data-toggle="modal"><i class="fa fa-edit text-success"></i></a>
        <?php } ?>
        </td>
        <td align="center"><a href="#deleteDed<?php//echo $dedID; ?>" data-toggle="modal"><i class="fa fa-trash text-danger"></i></a></td>
      </tr>
      <?php //$i++; } ?>
    </tbody>
  </table>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box-->
  </div>
    </div>
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php //include('../../footer.php'); ?>
</div>
  @endsection
