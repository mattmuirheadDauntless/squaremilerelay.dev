$(function(){

    // Fix cta in header if waypoint hit
    new Waypoint({
        element: $('#ctaBanner'),
        handler: function() {
            $('body').toggleClass('cta-fixed');
        },
        offset: function() {
            return -this.element.height();
        }
    });

    // Add class to header on scroll from top
    new Waypoint({
        element: $('body'),
        handler: function() {
            $('.header').toggleClass('fixed-header');
        },
        offset: -100
    });

    // Click to handle mobile menu
    $('.menu-btn').click(function() {
        $('body').toggleClass('menu-open');
        $('.has-child').removeClass('active');
    });

    // Hover to handle dropdown menu
    $('.nav .has-child').hover(function() {
        if ( $(window).scrollTop() <= 100 ) {
            $('.header').toggleClass('fixed-header');
        }
    });

    // Mobile Race Locations click from the menu
    $('.nav .has-child').click(function() {
        $('.has-child').toggleClass('active');
    });

    // input validation
    // email
    $('input[type="email"]').on('input', function() {
        var input=$(this);
        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var is_email=re.test(input.val());
        if(is_email){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });

    //End input validation

    //handle home page accordion nav
    $('.about-accordion .nav-items li').click(function() {
        var $this = $(this);

        $('.about-accordion .nav-items li').removeClass('active');
        $this.addClass('active');
    });


    //Isotope js, NEWS PAGE:
    var $newsGrid = $('.news').isotope({
        itemSelector: '.news-item',
        percentPosition: true,
        masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
        }
    });

    $newsGrid.imagesLoaded().progress( function() {
         $newsGrid.isotope('layout');
    });

    //Isotope NEWS click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.news').isotope({
            filter: selector
        });
        return false;
    });

    //News Filter
    $('.news-filter .filter-btn').click(function() {
       $('.news-filter').toggleClass('active');
    });

    //Flickity
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      pageDots: false,
      prevNextButtons: false,
      contain: true
    });

    //Isotope, CHARITIES PAGE:
    var $charityGrid = $('.charities').isotope({
        itemSelector: '.charities-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $charityGrid.imagesLoaded().progress( function() {
         $charityGrid.isotope('layout');
    });

    //Charities Filter
     $('.charities-filter .charities-filter-btn').click(function() {
       $('.charities-filter').toggleClass('active');
    });

    //Isotope charities click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.charities').isotope({
            filter: selector
        });
        return false;
    });

    //Isotope, COMPANIES PAGE:
    var $companiesGrid = $('.companies').isotope({
        itemSelector: '.companies-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $companiesGrid.imagesLoaded().progress( function() {
         $companiesGrid.isotope('layout');
    });

    //companies Filter
     $('.companies-filter .companies-filter-btn').click(function() {
       $('.companies-filter').toggleClass('active');
    });

    //Isotope companies click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.companies').isotope({
            filter: selector
        });
        return false;
    });

    //Isotope, PARTNERS PAGE:
    var $partnersGrid = $('.partners').isotope({
        itemSelector: '.partners-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $partnersGrid.imagesLoaded().progress( function() {
         $partnersGrid.isotope('layout');
    });

    //partners Filter
     $('.partners-filter .partners-filter-btn').click(function() {
       $('.partners-filter').toggleClass('active');
    });

    //Isotope partners click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.partners').isotope({
            filter: selector
        });
        return false;
    });


    //Isotope, SINGLE-COMPANY PAGE:
    var $singleCompanyGrid = $('.single-company').isotope({
        itemSelector: '.single-company-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $singleCompanyGrid.imagesLoaded().progress( function() {
         $singleCompanyGrid.isotope('layout');
    });

    //single-company Filter
     $('.single-company-filter .single-company-filter-btn').click(function() {
       $('.single-company-filter').toggleClass('active');
    });

    //Isotope partners click function
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.single-company').isotope({
            filter: selector
        });
        return false;
    });

    //Isotope, GLOBAL-GALLERY PAGE, vid-gallery:
    var $globalGalleryGrid = $('.vid-gallery').isotope({
        itemSelector: '.vid-item',
        percentPosition: true,
        layoutMode: 'fitRows'
    });

    $globalGalleryGrid.imagesLoaded().progress( function() {
         $globalGalleryGrid.isotope('layout');
    });

    //global-gallery Filter
     $('.global-gallery-filter .global-gallery-filter-btn').click(function() {
       $('.global-gallery-filter').toggleClass('active');
    });



    //Isotope, GLOBAL-GALLERY PAGE, img-gallery:
    var $globalGalleryGrid = $('.img-gallery').isotope({
        itemSelector: '.img-item',
        percentPosition: true,
        layoutMode: 'masonry'
    });

    $globalGalleryGrid.imagesLoaded().progress( function() {
         $globalGalleryGrid.isotope('layout');
    });

    //global-gallery Filter
     $('.global-gallery-filter .global-gallery-filter-btn').click(function() {
       $('.global-gallery-filter').toggleClass('active');
    });
});
