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
    <div class="container pb-5 fadeIn animated">
        <!-- CART SIDEBAR -->
        <?php include_once('inc/cart-sidebar.php'); ?>
        <?php include_once('inc/nav-sidebar.php'); ?>
        <!-- END CART SIDEBAR -->
        <div class="col-xl-12 text-center mt-5">
            <div class="regist-font1">LOG IN OR CREATE AN ACCOUNT</div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 regist-b-r regist-m-t5 order-2 order-lg-1 order-xl-1 px-3">
                <div id ="detail">
                     <div class="regist-font2">I'M NEW...</div>
                     <div class="regist-font3 regist-m-t4">Creating an account with us is simple & youeill then benefit from:</div>
                     <div class="regist-font3 mt-2">
                         <i class="fa fa-square square-size mr-1" aria-hidden="true"></i>
                         An expess checkout
                     </div>
                     <div class="regist-font3">
                         <i class="fa fa-square square-size mr-1" aria-hidden="true"></i>
                         Online order tracking
                     </div>
                     <div class="regist-font3">
                         <i class="fa fa-square square-size mr-1" aria-hidden="true"></i>
                         Saving item for later with our wishlist
                     </div>
                     <div class="regist-font3">
                         <i class="fa fa-square square-size mr-1" aria-hidden="true"></i>
                         Email about new brand, upcoming releases & more...
                     </div>
                     <div class="regist-m-t text-center">
                          <button type="button" class="btn regist-btn" onclick="myFunction()">CREATE AN ACCOUNT</button>
                     </div>
               </div>



            <!-- HIDE -->
            <div class="row fadeIn animated regist-m-r" id = "my-account">
               <div class="order-2 order-lg-1 order-xl-1">
                    <div class="regist-font2">I'M NEW...</div>
                    <div class="form-group row">
                        <div class="col-xl-6 regist-m-t4">
                            <label class="regist-font4 d-flex">
                                First Name
                                <span class="forgot-font3">*</span>
                            </label>
                            <div class="text-center">
                                <input type="text" name="" value="" class="regist-form" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-xl-6 regist-m-t3">
                            <label class="regist-font4 d-flex">
                                Email Address
                                <span class="forgot-font3">*</span>
                                <span class="forgot-font4 regist-m-l">*Required fields</span>
                            </label>
                            <div class="text-center">
                                <input type="text" name="" value="" class="regist-form" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                    <form class="form-group">
                          <label class="regist-font4 d-flex">
                             Email
                             <span class="forgot-font3">*</span>
                          </label>
                          <div class="text-center">
                             <input type="text" name="" value="" class="regist-form" placeholder="Email">
                          </div>
                    </form>
                    <div class="form-group row">
                         <div class="col-xl-6">
                              <label class="regist-font4 d-flex">
                                   Date of birth
                                   <span class="forgot-font3">*</span>
                              </label>
                               <div class="text-center">
                                  <input type="date" name="" value="" class="regist-form" placeholder="Date of birth">
                               </div>
                         </div>
                    </div>
                    <form class="form-group">
                        <label class="regist-font4 d-flex">
                            Create password
                            <span class="forgot-font3">*</span>
                            <span class="regist-font6">(Minimum 6 charactors)</span>
                        </label>
                        <div class="text-center">
                            <input type="password" name="" value="" class="regist-form" placeholder="Create password">
                        </div>
                    </form>
                    <form class="form-group">
                        <label class="regist-font4 d-flex">
                            Confirm Password
                            <span class="forgot-font3">*</span>
                        </label>
                        <div class="text-center">
                            <input type="password" name="" value="" class="regist-form" placeholder="Confirm Password">
                        </div>
                    </form>
                    <label class="check">
                           <div class="regist-m-l2 regist-font7 pt-2">I would like to receive news and special promotions by email from END.</div>
                           <input type="checkbox">
                           <span class="checkmark"></span>
                    </label>
                    <div class="regist-m-t text-center">
                       <button type="button" class="btn regist-btn">CREATE AN ACCOUNT</button>
                    </div>
               </div>
            </div>
         </div>
         <!-- END HIDE -->


          <div class="col-xl-6 col-lg-6 col-12 regist-p-l regist-m-t5 order-1 order-lg-1 order-xl-1">
               <div class="col-12">
                     <div class="regist-font2">I'VE REGISTERED...</div>
                     <form class="form-group regist-m-t4">
                          <label class="regist-font4 d-flex">
                              Email
                              <span class="forgot-font3">*</span>
                          </label>
                          <div class="text-center">
                              <input type="text" name="" value="" class="regist-form" placeholder="Email">
                          </div>
                     </form>
                     <form class="form-group regist-m-t6">
                          <label class="regist-font4 d-flex">
                              Password
                              <span class="forgot-font3">*</span>
                          </label>
                          <div class="text-center">
                              <input type="password" name="" value="" class="regist-form" placeholder="Password">
                          </div>
                     </form>
                     <div class="regist-m-t2 text-center">
                        <button type="button" class="btn regist-btn">LOG IN</button>
                     </div>
                     <div class="mt-3 text-center">
                        <a href="forgot.php" class="regist-font5"><u>Forgot Your Password?</u></a>
                     </div>
                     <hr class="mt-5 d-xl-none d-lg-none">
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


  <script type="text/javascript">
        function myFunction() {
      document.getElementById("my-account").style.display = "block";
      document.getElementById("detail").style.display = "none";
      }
  </script>
</html>