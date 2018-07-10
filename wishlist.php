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
    <div class="wishlist-screen">
    <div class="wishlist-screen2"></div>
      <div class="wrapper">
        <!-- CART SIDEBAR -->
        <?php include_once('inc/cart-sidebar.php'); ?>
        <?php include_once('inc/nav-sidebar.php'); ?>
        <!-- END CART SIDEBAR -->


        <!-- SITE CONTENT -->
        <div class="container-fluid custom-container">
            <div class="row mt-5 p-2">
                <div class="col-xl-4 col-6 col-lg-4 col-md-4 wish-p-l">
                    <div class="wish-font1">WISHLIST <i class="far fa-heart wish-font2"></i></div>
                </div>
                <div class="col-xl-7 col-6 col-lg-6 col-md-6 text-right mt-2 wish-p-r wish-m-ll">
                    <div class="fillter-font3">1-20 of 80 items</div>
                </div>
                <div class="col-xl-1 col-lg-2 col-md-2 col-12 text-center text-md-right text-lg-right wish-d2">
                    <button onclick="myFunction2()" class="btn btn-column2" disabled><i class="fas fa-columns"></i></button>
                    <button onclick="myFunction3()" class="btn btn-row2" disabled><i class="fas fa-align-justify"></i></button>
                </div>
            </div>


            <div class="row wish-d">
                <div class="filtered-item filtered-item3 col-xl-12 col-lg-12 col-md-12 fadeIn animated">
                  <section class="grid-item box">
                      <ul class="row list-unstyled">
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                        <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                        <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                              <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 col-md-4 col-4 col-lg-4 px-xl-2 px-0 mb-2 filtered-item3">
                                              <div class="sale-percent">
                                                <span>ลด 50%</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-8 col-md-8 col-lg-8 col-8 px-xl-2 px-0 mb-2 latest-product-price filtered-item3">
                                              <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/3.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/5.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/4.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                        <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                        <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                              <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 col-md-4 col-4 col-lg-4 px-xl-2 px-0 mb-2 filtered-item3">
                                              <div class="sale-percent">
                                                <span>ลด 50%</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-8 col-md-8 col-lg-8 col-8 px-xl-2 px-0 mb-2 latest-product-price filtered-item3">
                                              <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                        <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                        <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                              <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 col-md-4 col-4 col-lg-4 px-xl-2 px-0 mb-2 filtered-item3">
                                              <div class="sale-percent">
                                                <span>ลด 50%</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-8 col-md-8 col-lg-8 col-8 px-xl-2 px-0 mb-2 latest-product-price filtered-item3">
                                              <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/3.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/4.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item first">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                      <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/4.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/3.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                            <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 col-md-3 col-lg-4 col-4 px-xl-2 px-0 mb-2">
                                            <div class="sale-percent">
                                              <span>ลด 50%</span>
                                            </div>
                                          </div>
                                          <div class="col-xl-8 col-md-9 col-lg-8 col-8 px-xl-2 px-0 mb-2 latest-product-price">
                                            <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/5.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                       <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/7.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-2 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/7.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                       <div class="col-xl-8 col-md-9 col-9 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 col-3 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                      </ul>
                      <div class="container">
                            <ul class="pagination justify-content-center">
                              <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">1</a></li>
                              <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">2</a></li>
                              <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">3</a></li>
                              <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">4</a></li>
                            </ul>
                      </div>
                  </section>
                </div>
            </div>



           <!-- SHOW 1366 -->

            <div class="row wish-d3">
                <div class="filtered-item col-xl-12 fadeIn animated">
                  <section class="grid-item box">
                      <ul class="row list-unstyled">
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 mb-2 px-0 text-right">
                                              <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 px-xl-2 px-0 mb-2 filtered-item3">
                                              <div class="sale-percent">
                                                <span>ลด 50%</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price filtered-item3">
                                              <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/5.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/6.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/4.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/5.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/3.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                            <div class="item first">
                              <div class="card px-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                  <div class="latest-product-frame">
                                    <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                    <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/7.jpg" alt="Card image cap"> </a>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                        </div>
                                        <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                          <div class="sale-percent">
                                            <span>ลด 50%</span>
                                          </div>
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                            <div class="item">
                              <div class="card px-1 wish-m">
                                <!-- แทนสินค้าร่วมรายการ -->
                                <span class="red tooltips d-xl-block d-none"></span>
                                <span class="red tooltips d-xl-none d-block"></span>
                                  <div class="latest-product-frame">
                                    <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/4.jpg" alt="Card image cap"> </a>
                                    <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                  </div>
                                <div class="card-body p-0">
                                  <div class="row px-0 mx-0">
                                    <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                          <div class="product-title">
                                            <span>Pureboost DPR Shoes<span>
                                          </div>
                                          <div clas="product-categories">
                                            <span>Men running</span>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 mb-2 px-0 text-right">
                                        <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                      </div>
                                      <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                      </div>
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                        <span class="normal">1,850</span><span class="currency">THB</span>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn add-to-cart p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Add to cart</span>
                                            <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn fast-buy p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Buy now</span>
                                            <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                            <div class="item">
                              <div class="card px-1 wish-m">
                                <!-- แทนสินค้าร่วมรายการ -->
                                <span class="red tooltips d-xl-block d-none"></span>
                                <span class="red tooltips d-xl-none d-block"></span>
                                  <div class="latest-product-frame">
                                    <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/7.jpg" alt="Card image cap"> </a>
                                    <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/5.jpg" alt="Card image cap"> </a>
                                  </div>
                                <div class="card-body p-0">
                                  <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                          <div class="product-title">
                                            <span>Pureboost DPR Shoes<span>
                                          </div>
                                          <div clas="product-categories">
                                            <span>Men running</span>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 mb-2 px-0 text-right">
                                        <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                      </div>
                                      <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                      </div>
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                        <span class="normal">1,850</span><span class="currency">THB</span>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn add-to-cart p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Add to cart</span>
                                            <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn fast-buy p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Buy now</span>
                                            <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                            <div class="item">
                              <div class="card px-1 wish-m">
                                <!-- แทนสินค้าร่วมรายการ -->
                                <span class="red tooltips d-xl-block d-none"></span>
                                <span class="red tooltips d-xl-none d-block"></span>
                                  <div class="latest-product-frame">
                                    <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"></a>
                                    <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                  </div>
                                <div class="card-body p-0">
                                  <div class="row px-0 mx-0">
                                    <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                          <div class="product-title">
                                            <span>Pureboost DPR Shoes<span>
                                          </div>
                                          <div clas="product-categories">
                                            <span>Men running</span>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 mb-2 px-0 text-right">
                                        <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                      </div>
                                      <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                      </div>
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                        <span class="normal">1,850</span><span class="currency">THB</span>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn add-to-cart p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Add to cart</span>
                                            <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                      <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                        <button type="button" class="btn fast-buy p-2">
                                          <label class="mb-0 d-flex pr-2">
                                            <span>Buy now</span>
                                            <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                          </label>
                                        </button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item first">
                                <div class="card p-1 wish-m">
                                  <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i></span>
                                  <span class="red tooltips d-xl-none d-block">สินค้าร่วมรายการ<i class="fas fa-question-circle"></i></span>
                                    <div class="latest-product-frame">
                                      <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                    </div>
                                    <div class="card-body p-0">
                                      <div class="row px-0 mx-0">
                                          <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                              <div class="product-title">
                                                <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                              </div>
                                              <div clas="product-categories">
                                                <span>Men running</span>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 mb-2 px-0 text-right">
                                            <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                          </div>
                                          <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                            <div class="sale-percent">
                                              <span>ลด 50%</span>
                                            </div>
                                          </div>
                                          <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                            <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                          </div>
                                          <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn add-to-cart p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Add to cart</span>
                                                <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                          <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                            <button type="button" class="btn fast-buy p-2">
                                              <label class="mb-0 d-flex pr-2">
                                                <span>Buy now</span>
                                                <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                              </label>
                                            </button>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details1.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/7.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="product-details2.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/8.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl-8 px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <li class="col-xl-3 fadeIn animated filtered-item2 fillter-m-b">
                              <div class="item">
                                <div class="card p-1 wish-m">
                                  <!-- แทนสินค้าร่วมรายการ -->
                                  <div class="latest-product-frame">
                                      <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/adidas/2.jpg" alt="Card image cap"> </a>
                                      <a href="product-details2.php"> <img class="latest-product-pic second-latest-product" src="assets/images/product/2/adidas/1.jpg" alt="Card image cap"> </a>
                                    </div>
                                  <div class="card-body p-0">
                                    <div class="row px-0 mx-0">
                                      <div class="col-xl-8 px-xl-2 px-0 mb-2">
                                            <div class="product-title">
                                              <span>Pureboost DPR Shoes<span>
                                            </div>
                                            <div clas="product-categories">
                                              <span>Men running</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-2 px-0 text-right">
                                          <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                        </div>
                                        <div class="col-4 px-xl-2 px-0 mb-2 latest-product-price">
                                        </div>
                                        <div class="col-xl- px-xl-2 px-0 mb-2 latest-product-price">
                                          <span class="normal">1,850</span><span class="currency">THB</span>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn add-to-cart p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Add to cart</span>
                                              <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                        <div class="col-xl-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                          <button type="button" class="btn fast-buy p-2">
                                            <label class="mb-0 d-flex pr-2">
                                              <span>Buy now</span>
                                              <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                            </label>
                                          </button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                       </ul>
                     <!-- เลขหน้า -->
                      <div class="container-fluid custom-container mt-5">
                        <ul class="pagination justify-content-center">
                          <li class="page-item pr-1"><a class="news_page-link active" href="javascript:void(0);">1</a></li>
                          <li class="page-item pr-1"><a class="news_page-link " href="javascript:void(0);">2</a></li>
                          <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">3</a></li>
                          <li class="page-item pr-1"><a class="news_page-link" href="javascript:void(0);">4</a></li>
                        </ul>
                      </div>



 <!-- เลขหน้า จบ  -->
                  </section>
                </div>
            </div>

            <!-- END SHOW 1366 -->




        </div>
        <!-- END SITE CONTENT -->
      </div>
    <!-- END CONTENT -->
</div>



    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
<script type="text/javascript">
    function myFunction2() {
      $('.filtered-item2').addClass('col-xl-3 col-6 col-lg-6 col-md-6');
      $('.filtered-item2').removeClass('col-xl-2 col-12 col-lg-4 col-md-4');
    }
    function myFunction3() {
      $('.filtered-item2').addClass('col-xl-2 col-12 col-lg-4 col-md-4');
      $('.filtered-item2').removeClass('col-xl-3 col-6 col-lg-6 col-md-6');
    }
</script>
