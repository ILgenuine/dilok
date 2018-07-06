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
<!-- CART SIDEBAR -->
<?php include_once('inc/cart-sidebar.php'); ?>
<?php include_once('inc/nav-sidebar.php'); ?>
<!-- END CART SIDEBAR -->

  <body>
    <div class="container pb-5 fadeIn animated">
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
                    <form>
                        <div class="form-row mb-3">
                            <div class="col-xl-6 regist-m-t4">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername1">
                                    First Name
                                    <span class="forgot-font3 ml-1">*</span>
                                </label>
                                <div class="input-group text-center">
                                  <div class="input-group-prepend"></div>
                                  <input type="text" class="regist-form" id="validationDefaultUsername1" placeholder="First Name" aria-describedby="inputGroupPrepend1" required>
                                </div>
                            </div>
                            <div class="col-xl-6 regist-m-t3">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername1">
                                    Last Name
                                    <span class="forgot-font3 ml-1">*</span>
                                    <span class="forgot-font4 regist-m-l">*Required fields</span>
                                </label>
                                <div class="input-group text-center">
                                  <div class="input-group-prepend"></div>
                                  <input type="text" class="regist-form" id="validationDefaultUsername1" placeholder="Last Name" aria-describedby="inputGroupPrepend1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-12 mb-3">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername2">
                                    Email
                                    <span class="forgot-font3 ml-1">*</span>
                                </label>
                                <div class="input-group text-center">
                                  <div class="input-group-prepend"></div>
                                  <input type="text" class="regist-form" id="validationDefaultUsername2" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername2">
                                    Date of birth
                                    <span class="forgot-font3">*</span>
                                </label>
                                <div class="input-group text-center">
                                    <div class="input-group-prepend"></div>
                                    <input type="date" class="regist-form" id="validationDefaultUsername2" placeholder="Password" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-12 mb-3">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername2">
                                    Create password
                                    <span class="forgot-font3 ml-1">*</span>
                                    <span class="regist-font6 ml-2">(Minimum 6 charactors)</span>
                                </label>
                                <div class="input-group text-center">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="regist-form" id="validationDefaultUsername2" placeholder="Create Password" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-12 mb-3">
                                <label class="regist-font4 d-flex" for="validationDefaultUsername2">
                                    Confirm Password
                                    <span class="forgot-font3 ml-1">*</span>
                                </label>
                                <div class="input-group text-center">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="regist-form" id="validationDefaultUsername2" placeholder="Confirm Password" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-12 mb-3">
                                <label class="check">
                                       <div class="regist-m-l2 regist-font7 pt-2">I would like to receive news and special promotions by email from END.</div>
                                       <input type="checkbox">
                                       <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="regist-m-t2 text-center">
                               <button class="btn regist-btn" type="submit">LOG IN</button>
                        </div>
                    </form>

               </div>
            </div>
         </div>
         <!-- END HIDE -->


          <div class="col-xl-6 col-lg-6 col-12 regist-p-l regist-m-t7 order-1 order-lg-1 order-xl-1">
               <div class="col-12">
                   <div class="regist-font2">I'VE REGISTERED...</div>
                   <form>
                       <div class="form-row regist-m-t4">
                           <div class="col-xl-12 mb-3">
                               <label class="regist-font4 d-flex" for="validationDefaultUsername1">
                                   Email
                                   <span class="forgot-font3 ml-1">*</span>
                               </label>
                               <div class="input-group">
                                 <div class="input-group-prepend">
                                 </div>
                                 <input type="text" class="regist-form" id="validationDefaultUsername1" placeholder="Email" aria-describedby="inputGroupPrepend1" required>
                               </div>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="col-xl-12 mb-3">
                               <label class="regist-font4 d-flex" for="validationDefaultUsername2">
                                   Password
                                   <span class="forgot-font3 ml-1">*</span>
                               </label>
                               <div class="input-group">
                                 <div class="input-group-prepend">
                                 </div>
                                 <input type="text" class="regist-form" id="validationDefaultUsername2" placeholder="Password" aria-describedby="inputGroupPrepend2" required>
                               </div>
                           </div>
                       </div>
                       <div class="regist-m-t2 text-center">
                           <button class="btn regist-btn" type="submit">LOG IN</button>
                       </div>
                       <div class="mt-3 text-center">
                           <a href="forgot.php" class="regist-font5"><u>Forgot Your Password?</u></a>
                       </div>
                   </form>
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
