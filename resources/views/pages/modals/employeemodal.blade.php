

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










<div class="modal fade" id="deletedepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete Record?
      </div>
      <div class="modal-footer">
        <form action="" method="post"    >

                  @csrf
          <button type="button" id="ok_button" class="btn btn-danger">Delete</button>
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>

      </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="deldesignation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Designation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete Record?
      </div>
      <div class="modal-footer">
        <form action="" method="post"    >

                  @csrf
          <button type="button" id="ok_button1" class="btn btn-danger">Delete</button>
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>

      </form>
      </div>
    </div>
  </div>
</div>
