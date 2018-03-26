(function( $, doc ) {
    "use strict";

    (function(){

        $(document).ready(function() {

            $(".iamui-select").select2({
                allowClear: false,
                minimumResultsForSearch: Infinity,
                containerCssClass: "iamui-select2",
                dropdownCssClass: "iamui-select2-dropdown"
            });

            $(".wpcf7-field select").select2({
                allowClear: false,
                minimumResultsForSearch: Infinity,
                containerCssClass: "iamui-wpcf7-select2",
                dropdownCssClass: "iamui-wpcf7-select2-dropdown"
            });
            
        });

    }());

}( jQuery, document ));