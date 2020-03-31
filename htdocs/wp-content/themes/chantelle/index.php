<?php
$context = Timber::context();
$context['post'] = new Timber\Post();
$context['wp_head'] = new \Timber\FunctionWrapper( 'wp_head' );
$context['wp_footer'] = new \Timber\FunctionWrapper( 'wp_footer' );
Timber::render( 'index.twig', $context );
