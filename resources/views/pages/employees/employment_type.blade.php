@extends('pages.layouts.tableslayout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Human Resource
                <small>Employment Type</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Employment Type</li>
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
                                <div class="box-title">Add Employment Type</div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{route('emp_type.store')}}" method="post">
                                            <div class="col-md-12">
                                                <input type="text" name="emp_type" class="form-control" placeholder="Enter Employee Type" required />
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
                                <button type="submit" class="btn btn-primary btn-block" name="addEmptype" ><i class="fa fa-save"></i> Save Employee Type</button>
                            </div>
                        </div>
                        <!-- /.box -->

                        @csrf
                        </form>
                    </div>

                    <div class="col-md-8">
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="box-title">Employment Type List</div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employment Type</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i = 1;?>
                                    @foreach($emptype as $type)
                                        <tr class="{{ $type->id }}">
                                            <td>{{ $i }}</td>
                                            <td>{{$type->emp_type}}</td>
                                            <td>{{ $type->description }}</td>
                                      <td>
                                            <form action="" method="POST">
                                                         <a href="javascript:void(0)" class="btn btn-success" id="emp_type" data-toggle="modal" data-id="{{ $type->id }}">Edit </a>

                                                            <meta name="csrf-token" content="{{ csrf_token() }}">

                                          </td>
                                          <td>
                                               <a id="deleteemp_type" data-id="{{ $type->id }}" class="btn btn-danger delete-user">Delete</a></</td>
                                      </form>
                                        </tr>
                                        <?php $i++;  ?>
                                    @endforeach



                                    </tbody>
                                </table>
                                 @include('pages.modals.employeemodal')
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
@endsection
