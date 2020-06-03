

// Do the following code once jQuery is ready
//jQuery( function( $ ) {
	// When a popup-trigger is clicked
	//$('button[name="popup-trigger"]').on( 'click', function() {
		// Set a variable for the clicked image src
		//var src = $(this).children( 'img' ).attr( 'src' );
		// Assign the src to the popup image
		//$('#popup-img').attr( 'src', src );
	//} );
//

//var a = 5;
//var b = 3;

//if( a < 5 ) {
	//console.log('dave');
//} else {
//	console.log('steve');
//}

jQuery( function( $ ) {
	var $galleryImage = $('.full-product-image').first();

	$('.thumbnail').on( 'click', function() {
		//$(this).toggleClass('highlighted');
		$galleryImage.attr('src', $(this).attr('src'));
	} );
});
