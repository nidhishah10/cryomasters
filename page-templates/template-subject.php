<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Subject Page Template
 *
 * Handles to show subject Page Content
 * @since CryoMasters
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Subject Page Content template.
	get_template_part('page-contents/content', 'subject');
endwhile; //end of while
get_footer();?>