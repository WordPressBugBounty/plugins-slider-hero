<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/*
* QuantumCloud Promo + Support Page
* Revised On: 18-10-2023
*/

if ( ! defined( 'qcld_sliderhero_support_path' ) ) {
    define('qcld_sliderhero_support_path', plugin_dir_path(__FILE__));
}

if ( ! defined( 'qcld_sliderhero_support_url' ) )
    define('qcld_sliderhero_support_url', plugin_dir_url( __FILE__ ) );

if ( ! defined( 'qcld_sliderhero_support_img_url' ) )
    define('qcld_sliderhero_support_img_url', qcld_sliderhero_support_url . "/images" );


/*Callback function to add the menu */
function qcld_sliderhero_show_promo_page_callback_func(){

    add_submenu_page(
        "Slider-Hero",
        esc_html('More WordPress Goodies for You!', 'slider-hero'),
        esc_html('Support', 'slider-hero'),
        'manage_options',
        "qcld-sliderhero-help-supports",
        'qcld_sliderhero_promo_support_page_callback_func'
    );
    
} //show_promo_page_callback_func

add_action( 'admin_menu', 'qcld_sliderhero_show_promo_page_callback_func', 10 );


/*******************************
 * Main Class to Display Support
 * form and the promo pages
 *******************************/

if ( ! function_exists( 'qcld_sliderhero_include_promo_page_scripts' ) ) {	
	function qcld_sliderhero_include_promo_page_scripts( ) {   


        if( isset($_GET["page"]) && !empty($_GET["page"]) && (   $_GET["page"] == "qcld-sliderhero-help-supports"  ) ){

            wp_enqueue_style( 'qcld-support-fontawesome-css', qcld_sliderhero_support_url . "css/font-awesome.min.css");                              
            wp_enqueue_style( 'qcld-sliderhero-support-style-css', qcld_sliderhero_support_url . "css/style.css");

            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'jquery-ui-core');
            wp_enqueue_script( 'jquery-ui-tabs' );
            wp_enqueue_script( 'jquery-sliderhero-form-processor', qcld_sliderhero_support_url . 'js/support-form-script.js',  array('jquery', 'jquery-ui-core','jquery-ui-tabs') );

            wp_add_inline_script( 'jquery-sliderhero-form-processor', 
                                    'var qcld_sliderhero_recommend_ajaxurl    = "' . admin_url('admin-ajax.php') . '";
                                    var qcld_sliderhero_recommend_ajax_nonce  = "'. wp_create_nonce( 'slider-hero' ).'";   
                                ', 'before');
            
        }
	   
	}
	add_action('admin_enqueue_scripts', 'qcld_sliderhero_include_promo_page_scripts');
	
}
		
/*******************************
 * Callback function to show the HTML
 *******************************/

include_once qcld_sliderhero_support_path . '/qc-clr-recommendbot-support-plugin.php';

if ( ! function_exists( 'qcld_sliderhero_promo_support_page_callback_func' ) ) {

	function qcld_sliderhero_promo_support_page_callback_func() {
		
?>


        <div class="qcld-sliderhero-support qcld-support-new-page">
            <div class="support-btn-main justify-content-center">
                <div class="col text-center">
                    <h2 class="py-3"><?php esc_html_e('Check Out Some of Our Other Works that Might Make Your Website Better', 'slider-hero'); ?></h2>
                    <h5><?php esc_html_e('All our Pro Version users get Premium, Guaranteed Quick, One on One Priority Support.', 'slider-hero'); ?></h5>
                    <div class="support-btn">
                        <a class="premium-support" href="<?php echo esc_url('https://qc.turbopowers.com/'); ?>" target="_blank"><?php esc_html_e('Get Priority Support ', 'slider-hero'); ?></a>
                        <a style="width:282px" class="premium-support" href="<?php echo esc_url('https://www.quantumcloud.com/resources/kb-sections/slider-hero/'); ?>" target="_blank"><?php esc_html_e('Online KnowledgeBase', 'slider-hero'); ?></a>
                    </div>
                </div>
            
                <div class="qc-column-12" >
                    <div class="support-btn">
                        
                        <a class="premium-support premium-support-free" href="<?php echo esc_url('https://www.quantumcloud.com/resources/free-support/') ?>" target="_blank"><?php esc_html_e('Get Support for Free Version', 'slider-hero') ?></a>
                    </div>
                </div>
            </div>
            
            <div class="qcld-plugins-lists">
                <div class="qcld-plugins-loading">
                    <img src="<?php echo esc_url(qcld_sliderhero_support_img_url); ?>/loading.gif" alt="loading">
                </div>
            </div>
        </div>
			
		
<?php
            
       
    }
}


