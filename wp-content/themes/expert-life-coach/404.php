<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Expert Life Coach
 */

get_header(); ?>

<section class="error-area">
	<div class="container">
		<div class="error-item text-center">
			<h2><?php esc_html_e('Page Not Found','expert-life-coach'); ?></h2>
			<p><?php esc_html_e('The page you were looking for could not be found.','expert-life-coach'); ?></p>
			<a class="theme-button back-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Go to Home','expert-life-coach'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>