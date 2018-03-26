(function( $, doc ) {
    "use strict";

    (function(){

        // OPEN Modal
        $(document).on("click", ".iamui-modal--open", function(e){

            e.preventDefault();
            e.stopPropagation();
            
            var $this = $(this),
                $modal_id = $this.data('modal'),
                $modal = $("#iamui-modal-" + $modal_id),
                $content = $modal.find(".iamui-modal--box")
            ;

            $modal.addClass("iamui-is--active");
            $("html").css("overflow", "hidden");
            $("body").addClass("iamui-has--modal");

            setTimeout(function(){
                $content.addClass("iamui-is--active");
            });
            
        });
        
        // CLOSE Modal
        $(document).on("click", ".iamui-modal .iamui-header--action button", function(e){

            e.preventDefault();
            e.stopPropagation();

			var $modal = $(this).closest('.iamui-modal'),
				$content = $modal.find(".iamui-modal--box");

            $content.removeClass('iamui-is--active').addClass('iamui-is--inactive');

            setTimeout(function(){
                $modal.removeClass('iamui-is--active');
                $("html").css("overflow", "");
                $('body').removeClass('iamui-has--modal');
                $content.removeClass('iamui-is--inactive');
            }, 1000);
            
        });

    }());

}( jQuery, document ));