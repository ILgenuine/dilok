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
    <div class="wrapper container-fluid custom-container">
      <!-- CART SIDEBAR -->
      <?php include_once('inc/cart-sidebar.php'); ?>
      <?php include_once('inc/nav-sidebar.php'); ?>
      <!-- END CART SIDEBAR -->

      <div class="row mt-5">
          <div class="col-xl-2 col-lg-3 fillter-d-n1">
              <button onclick="myFunction()" class="btn btn-hide" id="demo">hide filter</button>
          </div>
          <div class="col-md-4 col-6 d-md-block d-lg-none d-xl-none fillter-r-l">
              <button  class="btn btn-fillter">filter</button>
          </div>
          <div class="col-xl-6 col-12 col-lg-5 col-md-12 order-2 fillter-m-tt order-lg-1 order-md-3">
            <ol class="breadcrumb pull-left mb-0 pb-0 pt-2" style="top:0;">
              <li class="breadcrumb-item"><a href="#" class="fillter-font-step">รองเท้า</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                  <span class="fillter-font-step">Brand<span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                  <span class="fillter-font-step">Adidas</span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                  <span class="fillter-font-step">Men running</span>
              </li>
            </ol>
          </div>
          <div class="col-xl-3 col-6 col-lg-3 col-md-6 text-center text-lg-right text-md-right mt-2 order-1 order-lg-2 order-md-1">
              <div class="fillter-font3">1-20 of 80 items</div>
          </div>
          <div class="col-xl-1 col-lg-1 col-md-2 col-12 text-center text-lg-right text-md-right fillter-d-n2 fillter-m-t2 order-lg-3 order-md-2">
             <div class="">
               <button onclick="myFunction2()" class="btn btn-column"><i class="fas fa-columns"></i></button>
               <button onclick="myFunction3()" class="btn btn-row"><i class="fas fa-align-justify"></i></button>
             </div>
          </div>
      </div>


      <div class="row">
        <div class="col-xl-2 col-lg-3 fillter-d-n3" id="myDIV">
          <section class="filter">
            <div class="form-group">
                  <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample60" aria-expanded="false" aria-controls="collapseExample">
                      <span class="fillter-font2 pull-left">SELECTED</span>
                      <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                  </button>
                  <div class="collapse show" id="collapseExample60">
                      <div class="mt-2">
                          <span class="fillter-select fillter-font3">
                            <i class="fas fa-times pr-2"></i>Male
                          </span>
                          <span class="ml-2 fillter-select fillter-font3">
                            <i class="fas fa-times pr-2"></i>Adidas
                          </span>
                      </div>
                  </div>
              </div>
              <hr>
              <div class="form-group">
                    <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample55" aria-expanded="false" aria-controls="collapseExample">
                        <span class="fillter-font2 pull-left">GENDER</span>
                        <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                    </button>
                    <div class="collapse show" id="collapseExample55">
                        <div class="filter-scroll">
                            <label class="check">
                                <div class="regist-m-l2 pt-1 fillter-font3">Male</div>
                                <input type="checkbox"/>
                                <span class="checkmark"></span>
                            </label>
                            <label class="check">
                                <div class="regist-m-l2 pt-1 fillter-font3">Female</div>
                                <input type="checkbox"/>
                                <span class="checkmark"></span>
                            </label>
                            <label class="check">
                                <div class="regist-m-l2 pt-1 fillter-font3">Unisex</div>
                                <input type="checkbox"/>
                                <span class="checkmark"></span>
                            </label>
                                <label class="check">
                                <div class="regist-m-l2 pt-1 fillter-font3">Kids</div>
                                <input type="checkbox"/>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                      <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample56" aria-expanded="false" aria-controls="collapseExample">
                          <span class="fillter-font2 pull-left">BRAND</span>
                          <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                      </button>
                      <div class="collapse show" id="collapseExample56">
                          <div class="filter-scroll">
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Adidas</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Adidas</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Albam</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Alltimers</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Andersons</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Aries</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Armor-lux</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Arpenteur</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Asics</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Axel Arigato</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Barbour</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Beams Plus</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                      </div>
                  </div>
                <hr>
                <div class="form-group">
                      <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample57" aria-expanded="false" aria-controls="collapseExample">
                          <span class="fillter-font2 pull-left">CLOTHING SIZE</span>
                          <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                      </button>
                      <div class="collapse show" id="collapseExample57">
                          <div class="filter-scroll">
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">One Size</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">XX-Small</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">X-Small</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Small</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                              </label>
                                  <label class="check">
                                  <div class="regist-m-l2 pt-1 fillter-font3">Medium</div>
                                  <input type="checkbox"/>
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="form-group">
                        <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample58" aria-expanded="false" aria-controls="collapseExample">
                            <span class="fillter-font2 pull-left">FOOTWEAR SIZE</span>
                            <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                        </button>
                        <div class="collapse show" id="collapseExample58">
                            <div class="filter-scroll">
                                <label class="check">
                                    <div class="regist-m-l2 pt-1 fillter-font3">UK 3</div>
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check">
                                    <div class="regist-m-l2 pt-1 fillter-font3">UK 3.5</div>
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check">
                                    <div class="regist-m-l2 pt-1 fillter-font3">UK4</div>
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                </label>
                                    <label class="check">
                                    <div class="regist-m-l2 pt-1 fillter-font3">UK4.5</div>
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                </label>
                                </label>
                                    <label class="check">
                                    <div class="regist-m-l2 pt-1 fillter-font3">UK 5</div>
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                          <button class="btn fillter-bg px-0" type="button" data-toggle="collapse" data-target="#collapseExample59" aria-expanded="false" aria-controls="collapseExample">
                              <span class="fillter-font2 pull-left">COLOR</span>
                              <span class="fas fa-chevron-down pull-right" aria-hidden="true"></span>
                          </button>
                          <div class="collapse show" id="collapseExample59">
                              <div class="filter-scroll">
                                  <label class="check">
                                      <div class="regist-m-l2 pt-1 fillter-font3">Black</div>
                                      <input type="checkbox"/>
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="check">
                                      <div class="regist-m-l2 pt-1 fillter-font3">Blue</div>
                                      <input type="checkbox"/>
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="check">
                                      <div class="regist-m-l2 pt-1 fillter-font3">Brown</div>
                                      <input type="checkbox"/>
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="check">
                                      <div class="regist-m-l2 pt-1 fillter-font3">Burgundy</div>
                                      <input type="checkbox"/>
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="check">
                                      <div class="regist-m-l2 pt-1 fillter-font3">Gold</div>
                                      <input type="checkbox"/>
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <hr>
               </div>
          </section>
          <div class="filtered-item filtered-item3 col-xl-10 col-lg-9 col-md-12 fadeIn animated">
            <section class="grid-item box">
                <ul class="row list-unstyled">
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                              <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                              <span class="red tooltips d-xl-none d-block"><i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/1.png" alt="Card image cap"> </a>
                              </div>
                              <div class="card-body p-0">
                                <div class="row px-0 mx-0">
                                    <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                        <div class="product-title">
                                          <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                        </div>
                                        <div clas="product-categories">
                                          <span>Men running</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                      <button class="navbar-toggler hamburger py-2" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                          <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                        </svg>
                                      </button>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                      <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-3 col-lg-3 px-xl-2 px-0 mb-2 filtered-item3">
                                      <div class="sale-percent">
                                        <span>ลด 50%</span>
                                      </div>
                                    </div>
                                    <div class="col-xl-8 col-md-8 col-lg-9 col-9 px-xl-2 px-0 mb-2 latest-product-price filtered-item3">
                                      <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                      <button type="button" class="btn add-to-cart p-2">
                                        <label class="mb-0 d-flex px-2">
                                          <span>เพิ่มใส่ตะกร้า</span>
                                          <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                        </label>
                                      </button>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                      <button type="button" class="btn fast-buy p-2">
                                        <label class="mb-0 d-flex px-2">
                                          <span >ซื้อทันที</span>
                                          <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                        </label>
                                      </button>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/2.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0  fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0  fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/3.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/4.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                      <div class="item">
                        <div class="card p-3 fillter-m">
                            <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                            <span class="red tooltips d-xl-none d-block"><i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                            <div class="latest-product-frame">
                              <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/1.png" alt="Card image cap"> </a>
                            </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                  </div>
                                  <div class="col-xl-4 col-md-3 col-lg-3 col-3 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span>ลด 50%</span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-md-9 col-lg-9 col-9 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                      <div class="item">
                        <div class="card p-3 fillter-m">
                          <!-- แทนสินค้าร่วมรายการ -->
                          <span><br></span>
                            <div class="latest-product-frame">
                              <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/2.png" alt="Card image cap"> </a>
                            </div>
                          <div class="card-body p-0">
                            <div class="row px-0 mx-0">
                              <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                    <div class="product-title">
                                      <span>Pureboost DPR Shoes<span>
                                    </div>
                                    <div clas="product-categories">
                                      <span>Men running</span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button class="navbar-toggler hamburger py-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                      <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                    </svg>
                                  </button>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                </div>
                                <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                  <div class="sale-percent">
                                    <span></span>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                  <span class="normal">1,850</span><span class="currency">THB</span>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn add-to-cart p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>เพิ่มใส่ตะกร้า</span>
                                      <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn fast-buy p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>ซื้อทันที</span>
                                      <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </li>
                  <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                      <div class="item">
                        <div class="card p-3 fillter-m">
                          <!-- แทนสินค้าร่วมรายการ -->
                          <span><br></span>
                            <div class="latest-product-frame">
                              <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/3.png" alt="Card image cap"> </a>
                            </div>
                          <div class="card-body p-0">
                            <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                    <div class="product-title">
                                      <span>Pureboost DPR Shoes<span>
                                    </div>
                                    <div clas="product-categories">
                                      <span>Men running</span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button class="navbar-toggler hamburger py-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                      <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                    </svg>
                                  </button>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                </div>
                                <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                  <div class="sale-percent">
                                    <span></span>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                  <span class="normal">1,850</span><span class="currency">THB</span>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn add-to-cart p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>เพิ่มใส่ตะกร้า</span>
                                      <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn fast-buy p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>ซื้อทันที</span>
                                      <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </li>
                  <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                      <div class="item">
                        <div class="card p-3 fillter-m">
                          <!-- แทนสินค้าร่วมรายการ -->
                          <span><br></span>
                            <div class="latest-product-frame">
                              <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/4.png" alt="Card image cap"> </a>
                            </div>
                          <div class="card-body p-0">
                            <div class="row px-0 mx-0">
                              <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                    <div class="product-title">
                                      <span>Pureboost DPR Shoes<span>
                                    </div>
                                    <div clas="product-categories">
                                      <span>Men running</span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button class="navbar-toggler hamburger py-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                      <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                    </svg>
                                  </button>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                  <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                </div>
                                <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                  <div class="sale-percent">
                                    <span></span>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                  <span class="normal">1,850</span><span class="currency">THB</span>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn add-to-cart p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>เพิ่มใส่ตะกร้า</span>
                                      <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                                <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                  <button type="button" class="btn fast-buy p-2">
                                    <label class="mb-0 d-flex px-2">
                                      <span>ซื้อทันที</span>
                                      <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                    </label>
                                  </button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                              <span class="red tooltips d-xl-block d-none">สินค้าร่วมรายการ <i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                              <span class="red tooltips d-xl-none d-block"><i class="fas fa-question-circle"></i><span class="tooltiptext"> รายการ</span></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/1.png" alt="Card image cap"> </a>
                              </div>
                              <div class="card-body p-0">
                                <div class="row px-0 mx-0">
                                    <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                        <div class="product-title">
                                          <span>Pureboost DPR Shoes Pureboost DPR Shoes Pureboost DPR Shoes<span>
                                        </div>
                                        <div clas="product-categories">
                                          <span>Men running</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                      <button class="navbar-toggler hamburger py-2" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                          <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                        </svg>
                                      </button>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                      <button type="button" class="btn heart-btn"><i name="like-button" class="fa-2x fa-heart liked fas liked-shaked"></i></button>
                                    </div>
                                    <div class="col-xl-4 col-md-3 col-md-3 col-3 px-xl-2 px-0 mb-2">
                                      <div class="sale-percent">
                                        <span>ลด 50%</span>
                                      </div>
                                    </div>
                                    <div class="col-xl-8 col-md-9 col-md-9 col-9 px-xl-2 px-0 mb-2 latest-product-price">
                                      <span class="before">1,825</span><span class="after">925</span><span class="currency">THB</span>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                      <button type="button" class="btn add-to-cart p-2">
                                        <label class="mb-0 d-flex px-2">
                                          <span>เพิ่มใส่ตะกร้า</span>
                                          <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                        </label>
                                      </button>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                      <button type="button" class="btn fast-buy p-2">
                                        <label class="mb-0 d-flex px-2">
                                          <span>ซื้อทันที</span>
                                          <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                        </label>
                                      </button>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/2.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 col-md-6mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/3.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
                                        <i class="icon-collpase fas fa-angle-right ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="col-xl-3 col-lg-4 col-md-4 fadeIn animated filtered-item2 fillter-m-b">
                        <div class="item">
                          <div class="card p-3 fillter-m">
                            <!-- แทนสินค้าร่วมรายการ -->
                            <span><br></span>
                              <div class="latest-product-frame">
                                <a href="productdetails.php"> <img class="latest-product-pic" src="assets/images/product/2/4.png" alt="Card image cap"> </a>
                              </div>
                            <div class="card-body p-0">
                              <div class="row px-0 mx-0">
                                <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2">
                                      <div class="product-title">
                                        <span>Pureboost DPR Shoes<span>
                                      </div>
                                      <div clas="product-categories">
                                        <span>Men running</span>
                                      </div>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button class="navbar-toggler hamburger py-2" type="button">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="col-xl-2 col-lg-6 col-md-6 col-6 mb-2 px-0 fillter-logo">
                                    <button type="button" class="btn heart-btn"><i name="like-button" class="far fa-2x fa-heart not-liked"></i></button>
                                  </div>
                                  <div class="col-xl-4 px-xl-2 px-0 mb-2">
                                    <div class="sale-percent">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="col-xl-8 col-lg-12 px-xl-2 px-0 mb-2 latest-product-price">
                                    <span class="normal">1,850</span><span class="currency">THB</span>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mb-xl-0 mb-2 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn add-to-cart p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>เพิ่มใส่ตะกร้า</span>
                                        <i class="fas fa-plus ml-auto pt-1" aria-hidden="true"></i>
                                      </label>
                                    </button>
                                  </div>
                                  <div class="col-xl-6 col-lg-12 px-xl-1 px-lg-0 mt-2 latest-product-btn fillter-btn-width">
                                    <button type="button" class="btn fast-buy p-2">
                                      <label class="mb-0 d-flex px-2">
                                        <span>ซื้อทันที</span>
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
            </section>
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
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
              x.style.display = "block";
          } else {
              x.style.display = "none";
          }

          $('.filtered-item').toggleClass('col-xl-10 col-xl-12 col-lg-12 col-lg-9');

          $('.filtered-item2').addClass('col-lg-4');

          if(document.getElementById("demo").innerHTML == 'show filter'){
              document.getElementById("demo").innerHTML = "hide filter";
          }
          else if(document.getElementById("demo").innerHTML == 'hide filter'){
            document.getElementById("demo").innerHTML = "show filter";
          }
      }

        function myFunction2() {
          $('.filtered-item2').addClass('col-xl-4 col-6 col-lg-6 col-md-6');
          $('.filtered-item2').removeClass('col-xl-3 col-12 col-lg-4 col-md-4');
          $('.filtered-item3').addClass('col-12');
          $('.filtered-item3').removeClass('col-4');
        }
        function myFunction3() {
          $('.filtered-item2').addClass('col-xl-3 col-12 col-lg-4 col-md-4');
          $('.filtered-item2').removeClass('col-xl-4 col-6 col-lg-6 col-md-6');
          $('.filtered-item3').addClass('col-12');
          $('.filtered-item3').removeClass('col-12');
        }




  </script>
</html>
