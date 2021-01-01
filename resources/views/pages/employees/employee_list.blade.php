@extendS('pages.layouts.tableslayout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Details
        <small>Employee List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <div class="col-md-12">          
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p id="msg">{{ $message }}</p>
        </div>
    @endif
          <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                 <div class="box-title">Select Department To Employee List</div>				
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <div class="row">
				 <div class="col-md-12">
         
    <form action="" method="post">
    <div class="col-md-3">
    <button type="submit" name="export_pdf_permanent_employees" formaction="export_pdf.php" formtarget="_blank" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Export To PDF">
                  <i class="">Permanent Employees pdf</i>
        </button>
        </div>  
        
        <div class="col-md-3">
    <button type="submit" name="export_pdf_company_employees" formaction="export_pdf.php" formtarget="_blank" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Export To PDF">
                  <i class="">Company Employees pdf</i>
        </button>
        </div>  
        
        <div class="col-md-3">
    <button type="submit" name="export_pdf_company_employees" formaction="export_pdf.php" formtarget="_blank" class="btn btn-success btn-sm" data-toggle="tooltip" title="Export To PDF">
                  <i class="">Company Employees pdf</i>
        </button>
        </div>  
        
        <div class="col-md-3">
    <button type="submit" name="export_pdf_sewing_employees" formaction="export_pdf.php" formtarget="_blank" class="btn btn-default btn-sm" data-toggle="tooltip" title="Export To PDF">
                  <i class="">Sewing Employees pdf</i>
        </button>
        </div>    
    </form>
        <div class="col-md-12">

        
        </div>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
           <form method="post" >
                 <div class="box-title">Employees List</div> 
            <!-- tools box -->
            <div class="pull-right box-tools">  
            
              </div>
              <!-- /. tools -->
          </form>       
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow:auto">
          <table id="example1" class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th>#</th>
                <th> Name</th>
                <th>Job Title</th>
                <th>ID no</th>
                <th>KRA Pin</th>
                <th>NHIF</th>
                <th>NSSF</th>
				        <th>Phone</th>
                <th>gender</th>
                <th>Edit</th>
              </tr>
            </thead>
              <tbody>
    <?php
     $i = 1;?>
      @foreach ($allemp as $emp)
        <tr class="empid{{$emp->emp_id  }}">
          <td style="vertical-align: middle;"></td>
          <td style="vertical-align: middle;">{{ $emp->fname }}</td> 
          <td style="vertical-align: middle;">{{ $emp->designation }}</td>     
          <td style="vertical-align: middle;">{{ $emp->id_no }}</td>
          <td style="vertical-align: middle;">{{ $emp->kra }}</td>
          <td style="vertical-align: middle;">{{ $emp->nhif }}</td>
          <td style="vertical-align: middle;">{{ $emp->nssf }}</td>          
          <td style="vertical-align: middle;">{{ $emp->contact1 }}</td>
          <td style="vertical-align: middle;"><a href="{{ route('employee.details',$emp->emp_id) }}" class="btn btn-info btn-sm">Details</a>
          </td>          
          <td style="vertical-align: middle;"><a href="{{ route('employee.edit',$emp->emp_id) }}"><i class="fa fa-edit fa-0.5x text-success"></i></a>
          </td> 
        </tr> 
        @endforeach    
              
    <?php $i++; ?>
              
            </tbody>
          </table>
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
		  </div>	
          
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
    
    
  @endsection