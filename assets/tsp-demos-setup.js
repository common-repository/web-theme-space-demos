/**
 * Getting Started
 */
jQuery( document ).ready( function ( $ ) {

	$( '.ads-gsm-btn' ).click( function ( e ) {
		e.preventDefault();

		// Show updating gif icon.
        $( this ).addClass( 'updating-message' );

		// Change button text.
        $( this ).text( tsp_demos_setup.btn_text );

		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: {
                action     : 'tsp_demos_setup_getting_started',
                security : tsp_demos_setup.nonce
            },
			success:function( response ) {
                var redirect_uri;

				redirect_uri         = response.data.redirect;
                window.location.href = redirect_uri;
			},
			error: function( xhr, ajaxOptions, thrownError ){
				console.log(thrownError);
			}
		});
	} );
} );