/*******************************
 * Handle Ajex Request for Form Processing
 *******************************/
add_action( 'wp_ajax_qcld_sliderhero_process_qc_promo_form', 'qcld_sliderhero_process_qc_promo_form' );

if( !function_exists('qcld_sliderhero_process_qc_promo_form') ){

    function qcld_sliderhero_process_qc_promo_form(){

        check_ajax_referer( 'slider-hero', 'security');

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_send_json_error( esc_html( 'Unauthorized', 'slider-hero' ) );
            wp_die();
        }
        
        $data['status']   = 'failed';
        $data['message']  = esc_html('Problem in processing your form submission request! Apologies for the inconveniences.<br> 
Please email to <span style="color:#22A0C9;font-weight:bold !important;font-size:14px "> quantumcloud@gmail.com </span> with any feedback. We will get back to you right away!', 'slider-hero');

        $name         = isset($_POST['post_name']) ? trim(sanitize_text_field(wp_unslash($_POST['post_name']))) : '';
        $email        = isset($_POST['post_email']) ? trim(sanitize_email(wp_unslash($_POST['post_email']))) : '';
        $subject      = isset($_POST['post_subject']) ? trim(sanitize_text_field(wp_unslash($_POST['post_subject']))) : '';
        $message      = isset($_POST['post_message']) ? trim(sanitize_text_field(wp_unslash($_POST['post_message']))) : '';
        $plugin_name  = isset($_POST['post_plugin_name']) ? trim(sanitize_text_field(wp_unslash($_POST['post_plugin_name']))) : '';

        if( $name == "" || $email == "" || $subject == "" || $message == "" )
        {
            $data['message'] = esc_html('Please fill up all the requried form fields.', 'slider-hero');
        }
        else if ( filter_var($email, FILTER_VALIDATE_EMAIL) === false ) 
        {
            $data['message'] = esc_html('Invalid email address.', 'slider-hero');
        }
        else
        {

            //build email body

            $bodyContent = "";
                
            $bodyContent .= "<p><strong>".esc_html('Support Request Details:', 'slider-hero')."</strong></p><hr>";

            $bodyContent .= "<p>".esc_html('Name', 'slider-hero')." : ".$name."</p>";
            $bodyContent .= "<p>".esc_html('Email', 'slider-hero')." : ".$email."</p>";
            $bodyContent .= "<p>".esc_html('Subject', 'slider-hero')." : ".$subject."</p>";
            $bodyContent .= "<p>".esc_html('Message', 'slider-hero')." : ".$message."</p>";

            $bodyContent .= "<p>".esc_html('Sent Via the Plugin', 'slider-hero')." : ".$plugin_name."</p>";

            $bodyContent .="<p></p><p>".esc_html('Mail sent from:', 'slider-hero')." <strong>".get_bloginfo('name')."</strong>, ".esc_html('URL:', 'slider-hero')." [".get_bloginfo('url')."].</p>";
            $bodyContent .="<p>".esc_html('Mail Generated on:', 'slider-hero')." " . gmdate("F j, Y, g:i a") . "</p>";           
            
            $toEmail = "quantumcloud@gmail.com"; //Receivers email address
            //$toEmail = "qc.kadir@gmail.com"; //Receivers email address

            //Extract Domain
            $url = get_site_url();
            $url = wp_parse_url($url);
            $domain = $url['host'];
            

            $fakeFromEmailAddress = "wordpress@" . $domain;
            
            $to = $toEmail;
            $body = $bodyContent;
            $headers = array();
            $headers[] = 'Content-Type: text/html; charset=UTF-8';
            $headers[] = 'From: '.esc_attr($name, 'slider-hero').' <'.esc_attr($fakeFromEmailAddress, 'slider-hero').'>';
            $headers[] = 'Reply-To: '.esc_attr($name, 'slider-hero').' <'.esc_attr($email, 'slider-hero').'>';

            $finalSubject = esc_html('From Plugin Support Page:', 'slider-hero')." " . esc_attr($subject, 'slider-hero');
            
            $result = wp_mail( $to, $finalSubject, $body, $headers );

            if( $result )
            {
                $data['status'] = 'success';
                $data['message'] = esc_html('Your email was sent successfully. Thanks!', 'slider-hero');
            }

        }

        ob_clean();

        
        echo wp_json_encode($data);
    
        die();
    }
}



