
<div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    Select Month And Year to create payslip
                </div>
            </div>
    <form action="{{ route('payslip.index') }}" method="post">
            <div  class="modal-body">
               <input  type="hidden" id="empno" name="empno" value="<?php //echo $empno; ?>" />

               <label>Financial Year</label><br />
                <select id="year-list" name="fyear" class="form-control select2" style="width:100%" required>
                <option value="<?php //echo $current_year; ?>"><?php //echo $current_year; ?></option>
                <?php
			//	$yeaa = $db->query("SELECT * FROM financial_year ") or die(mysqli_error($db));

              //  while($rowya = mysqli_fetch_array($yeaa)){ ?>
					<option value="<?php //echo $rowya['fyear']; ?>"><?php //echo $rowya['fyear']; ?></option>
				<?php// } ?>
                </select><br />

               <label>Month</label><br />
               <select class="select2 form-control" name="month" data-size="10" style="width:100%" required>
				<option value="<?php echo date('F'); ?>"><?php echo date('F'); ?></option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
				</select>
               <br />

            </div>

            <div class="modal-footer no-margin-top">
                <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    No
                </button>

                 <button type="submit" class="btn btn-sm btn-success pull-right" id="savepay" name="Create">
                    Proceed <i class="fa fa-arrow-circle-o-right"></i>
                </button>
            </div>
              @csrf
    </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
