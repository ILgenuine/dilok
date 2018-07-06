<!doctype html>
<html lang="en">
<head>
  <!-- START HEADER -->
  <?php include_once('inc/header.php'); ?>
  <!-- END HEADER -->
  <!-- START NAVBAR -->
  <?php include_once('inc/navbar.php'); ?>
  <!-- END NAVBAR -->
</head>
  <body>
    <div class="wrapper">
   
      <!-- CART SIDEBAR -->
      <?php include_once('inc/cart-sidebar.php'); ?>
      <?php include_once('inc/nav-sidebar.php'); ?>
      <!-- END CART SIDEBAR -->
       <div class="container pb-5 fadeIn animated">
        <div class="col-12 text-center mt-5">
            <div class="forgot-font1">FORGOT YOUR PASSWORD?</div>
        </div>
        <div class="col-12 text-center mt-4">
            <div class="regist-font3">Enter your email below and we'll send you a link to reset your password.</div>
        </div>
        <div class="row forgot-m-t">
            <div class="col-12">
              <form>
                 <div class="form-group">
                      <label class="forgot-font2 forgot-m-l d-flex">
                          Email Address
                          <span class="forgot-font3">*</span>
                          <span class="forgot-font4 forgot-m-l2">*Required fields</span>
                      </label>
                      <div class="text-center">
                         <input type="text" name="" value="" class="forgot-form" placeholder="Email">
                      </div>
                 </div>
              </form>
            </div>
        </div>
        <div class="row forgot-m-t2">
            <div class="col-12 text-center">
               <button type="button" class="btn forgot-btn">SUBMIT</button>
            </div>
        </div>
    </div>
  </div>
    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->
  </body>
</html>
