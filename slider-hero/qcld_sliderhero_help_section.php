<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function qcld_sliderhero_sessions_license_callback(){
	?>
<div id="wrap">
  	<h1><?php echo esc_html( 'Help Section', 'slider-hero' ); ?></h1>
	<div id="help_section">
	  <h3><?php echo esc_html( 'General Settings', 'slider-hero' ); ?></h3>
	  <p> <strong><u><?php echo esc_html( 'Custom:', 'slider-hero' ); ?></u></strong> <br>
	    <?php echo esc_html( 'This option will allow you to provide custom width and height for your slider.', 'slider-hero' ); ?> <br>
	    <br>
	    <strong><u><?php echo esc_html( 'Full Width:', 'slider-hero' ); ?></u></strong> <br>
	    <?php echo esc_html( 'Provide a custom height in px for your slider. Width will be automatically calculated depending on your screen size.', 'slider-hero' ); ?> <br>
	    <br>
	    <strong><u><?php echo esc_html( 'Full Screen:', 'slider-hero' ); ?></u></strong> <br>
	    <?php echo esc_html( 'No need to provide any width & height. It will automatically fit any screen size and auto-calculate necessary width and height.', 'slider-hero' ); ?> <br>
	    <br>
	    <strong><u><?php echo esc_html( 'Auto:', 'slider-hero' ); ?></u></strong> <br>
	    <?php echo esc_html( 'Slider size will fit according to container width. You can define custom height.', 'slider-hero' ); ?> </p>
	  <h3><?php echo esc_html( 'Shortcode Options', 'slider-hero' ); ?></h3>
	  <p> <strong><u><?php echo esc_html( 'preloader', 'slider-hero' ); ?></u></strong> <br>
	    <?php echo esc_html( 'This option will allow you to enable/disable preloader for a slider', 'slider-hero' ); ?> <br>
	    <?php echo esc_html( 'Example: preloader="on"', 'slider-hero' ); ?> </p>
	  <div class="hero_video_container">
	    <div class="hero_section_video">
	      <h3><?php echo esc_html( 'Get Started Video', 'slider-hero' ); ?></h3>
	      <iframe width="560" height="315" src="<?php echo esc_url('https://www.youtube.com/embed/KfH2KRpbObQ'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	    <div class="hero_section_video">
	      <h3><?php echo esc_html( 'Intro Builder Video', 'slider-hero' ); ?></h3>
	      <iframe width="560" height="315" src="<?php echo esc_url('https://www.youtube.com/embed/k9CFs-hiBUk'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
		<div style="clear:both;"></div>
	  </div>


	  <p class="hero_section_dev_credit"><?php echo esc_html( 'Developed by ChatBot for WordPress', 'slider-hero' ); ?> <a href="<?php echo esc_url('https://www.wpbot.pro/'); ?>" target="_blank" rel="nofollow"> <?php echo esc_html( 'WPBot', 'slider-hero' ); ?></a></p>
	</div>
</div>

<?php

}



