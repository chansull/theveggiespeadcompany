// Do the following code once jQuery is ready
jQuery( function( $ ) {
	var $galleryImage = $('.gallery-image').first();

	$('.thumbnail').on( 'click', function() {
		//$(this).toggleClass('highlighted');
		$galleryImage.attr('src', $(this).attr('src'));
	} );
});
