@extendS('pages.layouts.tableslayout')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employees Details
        <small>{{ $emp->fname }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employees Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
             
            @if ($emp->photo =='')
             
               @if($emp->gender=='Male')
               
             <img class='img-rounded' src="{{ asset('uploaded/gent.png' ) }}"/>
               
               @else
               
                <img class='img-rounded' src="{{ asset('uploaded/lady.png' ) }}" /> 
               @endif
          
            @else
    <img class='img-rounded' src="{{ asset('uploaded/$emp->photo ') }}" />
             @endif
             
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><{{ $emp->fname }} </h3>
              <h5 class="widget-user-desc">Employee No: {{ $emp->emp_id }} </h5>
            </div>            
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->


        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-user"></i> Personal Details</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-home"></i> Employment Details</a></li>
              <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-credit-card"></i> Bank Details</a></li>
              <li><a href="#tab_4" data-toggle="tab"><i class="fa fa-file-image-o"></i> Employee Documents</a></li>
              <li class="pull-right"><a href="{{ route('employee.edit',$emp->emp_id) }}" target="_blank" title="Edit Employee"><i class="fa fa-pencil-square text-primary fa-2x"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table class="table">
                  <tr><td width="200">Employment No:</td><td>{{ $emp->emp_id }}</td></tr>
                  <tr><td>Employee Name:</td><td>{{ $emp->fname }}</td></tr>
                  <tr><td>Gender:</td><td>{{ $emp->gender }}</td></tr>
                  <tr><td>ID Number:</td><td>{{ $emp->id_no }}</td></tr>
                  <tr><td>Marital Status:</td><td>{{ $emp->marital_status }}</td></tr>
                  <tr><td>Date Of Birth:</td><td>{{ $emp->dob }}</td></tr>
                  <tr><td>Phone Number:</td><td>{{ $emp->contact1 }}</td></tr>
                  
                  <tr><td>Email Address:</td><td>{{ $emp->email }}</td></tr>
                  <tr><td>Nationality:</td><td><img src="{{ asset('flags/blank.gif') }}" class="flag flag-ke" alt="Kenyan" /></td></tr>
                  <tr><td>Status:</td>
                  <td>
                  
                @if($emp->status == 'Active')
                  
                    <span class="badge bg-green">{{ $emp->status }} </span>
                @else
                    <span class="badge bg-red">{{ $emp->status }}</span>
                @endif
                  </td></tr>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table">
                <?php
             // $pata=$rowe['department'];
          //$depa = $db->query("SELECT * FROM departments WHERE depaID='$pata'") or die(mysqli_error($db));
                     // $leta=mysqli_fetch_array($depa);
                     // $nam=$leta['department'];
          ?>
                  <tr><td width="200">Department:</td><td>{{ $depadata->department }}</td></tr>
                  <tr><td>Designation:</td><td>{{ $desidata->designation }}</td></tr>
                  <tr><td>Employment Type:</td><td>{{ $empdata->emp_type }}</td></tr>
                  <tr><td>Employment Date:</td><td>{{ $emp->emp_date }}</td></tr>
                  <tr><td>KRA PIN:</td><td>{{ $emp->kra }}</td></tr>
                  <tr><td>NSSF Number:</td><td>{{ $emp->nssf }}</td></tr>
                  <tr><td>NHIF Number:</td><td>{{ $emp->nhif }}</td></tr>
        
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3" style="overflow: auto;">
                <table class="table">
                  <tr><td width="200">Bank Name:</td><td>{{ $emp->bank_name }}</td></tr>
                  <tr><td>Account Name:</td><td>{{ $emp->acc_name }}</td></tr>
                  <tr><td>Account Number:</td><td>{{ $emp->acc_no }}</td></tr>
        
                </table>
              </div>
              <!-- /.tab-pane -->       
             <div class="tab-pane" id="tab_4" style="overflow: auto;">

                

                   <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
                 <div class="box-title">Upload Files</div>        
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <div class="row">
         <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
            
         
            <div class="col-md-12" style="margin-top: 20px;">
        <input type="text" name="fname" class="form-control" id="prod" placeholder="File Name" required />
        </div> <br>
        <div>
          <label for="file">Select File To Upload:</label>
        </div>
        <div>
   <input type="file" name="image" /><br><br>
</div>
  <input type="hidden" id="empID" name="empID" value="<?php //echo $empID;  ?>"><br><br>
  <input type="submit" name="submit" value="Upload">

        
       </form>
            </div>
           
        <!-- /.tab-pane -->
           
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->
   </div>
        <div class="col-md-8">
    <div class="box">
            <div class="box-header with-border">
        <div class="box-title">Files List</div>                           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>File Name</th>
                <th>File path</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
              <tbody>
    <?php
      //$i = 1;
  //$uus = $db->query("SELECT * FROM files WHERE empID='$empID'") or die(mysqli_error($db));
     // while($row=mysqli_fetch_array($uus)){
        //$dID = $row['dID'];
    ?>
        <tr class="<?php// echo $dID; ?>">
          <td><?php //echo $i; ?></td>
          <td><?php //echo $row['File_name']; ?></td>
          <td><a href="docs/<?php //echo $row['paths']; ?>" target="_blank" title="View File"><?php// echo $row['paths']; ?><i class="fa fa-pencil-square text-primary fa-1x"></i></a></td>
          <?php //include('modal_hr.php'); ?>
          <td align="center"><a href="#edit_allType<?php //echo $allID; ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
          </td>
          <td align="center"><a href="#delete_allType<?php //echo $allID; ?>" data-toggle="modal"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>     
              
    <?php// $i++; } ?>
              
            </tbody>
          </table>
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
        </div>




    <!-- /.content -->
  </div>
      @endsection