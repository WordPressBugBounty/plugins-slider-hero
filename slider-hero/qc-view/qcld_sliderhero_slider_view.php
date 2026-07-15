<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


function qcld_sliderhero_free_sliders_view_list( $rows ) { ?>
	
	<div class="wrap">
      <h1><?php echo esc_html( 'Slider Hero', 'slider-hero' ); ?></h1>
  <div class="qchero_sliders_list_wrapper">
		<div class="sliderhero_menu_title">
			<h2 style="font-size: 26px;"><?php echo esc_html( 'Slider Hero', 'slider-hero' ); ?></h2>
			
		</div>
		<div class="slider_hero_button">
			<a class="add-slider" title="<?php esc_html_e('Create new slider', 'slider-hero'); ?>" href="<?php echo esc_url( wp_nonce_url(admin_url('admin.php?page=Slider-Hero&task=slidertype'), 'sliderhero_slidertype') ); ?>">
			<?php echo esc_html( 'Create New Slider', 'slider-hero' ); ?> &nbsp;<i class="fa fa-plus"></i></a>
		</div>
		<div class="qchero_slider_table_area">
  <div class="slider_hero_table">
    
    <div class="slider_hero_row header">
      
	  <div class="slider_hero_cell">
        <?php esc_html_e('Name', 'slider-hero') ?>
      </div>

      <div class="slider_hero_cell">
        <?php esc_html_e('Slides', 'slider-hero'); ?>
      </div>
	  <div class="slider_hero_cell">
        <?php esc_html_e('Shortcode', 'slider-hero'); ?>
      </div>
	  <div class="slider_hero_cell">
        <?php esc_html_e('Duplicate', 'slider-hero'); ?>
      </div>
      <div class="slider_hero_cell">
        <?php esc_html_e('Remove', 'slider-hero'); ?>
      </div>
    </div>
<?php foreach ($rows as $row) { ?>
    <div class="slider_hero_row">
      
	  <div class="slider_hero_cell">
        <a class="hero_list_title" href="<?php echo esc_url(admin_url('admin.php?page=Slider-Hero&task=editslider&type='.esc_attr($row->type).'&id=' . esc_attr($row->id))); ?>"><?php echo wp_kses_post( wp_unslash( $row->title ) ); ?></a>
      </div>

      <div class="slider_hero_cell">
        <?php echo esc_attr( $row->count ); ?>
      </div>
	  <div class="slider_hero_cell slider_hero_shortcode">
        <span id="qcld-hero-shortcode-<?php echo esc_attr( $row->id ); ?>"><?php echo '[qcld_hero id='.esc_attr( $row->id ).']'; ?></span>
        <button type="button" class="qcld-copy-shortcode-btn" data-clipboard-target="#qcld-hero-shortcode-<?php echo esc_attr( $row->id ); ?>" title="<?php echo esc_html( 'Copy Shortcode', 'slider-hero' ); ?>" style="cursor:pointer; background:none; border:none; color:#0073aa; margin-left: 5px;"><i class="fa fa-clipboard"></i></button>
      </div>
	  <div class="slider_hero_cell">
        <a title="duplicate" class="hero_list_duplicate"
		   href="<?php echo esc_url( wp_nonce_url( admin_url('admin.php?page=Slider-Hero&task=heroduplicateslider&id=' . esc_attr( $row->id )), 'slider_hero_duplicateslider_' . esc_attr( $row->id ) , 'slider_hero_duplicate_nonce') ); ?>"><?php echo esc_html( 'Copy', 'slider-hero' ); ?></a>
      </div>
      <div class="slider_hero_cell">
		<a title="delete" class="hero_list_delete" onclick="return confirm('<?php echo esc_js( __( 'Are you sure to delete this slider?', 'slider-hero' ) ); ?>')" href="<?php echo esc_url( wp_nonce_url( admin_url('admin.php?page=Slider-Hero&task=removeslider&id=' . esc_attr( $row->id )), 'qcld_sliderhero_removeslider_' . esc_attr( $row->id ) ) ); ?>"><?php echo esc_html( 'Delete', 'slider-hero' ); ?></a>
      </div>
    </div>
<?php } ?>   

  </div>

	<div class="slider_hero_image">
		
	</div>  
		</div>
	</div>
  </div>
	<?php
}

add_action('admin_footer', 'qcld_sliderhero_add_copy_script');
function qcld_sliderhero_add_copy_script() {
	$screen = get_current_screen();
	if(isset($screen->id) && $screen->id == 'toplevel_page_Slider-Hero'):
?>
<script>
jQuery(document).ready(function($){
    $('.qcld-copy-shortcode-btn').on('click', function(e){
        e.preventDefault();
        var target = $(this).attr('data-clipboard-target');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(target).text()).select();
        document.execCommand("copy");
        $temp.remove();
        
        var originalTitle = $(this).attr('title');
        $(this).attr('title', 'Copied!');
        var $icon = $(this).find('i');
        $icon.removeClass('fa-clipboard').addClass('fa-check');
        var $btn = $(this);
        setTimeout(function(){
            $btn.attr('title', originalTitle);
            $icon.removeClass('fa-check').addClass('fa-clipboard');
        }, 2000);
    });
});
</script>
<?php
	endif;
}

