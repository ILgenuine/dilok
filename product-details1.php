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
            <div class="product-detail-box product-detail-boxes">

              <div class="product-detail1-left-side mb-md-4 mb-3">

                <div class="row">
                  <div class="col-12 mb-xl-4 mb-lg-4 mb-0">
                    <div id="product-carousel"  class="carousel slide product-carousel" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/22.jpg">
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
                            <img class="product-carousel-img" src="assets/images/product/1/33.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/44.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/55.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/66.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/55.jpg">
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="product-carousel-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-carousel-img" src="assets/images/product/1/44.jpg">
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
                            <img  class="product-ipad-img" src="assets/images/product/1/22.jpg">
                          </div>
                        </div>
                        <div class="item item2">
                          <div class="owl-video-play-icon"></div>
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="//img.youtube.com/vi/iGEUCPnw4Po/0.jpg">
                          </div>
                        </div>
                        <div class="item item3">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/33.jpg">
                          </div>
                        </div>
                        <div class="item item4">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/44.jpg">
                          </div>
                        </div>
                        <div class="item item5">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/55.jpg">
                          </div>
                        </div>
                        <div class="item item6">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/66.jpg">
                          </div>
                        </div>
                        <div class="item item7">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/55.jpg">
                          </div>
                        </div>
                        <div class="item item8">
                          <div class="product-ipad-frame">
                            <img class="product-ipad-img" src="assets/images/product/1/44.jpg">
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
                               <img width="100%" src="assets/images/product/1/11.jpg">
                               <img width="100%" src="assets/images/product/1/22.jpg">
                               <img width="100%" src="assets/images/product/1/33.jpg">
                               <img width="100%" src="assets/images/product/1/44.jpg">
                               <img width="100%" src="assets/images/product/1/55.jpg">
                               <img width="100%" src="assets/images/product/1/66.jpg">
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
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/22.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iGEUCPnw4Po?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/33.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/44.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/55.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/66.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/55.jpg">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block h-100 w-100" src="assets/images/product/1/44.jpg">
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
                      <div class="row mx-0">
                        <div class="col-12 pr-lg-0">
                          <div class="sticky-product-title w-100">
                              <h2>Nike Air Zoom Pegasus 35
                                <button type="button" class="btn top-btn heart-btn pull-right"><i name="like-button" class="fa-1x fa-heart liked fas liked-shaked"></i></button>
                                <button type="button" class="btn top-btn pull-right"><i class="fa-1x fa-share-alt fas"></i></button>
                              </h2>
                          </div>

                          <div class="sticky-product-excerpt mb-2">
                              <span>
                                ห้าวหาญ สะดุดตา ไม่ยอมใคร รองเท้า Prophere จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง
                              </span>
                          </div>

                          <div class="sticky-product-picker">
                            <span class="ml-2">
                               Color
                            </span>
                            <span class="grey">
                               (black)
                            </span>
                            <div class="row mx-0 mt-2 mb-3">
                              <div class="col-lg-1 col-md-1 col-2 px-1 mb-2 text-center">
                                <button type="button" class="btn color-btn color-active" style="background-color:blue"></button>
                              </div>
                              <div class="col-lg-1 col-md-1 col-2 px-1 mb-2 text-center">
                                <button type="button" class="btn color-btn" style="background-color:white"></button>
                              </div>
                              <div class="col-lg-1 col-md-1 col-2 px-1 mb-2 text-center">
                                <button type="button" class="btn color-btn" style="background-color:black"></button>
                              </div>
                              <div class="col-lg-1 col-md-1 col-2 px-1 mb-2 text-center">
                                <button type="button" class="btn color-btn" style="background-color:orange"></button>
                              </div>
                            </div>
                            <span class="ml-2">
                               Size
                            </span>
                            <div class="row mx-0 mt-2 mb-3 size-select-box">
                              <div class="col-xl-4 col-6 px-0 size-select active">
                                <span>US 7</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select disabled">
                                <span>US 7.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 8</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select disabled">
                                <span>US 8.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 9</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select disabled">
                                <span>US 9.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 10</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 10.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 11</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 11.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 12</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select disabled">
                                <span>US 12.5</span>
                              </div>
                              <div class="col-xl-4 col-6 px-0 size-select">
                                <span>US 13</span>
                              </div>
                            </div>
                          </div>


                          <div class="sticky-product-quantity p-3">
                            <div class="row mx-0">
                              <div class="col-5 px-0 pt-2">
                                <select class="quantity">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                                จำนวน
                              </div>
                              <div class="col-7 px-0">
                                <div class="sale-percent px-2">
                                  <span>ลด 50%</span>
                                </div>
                                <div class="pt-2 latest-product-price">
                                  <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                  <!-- ไม่ลดราคา -->
                                  <!-- <span class="original">925</span><span class="currency">THB</span> -->
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row my-3 mx-0">
                            <div class="col-xl-4 col-lg-6"></div>
                            <div class="col-xl-4 col-lg-3 col-md-6 col-12 px-xl-1 px-lg-1 px-md-2 px-1 latest-product-btn mb-2">
                              <button type="button" class="btn add-to-cart p-2">
                                <label class="mb-0 d-flex px-2">
                                  <span>ADD TO CART</span>
                                  <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                </label>
                              </button>
                            </div>
                            <div class="col-xl-4 col-lg-3 col-md-6 col-12 px-xl-1 px-lg-1 px-md-2 px-1 latest-product-btn">
                              <button type="button" class="btn fast-buy p-2">
                                <label class="mb-0 d-flex px-2">
                                  <span>BUY NOW</span>
                                  <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                </label>
                              </button>
                            </div>
                          </div>

                        </div>
                      </div>
                </div>
              </div>

            </div>
          </section>

          <section class="mb-5">
            <div class="row mx-0 px-lg-0 px-md-5 px-1">
                <div class="col-12">
                    <h3 class="mb-2">PRODUCT DETAIL</h3>
                </div>
                <div class="launches_detail-bg">
                  <p>มีหลักฐานที่เป็นข้อเท็จจริงยืนยันมานานแล้ว ว่าเนื้อหาที่อ่านรู้เรื่องนั้นจะไปกวนสมาธิของคนอ่านให้เขวไปจากส่วนที้เป็น Layout เรานำ Lorem Ipsum มาใช้เพราะความที่มันมีการกระจายของตัวอักษรธรรมดาๆ แบบพอประมาณ ซึ่งเอามาใช้แทนการเขียนว่า ‘ตรงนี้เป็นเนื้อหา, ตรงนี้เป็นเนื้อหา' ได้ และยังทำให้มองดูเหมือนกับภาษาอังกฤษที่อ่านได้ปกติ ปัจจุบันมีแพ็กเกจของซอฟท์แวร์การทำสื่อสิ่งพิมพ์</p>
                  <div class="launches_detail-lineheight mt-lg-4">
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัว</p>
                    <p><i class="far fa-check-circle mr-3"></i>มีหลักฐานที่เป็นข้อเท็จจริงยืนยันมานานแล้ว</p>
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัว</p>
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัว</p>
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัว</p>
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัว</p>
                    <p><i class="far fa-check-circle mr-3"></i>ตรงกันข้ามกับความเชื่</p>
                  </div>
                </div>
            </div>
          </section>




          <!-- SITE CONTENT -->
          <!-- <div class="row">
            <div class="col-lg-6 mt-lg-4">

            </div>
            <div class="col-lg-6 mt-lg-4">
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
                    <span>จองทันที</span>
                      <i class="icon-collpase fas fa-angle-right ml-4 pt-1" aria-hidden="true"></i>
                    </label>
                </button>
              </div>
            </div>
          </div> -->


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
