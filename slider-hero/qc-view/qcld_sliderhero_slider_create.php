<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


function qcld_sliderhero_free_sliders_type() { 
$effects = array(
'No Effect','Intro Builder','Aeronautics Effect','Antigravity Flow','Balls &amp; Gravity Effect','Bird Flying Effect','Blob Effect','Blade Effect','Blur Effect','Bubble','Campfire','Circle Circle Intersection','Cloudy Sky Effect','Confetti Effect','Cosmic Web','Colorful Particle','Cursor And Paint','Day Night Effect','Division Effect','Directional Force','Distance','Electric Clock','Firework','Fizzy Sparks','Float and Rain','Floating Leafs','Flowing Circle Effect','Flying Rocket Effect','Grid Effect','Helix Corruption','Helix Chaos','Helix Multiple','Glitch','Iconsahedron Effect','Intersecting Line Effect','Just Cloud','Link Particle','Liquid Landscape','Matrix Effect','Metaballs','Microcosm Effect','Moving Color Wave','NASA','Neno Hexagon','Noise Effect','Nyan Cat','Orbital Effect','Particle Effect','Particle Helix','Particle System','Hacker','Physics Bug','Racing Particles','Rain Effect','Rainy Season','Rays and Particles','Play or Work?','Rain Of Line','Rising and falling cubes','Shape Animation','Space Elevator','Snow Effect','Squidematics','Stars Effect','Stellar Cloud','Subvisual','Tag Canvas','The Great Attractor','Thibaut','Tiny Galaxy Effect','Torus of Cubes','Water Effect','Wave Effect','Wave Animation Effect','Waaave Canvas','Walking Background','Warp Speed','Water Swimming','Waving Cloth','Water Droplet','Wormhole Effect','Word Cloud','Valentine Effect','Ygekpg Effect',
);
?>

	<div class="wrap">
		<h1><?php echo esc_html( 'Slider-Hero', 'slider-hero' ); ?></h1>
	<div class="qchero_sliders_list_wrapper">
		<div class="sliderhero_menu_title">
			<h2 style="font-size: 26px;"><?php echo esc_html( 'Slider-Hero', 'slider-hero' ); ?></h2>
		</div>
		<p class="hero_create_slider_header"><?php echo esc_html( 'Choose an Effect to Start Creating a New Slider. Choose "No Effect" if You Want a Simple Image Slider or only Video Background.', 'slider-hero' ); ?></p>
		<div class="form_wrapper_sliderhero">
			
			<div class="hero-intro-effect">
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=intro'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/intro_effect.jpg' ?>" alt="Intro Builder" />
					
				</a>
			</div>
			
			<div class="effect_selection_area" style="clear:both;float:none;display:table;height: 195px; margin: 0 auto;">
			

				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=youtube_video'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/youtube_video.png' ?>" alt="Youtube Video" />
					<p><?php echo esc_html( 'Youtube Video Slider', 'slider-hero' ); ?></p>
				</a>

			
			</div>
			
			<div class="effect_selection_area">
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=no_effect'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/no-effect.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'No Effect', 'slider-hero' ); ?></p>
				</a>
				
				
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=particle'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/default.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'Particle Effect', 'slider-hero' ); ?></p>
				</a>
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=particle_snow'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/snow.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'Snow Effect', 'slider-hero' ); ?></p>
				</a>

				
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=particle_nasa'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/nasa.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'NASA', 'slider-hero' ); ?></p>
				</a>
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=particle_bubble'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/bubble.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'Bubble', 'slider-hero' ); ?></p>
				</a>
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=nyan_cat'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/nyan_cat.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'Nyan Cat', 'slider-hero' ); ?></p>
				</a>
				<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=slider_hero_add_slider&type=cubes_animation'), 'slider_hero_create_action' ) ); ?>">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/cubes_animation.jpg' ?>" alt="" />
					<p><?php echo esc_html( 'Cubes Animation', 'slider-hero' ); ?></p>
				</a>
				
				
				<div style="clear:both"></div>
				<p style="font-size: 17px;color: red;text-align:center"><?php echo esc_html( 'Note: You can add Youtube Video as Slider background for all of the above slider effects except for Intro builder & Cubes Animation.', 'slider-hero' ); ?></p>
				
				<div class="hero_pro_effects" style="clear:both;float:none;display:table;height: 195px; margin: 0 auto; margin-top: 54px;">
			
				<div class="unlink-pro">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/custom_video.png' ?>" alt="Video" />
					<p><?php echo esc_html( 'Custom Video Slider', 'slider-hero' ); ?> <span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
				</div>
				<div class="unlink-pro">
					<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/vimeo_video.png' ?>" alt="Vimeo Video" />
					<p><?php echo esc_html( 'Vimeo Video Slider', 'slider-hero' ); ?> <span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
				</div>
			
			</div>
				
				<div class="hero_pro_effects">
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/aeronautics.jpg' ?>" alt="Aeronautics Effect" />
						<p><?php echo esc_html( 'Aeronautics Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>				
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/antigravity.jpg' ?>" alt="Antigravity Flow" />
						<p><?php echo esc_html( 'Antigravity Flow', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/animated_cloud.jpg' ?>" alt="Animated Cloud" />
						<p><?php echo esc_html( 'Animated Cloud', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/ballsgravity.jpg' ?>" alt="Balls & Gravity Effect" />
						<p><?php echo esc_html( 'Balls & Gravity Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/bird.png' ?>" alt="Bird Flying Effect" />
						<p><?php echo esc_html( 'Bird Flying Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/blob.jpg' ?>" alt="Blob Effect" />
						<p><?php echo esc_html( 'Blob Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/glitch.jpg' ?>" alt="Blade Effect" />
						<p><?php echo esc_html( 'Blade Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/blur.jpg' ?>" alt="Blur Effect" />
						<p><?php echo esc_html( 'Blur Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/campfire.jpg' ?>" alt="Campfire" />
						<p><?php echo esc_html( 'Campfire', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/circle.jpg' ?>" alt="Circle Circle Intersection" />
						<p><?php echo esc_html( 'Circle Circle Intersection', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/cloudysky.jpg' ?>" alt="Cloudy Sky Effect" />
						<p><?php echo esc_html( 'Cloudy Sky Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>				
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/confetti.jpg' ?>" alt="Confetti Effect" />
						<p><?php echo esc_html( 'Confetti Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/cosmic_web.jpg' ?>" alt="Cosmic Web" />
						<p><?php echo esc_html( 'Cosmic Web', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>				
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/colorful_particle.jpg' ?>" alt="Colorful Particle" />
						<p><?php echo esc_html( 'Colorful Particle', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/cursorandpaint.jpg' ?>" alt="Cursor And Paint" />
						<p><?php echo esc_html( 'Cursor And Paint', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/daynight.jpg' ?>" alt="Day Night Effect" />
						<p><?php echo esc_html( 'Day Night Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/division.jpg' ?>" alt="Division Effect" />
						<p><?php echo esc_html( 'Division Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/directional.jpg' ?>" alt="Directional Force" />
						<p><?php echo esc_html( 'Directional Force', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/distance.jpg' ?>" alt="Distance" />
						<p><?php echo esc_html( 'Distance', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/electric_clock.jpg' ?>" alt="Electric Clock" />
						<p><?php echo esc_html( 'Electric Clock', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/firework.jpg' ?>" alt="Firework" />
						<p><?php echo esc_html( 'Firework', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/fizzy_sparks.jpg' ?>" alt="Fizzy Sparks" />
						<p><?php echo esc_html( 'Fizzy Sparks', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/floatrain.jpg' ?>" alt="Float and Rain" />
						<p><?php echo esc_html( 'Float and Rain', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/floatingleafs.png' ?>" alt="Floating Leafs" />
						<p><?php echo esc_html( 'Floating Leafs', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/flowingcircle.jpg' ?>" alt="Flowing Circle Effect" />
						<p><?php echo esc_html( 'Flowing Circle Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/flyingrocket.jpg' ?>" alt="Flying Rocket Effect" />
						<p><?php echo esc_html( 'Flying Rocket Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/grid.jpg' ?>" alt="Grid Effect" />
						<p><?php echo esc_html( 'Grid Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/corruption.jpg' ?>" alt="Helix Corruption" />
						<p><?php echo esc_html( 'Helix Corruption', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/chaos.jpg' ?>" alt="Helix Chaos" />
						<p><?php echo esc_html( 'Helix Chaos', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/helix_multiple.jpg' ?>" alt="Helix Multiple" />
						<p><?php echo esc_html( 'Helix Multiple', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/hero_404.jpg' ?>" alt="Glitch" />
						<p><?php echo esc_html( 'Glitch', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/iconsahedron.jpg' ?>" alt="Iconsahedron Effect" />
						<p><?php echo esc_html( 'Iconsahedron Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/line.jpg' ?>" alt="Intersecting Line Effect" />
						<p><?php echo esc_html( 'Intersecting Line Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/just_cloud.jpg' ?>" alt="Just Cloud" />
						<p><?php echo esc_html( 'Just Cloud', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/link_particle.jpg' ?>" alt="Link Particle" />
						<p><?php echo esc_html( 'Link Particle', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/liquid_landscape.jpg' ?>" alt="Liquid Landscape" />
						<p><?php echo esc_html( 'Liquid Landscape', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/matrix.jpg' ?>" alt="Matrix Effect" />
						<p><?php echo esc_html( 'Matrix Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/metaballs.jpg' ?>" alt="Metaballs" />
						<p><?php echo esc_html( 'Metaballs', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/microcosm.jpg' ?>" alt="Microcosm Effect" />
						<p><?php echo esc_html( 'Microcosm Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/svg_animation.jpg' ?>" alt="Moving Color Wave" />
						<p><?php echo esc_html( 'Moving Color Wave', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

								
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/neno_hexagon.jpg' ?>" alt="Neno Hexagon" />
						<p><?php echo esc_html( 'Neno Hexagon', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/noise_particle.jpg' ?>" alt="Noise Effect" />
						<p><?php echo esc_html( 'Noise Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/orbital.jpg' ?>" alt="Orbital Effect" />
						<p><?php echo esc_html( 'Orbital Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/helix.jpg' ?>" alt="Particle Helix" />
						<p><?php echo esc_html( 'Particle Helix', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/particle_system.jpg' ?>" alt="Particle System" />
						<p><?php echo esc_html( 'Particle System', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/pretent_hacker.jpg' ?>" alt="Hacker" />
						<p><?php echo esc_html( 'Hacker', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/physics_bug.jpg' ?>" alt="Physics Bug" />
						<p><?php echo esc_html( 'Physics Bug', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/racing_particles.jpg' ?>" alt="Racing Particles" />
						<p><?php echo esc_html( 'Racing Particles', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/rain.jpg' ?>" alt="Rain Effect" />
						<p><?php echo esc_html( 'Rain Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/rainy_season.jpg' ?>" alt="rainy_season" />
						<p><?php echo esc_html( 'Rainy Season', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/rays_particles.jpg' ?>" alt="Rays and Particles" />
						<p><?php echo esc_html( 'Rays and Particles', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/ripples.jpg' ?>" alt="Ripples" />
						<p><?php echo esc_html( 'Ripples Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/hero_game.jpg' ?>" alt="Play or Work?" />
						<p><?php echo esc_html( 'Play or Work?', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/rainofline.jpg' ?>" alt="Rain Of Line" />
						<p><?php echo esc_html( 'Rain Of Line', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/rising_cubes.jpg' ?>" alt="Rising and falling cubes" />
						<p><?php echo esc_html( 'Rising and falling cubes', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/shapanimation.jpg' ?>" alt="Shape Animation" />
						<p><?php echo esc_html( 'Shape Animation', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/space_elevator.jpg' ?>" alt="Space Elevator" />
						<p><?php echo esc_html( 'Space Elevator', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
									
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/squidematics.jpg' ?>" alt="Squidematics" />
						<p><?php echo esc_html( 'Squidematics', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>	
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/stars.jpg' ?>" alt="Stars Effect" />
						<p><?php echo esc_html( 'Stars Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>				
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/stellar.jpg' ?>" alt="Stellar Cloud" />
						<p><?php echo esc_html( 'Stellar Cloud', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/stripe-cube.jpg' ?>" alt="Stripe Cude Effect" />
						<p><?php echo esc_html( 'Stripe Cube Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/subvisual.png' ?>" alt="Subvisual" />
						<p><?php echo esc_html( 'Subvisual', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/tagcanvas.jpg' ?>" alt="Tag Canvas" />
						<p><?php echo esc_html( 'Tag Canvas', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/header_banner.jpg' ?>" alt="The Great Attractor" />
						<p><?php echo esc_html( 'The Great Attractor', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/thibaut.jpg' ?>" alt="Thibaut" />
						<p><?php echo esc_html( 'Thibaut', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/tiny_galaxy.jpg' ?>" alt="Tiny Galaxy Effect" />
						<p><?php echo esc_html( 'Tiny Galaxy Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/torus.jpg' ?>" alt="Torus of Cubes" />
						<p><?php echo esc_html( 'Torus of Cubes', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/water.jpg' ?>" alt="Water Effect" />
						<p><?php echo esc_html( 'Water Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/wave.jpg' ?>" alt="Wave Effect" />
						<p><?php echo esc_html( 'Wave Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/wave_animation.jpg' ?>" alt="Wave Animation Effect" />
						<p><?php echo esc_html( 'Wave Animation Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/waaave.jpg' ?>" alt="Waaave Canvas" />
						<p><?php echo esc_html( 'Waaave Canvas', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/walkingbg.jpg' ?>" alt="Walking Background" />
						<p><?php echo esc_html( 'Walking Background', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/wrap_speed.jpg' ?>" alt="Wrap Speed" />
						<p><?php echo esc_html( 'Warp Speed', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/water_swimming.jpg' ?>" alt="Water Swimming" />
						<p><?php echo esc_html( 'Water Swimming', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/waving_cloth.jpg' ?>" alt="Waving Cloth" />
						<p><?php echo esc_html( 'Waving Cloth', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/waterdroplet.jpg' ?>" alt="Water Droplet" />
						<p><?php echo esc_html( 'Water Droplet', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/wormhole.jpg' ?>" alt="Wormhole Effect" />
						<p><?php echo esc_html( 'Wormhole Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/wordcloud.jpg' ?>" alt="Word Cloud" />
						<p><?php echo esc_html( 'Word Cloud', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>

					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/valentine.jpg' ?>" alt="Valentine Effect" />
						<p><?php echo esc_html( 'Valentine Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
					
					<div class="unlink-pro">
						<img src="<?php echo esc_url(QCLD_SLIDERHERO_IMAGES).'/ygekpg.jpg' ?>" alt="Ygekpg Effect" />
						<p><?php echo esc_html( 'Ygekpg Effect', 'slider-hero' ); ?><span><?php echo esc_html( '[PRO]', 'slider-hero' ); ?></span></p>
					</div>
				</div>
				
			</div>			
		</div>

	</div>
	</div>
	<?php
}




