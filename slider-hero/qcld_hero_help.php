<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit
?>
<?php
	function  qcld_sliderhero_help() {
		?>
		<div class="wrap">
		
			<div id="poststuff">
			
				<div id="post-body" class="metabox-holder columns-2">
				
					<div id="post-body-content" style="position: relative;">
				

						

						
						<div class="clear">
						<u>
							<h1><?php esc_html_e( 'Help', 'slider-hero' ); ?></h1>
						</u>
						</div>

						<div>
							<h3><?php esc_html_e( 'General Settings', 'slider-hero' ); ?></h3>
					

							<p>
								<strong><u><?php esc_html_e( 'Custom:', 'slider-hero' ); ?></u></strong>
								<br>
									<?php esc_html_e( 'This option will allow you to provide custom width and height for your slider.', 'slider-hero' ); ?>
								<br>
								<br>
								<strong><u><?php esc_html_e( 'Full Width:', 'slider-hero' ); ?></u></strong>
								<br>
								<?php esc_html_e( 'Provide a custom height in px for your slider. Width will be automatically calculated depending on your screen size.', 'slider-hero' ); ?>
								<br>
								<br>
								<strong><u><?php esc_html_e( 'Full Screen:', 'slider-hero' ); ?></u></strong>
								<br>
								
								<?php esc_html_e( 'No need to provide any width & height. It will automatically fit any screen size and auto-calculate necessary width and height.', 'slider-hero' ); ?>
								<br>
								<br>
								<strong><u><?php esc_html_e( 'Auto:', 'slider-hero' ); ?></u></strong>
								<br>
								
								<?php esc_html_e( 'Slider size will fit according to container width. You can define custom height.', 'slider-hero' ); ?>
							</p>
							
						</div>

						<div style="padding: 15px 10px; border: 1px solid #ccc; text-align: center; margin-top: 20px;">
							 <?php esc_html_e( 'Crafted By:', 'slider-hero' ); ?> <a href="<?php echo esc_url( 'http://www.quantumcloud.com' ); ?>" target="_blank"><?php esc_html_e( 'Web Design Company', 'slider-hero' ); ?></a> - <?php echo esc_attr( 'QuantumCloud' ); ?> 
						</div>
						
					  </div>
					  <!-- /post-body-content -->	
					  

						
					</div>
					<!-- /post-body-->	
				
				</div>
				<!-- /poststuff -->
			
			</div>
			<!-- /wrap -->
			
		<?php
	}


