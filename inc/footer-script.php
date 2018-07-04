<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
     <script type="text/javascript" src="https://cdn.rawgit.com/jackmoore/zoom/master/jquery.zoom.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
      // when opening the sidebar
      $('.sidebarCollapse').on('click', function () {
          // open sidebar
          $('#sidebar').addClass('active');
          // $('body').addClass('push');
          // $('nav').addClass('push-nav');
          // $('footer').addClass('push-nav');
          // $('.custom-container').addClass('push-nav');
          $('.overlay').fadeIn();
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          $('.cart-product-name').each( function (){
            var name = this;
            var text = $(name).text();
            text = text.trim();
            if(text.length > 25){
              text = text.substr(0,25) + '....';
            }
            $(this).closest('div.cart-product-name').find('span').text(text);
          });
          $('.cart-product-size').each( function (){
            var name = this;
            var text = $(name).text();
            text = text.trim();
            if(text.length > 20){
              text = text.substr(0,20) + '....';
            }
            $(this).closest('div.cart-product-size').find('span').text(text);
          });
      });
      $('.nav-btn').on('click', function () {
          // open sidebar
          $('#nav-sidebar').addClass('active');
          // $('body').addClass('push-right');
          // $('nav').addClass('push-nav-right');
          // $('footer').addClass('push-nav-right');
          // $('.custom-container').addClass('push-nav-right');
          // fade in the overlay
          $('.overlay').fadeIn();
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
      $('.filter-sidebar-btn').on('click', function () {
          // open sidebar
          $('#filter-sidebar').addClass('active');
          // $('body').addClass('push-filter-right');
          // $('nav').addClass('push-filter-nav-right');
          // $('footer').addClass('push-filter-nav-right');
          // $('.custom-container').addClass('push-filter-nav-right');
          $('.overlay').fadeIn();
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
      $('.close-sidebar').on('click', function () {
        document.getElementById("mobile-sidebar").style.opacity = "0";
        $('.overlay').fadeOut();
      });
      // if dismiss or overlay was clicked
      $('.overlay , .language-picker').on('click', function () {
        // hide the sidebar
        $('#nav-sidebar').removeClass('active');
        $('#filter-sidebar').removeClass('active');
        $('#sidebar').removeClass('active');
        // $('body').removeClass('push');
        // $('nav').removeClass('push-nav');
        // $('footer').removeClass('push-nav');
        // $('.custom-container').removeClass('push-nav');
        // $('body').removeClass('push-right');
        // $('nav').removeClass('push-nav-right');
        // $('footer').removeClass('push-nav-right');
        // $('.custom-container').removeClass('push-nav-right');
        // $('body').removeClass('push-filter-right');
        // $('nav').removeClass('push-filter-nav-right');
        // $('footer').removeClass('push-filter-nav-right');
        // $('.custom-container').removeClass('push-filter-nav-right');
        // fade out the overlay
        $('.overlay').fadeOut();
      });
      // toggle  + and - in collapse btn
      function toggleChevron() {
          $(this).closest("div.promotion").find(".icon-collpase").toggleClass("fa-plus fa-minus");
      }
      document.getElementById("promotion-code").addEventListener("click", toggleChevron);
      // END toggle  + and - in collapse btn
      // toggle  + and - in collapse mobile nav list
      $('.mobile-nav-list').on('click', function () {
        $(this).closest("div.promotion").find(".icon-collpase").toggleClass("fa-plus fa-minus");
      });
    });




    window.onload = function(){
      // LANGUAGE PICKER
      $(".large").bind('mouseover', function() {
        var languagecount = document.getElementById("languagepicker").getElementsByTagName("li").length
        language = languagecount - 1;
        language = language * 41;
        $(this).css("height", language);
      });
      $(".large").bind('mouseleave', function() {
        language = 41;
        $(this).css("height", language);
      });
      // END LANGUAGE PICKER
        $( '.cart-product' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.cart-product-frame').each( function (){
          if(window.matchMedia("(max-width: 414px)").matches){
            var iw = $(this).width();
            iw = iw * 0.55;
            iw2 = iw * 1.9;
            $(this).css({'height':iw2+'px'});
            $('.cart-col').css({'height':iw2+'px'});
            $('.cart-col-414').css({'height':iw2+'px'});
          }
          else{
            var iw = $(this).width();
            iw = iw * 0.55;
            $(this).css({'height':iw+'px'});
            $('.cart-col').css({'height':iw+'px'});
          }
        });
        // navbar
        $( '.nav-product' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.nav-double').each( function (){
          var iw = $(this).width();
          if(window.matchMedia("(max-width: 1366px)").matches){
            iw = iw * 0.8;
            iw2 = iw * 0.9;
            $(this).css({'height':iw2+'px'});
            $('.nav-col').css({'height':iw+'px'});
          }
          else{
            iw = iw * 0.7;
            iw2 = iw * 0.8;
            $(this).css({'height':iw2+'px'});
            $('.nav-col').css({'height':iw+'px'});
          }
        });
        $('.nav-launches').each( function (){
          var iw = $(this).width();
          iw = iw * 0.6;
          $(this).css({'height':iw+'px'});
          $('.launches-col').css({'height':iw+'px'});
        });
        $('.nav-blog').each( function (){
          var iw = $(this).width();
          // iw = iw * 0.5;
          if(window.matchMedia("(max-width: 1366px)").matches){
            iw = iw * 1.1;
            $(this).css({'height':iw+'px'});
            $('.blog-col').css({'height':iw+'px'});
            $('.blog-row').css({'height':iw+'px'});
          }
          else{
            $(this).css({'height':iw+'px'});
            $('.blog-col').css({'height':iw+'px'});
            $('.blog-row').css({'height':iw+'px'});
          }
        });
        $('.nav-blog-single').each( function (){
          var iw = $(this).width();
          // iw = iw * 1.2;
          if(window.matchMedia("(max-width: 1366px)").matches){
            iw2 = iw * 1.5;
            $(this).css({'height':iw2+'px'});
            $(this).css({'width':iw2+'px'});
            $('.nav-col-single').css({'height':iw2+'px'});
          }
          else{
            $(this).css({'height':iw+'px'});
            $('.nav-col-single').css({'height':iw+'px'});
          }
        });
        $('.nav-blog-text').each( function (){
          var name = this;
          var text = $(name).text();
          text = text.trim();
          if(text.length > 30){
            text = text.substr(0,30) + '....';
          }
          $(this).closest('div').find('span').text(text);
        });
        $('.profile-name').each(function (){
          if(window.matchMedia("(max-width: 1366px)").matches){
            var name = this;
            var text = $(name).text();
            text = text.trim();
            if(text.length > 10){
              text = text.substr(0,10) + '...';
            }
            $(this).closest('div').find('.profile-name').text(text);
          }
          else{
            var name = this;
            var text = $(name).text();
            text = text.trim();
            if(text.length > 25){
              text = text.substr(0,25) + '...';
            }
            $(this).closest('div').find('.profile-name').text(text);
          }
        });
        $('.logo-lg-frame').each( function (){
          var iw = $(this).height();
          if(window.matchMedia("(max-width: 1366px)").matches){
            iw = iw * 2;
            $(this).closest('div.centering-logo').css({'width':iw+'px'});
            $(this).css({'width':iw+'px'});
          }
          else{
            iw = iw * 2;
            $(this).closest('div.centering-logo').css({'width':iw+'px'});
            $(this).css({'width':iw+'px'});
          }
        });
        $( '.logo-lg' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.logo-lg-frame-footer').each( function (){
          var iw = $(this).width();
          if(window.matchMedia("(max-width: 768px)").matches){
            iw = iw * 0.15;
            $(this).closest('div.centering-logo').css({'height':iw+'px'});
            $(this).css({'height':iw+'px'});
          }
          else if(window.matchMedia("(max-width: 1024px)").matches){
            iw = iw * 0.35;
            $(this).closest('div.centering-logo').css({'height':iw+'px'});
            $(this).css({'height':iw+'px'});
          }
          else if(window.matchMedia("(max-width: 1366px)").matches){
            iw = iw * 0.3;
            $(this).closest('div.centering-logo').css({'height':iw+'px'});
            $(this).css({'height':iw+'px'});
          }
          else{
            iw = iw * 0.26;
            $(this).closest('div.centering-logo').css({'height':iw+'px'});
            $(this).css({'height':iw+'px'});
          }
        });
        $( '.logo-lg-footer' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.loading').addClass('opa0');
        // LASTEST PRODUCT SLIDE IN INC FOLDER
        $('.latest-slide').owlCarousel({
            nav:true,
            dot:true,
            navText:["",""],
            items:4,
            responsive : {
                0 : {
                  items : 1,
                  dot:false,
                },
                414 : {
                  items : 1,
                  dot:false,
                },
                768 : {
                  items : 2,
                },
                1024 : {
                  items : 3,
                },
                1366 : {
                    items : 3,
                },
                1367 : {
                    items : 4,
                }
            },
            // onChanged: callback
        });
        $('.latest-slide').find('.owl-nav').removeClass('disabled');
        $('.latest-slide').find('.owl-next').removeClass('disabled');

        if(window.matchMedia("(max-width: 414px)").matches){
        }
        else{
          $('.latest-slide').find('.owl-dots').removeClass('disabled');
        }

        $('.latest-slide').find('.owl-next').addClass('latest-next arrow-fadein');
        $('.latest-slide').find('.owl-next').append("<i class='fas fa-angle-right fa-5x'></i>");
        $('.latest-slide').find('.owl-prev').removeClass('disabled');
        $('.latest-slide').find('.owl-prev').addClass('latest-prev');
        $('.latest-slide').find('.owl-prev').append("<i class='fas fa-angle-left fa-5x'></i>");
        $('.latest-slide').on('translated.owl.carousel', function(e) {
          $('.latest-slide .owl-stage .owl-item.active').each(function(){
              if($(this).closest('.owl-stage').find('.active .item').hasClass('first'))
              {
                $(this).closest('.owl-carousel').find('.latest-prev').removeClass('arrow-fadein');
              }
              else{
                $(this).closest('.owl-carousel').find('.latest-prev').addClass('arrow-fadein');
              }
              if($(this).closest('.owl-carousel').find('.active .item').hasClass('last'))
              {
                $(this).closest('.owl-carousel').find('.latest-next').removeClass('arrow-fadein');
              }
              else{
                $(this).closest('.owl-carousel').find('.latest-next').addClass('arrow-fadein');
              }
          });
        });
        $('.latest-product-frame').each( function (){
          var iw = $(this).width();
          if(window.matchMedia("(max-width: 320px)").matches){
            iw2 = iw * 2;
            $(this).closest('div.latest-slide').find('.card').css({'height':iw2+'px'});
            iw = iw * 1.4;
            $(this).css({'height':iw+'px'});
          }
          else if(window.matchMedia("(max-width: 414px)").matches){
            iw2 = iw * 1.8;
            $(this).closest('div.latest-slide').find('.card').css({'height':iw2+'px'});
            iw = iw * 1.2;
            $(this).css({'height':iw+'px'});
          }
          else if(window.matchMedia("(max-width: 1024px)").matches){
            iw2 = iw * 2;
            $(this).closest('div.latest-slide').find('.card').css({'height':iw2+'px'});
            iw = iw * 1.4;
            $(this).css({'height':iw+'px'});
          }
          else{
            iw2 = iw * 1.4;
            $(this).closest('div.latest-slide').find('.card').css({'height':iw2+'px'});
            iw = iw * 0.8;
            $(this).css({'height':iw+'px'});
          }
        });
        $( '.latest-product-pic' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih > iw){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.product-title').each( function (){
          var name = this;
          var text = $(name).find('span').text();
          text = text.trim();
          if(window.matchMedia("(max-width: 414px)").matches){
            if(text.length > 12){
              text = text.substr(0,12) + '....';
            }
          }
          else if(window.matchMedia("(max-width: 1024px)").matches){
            if(text.length > 15){
              text = text.substr(0,15) + '....';
            }
          }
          else{
            if(text.length > 20){
              text = text.substr(0,20) + '....';
            }
          }
          $(this).closest('div.product-title').find('span').text(text);
        });
        $('.product-categories').each( function (){
          var name = this;
          var text = $(name).find('span').text();
          text = text.trim();
          if(text.length > 20){
            text = text.substr(0,20) + '....';
          }
          $(this).closest('div.product-categories').find('span').text(text);
        });
        // END LASTEST PRODUCT SLIDE IN INC FOLDER
        // INDEX PICTURE MANAGEMENT
        $( '.product-series-img' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.product-series-frame').each( function (){
          if(window.matchMedia("(max-width: 768px)").matches){
            var iw = $(this).width();
            iw = iw * 0.5;
            $(this).css({'height':iw+'px'});
            $('.product-series-col').css({'height':iw+'px'});
          }
          else if(window.matchMedia("(max-width: 1024px)").matches){
            var iw = $(this).width();
            iw = iw * 0.6;
            $(this).css({'height':iw+'px'});
            $('.product-series-col').css({'height':iw+'px'});
          }
          else{
            var iw = $(this).width();
            iw = iw * 0.6;
            $(this).css({'height':iw+'px'});
            $('.product-series-col').css({'height':iw+'px'});
          }
        });

        $('.slide-brand-frame').each( function (){
          var iw = $(this).width();
            iw = iw * 0.3;
            $(this).closest('div.item').css({'height':iw+'px'});
            $(this).css({'height':iw+'px'});
        });
        $( '.slide-brand-img' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });

        $( '.blog-img' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih > iw){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
        $('.blog-img-frame').each( function (){
          if(window.matchMedia("(max-width: 320px)").matches){
            var iw = $(this).width();
            iw2 = iw * 0.9;
            iw3 = iw2 / 5.5;
            iw = iw * 0.5;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
          else if(window.matchMedia("(max-width: 414px)").matches){
            var iw = $(this).width();
            iw2 = iw * 0.8;
            iw3 = iw2 / 6;
            iw = iw * 0.5;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
          else if(window.matchMedia("(max-width: 768px)").matches){
            var iw = $(this).width();
            iw2 = iw * 0.7;
            iw3 = iw2 / 8;
            iw = iw * 0.5;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
          else if(window.matchMedia("(max-width: 1024px)").matches){
            var iw = $(this).width();
            iw2 = iw * 0.75;
            iw3 = iw2 / 8;
            iw = iw * 0.6;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
          else if(window.matchMedia("(max-width: 1366px)").matches){
            var iw = $(this).width();
            iw2 = iw * 0.75;
            iw3 = iw2 / 10;
            iw = iw * 0.6;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
          else{
            var iw = $(this).width();
            iw2 = iw * 0.65;
            iw3 = iw2 / 11.8;
            iw = iw * 0.5;
            $(this).css({'height':iw+'px'});
            $('.blog-img-col').css({'height':iw2+'px'});
            $('.blog-excerpt').css({'height':iw3+'px'});
          }
        });
        //END INDEX PICTURE MANAGEMENT
    }
    function expandsearch(){
      $(".toggle-search").css({"display": "none"});
      $(".confirm-search").css({"display": "block"});
      $(".search-input").css({"animation-name": "expand","right": "0%"});
    }
    window.onclick =  function collapsesearch() {
      var display = $(".search-input").css("animation-name");
      if(display != 'none'){
        $(".toggle-search").css({"display": "block"});
        $(".confirm-search").css({"display": "none"});
        $(".search-input").css({"animation-name": "collapse","right": "-100%"});
      }
    }
    $(".toggle-search").click(false);
    $(".confirm-search").click(false);
    $(".search-input").click(false);
    // heart button js
    $("i[name='like-button']").click(function(){
        $(this).removeClass('liked-shaked');
        $(this).toggleClass('liked');
        $(this).toggleClass('not-liked');
        $(this).toggleClass('far');
        $(this).toggleClass('fas');
        if($(this).hasClass("liked")) {
            $(this).addClass('liked-shaked');
        }
    });
    </script>
