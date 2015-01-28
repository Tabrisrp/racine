jQuery(document).ready(function($) {
    $( '#drop').on( 'click', function(e) {
        e.preventDefault();
        $( '.main-navigation' ).slideToggle();
    });

    function mobile_dropdown_menu() {
        if ( "matchMedia" in window ) {
            if ( window.matchMedia( "(max-width:48em)" ).matches ) {
                $( '.main-navigation').hide().removeClass( 'flex-h').addClass( 'flex-v' );
            } else {
                $( '.main-navigation').show().removeClass( 'flex-v').addClass( 'flex-h' );
            }
        }
    }
    window.addEventListener( 'resize', mobile_dropdown_menu, false );
    mobile_dropdown_menu();
});