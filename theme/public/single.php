<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */


$context = Timber::get_context();
$timber_post = Timber::query_post();

$context['post'] = $timber_post;

$templates = array( 'posts/'. $timber_post->post_type .'.html.twig', 'posts/post.html.twig' );

Timber::render( $templates, $context );