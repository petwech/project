@extends('pages.layouts.tsf')

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Material Delivered
      <small> material</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="../../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Material Delivered</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
    <?php //echo $msg; ?>
         <form action="" method="post">
         <div class="box">
          <div class="box-header with-border">
      <div class="box-title">Select Date</div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

      <div class="col-md-3" style="margin-top:20px">
          <label> Date </label><br />
          <input type="date" name="edate" class="form-control" value="<?php //echo date('Y-m-d'); ?>"  />
          </div>




              <div class="col-md-2" style="margin-top: 20px;">
              <button type="submit" class="btn btn-primary" name="process"><i class="fa fa-refresh"></i> Process</button>
              </div>
              </div> <!-- /.box-body -->
           </div> <!-- /.box -->
           </form>
        </div>
<?php
//if(isset($_POST['process'])){
 //$edate = $_POST['edate'];

 //$query = $db->query("SELECT * FROM material_delivery WHERE received_on='edate'");
 //$row = mysqli_fetch_array($query);


?>



     <div class="col-md-12">
  <div class="box">

          <!-- /.box-header -->

          <!-- ./box-body -->
          <table id="example1" class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Colour</th>

              <th>Cm</th>
             <th>Kgs</th>
              <th>Rolls</th>
              <th colspan="" rowspan="" headers="" scope="">Date:</th>
              <th>Edit  </th>
            </tr>
          </thead>
            <tbody>
  <?php
    //$i = 1;

    //$today=('y-m-d');
     //$uus = $db->query("SELECT * FROM material_delivery WHERE received_on='$edate' ORDER BY matID DESC") or die(mysqli_error($db));
    //while($row=mysqli_fetch_array($uus)){
    //  $prodID = $row['matID'];

  ?>
      <tr class="<?php //echo $prodID; ?>">
        <td style="vertical-align: middle;"><?php //echo $i; ?></td>
        <td style="vertical-align: middle;"><?php //echo ucwords(strtolower($row['colour'])); ?></td>

        <td style="vertical-align: middle;"><?php //echo $row['cm']; ?></td>
         <td style="vertical-align: middle;"><?php //echo $row['kgs']; ?></td>
        <td style="vertical-align: middle;"><?php //echo $row['rolls']; ?></td>
         <td style="vertical-align: middle;"><?php //echo $row['received_on']; ?></td>

        <td style="vertical-align: middle;"><a href="edit_student<?php //echo '?prodID='.$prodID; ?>"><i class="fa fa-edit fa-0.5x text-success"></i></a>
        </td>
      </tr>

  <?php// $i++; } ?>

          </tbody>
        </table>










        </div>
        <!-- /.box -->
        </form>
      </div>
      <!-- /.col -->
<?php.// } ?>
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>


    @endsection
