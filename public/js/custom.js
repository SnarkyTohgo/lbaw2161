
(function($) {
  "use strict";

  // back to top
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('.backtotop:hidden').stop(true, true).fadeIn();
    } else {
      $('.backtotop').stop(true, true).fadeOut();
    }
  });

  $(function() {
    $(".scroll").click(function() {
      $("html,body").animate({
        scrollTop: $(".thetop").offset().top
      }, "slow");
      return false
    })
  });
 

  // preloader
  $(window).on('load', function(){
    $('#preloader').fadeOut('slow',function(){$(this).remove();});
  });
  

  // add to calendar
  addeventatc.settings({
    license    : "replace-with-your-licensekey",
    css        : true
  });


  // multy count down
  $('.countdown-list').each(function(){
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        var $this = $(this).html(event.strftime(''
          + '<li class="timer-item days"><strong>%D</strong><small>days</small></li>'
          + '<li class="timer-item hours"><strong>%H</strong><small>hours</small></li>'
          + '<li class="timer-item mins"><strong>%M</strong><small>mins</small></li>'
          + '<li class="timer-item seco"><strong>%S</strong><small>seco</small></li>'));
      });
    });
  });


  // gallery popup 
  $('.zoom-gallery').magnificPopup({
    type: 'image',
    closeBtnInside: false,
    delegate: '.popup-link',
    closeOnContentClick: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    preloader: true,
    mainClass: 'play-icon',
    fixedContentPos: true
  });

  
  // altranative menu 
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#sidebar-dismiss, .overlay').on('click', function () {
      $('#sidebar').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').addClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
  

  // search box
  $('.toggle-overlay').on('click', function() {
    $('.search-body').toggleClass('search-open');
  });

  
  // parallax 
  $('.jarallax').jarallax({
    speed: 0.3
  });

  
  // popup register & login modal
  $(function () {
    $('.login-modal-btn , .register-modal-btn').magnificPopup({
      modal: true,
      type: 'inline',
      preloader: false,
      focus: '#username'
    });
    $(document).on('click', '.popup-modal-dismiss', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
  });

  
  // header-section
  var mainHeader = $('.auto-hide-header'),
  secondaryNavigation = $('.cd-secondary-nav'),
    // this applies only if secondary nav is below intro section
    belowNavHeroContent = $('.sub-nav-hero'),
    headerHeight = mainHeader.height();

    // set scrolling variables
    var scrolling = false,
    previousTop = 0,
    currentTop = 0,
    scrollDelta = 10,
    scrollOffset = 150;

    $(window).on('scroll', function(){
      if( !scrolling ) {
        scrolling = true;
        (!window.requestAnimationFrame)
        ? setTimeout(autoHideHeader, 250)
        : requestAnimationFrame(autoHideHeader);
      }
    });

    $(window).on('resize', function(){
      headerHeight = mainHeader.height();
    });

    function autoHideHeader() {
      var currentTop = $(window).scrollTop();

      ( belowNavHeroContent.length > 0 ) 
      ? checkStickyNavigation(currentTop) // secondary navigation below intro
      : checkSimpleNavigation(currentTop);

      previousTop = currentTop;
      scrolling = false;
    }

    function checkSimpleNavigation(currentTop) {
    // there's no secondary nav or secondary nav is below primary nav
    if (previousTop - currentTop > scrollDelta) {
        // if scrolling up...
        mainHeader.removeClass('is-hidden');
      } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
        // if scrolling down...
        mainHeader.addClass('is-hidden');
      }
    }

    function checkStickyNavigation(currentTop) {
    // secondary nav below intro section - sticky secondary nav
    var secondaryNavOffsetTop = belowNavHeroContent.offset().top - secondaryNavigation.height() - mainHeader.height();
    
    if (previousTop >= currentTop ) {
        // if scrolling up... 
        if( currentTop < secondaryNavOffsetTop ) {
          // secondary nav is not fixed
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.removeClass('fixed slide-up');
          belowNavHeroContent.removeClass('secondary-nav-fixed');
        } else if( previousTop - currentTop > scrollDelta ) {
          // secondary nav is fixed
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.removeClass('slide-up').addClass('fixed'); 
          belowNavHeroContent.addClass('secondary-nav-fixed');
        }
        
      } else {
        // if scrolling down...  
        if( currentTop > secondaryNavOffsetTop + scrollOffset ) {
          // hide primary nav
          mainHeader.addClass('is-hidden');
          secondaryNavigation.addClass('fixed slide-up');
          belowNavHeroContent.addClass('secondary-nav-fixed');
        } else if( currentTop > secondaryNavOffsetTop ) {
          // once the secondary nav is fixed, do not hide primary nav if you haven't scrolled more than scrollOffset 
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.addClass('fixed').removeClass('slide-up');
          belowNavHeroContent.addClass('secondary-nav-fixed');
        }

      }
    };
  

  // sticky menu
  var headerId = $(".sticky-header-section , .scrolltop-fixed-header-section");
  $(window).on('scroll' , function() {
    var amountScrolled = $(window).scrollTop();
    if ($(this).scrollTop() > 250) {
      headerId.removeClass("not-stuck");
      headerId.addClass("stuck");
    } else {
      headerId.removeClass("stuck");
      headerId.addClass("not-stuck");
    }
  });

  
  // index-1 - main-carousel1
  $('#main-carousel1').owlCarousel({
    items:1,
    nav:true,
    margin:0,
    loop:true,
    center:true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000
  });

  var dot = $('#main-carousel1 .owl-dot');
  dot.each(function() {
    var index = $(this).index() + 1;
    if(index < 10){
      $(this).html('0').append(index);
    }else{
     $(this).html(index);
   }
 });

  
  // index-2 - main-carousel2
  $('#main-carousel2').slick({
    speed: 500,
    fade: true,
    dots: false,
    arrows: true,
    autoplay: true,
    infinite: true,
    slidesToShow: 1,
    cssEase: 'linear',
    autoplaySpeed: 2000
  });

  
  // upcomming-event-carousel - main-slider
  $('#upcomming-event-carousel').owlCarousel({
    items:2,
    loop:true,
    margin:30,
    nav: true,
    dots: false,
    center: true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1,
        nav: false,
        dots: true,
      },
      360:{
        items:1,
        nav: false,
        dots: true,
      },
      768:{
        items:1,
      },
      991:{
        items:1,
      },
      1199:{
        items:2,
      }
    }
  });

  
  // event-expertise-carousel
  $('#event-expertise-carousel').owlCarousel({
    items:3,
    loop:true,
    margin:30,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1,
      },
      360:{
        items:1,
      },
      768:{
        items:2,
      },
      991:{
        items:3,
      },
      1199:{
        items:3,
      }
    }
  });

  
  // speaker section - carousel
  $(".slider-for").slick({
    fade: true,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: ".slider-nav"
  });
  $(".slider-nav").slick({
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
    asNavFor: ".slider-for",
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerMode: true
      }
    }
    ]
  });

  
  // partners-carousel
  $('#partners-carousel').owlCarousel({
    nav:true,
    items: 1,
    loop:true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:4000,
    autoplayHoverPause:true
  });


  // partners-carousel
  $('#clients-testimonial-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:30,
    nav:false,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    animateIn: 'lightSpeedIn'
  });

  
  // event-details-carousel
  $('#event-details-carousel').owlCarousel({
    nav:true,
    items: 1,
    loop:true,
    smartSpeed:1000
  });

  
  // event-details-carousel
  $('#testimonial5-carousel').owlCarousel({
    items:1,
    nav:true,
    loop:true,
    margin:30,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    animateIn: 'lightSpeedIn'
  });

  
  // management-service-carousel --> home 4
  $('#management-service-carousel').owlCarousel({
    items:4,
    margin:2,
    nav:false,
    loop:true,
    autoplay:true,
    smartSpeed:500,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1,
      },
      360:{
        items:1,
      },
      768:{
        items:2,
      },
      991:{
        items:3,
      },
      1199:{
        items:4,
      }
    }
  });

  
  // gallery masonry

  // init Isotope
  var $grid = $(".grid").isotope({
    itemSelector: ".element-item",
    layoutMode: "fitRows"
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this)
      .find(".number")
      .text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this)
      .find(".name")
      .text();
      return name.match(/ium$/);
    }
  };

  // bind filter button click
  $(".filters-button-group").on("click", "button", function() {
    var filterValue = $(this).attr("data-filter");
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $(".button-group").each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on("click", "button", function() {
      $buttonGroup.find(".is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });
  });

  var $grid = $('.grid').isotope({
    percentPosition: true,
    itemSelector: '.grid-item',
    masonry: {
      columnWidth: '.grid-sizer'
    }
  });

  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });


})(jQuery);