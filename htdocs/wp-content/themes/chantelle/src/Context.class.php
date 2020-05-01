<?php
class Context {

	protected static $c_context;

	// Define get_context()
	public static function get_context() {
		// Check if variable is empty
		if ( ! is_null( Context::$c_context) ) {
			return Context::$c_context;
		}

		// Default WordPress Details
		$context['http_host'] = \Timber\URLHelper::get_scheme() . '://' . \Timber\URLHelper::get_host();
		$context['wp_title'] = \Timber\Helper::get_wp_title();
		$context['wp_head'] = new \Timber\FunctionWrapper( 'wp_head' );
		$context['wp_footer'] = new \Timber\FunctionWrapper( 'wp_footer' );
		$context['body_class'] = implode( ' ', get_body_class() );
		$context['site'] = new \Timber\Site();
		$context['request'] = new \Timber\Request();


        $context['post'] = new Timber\Post();

		$context['content'] = get_field( 'content' );

		$context['image'] = new \TimberImage( get_field( 'home_page_header_image' ) );
		$context['about_heading'] = get_field( 'about_heading_' ) ;
		$context['about_content'] = get_field( 'about_content' );
		$context['contact_headline_text'] = get_field( 'contact_headline_text' );
		$context['image_blocks'] = new \TimberImage( get_field( 'image_blocks' ) );
		$context['image'] = new \TimberImage( get_field( 'image' ) );
		$context['image_two'] = new \TimberImage( get_field( 'image_two' ) );
		$context['image_three'] = new \TimberImage( get_field( 'image_three' ) );
		$context['contact_header_image'] = new \TimberImage( get_field( 'contact_header_image' ) );
		$context['product_gallery'] = new \TimberImage( get_field( 'product_gallery' ) );
		$context['product_gallery_two'] = new \TimberImage( get_field( 'product_gallery_two' ) );
		$context['product_gallery_three'] = new \TimberImage( get_field( 'product_gallery_three' ) );
		$context['product_gallery_four'] = new \TimberImage( get_field( 'product_gallery' ) );
		$context['product_gallery_five'] = new \TimberImage( get_field( 'product_gallery_five' ) );
		$context['product_gallery_six'] = new \TimberImage( get_field( 'product_gallery_six' ) );

		// Add context to empty $c_context variable
		Context::$c_context = apply_filters( 'timber/context', $context );
		return Context::$c_context;






	}
}
