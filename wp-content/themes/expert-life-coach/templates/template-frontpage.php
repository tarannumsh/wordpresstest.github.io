<?php
/**
	Template Name: Frontpage
*/

get_header(); 

get_template_part('template-parts/sections/section','slider');
get_template_part('template-parts/sections/section','about');
get_template_part('template-parts/sections/section','content'); ?>

<?php get_footer(); ?>