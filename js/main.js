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
            $(this).blur();
            $([document.documentElement, document.body]).animate({
                scrollTop: $(window).height()
            }, 1000);
        });
    
    
    });

}(jQuery));