

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

	// Get the first instance of .full-product-image
	var $galleryImage = $('.full-product-image').first();

	// On click of the thumbnail
	$('.thumbnail').on( 'click', function() {
		//$(this).toggleClass('highlighted');

		// element.attr('src') means get the src
		// elemnt.attr('src', value) means set src to be a value
		$galleryImage.attr('src', $(this).attr('src'));
	} );
});

jQuery( function( $ ) {
	$('.nav-button').on( 'click', function(){
		$('.mobile-nav').addClass('open'); // makes the mobile nav slide out
		$('body').addClass('nav-open'); // adds the body class for the overlay
	} );
});

jQuery( function( $ ) {
	$('.nav-close').on( 'click', function(){
		$('.mobile-nav').removeClass('open');
		$('body').removeClass('nav-open');
	} );
});


jQuery( function( $ ) {
	$('.mobile-overlay').on( 'click', function(){
		$('body').removeClass('nav-open');
		$('.mobile-nav').removeClass('open');
	} );
});

jQuery( function( $ ) {
	$('.product-menu-title').on( 'click', function(){
		//if the parent does have the class open
		if($(this).parent().hasClass('open')){

			//remove the class open
			$(this).parent().removeClass('open');
		} else {
			//then add the class open
			$(this).parent().addClass('open');

		};


	} );
});





















// don't always need variable - helps to save writing it out many times in code. Can be written like this below and will also work

//jQuery( function( $ ) {
	//var $galleryImage = $('.full-product-image').first();

	//$('.thumbnail').on( 'click', function() {
		//$(this).toggleClass('highlighted');
	//	$('.full-product-image').attr('src', $(this).attr('src'));
//	} );
//});
