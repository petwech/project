<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>schoolBEST | Designation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('my js\jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
    <link rel="icon" href="}}favicon.png" sizes="16x16" type="image/png" >
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alerts").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    </script>
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>s</b>BST</span>
            <!-- logo for regular state and mobile devihold-transition skin-blue sidebar-collapse sidebar-minices -->
            <span class="logo-lg"><b>school</b>BEST</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo '<img src="#" class="user-image" alt="User Image">' ?>
                            <span class="hidden-xs">Hi! ADMIN</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <?php echo '<img src="" class="user-image" alt="User Image">' ?>

                                <p>< </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="signout" class="btn btn-default btn-flat">
                                        <i class="fa fa-sign-out"></i> Sign out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
   @include('pages.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->

@yield('content')



    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2017 - <?php echo date('Y'); ?> <a href="https://www.josnytechsolution.com" target="_blank">www.josnytechsolution.com</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{ asset('my js\jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<!-- jvectormap  -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src=" {{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

 




</body>

<script>
$(document).ready(function(){

    
/* Edit designation */
 $('.box-body').on('click', '#des', function () {
            var dedid = $(this).data('id');
            $.get('edit_designation/'+dedid+'/edit', function (data) {
                  $('#closebt').attr('href',"{{ route('deduction.index') }}");
                  $('#form').attr('action',"{{ route('deduction.store') }}");
                $('#customerCrudModal').html("Edit Deduction");
                $('#btn-save').html("Update");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                //$('#data_id').val(data.id);
                //$('#f_row').val(data.deduction_type);
                //$('#s_row').val(data.description);
                //$('#address').val(data.address);
           })
        });



       /* Make PaySlip  */
 $('#makeslip').click(function () {
            
             var id = $(this).data('id');
            $.get('makeslip/'+id+'/edit', function (data) {
            
                // $('#closebt').attr('href',"{{ route('deduction.index') }}");
                 //$('#form').attr('action',"{{ route('deduction.store') }}");
                $('#customerCrudModal').html("Make Slip For");
                $('#btn-save').html("Save");
                $('#first').html("Employee Name:");
                 $('#f_row').attr('placeholder',"Full Name");
                 $('#second').html("Employee  No:");
                 $('#s_row').attr('placeholder',"Employee Number");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                $('#data_id').val(data.emp_id);
                $('#f_row').val(data.fname);
                //$('#s_row').val(data.description);
                $('#customerCrudModal').html(data.fname);
            });
    
        });


    /* add deduction */
 $('#adddeduction').click(function () {
            
            
                 $('#closebt').attr('href',"{{ route('deduction.index') }}");
                 $('#form').attr('action',"{{ route('deduction.store') }}");
                $('#customerCrudModal').html("Add Deduction");
                $('#btn-save').html("Save");
                $('#first').html("Deduction Name:");
                 $('#f_row').attr('placeholder',"Deduction");
                 $('#second').html("Description:");
                 $('#s_row').attr('placeholder',"Description");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                //$('#data_id').val(data.id);
                //$('#f_row').val(data.allowance_type);
                //$('#s_row').val(data.description);
                //$('#address').val(data.address);
    
        });



/* Edit deduction */
 $('.box-body').on('click', '#dedbtn', function () {
            var dedid = $(this).data('id');
            $.get('deduction/'+dedid+'/edit', function (data) {
                  $('#closebt').attr('href',"{{ route('deduction.index') }}");
                  $('#form').attr('action',"{{ route('deduction.store') }}");
                $('#customerCrudModal').html("Edit Deduction");
                $('#btn-save').html("Update");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                $('#data_id').val(data.id);
                $('#f_row').val(data.deduction_type);
                $('#s_row').val(data.description);
                //$('#address').val(data.address);
           })
        });


/* add allowance */
 $('#addAllowance').click(function () {
            
            
                 $('#closebt').attr('href',"{{ route('payroll.index') }}");
                 $('#form').attr('action',"{{ route('payroll.store') }}");
                $('#customerCrudModal').html("Add Allowance");
                $('#btn-save').html("Save");
                $('#first').html("Allowance Name:");
                 $('#f_row').attr('placeholder',"Allowance");
                 $('#second').html("Description:");
                 $('#s_row').attr('placeholder',"Description");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                //$('#data_id').val(data.id);
                //$('#f_row').val(data.allowance_type);
                //$('#s_row').val(data.description);
                //$('#address').val(data.address);
    
        });



/* Edit allowance */
 $('.box-body').on('click', '#allbtn', function () {
            var allid = $(this).data('id');
            $.get('payroll/'+allid+'/edit', function (data) {
                  $('#closebt').attr('href',"{{ route('payroll.index') }}");
                  $('#form').attr('action',"{{ route('payroll.store') }}");
                $('#customerCrudModal').html("Edit Allowance");
                $('#btn-save').html("Update");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
                $('#data_id').val(data.id);
                $('#f_row').val(data.allowance_type);
                $('#s_row').val(data.description);
                //$('#address').val(data.address);
           })
        });

/* Edit Department */
        $('.box-body').on('click', '#editbtn', function () {
            var depid = $(this).data('id');
            $.get('department/'+depid+'/edit', function (data) {
                $('#customerCrudModal').html("Edit Department");
                $('#btn-save').html("Update");
                $('#btn-save').prop('disabled',false);

                $('#depedit-modal').modal('show');
                $('#data_id').val(data.id);
                $('#f_row').val(data.department);
                $('#s_row').val(data.description);
                //$('#address').val(data.address);
           })
        });

           /* Delete customer */
        $('body').on('click', '#delete-depart', function () {
            var customer_id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "department/"+customer_id,
                data: {
                    "id": customer_id,
                    "_token": token,
                },
                success: function (data) {
                    $('#msg').html('Department entry deleted successfully');
                    $("#depid" + customer_id).remove();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });

    


</script>

</html>