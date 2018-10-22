<!doctype html>
<html lang="en">
  <head>
  	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
	<!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->



    <!-- START CONTENT -->
      <div class="wrapper">

        <!-- CART SIDEBAR -->
        <?php include_once('inc/cart-sidebar.php'); ?>
        <?php include_once('inc/nav-sidebar.php'); ?>
        <!-- END CART SIDEBAR -->


        <!-- SITE CONTENT -->

        <div class="container">
          <div class="row mt-5 mx-0">
            <div class="col-12">
              <div class="text-center">
                <h3>
                  <span>WELCOME,</span> <span>KUNLATIDA</span>
                </h3>
              </div>
              <div class="text-center">
                <div class="account-font"><span>ORDER HISTORY</span></div>
                <div class="account-text-xsmall"><span>You have no recent orsers.</span></div>
              </div>
            </div>
          </div>


          <div class="row mx-0">
            <div class="col-md-6 col-12">
              <div style="position: relative;">
                <div class="account-font text-center">
                  <span>PERSONAL INFO</span>
                </div>
                <a href="#" class="account-edit" data-toggle="modal" data-target="#edit_new_address">Edit</a>


                <div class="col-12 px-0 my-3">
                  <div class="card account-card">
                    <div class="card-body account-line-height text-md-left text-center">
                        <div><span>Kunlatida Lawilai</span></div>
                        <div><span>kunlatidalawilai@gmail.com</span></div>
                        <div><span>Password:</span> <span>*********</span></div>
                        <div><span>Date of Birth:</span> <span>14/11/1994</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="account-font text-center">
                  <span>SAVED PAYMENT METHODS</span>
                  <div class="account-text-xsmall"><span>You have no saved payment methods.</span></div>
                </div>
            </div>
          </div>


          <div class="row mb-5 mx-0">
            <div class="col-12">
              <div class="text-center">
                <div class="account-font"><span>ADDRESSES</span></div>
                <div class="account-text-xsmall"><span>You have no saved addresses</span></div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt-md-4 mt-3 mx-auto">
              <div class="text-center">
                <button type="button" class="btn account-btn-save-ad w-100" data-toggle="modal" data-target="#add_new_address">ADD NEW ADDRESS</button>
                <!-- <button type="button" class="btn account-btn" data-toggle="modal" data-target="#add_new_address">ADD NEW ADDRESS</button> -->
              </div>
            </div>
          </div>


          <!-- #Modal ADD NEW ADDRESS -->
            <div class="modal fade px-0" id="add_new_address" tabindex="-1" role="dialog" aria-labelledby="add_new_address" aria-hidden="true">
              <div class="modal-dialog account-modal-dialog " role="document">
                <div class="modal-content rounded-0 px-md-5 py-md-4">
                  <div class="modal-header border-0 mx-md-0 mx-auto">
                    <h5 class="modal-title" id="add_new_address">ADD NEW ADDRESS</h5>
                    <button type="button" class="close account-close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">x</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="text"><span>First Name</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="text"> <span>Last Name</span> <span class="text-danger">*</span> <span class="account-requited text-danger">Required fields</span></label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <label for="text"><span>Phone Number</span> <span class="text-danger">*</span> <span class="account-text-xsmall">(We'll only content you regarding your order)</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                         <div class="form-group">
                            <label for="text"><span>Address line 1</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-12">
                         <div class="form-group">
                            <label for="text"><span>Address line 2</span> <span class="account-text-xsmall">(Optional)</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="text"><span>Town or City</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="text"><span>State / Province / County</span> <span class="account-text-xsmall">(Optional)</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="text"><span>Postcode</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="text"><span>Country</span></label>
                            <select class="form-control rounded-0" id="sel1">
                              <option>United Kingdom</option>
                              <option>Thailand</option>
                              <option>japan</option>
                              <option>Indie</option>
                            </select>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer account-modal-footer border-0">
                    <div class="col-md-4">
                      <div>
                        <button type="button" class="btn account-btn-save-ad w-100">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          <!-- #Modal EDIT NEW ADDRESS -->
            <div class="modal fade px-0" id="edit_new_address" tabindex="-1" role="dialog" aria-labelledby="edit_new_address" aria-hidden="true">
              <div class="modal-dialog account-modal-dialog " role="document">
                <div class="modal-content rounded-0 px-md-5 py-md-4">
                  <div class="modal-header border-0 mx-md-0 mx-auto">
                    <h5 class="modal-title text-center" id="edit_new_address">EDIT PERSONAL INFO</h5>
                    <button type="button" class="close account-close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">x</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="text"><span>First Name</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="Kunlatida">
                          </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="text"> <span>Last Name</span> <span class="text-danger">*</span> <span class="account-requited text-danger">Required fields</span></label>
                            <input type="text" class="form-control" value="Lawilai">
                          </div>
                      </div> 
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="text"><span>Email address</span> <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="Kunlatidalawilai@gmail.com">
                        </div>
                      </div>
                      <div class="col-md-6">
                          <label for="text"><span>Date of birth</span></label>
                          <div class="input-group date" data-provide="datepicker">
                              <input type="text" id="datepicker" class="form-control" placeholder="dd/mm/yyyy">
                              <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                              </div>
                          </div>  
                      </div>
                    </div>

                    <div class="row mt-md-5 mt-3">
                      <div class="col-12 mb-3 text-md-left text-center">
                       <h5 class="modal-title" id="edit_new_address">CHANGE PASSWORD</h5>
                      </div>

                     <div class="col-12">
                      <div class="form-group">
                        <label for="text"><span>Current Password</span> <span class="text-danger">*</span></label>
                        <input type="password" class="form-control">
                      </div>
                     </div>
                     <div class="col-12">
                      <div class="form-group">
                        <label for="text"><span>New Password</span> <span class="text-danger">*</span></label>
                        <input type="password" class="form-control">
                      </div>
                     </div>
                     <div class="col-12">
                      <div class="form-group">
                        <label for="text"><span>Confirm Password</span> <span class="text-danger">*</span></label>
                        <input type="password" class="form-control">
                      </div>
                     </div>
                    </div>                     
                  </div>
                  <div class="modal-footer account-modal-footer border-0">
                    <div class="col-md-4">
                      <div>
                        <button type="button" class="btn account-btn-save-ad w-100">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>

        <!-- END SITE CONTENT -->


      </div>
    <!-- END CONTENT -->

    <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );

    </script>





    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT --> 

  </body>
</html>