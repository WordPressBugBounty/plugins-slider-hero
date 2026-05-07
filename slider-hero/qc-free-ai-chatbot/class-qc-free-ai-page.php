<?php
/*
* QuantumCloud Promo + Ai Chatbot Page
* Revised On: 05-05-2026
*/

if ( ! defined( 'qcld_slider_free_ai_support_path' ) ) {
    define('qcld_slider_free_ai_support_path', plugin_dir_path(__FILE__));
}

if ( ! defined( 'qcld_slider_free_ai_support_url' ) )
    define('qcld_slider_free_ai_support_url', plugin_dir_url( __FILE__ ) );

if ( ! defined( 'qcld_slider_free_ai_img_url' ) )
    define('qcld_slider_free_ai_img_url', qcld_slider_free_ai_support_url . "/images" );


/*Callback function to add the menu */
if ( ! function_exists( 'qcld_slider_free_ai_show_promo_page_callback_func' ) ) {
    function qcld_slider_free_ai_show_promo_page_callback_func(){

        add_submenu_page(
            "Slider-Hero",
            esc_html__('Try our Free AI ChatBot - WPBot', 'qc-opd'),
            esc_html__('Try our Free AI ChatBot - WPBot', 'qc-opd'),
            'manage_options',
            "qcld_slider_free_ai",
            'qcld_slider_free_ai_promo_support_page_callback_func'
        );
        
    }
}
add_action( 'admin_menu', 'qcld_slider_free_ai_show_promo_page_callback_func', 1000 );

add_action('admin_head', 'qcld_slider_free_ai_admin_submenu_css');
if ( ! function_exists( 'qcld_slider_free_ai_admin_submenu_css' ) ) {
    function qcld_slider_free_ai_admin_submenu_css() {
        echo '<style>
            #adminmenu .wp-submenu li a[href*="admin.php?page=qcld_slider_free_ai"] {
                border-top: 1px solid #ddd;
                margin: 5px 1px;
            }
        </style>';
    }
}


/*******************************
 * Main Class to Display Support
 * form and the promo pages
 *******************************/

