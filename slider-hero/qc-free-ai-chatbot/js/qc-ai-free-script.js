(function($) {
    'use strict';

	jQuery(document).ready(function($){

		$( window ).on( "load", function() {

			var data = {
				'action': 'qcld_slider_free_ai_function_first_sld_ajax',
				'security': qcld_slider_free_ai_ajax_nonce
			};

	        jQuery.post(qcld_slider_free_ai_ajaxurl, data, function (response) {

	        	$('.qcld_slider_free_ai_loading').remove();
	           	$('.qcld_slider_free_ai-grid').find('.qcld_slider_free_ai-card').append(response);


	        });

		});


	});


})(jQuery);