</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php $expert_life_coach_footer_widgets_setting = get_theme_mod('expert_life_coach_footer_widgets_setting','1');
		do_action('expert_life_coach_footer_above'); 
			if ( is_active_sidebar( 'expert-life-coach-footer-widget-area' ) ) { 
				if( $expert_life_coach_footer_widgets_setting != ''){?> ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar( 'expert-life-coach-footer-widget-area' ); ?>
				</div>  
			<?php } ?>
		<?php }?>
	</div>
	
	<?php 
		$expert_life_coach_footer_copyright = get_theme_mod('expert_life_coach_footer_copyright','');
	?>
	<?php $expert_life_coach_footer_copyright_setting = get_theme_mod('expert_life_coach_footer_copyright_setting','1');
	 if( $expert_life_coach_footer_copyright_setting != ''){?> 
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">
				<?php
					echo esc_html( apply_filters('expert_life_coach_footer_copyright',($expert_life_coach_footer_copyright)));
			    ?>
				<?php if($expert_life_coach_footer_copyright == "") { ?>
						<?php
						   echo esc_html( 'Expert Life Coach By seothemesexpert.com','expert-life-coach');
						?>
						<span> | </span>
						<a href="https://wordpress.org/">
							<?php
							   echo esc_html( 'WordPress Theme','expert-life-coach');
							?>
				<?php } ?>
			</p>
		</div>
	</div>
	<?php }?>
	<?php $expert_life_coach_scroll_top = get_theme_mod('expert_life_coach_scroll_top_setting','1');
      if($expert_life_coach_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','expert-life-coach'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
