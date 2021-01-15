  @extends('pages.layouts.tableslayout')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Payslip
        <small>Human Resource</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Payslip</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">







      <div class="col-md-8">
      <?php// echo $msg; ?>
          <div class="box">
            <div class="box-header with-border">
                 <div class="box-title">Create Payslip</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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

              <th>Edit</th>
              </tr>
            </thead>
              <tbody>
    <?php
      $i = 1;

    ?>
    @foreach($allemp as $all)


        <tr id="id{{ $all->emp_id }}">
          <td style="vertical-align: middle;"><?php echo $i; ?></td>
          <td style="vertical-align: middle;">{{ $all->fname }}</td>
          <td style="vertical-align: middle;">{{ $all->designation }}</td>
          <td style="vertical-align: middle;">{{ $all->id_no }}</td>
          <td style="vertical-align: middle;">{{ $all->kra }}</td>
          <td style="vertical-align: middle;">{{ $all->nhif }}</td>
          <td style="vertical-align: middle;">{{ $all->nssf }}</td>
          <td style="vertical-align: middle;">{{ $all->contact1 }}</td>
            <?php //include('modal_hr.php');   ?>

             <form action="" method="POST">

      <td align="center"><a href="javascript:void(0)" data-id="{{ $all->emp_id }}" id="createpay" data-toggle="modal"><i class="fa fa-edit"></i></a>
         <meta name="csrf-token" content="{{ csrf_token() }}">
          </td>


          </form>

        </tr>

    <?php     $i++; ?>
    @endforeach


            </tbody>
          </table>
               @include('pages.employees.payroll.payrol')
            </div>





            <!-- ./box-body -->
          </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  @endsection