if ( ! function_exists( 'qcld_slider_free_ai_include_promo_page_scripts' ) ) {	
	function qcld_slider_free_ai_include_promo_page_scripts( ) {   


        if( isset($_GET["page"]) && !empty($_GET["page"]) && (   $_GET["page"] == "qcld_slider_free_ai"  ) ){
                             
            wp_enqueue_style( 'qcld_slider_free_ai_css', qcld_slider_free_ai_support_url . "css/qc-ai-free-style.css");

            wp_enqueue_script( 'jquery' );

            wp_enqueue_script( 'qcld_slider_free_ai_js', qcld_slider_free_ai_support_url . 'js/qc-ai-free-script.js',  array('jquery') );

            wp_add_inline_script( 'qcld_slider_free_ai_js', 
                                    'var qcld_slider_free_ai_ajaxurl    = "' . admin_url('admin-ajax.php') . '";
                                    var qcld_slider_free_ai_ajax_nonce  = "'. wp_create_nonce( 'qc-clr' ).'";   
                                ', 'before');
            
        }
	   
	}
	add_action('admin_enqueue_scripts', 'qcld_slider_free_ai_include_promo_page_scripts');
	
}
		
/*******************************
 * Callback function to show the HTML
 *******************************/

include_once qcld_slider_free_ai_support_path . '/qc-ai-free-plugin.php';

if ( ! function_exists( 'qcld_slider_free_ai_promo_support_page_callback_func' ) ) {

	function qcld_slider_free_ai_promo_support_page_callback_func() {
		
?>

        <div class="wrap">
            <div class="qcld_slider_free_ai-wrapper">
                <header class="qcld_slider_free_ai-header">
                    <h3><?php esc_html_e('Get the Best ChatBot for WordPress – WPBot', 'qc-opd'); ?></h3>
                    <p><?php esc_html_e('Do more than just chat with your ChatBot!', 'qc-opd'); ?></p>
                    
                                        
                </header>

                <div class="qcld_slider_free_ai-grid">
                    <!-- Section: Getting Started -->
                 
                    <div class="qcld_slider_free_ai-card">
                        <div class="qcld_slider_free_ai-content">
                            <p><b><?php esc_html_e('Do more than just chat with your ChatBot', 'qc-opd'); ?></b>! <?php esc_html_e('More Leads, Conversions', 'qc-opd'); ?> &amp; <?php esc_html_e('Satisfied customers while', 'qc-opd'); ?> <strong><?php esc_html_e('saving time', 'qc-opd'); ?></strong> &amp; <?php esc_html_e('increasing your', 'qc-opd'); ?> <strong><?php esc_html_e('business opportunities', 'qc-opd'); ?></strong>. <?php esc_html_e('WPBot is the best ChatBot for WordPress to improve user engagement,', 'qc-opd'); ?> <b><?php esc_html_e('Generate Leads,', 'qc-opd'); ?></b> &amp; <?php esc_html_e('provide', 'qc-opd'); ?> <b><?php esc_html_e('Automated Live', 'qc-opd'); ?>&nbsp;</b><?php esc_html_e('customer', 'qc-opd'); ?> <strong><?php esc_html_e('support', 'qc-opd'); ?></strong> <?php esc_html_e('across your website', 'qc-opd'); ?> &amp; <?php esc_html_e('social platforms.', 'qc-opd'); ?>&nbsp;<?php esc_html_e('The', 'qc-opd'); ?> <strong><?php esc_html_e('AI Insight', 'qc-opd'); ?></strong> <?php esc_html_e('feature analyzes chat histories', 'qc-opd'); ?> &amp; <?php esc_html_e('reveals what your users want.', 'qc-opd'); ?></p> <p> <?php esc_html_e('Deliver AI-powered ChatBot services from your websites with LLMs like', 'qc-opd'); ?> <b><?php esc_html_e('OpenAI', 'qc-opd'); ?> </b> <?php esc_html_e('(ChatGPT), Gemini etc. along with many built-in, powerful features like', 'qc-opd'); ?> <b><?php esc_html_e('Live', 'qc-opd'); ?></b>&nbsp;<?php esc_html_e('Chat, Chat', 'qc-opd'); ?> <b><?php esc_html_e('Histories', 'qc-opd'); ?></b>, <b><?php esc_html_e('Conversational forms', 'qc-opd'); ?></b>, <strong><?php esc_html_e('Webhooks', 'qc-opd'); ?></strong> &amp; <?php esc_html_e('more!', 'qc-opd'); ?>&nbsp;</p> 
                        </div>        
                        
                        <div class="qcld_slider_free_ai_loading">
                            <img src="<?php echo esc_url(qcld_slider_free_ai_img_url); ?>/loading.gif" alt="loading">
                        </div>
                    </div>

                </div>

                <div class="qcld_slider_free_ai-footer">
                    <h3><?php esc_html_e('Need More Assistance?', 'qc-opd'); ?></h3>
                    <p><?php esc_html_e('Our support team is ready to help you with any issues or custom requests.', 'qc-opd'); ?></p>
                    <div class="qcld_slider_free_ai_btn-group">
                        <a href="<?php echo esc_url('https://www.wpbot.pro/docs/'); ?>" target="_blank" class="qcld_slider_free_ai_btn-docs"><?php esc_html_e('Knowledge Base', 'qc-opd'); ?></a>
                        <a href="<?php echo esc_url('https://www.wpbot.pro/free-support/'); ?>" target="_blank" class="qcld_slider_free_ai_btn-support"><?php esc_html_e('Get Direct Support', 'qc-opd'); ?></a>
                    </div>
                    <div style="margin-top: 40px; color: #8c8f94;">
                        <p><small>&copy; QuantumCloud. <?php esc_html_e('Handcrafted for productivity.', 'qc-opd'); ?></small></p>
                    </div>
                </div>

            </div>
        </div>
			

<?php
            
       
    }
}
