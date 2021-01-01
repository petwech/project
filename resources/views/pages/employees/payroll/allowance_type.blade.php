    
@extends('pages.layouts.tableslayout')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Allowance Types
        <small>Human Resource</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Allowance Type</li>
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
                 <div class="box-title">Add Allowance Type</div>        
            </div>
            <!-- /.box-header -->
           
            <!-- ./box-body -->
            <div class="box-footer">
			<button type="submit" class="btn btn-primary btn-block" id="addAllowance" name="addAllowance" ><i class="fa fa-save"></i> Add Allowance Type</button>
			</div>
          </div>
          <!-- /.box -->
            @csrf
          </form>
		  </div>
		  
		  <div class="col-md-8">
		<div class="box">
            <div class="box-header with-border">
				<div class="box-title">Allowance Types List</div>                           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				  <table id="example1" class="table table-bordered">
					  <thead>
						  <tr>
							  <th>#</th>
							  <th>Allowance</th>
							  <th>Description</th>
							  <th>Edit</th>
							  <th>Delete</th>
						  </tr>
					  </thead>
				      <tbody>
		       <?php
		       $i = 1; ?>
         @foreach ($allw as $all)
				<tr id="allid{{ $all->id }}">
					<td>{{ $i }}</td>
					<td>{{ $all->allowance_type }}</td>
					<td>{{ $all->description }}</td>
			
					<td> 
                                     <form action="" method="POST">
                                                  <a href="javascript:void(0)" class="btn btn-success" id="allbtn" data-toggle="modal" data-id="{{ $all->id }}">Edit </a>

                                                     <meta name="csrf-token" content="{{ csrf_token() }}">
                                    
                                   </td>
                                   <td> <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <a id="delete-depart" data-id="{{ $all->id }}" class="btn btn-danger delete-user">Delete</a></</td>
                               </form>
				</tr>		
        <?php $i++; ?>
      
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
