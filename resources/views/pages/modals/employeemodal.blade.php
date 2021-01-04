                        

                  <div class="modal fade" id="depedit-modal" aria-hidden="true" >
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h4 class="modal-title" id="customerCrudModal"  ></h4>

                                          </div>
                                          <div class="modal-body">
                                              <form id="form" name="form" action="" method="POST">
                                                  <input type="hidden" name="data_id" id="data_id" >
                                                  @csrf
                                                  <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12" id="select">
                                                      
                                                    </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                                          <div class="form-group">
                                                              <strong id="first"></strong>
                                                              <input type="text" name="f_row" id="f_row" required="true" class="form-control" placeholder="" onchange="validate()" >
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                                          <div class="form-group">
                                                              <strong id="second">Description:</strong>
                                                              <input type="text" name="s_row" id="s_row" required="true" class="form-control" placeholder="Description" onchange="validate() ">
                                                          </div>
                                                      </div>

                                                    
                                                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                          <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
                                                          <a  href="" id="closebt" class="btn btn-danger">Cancel</a>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
<!--     ##### CONFIRM DELETE MODAL --->

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
                        


<div id="create<?php //echo $empno; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
    <form action="" method="post">
            <div class="modal-body">
               <input type="test" name="empno" value="<?php // echo $empno; ?>" />
               
               <label>Financial Year</label><br />
                <select name="fyear" class="form-control select2" style="width:100%" required>
                <option value="<?php //echo $current_year; ?>"><?php //echo $current_year; ?></option>
                <?php 
        //$yeaa = $db->query("SELECT * FROM financial_year ") or die(mysqli_error($db));
        
               // while($rowya = mysqli_fetch_array($yeaa)){ ?>
          <option value="<?php //echo $rowya['fyear']; ?>"><?php// echo $rowya['fyear']; ?></option>
        <?php //} ?>
                </select><br />
               
               <label>Month</label><br />
               <select class="select2 form-control" name="month" data-size="10" style="width:100%" required>
        <option value="<?php //echo date('F'); ?>"><?php //echo date('F'); ?></option>
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
                
                 <button type="submit" class="btn btn-sm btn-success pull-right" name="Create">
                    Proceed <i class="fa fa-arrow-circle-o-right"></i>
                </button>                       
            </div>
    </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
                      