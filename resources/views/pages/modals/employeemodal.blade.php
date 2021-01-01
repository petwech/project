                        

                  <div class="modal fade" id="depedit-modal" aria-hidden="true" >
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h4 class="modal-title" id="customerCrudModal"></h4>
                                          </div>
                                          <div class="modal-body">
                                              <form id="form" name="form" action="" method="POST">
                                                  <input type="" name="data_id" id="data_id" >
                                                  @csrf
                                                  <div class="row">
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
                        
                      