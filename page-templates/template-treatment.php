<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Treatment Page Template
 *
 * Handles to show treatment Page Content
 * @since CryoMasters
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Treatment Page Content template.
	get_template_part('page-contents/content', 'treatment');
endwhile; //end of while
get_footer();?>