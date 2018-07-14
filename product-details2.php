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
              <!-- DESKTOP AND IPOAD PRO PRODUCT PIC AND VIDEO -->
              <div class="product-detail-left-side">
                <div class="row mx-0">

                  <!-- บังคับใช้ zoom + เลข ทั้ง id และ class   มี script ข้างล่าง -->
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                      <div class="product-desktop-frame zoom1 cur" id="zoom1" data-toggle="modal" data-target="#full-screen-product-1">
                        <img class="product-desktop-img" src="assets/images/product/1/22.jpg">
                      </div>
                  </div>

                  <!-- ตาม layout Video อยู่อันที่2  ติ๊กเอาทุกอย่าง(controllerของvideo ชื่อ video etc.)ออกเวลา copy iframeมาใส่-->
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                    <div class="product-desktop-frame">
                      <iframe width="100%" height="100%"src="https://www.youtube.com/embed/iGEUCPnw4Po?rel=0&amp;controls=0&amp;mute=1&amp;autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                    <div class="product-desktop-frame zoom3 cur" id="zoom3" data-toggle="modal" data-target="#full-screen-product-1">
                      <img class="product-desktop-img" src="assets/images/product/1/44.jpg">
                    </div>
                  </div>
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                    <div class="product-desktop-frame zoom4 cur" id="zoom4" data-toggle="modal" data-target="#full-screen-product-1">
                      <img class="product-desktop-img" src="assets/images/product/1/55.jpg">
                    </div>
                  </div>
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                    <div class="product-desktop-frame zoom5 cur" id="zoom5" data-toggle="modal" data-target="#full-screen-product-1">
                      <img class="product-desktop-img" src="assets/images/product/1/11.jpg">
                    </div>
                  </div>
                  <div class="product-desktop-col col-xl-6 col-lg-12 px-1 mb-2">
                    <div class="product-desktop-frame zoom6 cur" id="zoom6" data-toggle="modal" data-target="#full-screen-product-1">
                      <img class="product-desktop-img" src="assets/images/product/1/33.jpg">
                    </div>
                  </div>
                </div>
              </div>

              <!-- PRODUCT GALLERTY MODAL -->
              <div class="modal fade full-screen-product" id="full-screen-product-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <img width="100%" src="assets/images/product/1/11.jpg">
                      <img width="100%" src="assets/images/product/1/22.jpg">
                      <img width="100%" src="assets/images/product/1/33.jpg">
                      <img width="100%" src="assets/images/product/1/44.jpg">
                      <img width="100%" src="assets/images/product/1/55.jpg">
                      <img width="100%" src="assets/images/product/1/66.jpg">

                    </div>
                  </div>
                </div>
              </div>

              <!-- Ipad and below -->
              <div class="product-detail-left-side-small d-lg-none d-md-block">
                <div class="row mx-0">
                  <div class="col-6"><span>รองเท้าวิ่งชาย</span></div><div class="col-6 text-right"><span>925 THB</span></div>
                  <div class="col-12 mb-3"><h3>Nike Air Zoom Peegasus 35</h3></div>

                  <div class="col-12 px-0">
                    <div class="productdetail2-carousel owl-carousel owl-theme">
                        <div class="item">
                          <div class="product-ipad-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-ipad-img" src="assets/images/product/1/22.jpg">
                          </div>
                        </div>
                        <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=yjNXVkWhXkc"></a></div>
                        <div class="item">
                          <div class="product-ipad-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-ipad-img" src="assets/images/product/1/33.jpg">
                          </div>
                        </div>
                        <div class="item">
                          <div class="product-ipad-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-ipad-img" src="assets/images/product/1/44.jpg">
                          </div>
                        </div>
                        <div class="item">
                          <div class="product-ipad-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-ipad-img" src="assets/images/product/1/55jpg">
                          </div>
                        </div>
                        <div class="item">
                          <div class="product-ipad-frame" data-toggle="modal" data-target="#full-screen-product-1">
                            <img class="product-ipad-img" src="assets/images/product/1/66.jpg">
                          </div>
                        </div>
                    </div>
                  </div>

                </div>
              </div>





              <!-- END DESKTOP AND IPOAD PRO PRODUCT PIC AND VIDEO -->
              <div class="product-detail-right-side px-xl-3 pl-lg-3 mt-lg-0 mt-5">
                  <div class="sticky-box">
                        <div class="row mx-0">
                          <div class="col-12">
                            <button type="button" class="btn top-btn heart-btn pull-right"><i name="like-button" class="fa-1x fa-heart liked fas liked-shaked icon-size"></i></button>
                            <button type="button" class="btn top-btn pull-right"><i class="fa-1x fa-share-alt fas "></i></button>
                          </div>
                          <div class="col-12 pr-lg-0">
                            <div class="sticky-product-title">
                                <h2>Nike Air Zoom Pegasus 35</h2>
                            </div>

                            <div class="sticky-product-quantity p-3 mb-3">
                              <div class="row mx-0">
                                <!-- <div class="col-5 px-0 pt-2">
                                  <select class="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select>
                                  จำนวน
                                </div> -->
                                <div class="col-12 px-0">
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

                            <div class="">
                              <span class="ml-2">
                                 Color
                              </span>
                              <span class="grey">
                                 (black)
                              </span>
                              <div class="row mx-0 mt-2 mb-3">
                                <div class="col-1 mr-2 px-2 mb-2 text-center">
                                  <button type="button" class="btn color-btn color-active" style="background-color:blue"></button>
                                </div>
                                <div class="col-1 mr-2 px-2 mb-2 text-center">
                                  <button type="button" class="btn color-btn" style="background-color:white"></button>
                                </div>
                                <div class="col-1 mr-2 px-2 mb-2 text-center">
                                  <button type="button" class="btn color-btn" style="background-color:black"></button>
                                </div>
                                <div class="col-1 mr-2 px-2 mb-2 text-center">
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

                            <div class="row my-3 mx-0 pb-3 sticky-product-picker">
                              <div class="col-xl-6 col-lg-12 col-6 px-xl-1 px-lg-0 px-md-2 px-1 latest-product-btn mb-2">
                                <button type="button" class="btn add-to-cart p-2">
                                  <label class="mb-0 d-flex px-2">
                                    <span>ADD TO CART</span>
                                    <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                  </label>
                                </button>
                              </div>
                              <div class="col-xl-6 col-lg-12 col-6 px-xl-1 px-lg-0 px-md-2 px-1 latest-product-btn">
                                <button type="button" class="btn fast-buy p-2">
                                  <label class="mb-0 d-flex px-2">
                                    <span>BUY NOW</span>
                                    <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                  </label>
                                </button>
                              </div>
                            </div>


                            <div class="sticky-product-excerpt mb-2">
                                <span>
                                  ห้าวหาญ สะดุดตา ไม่ยอมใคร รองเท้า Prophere จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                  นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                  นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง จะพาคุณเดิน ท้องถนนคือสถานที่ที่จะบอกเล่าเรื่องราว
                                  นี่คือรองเท้าที่นำวัสดุผ้าและนำนหังบูนักมาตกแต่ง
                                </span>
                                <br>
                                <label class="additional-details d-flex" data-toggle="modal" data-target="#viewdetials">
                                <a class="additional-details ml-auto" href="#">รายละเอียดเพิ่มเติม.. &raquo;</a>
                                </label>

                            </div>


                            <!-- Modal -->
                            <div class="modal fade full-screen-product" id="viewdetials" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                     <div class="row w-100 px-3">

                                       <div class="col-xl-3 col-lg-5 col-md-7 col-11">
                                         <div class="row detail-product-frame">
                                           <div class="col-3 p-md-0 p-1">
                                                 <div class="detail-product-frame">
                                                   <img class="detail-product-img" src="assets/images/product/1/33.jpg">
                                                 </div>
                                           </div>
                                           <div class="col-9 px-lg-2 px-lg-0 px-md-1 px-0">
                                               <div class="cart-product-detail detail-product-frame">
                                                 <div class="cart-product-name">
                                                     <a href="#">
                                                       <span>DAME D.O.L.L.A.R (AC9612) "Night Cargo"</span>
                                                     </a>
                                                 </div>
                                                 <div class="cart-product-quantity">
                                                   <span class="pull-left discounted">4,800</span><span class="pull-left discount mx-1">2,400</span><span class="pull-left">THB</span>
                                                 </div>
                                               </div>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="col-lg-2 col-md-2 col-1 ml-auto">
                                         <button type="button" class="close custom-close2 my-auto" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>

                                     </div>
                                  </div>
                                  <div class="modal-body product-detail-modal-body">

                                    <div class="container">
                                      <!-- Text editor ปล. ใส่ tag pre ยกตัวอย่างเฉยๆ-->
                                      <pre>
