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
    
    
    });

}(jQuery));