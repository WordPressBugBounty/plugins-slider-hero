<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
// Exit if accessed directly
/**
 * Import / Export
 */
function qcld_sliderhero_free_sliders_import_export(){
	global $wpdb;
?>
    <div class="wrap">
        <h1><?php echo esc_html( 'Export/Import', 'slider-hero' ); ?></h1>
        <div id="poststuff">

            <div id="post-body" class="metabox-holder columns-3">

                <div id="post-body-content" >
				<div class="hero_pro_feature_export">

                    
                    <h3><?php echo esc_html( 'Bulk Export/Import', 'slider-hero' ); ?> <span style="color:red; font-weight:bold;"><?php echo esc_html( '(Requires the Pro Version)', 'slider-hero' ); ?></span></h3>
                   
                    
					<hr>
					<div style="padding: 15px; margin: 20px 0;" id="qcld_sliderhero-export-container">

						<h3><?php echo esc_html( 'Export to a CSV File', 'slider-hero' ); ?></h3>

                        <p>
                        	<strong><?php echo esc_html( 'Option Details:', 'slider-hero' ); ?></strong>
                        </p>
                        <p>
                        	<?php echo esc_html( 'Export button will create a downloadable CSV file for your selected slider.', 'slider-hero' ); ?>
                        </p>

						<form action="#" method="post">
						  <input type="hidden" name="action" value="hero_export">
						  <select name="slider" required>
							<option value=""><?php echo esc_html( 'None', 'slider-hero' ); ?></option>
							<?php 
								$table   = QCLD_TABLE_SLIDERS;
								$s       = 1;
								$rows     = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}qcld_slider_hero_sliders WHERE %d order by `title` ASC", $s ) );
								foreach($rows as $row){
									echo '<option value="'.esc_attr( $row->id ).'">'.esc_attr( $row->title ).'</option>';
								}
								
							?>
						  </select>
						  <input class="button-primary qchero_preview_button" type="submit" value="<?php echo esc_html( 'Export Slider Data', 'slider-hero' ); ?>">
						</form>
						
						

                    </div>
					<hr>

                    <div style="padding: 15px; margin: 10px 0;">

                    <h3><?php echo esc_html( 'Import from a CSV File', 'slider-hero' ); ?></h3>

                    <p><strong><?php echo esc_html( 'Importing in Another Website:', 'slider-hero' ); ?></strong> <?php echo esc_html( 'Please note that uploaded images for Slides will not be copied if you import the CSV file to another WordPress installation.', 'slider-hero' ); ?></p>

                    <p>
                    	<strong><?php echo esc_html( 'Option Details:', 'slider-hero' ); ?></strong>
                    </p>
                    <p>
                    	<?php echo esc_html( 'CSV file must be as per the exported format.', 'slider-hero' ); ?>
                    </p>
                    
                    

                    <!-- Handle CSV Upload -->

                    <?php

                    //Generate a 5 digit random number based on microtime
                    $randomNum = substr(sha1(wp_rand() . microtime()), wp_rand(0,35), 5);


                    /*******************************
                     * If Add New or Delete then Add New button was pressed
                     * then proceed for further processing
                     *******************************/
                    

                    ?>
                        
                        <p>
                            <strong>
                                <?php echo esc_html( 'Upload a CSV file here to Import: ', 'slider-hero' ); ?>
                            </strong>
                        </p>

                        <form name="uploadfile" id="uploadfile_form" method="POST" enctype="multipart/form-data" action="" accept-charset="utf-8">
                            
                            <?php wp_nonce_field('qchero_import_nonce', 'slider-hero'); ?>

                            <p>
                                <?php echo esc_html( 'Select file to upload', 'slider-hero' ) ?>
                                <input type="file" name="csv_upload" id="csv_upload" size="35" class="uploadfiles"/>
                            </p>
							<p style="color:red;"><?php echo esc_html( '**CSV File & Characters must be saved with UTF-8 encoding**', 'slider-hero' ); ?></p>
                            <p>
                                <input class="button-primary qcld_sliderhero-add-as-new qchero_preview_button" type="submit" name="upload_csv" id="" value="<?php echo esc_html( 'Import', 'slider-hero' ) ?>"/>

                               
                            </p>
							

                        </form>

                    </div>

                    <div style="padding: 15px 10px; border: 1px solid #ccc; text-align: center; margin-top: 20px;">
                        <?php echo esc_html( 'Crafted By:', 'slider-hero' ); ?> <a href="<?php echo esc_url('http://www.quantumcloud.com'); ?>" target="_blank"><?php echo esc_html( 'Web Design Company', 'slider-hero' ); ?></a> - QuantumCloud
                    </div>

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
function hero_text_clean($string) {
   $string = str_replace(' ', '_', $string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

function hero_array2csv(array &$array)
{
   if (count($array) == 0) {
     return null;
   }

   ob_start();

   $df = fopen("php://output", 'w');


   foreach ($array as $row) {
      fputcsv($df, $row);
   }

   fclose($df); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fclose

   return ob_get_clean();
}

function hero_download_send_headers($filename) {
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // force download  
    header("Content-Type: application/force-download");
    /*header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");*/

    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}