สบาย ลดแรงกระแทกได้ดี

ถุงเท้าเทรนนิ่ง Nike Dry Cushion Quarter ผลิตด้วยการลดแรงกระแทกที่จัดตำแหน่งไว้เป็นอย่างดี มอบการปกป้องจากแรงกระทบอย่างไร้ที่ติระหว่างที่ออกกำลังกาย


ข้อดี

เทคโนโลยี Dri-FIT ช่วยให้รู้สึกแห้งสบาย
ลดแรงกระแทกตรงจุดเพื่อดูดซับแรงกระทบแบบเฉพาะจุด
ตาข่ายระบายอากาศเพื่อให้อากาศไหลเวียนดีเยี่ยม
ออกแบบสำหรับเท้าซ้าย/ขวาเพื่อความกระชับที่มากขึ้น

รายละเอียดสินค้า

ผ้า: Dri-FIT โพลีเอสเตอร์ 66%/ผ้าคอตตอน 18%/ไนลอน 14%/สแปนเดกซ์ 2%
ซักเครื่อง
นำเข้า
สีที่แสดง: White/Wolf Grey/Black
สไตล์: SX5549-100
ประเทศ/ภูมิภาคที่ผลิต: ปากีสถาน
                                      </pre>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
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

    if(window.matchMedia("(min-width: 1366px)").matches){
      $('#zoom1').zoom();
      $('#zoom2').zoom();
      $('#zoom3').zoom();
      $('#zoom4').zoom();
      $('#zoom5').zoom();
      $('#zoom6').zoom();
    }

    var fixmeTop = $('.product-detail-left-side').offset().top;       // get initial position of the element

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

    $('.productdetail2-carousel').find('.owl-dots').toggleClass('disabled custom-dots');
    $('.productdetail2-carousel').find('.tog').addClass('d-none');
    // $('.owl-video-play-icon').remove();


</script>
