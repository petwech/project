<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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


/* Edit Employement type*/
 $('.box-body').on('click', '#emp_type', function () {
            var desid = $(this).data('id');
            $.get(+desid+'/edit/', function (data) {
                  $('#closebt').attr('href',"{{ route('emp_type.index') }}");
                  $('#form').attr('action',"{{ route('designation.store') }}");
                $('#customerCrudModal').html("Edit Deduction");
                $('#btn-save').html("Update");
                $('#btn-save').prop('disabled',false);
                $('#depedit-modal').modal('show');
               $('#data_id').val(data.id);
                $('#f_row').val(data.emp_type);
                $('#s_row').val(data.description);
                //$('#address').val(data.address);
           })
        });


             /* #### DELETE DESIGNATION ####*/
                var des_id;

        $('.box-body').on('click', '#deletedesi', function(){
         des_id = $(this).data('id');
         $('#deldesignation').modal('show');
        });

        $('#ok_button1').click(function(){

          var token = $("meta[name='csrf-token']").attr("content");

         $.ajax({
            type:'delete',
          url:"designation/"+des_id,
          data:{
            "id":des_id,
              "_token": token,
          },
          beforeSend:function(){
           $('#ok_button1').text('Deleting...');
          },
          success:function(data)
          {

            $("#desid" + des_id).remove();
              $('#deldesignation').modal('hide');
           setTimeout(function(){

            $('#user_table').DataTable().ajax.reload();
              $('#msg').html('Department entry deleted successfully');
           }, 2000);
          }
         })
        });



       /* Make PaySlip  */
<<<<<<< HEAD

 $('#createpay').click(function () {
var id = $(this).data('id');
            $.get('makeslip/'+id+'/edit', function (data) {

//$('#makeslip').click(function () {

           //var id = $(this).data('id');
           //$.get('makeslip/'+id+'/edit', function (data) {

=======
<<<<<<< HEAD
 $('#createpay').click(function () {
// var id = $(this).data('id');
            //$.get('makeslip/'+id+'/edit', function (data) {
=======
 $('#makeslip').click(function () {

             var id = $(this).data('id');
            $.get('makeslip/'+id+'/edit', function (data) {
>>>>>>> main
>>>>>>> main

                // $('#closebt').attr('href',"{{ route('deduction.index') }}");
                 //$('#form').attr('action',"{{ route('deduction.store') }}");
                //$('#customerCrudModal').html("Make Slip For");
              //  $('#btn-save').html("Save");
              //  $('#first').html("Employee Name:");
                 //$('#f_row').attr('placeholder',"Full Name");
                 //$('#second').html("Employee  No:");
                 //$('#s_row').attr('placeholder',"Employee Number");
                //$('#btn-save').prop('disabled',false);
                $('#create').modal('show');
                $('#empno').val(data.emp_id);
                //$('#f_row').val(data.fname);
                //$('#s_row').val(data.description);
<<<<<<< HEAD

                //$('#customerCrudModal').html(data.fname);
          // });

              //  $('#customerCrudModal').html(data.fname);
         });

=======
<<<<<<< HEAD
                //$('#customerCrudModal').html(data.fname);
            //});
=======
                $('#customerCrudModal').html(data.fname);
            });
>>>>>>> main
>>>>>>> main

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


     /* #### DELETE DEPARTMENT ####*/
        var user_id;

$(document).on('click', '#delete-depart1', function(){
 user_id = $(this).data('id');
 $('#deletedepartment').modal('show');
});

$('#ok_button').click(function(){

  var token = $("meta[name='csrf-token']").attr("content");

 $.ajax({
    type:'delete',
  url:"department/"+user_id,
  data:{
    "id":user_id,
      "_token": token,
  },
  beforeSend:function(){
   $('#ok_button').text('Deleting...');
  },
  success:function(data)
  {

    $("#depid" + user_id).remove();
      $('#deletedepartment').modal('hide');
   setTimeout(function(){

    $('#user_table').DataTable().ajax.reload();
      $('#msg').html('Department entry deleted successfully');
   }, 2000);
  }
 })
});
    });




</script>

<script>
(function () {
    var year_start = 2019;
    var year_end = (new Date).getFullYear(); //current year
    var selected_year = 0; //1992, 0 first option

    var option = '<select id="year" name="year">';
        option += '<option value="">year</option>';  //first option

    for (var i = 0; i <= (year_end - year_start); i++) {
        var year = (year_start+i);
        option += '<option value="' + year + '"'+(year == selected_year ? ' selected' : '')+'>' + year + '</option>';
    }

    option += '</select>';
    document.getElementById('year-list').innerHTML = option;
})();
</script>


</html>
