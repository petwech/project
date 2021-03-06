
@extendS('pages.layouts.tableslayout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Human Resource
            <small>Departments</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Department</li>
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
                            <div class="box-title">Add A DESIGNATION</div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('designation.store') }}" method="post">
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
                                            <input type="text" name="designation" class="form-control" placeholder="Enter Designation" required />
                                        </div>

                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-block" name="addDepartment" ><i class="fa fa-save"></i> Save Designation</button>
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


                                <?php $i=1; ?>
                                @foreach($desi as $des)
                                    <tr id="desid{{ $des->id }}">
                                    <td>{{$i}}</td>
                                    <td>{{$des->designation}}</td>
                                    <td>{{$des->id}}</td>

                                   <td>
                                     <form action="" method="POST">
                                                  <a href="javascript:void(0)" class="btn btn-success" id="des" data-toggle="modal" data-id="{{ $des->id }}">Edit </a>

                                                     <meta name="csrf-token" content="{{ csrf_token() }}">

                                   </td>
                                   <td>
                                        <a id="deletedesi" data-id="{{ $des->id }}" class="btn btn-danger delete-user">Delete</a></</td>
                               </form>
                                </tr>

                                <?php $i++;?>
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



    @endsection
