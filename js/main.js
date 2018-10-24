(function($) {


    $(document).ready(function(){
        /*
        * Cache references for DOM elements
        */
        var dom = {
            $body:	 					$('body'),
            $menuToggle:				$('.menu-toggle'),
            $hero:                      $('.hero'),
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
        dom.$hero.on('click',function(e){
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

    });

}(jQuery));