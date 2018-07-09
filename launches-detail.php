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
        <div class="container-fluid custom-container">

          <section class="product-detail mt-lg-5 mt-3 mb-lg-5 mb-md-5 mb-4">
            <div class="product-detail-box">

              <div class="product-detail1-left-side mb-md-4 mb-3">

                <div class="row">
                  <div class="col-12 mb-xl-4 mb-lg-4 mb-0">
                    <div id="product-carousel"  class="carousel slide product-carousel" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/2.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <!-- รุป youtube เปลี่ยนแค่ช่องก่อน0.jpg เป็นlink video -->
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iGEUCPnw4Po?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/3.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/4.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/5.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/6.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/5.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/4.jpg">
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev custom-control-prev" href="#product-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon custom-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next custom-control-next" href="#product-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon custom-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      </div>
                  </div>
                  <div class="col-12 d-lg-block d-none">
                    <div class="productdetail1-carousel owl-carousel owl-theme px-5">
                        <!-- บังคับไล่ชื่อitem+เลขด้วย -->
                        <div class="item item1">
                          <div class="product-ipad-frame">
                            <img  class="product-ipad-img" src="assets/images/product/1/2.jpg">
                          </div>
                        </div>
                        <div class="item item2">
                          <div class="owl-video-play-icon"></div>
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="//img.youtube.com/vi/JhDIILjlhBQ/0.jpg">
                          </div>
                        </div>
                        <div class="item item3">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/3.jpg">
                          </div>
                        </div>
                        <div class="item item4">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/4.jpg">
                          </div>
                        </div>
                        <div class="item item5">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/5.jpg">
                          </div>
                        </div>
                        <div class="item item6">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/6.jpg">
                          </div>
                        </div>
                        <div class="item item7">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/5.jpg">
                          </div>
                        </div>
                        <div class="item item8">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/4.jpg">
                          </div>
                        </div>
                    </div>

                    <div class="owl-nav tog row replace-nav mb-5">
                      <div class="col-1 mr-auto">
                        <div class="owl-prev latest-prev3 arrow-fadein">
                          <i class="fas fa-angle-left fa-3x"></i>
                        </div>
                      </div>
                      <div class="col-1 ml-auto">
                        <div class="owl-next latest-next3 arrow-fadein pull-right">
                          <i class="fas fa-angle-right fa-3x"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Modal -->
                <div class="modal fade full-screen-product" id="full-screen-product-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body product-detail-modal-body">
                          <div class="row px-0 mx-0 w-100">
                            <div class="col-12">
                               <button type="button" class="close custom-close2 my-auto pull-right" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                             <div class="col-12 px-0 h-100 d-xl-none d-block ">
                               <img width="100%" src="assets/images/product/1/1.jpg">
                               <img width="100%" src="assets/images/product/1/2.jpg">
                               <img width="100%" src="assets/images/product/1/3.jpg">
                               <img width="100%" src="assets/images/product/1/4.jpg">
                               <img width="100%" src="assets/images/product/1/5.jpg">
                               <img width="100%" src="assets/images/product/1/6.jpg">
                             </div>

                             <div class="col-12 px-0 h-100 d-xl-block d-none">
                               <!-- carouselExampleIndicators มี css -->
                               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                 <ol class="carousel-indicators">
                                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                 </ol>
                                 <div class="carousel-inner w-50 mx-auto">
                                      <div class="carousel-item h-100 active">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/2.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iGEUCPnw4Po?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/3.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/4.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/5.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/6.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/5.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/4.jpg">
                                      </div>
                                 </div>
                                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon custom-carousel-prev" aria-hidden="true"></span>
                                   <span class="sr-only">Previous</span>
                                 </a>
                                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                   <span class="carousel-control-next-icon custom-carousel-next" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>
                                 </a>
                               </div>
                             </div>
                           </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>

              <div class="product-detail1-right-side pl-xl-5 pl-0">
                <div class="sticky-box">
                  <span class="launches_detail-text launches_detail-color-icon"><i class="far fa-calendar"></i></span>
                  <span class="launches_detail-color-font launches_detail-text">31</span>
                  <span class="launches_detail-text">มกราคม 2561</span>
                  <div class="launches_detail-lineheight mt-lg-3">
                    <h5>AIR VAPORMAX X OFF-WHITE THE TEN'BLACK/CLEAR'</h5>
                    <p>เปิดตัว:วันศุกร์ 30 มีนาคม 2018-8.00 ICT พร้อมจำหน่ายแล้วที่ Dilok</p>
                  </div>
                  <div>
                    <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen</p>
                  </div>
                  <div >
                    <hr class="launches_detail-hr">
                  </div>
                  <div class="col-lg-12 text-right px-0">
                    <button type="button" class="btn fast-buy p-2">
                      <label class="mb-0  px-2">
                        <span>BUY NOW</span>
                          <i class="icon-collpase fas fa-angle-right ml-4 pt-1" aria-hidden="true"></i>
                        </label>
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </section>


          <section class="latest-product mb-lg-5 mb-md-5 mb-4">
            <?php include_once('inc/latest-product.php'); ?>
          </section>


        </div>
        <!-- END SITE CONTENT -->


      </div>
    <!-- END CONTENT -->




    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>


<script>


    var fixmeTop = $('.product-detail1-left-side').offset().top;       // get initial position of the element

    $(window).scroll(function() {                  // assign scroll event listener

        var currentScroll = $(window).scrollTop(); // get current position

        if (currentScroll >= fixmeTop) {           // apply position: fixed if you
            $('.sticky-box').css({                      // scroll to that element or below it
                position: 'sticky',
                top: '0',
                left: '0'
            });
        } else {                                   // apply position: static
            $('.sticky-box').css({                      // if you scroll above it
                position: 'static'
            });
        }

    });

    $('.product-carousel').carousel({
      pause: true,
      interval: false,
      wrap: false,
    });

    $('.carousel-control-prev').click(function(){
      $('.productdetail1-carousel').trigger('prev.owl.carousel');
    });

    $('.carousel-control-next').click(function(){
      $('.productdetail1-carousel').trigger('next.owl.carousel');
    });

    $('.latest-next3').click(function(){
      $('.carousel-control-next').click();
    });

    $('.latest-prev3').click(function(){
      $('.carousel-control-prev').click();
    });

    $(".item1").click(function(){
      $(".product-carousel").carousel(0);
    });

    $(".item2").click(function(){
      $(".product-carousel").carousel(1);
    });

    $(".item3").click(function(){
      $(".product-carousel").carousel(2);
    });

    $(".item4").click(function(){
      $(".product-carousel").carousel(3);
    });

    $(".item5").click(function(){
      $(".product-carousel").carousel(4);
    });

    $(".item6").click(function(){
      $(".product-carousel").carousel(5);
    });

    $(".item7").click(function(){
      $(".product-carousel").carousel(6);
    });

    $(".item8").click(function(){
      $(".product-carousel").carousel(7);
    });



</script>