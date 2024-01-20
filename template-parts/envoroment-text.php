<?php 
    /* Get current development mode*/
    $development_mode = wp_get_development_mode();

    if ( $development_mode ) {
        esc_html_e( 'Development Mode is active!', 'kkkrn-style' );
    } else {
        esc_html_e( 'Development Mode is not active.', 'kkkrn-style' );
    }

?>
