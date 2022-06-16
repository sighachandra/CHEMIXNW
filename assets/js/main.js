;(function($){
    "use strict";

    $(document).ready(function(){

        /*----------------------
            Search Popup
        -----------------------*/
        var bodyOvrelay =  $('#body-overlay');
        var searchPopup = $('#search-popup');

        bodyOvrelay.on('click',function(e){
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click','#search',function(e){
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });


        /**-----------------------------
            Navbar fix
        ------------------------------*/ 
        $(document).on('click','.navbar-area .navbar-nav li.menu-item-has-children>a',function(e){
            e.preventDefault();
        })  

        /*---------------------------
            Indurance Services Slider
        ---------------------------*/
        var serviceSlider = $('.indurance-services-slider');
        if(serviceSlider.length > 0){
            serviceSlider.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<i class="prev-arrow fa fa-angle-left"></i>',
                nextArrow: '<i class="next-arrow fa fa-angle-right"></i>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    },
                ]
            });
        }

         /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();
        
        /*---------------------
            Back To Top
        ----------------------*/
        $(".back-to-top").on('click', function() {
            $("html").animate({
                "scrollTop": "0"
            }, 2000);
        });

        /*------------------------
            Indurance Video Play
        -------------------------*/
        var videoPlayBtn = $('.video-play-button a');
        if(videoPlayBtn.length > 0){
            videoPlayBtn.magnificPopup({
                type: 'iframe'
            });
        }
        /*----------------------
            Indurance Counter
        -----------------------*/
        var numberCounterup = $('.number-counting');
        if(numberCounterup.length > 0){
            numberCounterup.counterUp({
                delay: 20,
                time: 1000,
            });
        }
        /*---------------------------
            Indurance Partners Slider
        ---------------------------*/
        var partnerSlider = $('.indurance-partners-slider');
        if(partnerSlider.length > 0){
            partnerSlider.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
        

        /*-------------------------------
            Indurance Testimonial Slider
        -------------------------------*/
        var testimonialSlider = $('.indurance-testimonial-slider');
        if(testimonialSlider.length > 0){
            testimonialSlider.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
       

        /*-------------------------------
            Indurance News Slider
        -------------------------------*/
        var newsSlider = $('.indurance-news-slider');
        if(newsSlider.length > 0){
            newsSlider.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<i class="prev-arrow fa fa-angle-left"></i>',
                nextArrow: '<i class="next-arrow fa fa-angle-right"></i>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }
                ]
            });
        }


        /*-------------------------------
            Indurance Project Tab
        -------------------------------*/
        var recentCaseStudyFilter = $('.recent-case-study-filter-area');
        var caseStudyFIlterNav =  $('.indurance-project-tab li');
        
        if($('.project-area').length > 0){
            recentCaseStudyFilter.imagesLoaded(function () {
                var $grid = $('.grid').isotope({
                    itemSelector: '.grid-item',
                    layoutMode: 'fitRows',
                });
                // Filter Items on Click
                caseStudyFIlterNav.on( 'click', function() {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                });
            });
            // Active Link Switching 
            caseStudyFIlterNav.on('click', function(event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
        }
       
    });


    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        
        //back to top show/hide
       var ScrollTop = $('.back-to-top');
       if ($(window).scrollTop() > 1000) {
           ScrollTop.fadeIn(1000);
       } else {
           ScrollTop.fadeOut(1000);
       }

    });
           

    $(window).on('load',function(){

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(0);

    });

})(jQuery);