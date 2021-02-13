@extends('pages.layouts.tsf')

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Inventory
      <small> material</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> Material</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-md-12">
    <?php //echo $msg; ?>
     <div class="col-md-4">
        <div class="box">
          <div class="box-header with-border">
               <div class="box-title">Add Material</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
         <div class="row">
       <div class="col-md-12">
    <form action="{{route('material.store')}}" method="post">

          <div class="col-md-12" style="margin-top: 20px;">
          <select class="form-control select2" name="mat_name" id="mat_name" required>
          <option value="">-- Select Material Name --</option>
           @foreach ($prod as $prodct)
          <option value="{{$prodct->name}}">{{$prodct->name}}</option>
           @endforeach
          </select>
      </div>

       <div class="col-md-12" style="margin-top: 20px;">
      <input type="text" name="cm" class="form-control" placeholder="Enter Cm" required />
      </div>
      <div class="col-md-12" style="margin-top: 20px;">
      <select class="form-control select2" name="colour" id="colour" required>
          <option value="">-- Select Material Colour --</option>

          <option value="White">White</option>
          <option value="Red">Red</option>
           <option value="Blue">Blue</option>
            <option value="Green">Green</option>
             <option value="Maroon">Maroon</option>
              <option value="Purple">purple</option>
              <option value="Pink">Pink</option>
          </select>
      </div>
           <div class="col-md-12" style="margin-top: 20px;">
      <input type="number" name="kgs" class="form-control" placeholder="Enter KGS" required />
      </div>


              <div class="col-md-12" style="margin-top: 20px;">
      <input type="number" name="rolls" class="form-control" placeholder="Enter Rolls" required />
      </div>
      <div class="col-md-12" style="margin-top: 20px;">
      <input type="text" name="delivered_by" class="form-control" placeholder="Delivered by" required />
      </div>

      <div class="col-md-12" style="margin-top:20px">
          <label> Date</label><br />
          <input type="date" name="edate" class="form-control" value="<?php echo date('Y-m-d'); ?>"  />
          </div>

       </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-block" name="addmaterial" ><i class="fa fa-save"></i> Save Delivery</button>
    </div>
        </div>
        <!-- /.box -->
        @csrf
      </form>
    </div>
    <div class="col-md-8">
        <div class="box">
          <div class="box-header with-border">
         <form method="post" >
               <div class="box-title">Products List</div>
                 <div class="col-md-2" style="margin-top: 20px;">

              <a class="btn btn-primary" href="delivered_mat" role="button"> View Delivered Material </a>
              </div>
          <!-- tools box -->
          <div class="pull-right box-tools">
              <button type="submit" name="export_excel_students" formaction="export_excel.php" class="btn btn-default btn-sm" data-toggle="tooltip" title="Export To Excel">
                <i class="fa fa-file-excel-o"></i>
      </button>
              <button type="submit" name="export_pdf_students" formaction="export_pdf.php" formtarget="_blank" class="btn btn-default btn-sm" data-toggle="tooltip" title="Export To PDF">
                <i class="fa fa-file-pdf-o"></i>
      </button>
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
              <th>Colour</th>

              <th>Cm</th>

              <th>kgs</th>
              <th>Rolls</th>
              <th>Edit</th>
            </tr>
          </thead>
            <tbody>
  <?php
    $i = 1;
?>
    @foreach($material as $mat)
      <tr class="{{$mat->id}}">
        <td style="vertical-align: middle;"><?php echo $i; ?></td>
        <td style="vertical-align: middle;">{{ strtoupper($mat->colour) }}</td>

        <td style="vertical-align: middle;"><?php //echo $row['cm']; ?></td>
          <td style="vertical-align: middle;"><?php// echo $row['kgs']; ?></td>
        <td style="vertical-align: middle;"><?php //echo $row['rolls']; ?></td>

        <td style="vertical-align: middle;"><a href="edit_student<?php //echo '?prodID='.$prodID; ?>"><i class="fa fa-edit fa-0.5x text-success"></i></a>
        </td>
      </tr>

  <?php //$i++; } ?>
     @endforeach
          </tbody>
        </table>
          </div>
          <!-- ./box-body -->

        </div>
        <!-- /.box -->
    </div>

    </div>

      <!-- /.col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
    @endsection
