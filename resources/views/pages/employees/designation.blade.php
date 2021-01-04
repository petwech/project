@extends('pages.layouts.tableslayout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Human Resource
            <small>Designation</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Designation</li>
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
                            <div class="box-title">Add A Designation</div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="add_designation" method="post">
                                        <div class="col-md-12" style="margin-top: 20px">
                                            <select name="department" class="form-control select2">
                                                <option value="">--Select Department--</option>
                                                  @foreach($deps as $dept)
                                                <option value="{{$dept->id}}">{{$dept->department}}</option>
                                                 @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 20px">
                                            <input type="text" name="designation" class="form-control" placeholder="Enter Designation Name" required />
                                        </div>

                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-block" name="addDesignation" ><i class="fa fa-save"></i> Save Designation</button>
                        </div>
                    </div>
                    <!-- /.box -->
                    @csrf
                    </form>
                </div>

                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-title">Staff Designation List</div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $i = 1;?>
                                @foreach($desi as $des)
                                <tr id="desid{{ $des->desi_id }}" >
                                    <td>{{ $i }}</td>
                                    <td>{{ $des->designation }}</td>
                                    <td></td>
                                    <td></td>
                                    <td><form action="" method="POST">
                                                  <a href="javascript:void(0)" class="btn btn-success" id="des" data-toggle="modal" data-id="{{ $des->desi_id }}">Edit </a>

                                                     <meta name="csrf-token" content="{{ csrf_token() }}">
                                    
                                   </td>
                                   <td> <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <a id="delete-depart" data-id="{{ $des->desi_id }}" class="btn btn-danger delete-user">Delete</a></</td>
                               </form>
                      </td>
                                </tr>
                                <?php $i++;  ?>
                                @endforeach



                                </tbody>
                            </table>
                        </div>
                        <!-- ./box-body -->

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

 <!-- Add and Edit customer modal -->
    <div class="modal fade" id="editmodal" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="customerCrudModal"></h4>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>

    @endsection