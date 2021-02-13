@extends('pages.layouts.tsf')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Inventory
      <small> Products</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> Products</li>
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
     <div class="col-md-4">
        <div class="box">
          <div class="box-header with-border">
               <div class="box-title">Add Products</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
         <div class="row">
       <div class="col-md-12">
    <form action="{{ route('product.store') }}" method="post">

          <div class="col-md-12" style="margin-top: 20px;">
      <input type="text" name="product" class="form-control" placeholder="Enter Product eg #22" required />
      </div>
              <div class="col-md-12" style="margin-top:20px">

                <label>Department</label><br />
                <select class="form-control select2" name="department" id="department" required>
                    <option selected="false">-- Select Department --</option>

                    @foreach($deps as $dept)
                    <option value="{{ $dept->id }}">{{ $dept->department}} </option>
                    @endforeach
                    <?php // } ?>
                </select>
          </div>
       <div class="col-md-12" style="margin-top: 20px;">
      <input type="text" name="description" class="form-control" placeholder="Enter Description" required />
      </div>

       </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-block" name="addDepartment" ><i class="fa fa-save"></i> Save Department</button>
    </div>
        </div>
            @csrf
        <!-- /.box -->
        </form>
    </div>
    <div class="col-md-8">
        <div class="box">
          <div class="box-header with-border">
         <form method="post" >
               <div class="box-title">Products List</div>
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
              <th> Name</th>
              <th>Department</th>
              <th>Description</th>
              <th>Edit</th>
            </tr>
          </thead>
            <tbody>
  <?php
   $i = 1;?>
      @foreach ($product as $prod )
       <tr class="{{$prod->id}}">
        <td style="vertical-align: middle;"><?php echo $i; ?></td>
        <td style="vertical-align: middle;">{{$prod->name}}</td>
        <td style="vertical-align: middle;">{{$prod->department}}</td>
        <td style="vertical-align: middle;">{{$prod->descript}}</td>
        <td style="vertical-align: middle;"><a href="edit_student<?php //echo '?studID='.$prodID; ?>"><i class="fa fa-edit fa-0.5x text-success"></i></a>
        </td>
      </tr>

  <?php $i++; ?>
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
