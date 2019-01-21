(function($) {


    $(document).ready(function(){
        /*
        * Cache references for DOM elements
        */
        var dom = {
            $body:	 					$('body'),
            $menuToggle:				$('.menu-toggle'),
        };

        // Toggle site-nav visibility
        dom.$menuToggle.click(function(e){
            $(this).blur();
            dom.$body.toggleClass('nav-open');
        });

        // Scroll hero
        $("#scroll").click(function(e) {
            e.stopPropagation();
            $(this).blur();
            $([document.documentElement, document.body]).animate({
                scrollTop: $(window).height()
            }, 1000);
        });

        // Open Nav when hero is clicked
        $('.hero, .hero-contacts').on('click',function(e){
            e.stopPropagation();
            if(!dom.$body.hasClass('nav-open')) {
                dom.$body.toggleClass('nav-open');
            }
        });

        /*
         * Back to top.
         */
        $('#scroll-to-top').click(function(){
            $(this).blur();
            $('html, body').animate({scrollTop : 0}, 1000, function() {});
        });

         /*
         * WOW.
         */
        new WOW().init();

                /*
         * Article share buttons.
         */
        if(dom.$body.hasClass('single-post')) {
            var $share = $('.share-this'); // cache share
            if ( $share.length ) {
                // Facebook
                $share.find('.facebook a').on('click', function(e){
                    e.preventDefault();
                    var href = $(this).attr('href');
                    window.open(href, "Facebook", "toolbar=0,status=0,width=548,height=325");
                });

                // Twitter
                $share.find('.twitter a').on('click', function(e){
                    e.preventDefault();
                    var href = $(this).attr('href');
                    window.open(href, "Twitter", "toolbar=0,status=0,width=548,height=325");
                });

                // Share LinkedIn
                $share.find('.linkedin a').on('click', function(e){
                    e.preventDefault();
                    window.open( $(this).attr('href'), 'LinkedIn','toolbar=0,status=0,width=520,height=570');
                });
            }
        }

    });

}(jQuery));