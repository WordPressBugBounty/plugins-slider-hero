/*
 * jQuery  Slider-X v1.0
 * Author : Quamtum Cloud
 * Copyright 2017, Quamtum Cloud
 */
function getOffset( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
	_x = parseInt(_x) + parseInt(jQuery(el).css('padding-left'));
    return { top: _y, left: _x };
}

 function shuffle(a) {
    var j, x, i;
    for (i = a.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = a[i - 1];
        a[i - 1] = a[j];
        a[j] = x;
    }
}
function preloadImage(url)
{
    var img=new Image();
    img.src=url;
}
(function($) {
    var functionSliderX = function(element, options){
        // Defaults are below
        var settings = $.extend({}, $.fn.sliderX.defaults, options);
		var present_slide;
        // Useful variables. Play carefully.
        var vars = {
            currentSlide: 0,
            //currentImage: '',
            currentBlock: '',
            totalSlides: 0,
            running: false,
            paused: false,
            stop: false,
            controlNavEl: false
        };
		var mhclicked = 0;
		var delayinit = 500;
		var imgarray = [];
		
		//letter fx object
		var letterfxobj = {
			config:{"fx":"spin","backwards":false,"timing":50,"fx_duration":"500ms","letter_end":"stay","element_end":"stay"},
		}

        // Get this slider
        var slider = $(element);
		//slider height width and backgroundcolor

		if(settings.fullScreen){
			
			var fullwidth = jQuery(window).width(); 
			var fullheight = window.innerHeight;
			//var maindivcon = document.getElementById(settings.mainId);
			var maindivcon = jQuery('#'+settings.mainId).parent()[0];
			var getleft = getOffset(maindivcon);
			
			if(getleft.left>0){
				slider.css({
					'width':fullwidth+'px',
					'height':fullheight+'px',
					'left':'-'+getleft.left+'px',
				});
			}else{
				slider.css({
					'width':fullwidth+'px',
					'height':fullheight+'px',
				});
			}
			
			if(fullwidth < 1024){
				console.log(fullwidth);
				var new_height = (1080 / 1920) * fullwidth;
				if(new_height < 200){
					new_height = 200;
				}

				if(typeof settings.fullscreenmobile !== 'undefined' && settings.fullscreenmobile){
					new_height = fullheight;
				}
				console.log(new_height);
				
				slider.css({
					'width':fullwidth+'px',
					'height':(parseFloat(new_height)+1)+'px',
				});
				
			}
			
			$('.slider-x-intro-img').each(function(){
				$(this).css('height',fullheight+'px');
			})
			
		}else if(settings.fullWidth){
			
			//var maindivcon = document.getElementById(settings.mainId);
			var fullwidth = jQuery(window).width(); 
			var maindivcon = jQuery('#'+settings.mainId).parent()[0];
			var getleft = getOffset(maindivcon);
			
			if(getleft.left>10){
				slider.css({
					'width':fullwidth+'px',
					'height':settings.sliderHeight+'px',
					'left':'-'+(getleft.left)+'px',
				});
			}else{
				slider.css({
					'width':fullwidth+'px',
					'height':settings.sliderHeight+'px',
				});
			}
			
			if(fullwidth < settings.sliderWidth){
				var new_height = (settings.sliderHeight / settings.sliderWidth) * fullwidth;
				
				if(new_height < 200){
					new_height = 200;
				}
				
				slider.css({
					'width':fullwidth+'px',
					'height':(parseFloat(new_height)+1)+'px',
				});
				if($('.sh_bg_video_fluid')[0]){
					//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', (parseFloat(new_height)+1)+'px')
				}
			}
			
					
		}else if(settings.Screenauto){
			slider.css({
				'width':'100%',
				'height':settings.sliderHeight+'px',
				
			});
			
			var fullwidth = jQuery(window).width(); 
			if(fullwidth < settings.sliderWidth){
				var new_height = (settings.sliderHeight / settings.sliderWidth) * fullwidth;
				if(new_height < 200){
					new_height = 200;
				}
				slider.css({
					'width':'100%',
					'height':(parseFloat(new_height)+1)+'px',
				});
				if($('.sh_bg_video_fluid')[0]){
					//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', (parseFloat(new_height)+1)+'px')
				}
			}
			
		}
		else{
			var fullwidth = jQuery(window).width(); 
			if(fullwidth < settings.sliderWidth){
				var new_height = (settings.sliderHeight / settings.sliderWidth) * fullwidth;
				slider.css({
					'width':fullwidth+'px',
					'height':(parseFloat(new_height)+1)+'px',
				});
				if($('.sh_bg_video_fluid')[0]){
					//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', (parseFloat(new_height)+1)+'px')
				}
			}else{
				slider.css({
					'width':settings.sliderWidth+'px',
					'height':settings.sliderHeight+'px',
				});
				if($('.sh_bg_video_fluid')[0]){
					//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', settings.sliderHeight+'px')
				}
			}

		}
		
		$(window).resize(function() {
			setTimeout(function(){
				if(!settings.fullWidth && !settings.fullScreen && !settings.Screenauto){
					var fullwidth = jQuery(window).width(); 
					if(fullwidth < settings.sliderWidth){
						var new_height = (settings.sliderHeight / settings.sliderWidth) * fullwidth;
						slider.css({
							'width':fullwidth+'px',
							'height':(parseFloat(new_height)+1)+'px',
						});
						if($('.sh_bg_video_fluid')[0]){
							//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', (parseFloat(new_height)+1)+'px')
						}
					}else{
						slider.css({
							'width':settings.sliderWidth+'px',
							'height':settings.sliderHeight+'px',
						});
						if($('.sh_bg_video_fluid')[0]){
							//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', settings.sliderHeight+'px')
						}
					}
				}
				
				if(settings.fullWidth){
					
					var fullwidth = jQuery(window).width(); 
					
					
					if(fullwidth < settings.sliderWidth){
						var new_height = (settings.sliderHeight / settings.sliderWidth) * fullwidth;
						if(new_height<200){
							new_height = 200;
						}
						
						slider.css({
							'width':fullwidth+'px',
							'height':(parseFloat(new_height)+1)+'px',
						});
						if($('.sh_bg_video_fluid')[0]){
							//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', (parseFloat(new_height)+1)+'px')
						}
					}else{
						slider.css({
							'width':fullwidth+'px',
							'height':settings.sliderHeight+'px',
						});
						if($('.sh_bg_video_fluid')[0]){
							//$('#'+settings.mainId+' .sh_bg_video_fluid').css('padding-top', settings.sliderHeight+'px')
						}
					}
					
				}
			}, 500);
		})
		
		//getting slider data.
        slider.data('sliderXData', vars);
		

        // Find our slider children
        var kids = slider.children(".qcld_hero_content_area");
		if(settings.randomslide){
			shuffle(kids);
		}
		
		
		
        kids.each(function() {
            var child = $(this);
			//console.log(child);
            child.css('display','none');
			if(typeof(child.attr('data-bg-image'))!='undefined' && child.attr('data-bg-image')!==''){
				imgarray.push(child.attr('data-bg-image'));
				preloadImage(child.attr('data-bg-image'));
			}
            vars.totalSlides++;
        });
		if(settings.slidertype!='video' && settings.slidertype!='youtube_video'){
			if(imgarray.length>0){
				slider.append('<div class="hero_bg_image" style="background:url('+imgarray[0]+')"></div>');
				slider.append('<div class="hero_bg_image1" style="background:url('+imgarray[0]+');display:none"></div>');
			}
		}

        // Set startSlide
        if(settings.startSlide > 0){
            if(settings.startSlide >= vars.totalSlides) { settings.startSlide = vars.totalSlides - 1; }
            vars.currentSlide = settings.startSlide;
        }
        
		
        // Get initial image
        if($(kids[vars.currentSlide]).is('.qcld_hero_content_area')){
            vars.currentBlock = $(kids[vars.currentSlide]).html();
        } else {
            vars.currentBlock = $(kids[vars.currentSlide]).find('.qcld_hero_content_area:first').html();
        }
		
        // Set first background
		//jQuery(window).load(function() {
			setTimeout(function(){
				if(typeof($(kids[vars.currentSlide]).html())!=='undefined'){
					slideExcute(slider, kids, settings, 'firstslide');
				}
			  
			}, 500);
		//})
		
		if(typeof options != 'undefined' && options == 'second_slide'){
			setTimeout(function(){
				if(typeof($(kids[vars.currentSlide]).html())!=='undefined'){
					slideExcute(slider, kids, settings, 'firstslide');
				}
			  
			}, 500);
		}
	
        //Slider direction controller 
		if(settings.directionCon){
            /*slider.append('<div class="qc-sliderX-direction" style="width:100%"><a class="'+settings.arrowClass+'-prev">'+ settings.prevSlideText +'</a><a class="'+settings.arrowClass+'-next">'+ settings.nextSlideText +'</a></div>');*/
			if(settings.arrow_style=='floating'){
				slider.append('<div class="hero_float"><a class="slider-hero-prev hero_float_left"></a><a class="slider-hero-next hero_float_right"></a></div>');
			}else{
				slider.append('<div class="qc-sliderX-direction" style="width:100%"><a class="slider-hero-prev"><i class="fa fa-'+settings.arrowClass+'-left" aria-hidden="true"></i></a><a class="slider-hero-next"><i class="fa fa-'+settings.arrowClass+'-right" aria-hidden="true"></i></a></div>');
			}
            
			
            $(slider).on('click', 'a.slider-hero-prev', function(){
				mhclicked = 1;
				clearInterval(timer);
                slideExcute(slider, kids, settings, 'prev');
				setTimeout(
					function() {
					 mhclicked = 0;
					 //console.log(mhclicked);
					}, 2000);				
            });
			
            $(slider).on('click', 'a.slider-hero-next', function(){
				mhclicked = 1;
				clearInterval(timer);
                slideExcute(slider, kids, settings, 'next');
				setTimeout(
					function() {
					 mhclicked = 0;
					 //console.log(mhclicked);
					}, 2000);
            });
        } 
		
		//Adding  bottom direction controller 
			if(settings.bottomCon){
				
				
					var bottomConDir = $('<div class="qc-sliderX-bottomCon" style="width:100%"></div>');
					slider.append(bottomConDir);
					for(var i = 0; i < kids.length; i++){
							bottomConDir.append('<a class="qc-sliderX-bottom-slide" data-slide="'+ i +'"><i class="fa fa-circle" aria-hidden="true"></i></a>');
					}
					
					if(settings.sliderestart){
						bottomConDir.append('<a class="hero_gslider_control" id="hero_ge_restart_button'+settings.sid+'"><i class="fa fa-repeat" aria-hidden="true"></i></a>');
					}
					if(settings.sliderpause){
						bottomConDir.append('<a class="hero_gslider_control" id="hero_ge_pause_button'+settings.sid+'"><i class="fa fa-pause" aria-hidden="true"></i></a><a class="hero_gslider_control" id="hero_ge_play_button'+settings.sid+'" style="display:none"><i class="fa fa-play" aria-hidden="true"></i></a>');
					}
					
					//show the slide which is clicked from the bootom controll panel.
					$('.qc-sliderX-bottom-slide').on('click',function(){
						var flag= $(this).attr('data-slide');
						flag = parseInt(flag);
						mhclicked = 1;
						clearInterval(timer);
						slideExcute(slider, kids, settings, flag);
						setTimeout(
						function() {
						 mhclicked = 0;
						 console.log(mhclicked);
						}, 2000);				
					});
				
			}

			
		// To repeat every slide by interval.
        var timer = 0;
		function slideloop(){
			
			if(settings.slideStart!==false){
				
				 timer = setInterval(function(){
					if(mhclicked==0){
						slideExcute(slider, kids, settings, 'loop'); 
					}
					
				 }, settings.pauseTime);
			}
		}
		
        if(kids.length > 0){
			
			slideloop();
        }

		
		$('#hero_ge_pause_button'+settings.sid).on('click', function(){
			clearInterval(timer);
			$(this).hide();
			$('#hero_ge_play_button'+settings.sid).show();
			if(jQuery('#hero_audio').length>0){
				jQuery('#hero_audio')[0].pause();
				jQuery('#hero_control_pause').hide();
				jQuery('#hero_control_play').show();
			}
			if(typeof(player)!='undefined'){
				player.pauseVideo();
			}

			if($("#hero_vid"+settings.sid).length>0){
				$("#hero_vid"+settings.sid).get(0).pause();
			}
		})
		
		$('#hero_ge_play_button'+settings.sid).on('click', function(){
			
			slideloop();
			$(this).hide();
			$('#hero_ge_pause_button'+settings.sid).show();
			if(jQuery('#hero_audio').length>0){
				jQuery('#hero_audio')[0].play();
				jQuery('#hero_control_play').hide();
				jQuery('#hero_control_pause').show();
			}
			if(typeof(player)!='undefined'){
				player.playVideo();
			}
			if(typeof(vplayer)!='undefined'){
				vplayer.play();
			}
			
			if($("#hero_vid"+settings.sid).length>0){
				$("#hero_vid"+settings.sid).get(0).play();
			}
		})
		
		
		$(window).blur(function(){
			
			clearInterval(timer);

			if(jQuery('#hero_audio').length>0){
				jQuery('#hero_audio')[0].pause();
				jQuery('#hero_control_pause').hide();
				jQuery('#hero_control_play').show();
			}

		});
		
		$(window).focus(function(){
			clearInterval(timer);
			slideloop();
			console.log('auto focus');
			if(jQuery('#hero_audio').length>0){
				jQuery('#hero_audio')[0].play();
				jQuery('#hero_control_play').hide();
				jQuery('#hero_control_pause').show();
			}
			
		});
		
		$('#hero_ge_restart_button'+settings.sid).on('click', function(){
			clearInterval(timer);
			slideExcute(slider, kids, settings, 0);
			if(typeof(player)!='undefined'){
				player.seekTo(0);
			}
			$('#hero_ge_play_button'+settings.sid).hide();
			$('#hero_ge_pause_button'+settings.sid).show();
			if(jQuery('#hero_audio').length>0){
				jQuery('#hero_audio')[0].pause();
				jQuery('#hero_audio')[0].currentTime = 0
				setTimeout(function(){
					jQuery('#hero_audio')[0].play();
				},700)
				
				jQuery('#hero_control_pause').show();
				jQuery('#hero_control_play').hide();
			}
			
			if($("#hero_vid"+settings.sid).length>0){
				$("#hero_vid"+settings.sid).get(0).currentTime=0;
			}
			
			slideloop();
		})
		
		
		$(window).resize(function() {
			if(jQuery(window).width() < 767 || settings.contentposition=='center'){
				slider.find('.qcld_hero_content_area:visible').css('margin-top','-'+Math.round(slider.find('.qcld_hero_content_area:visible').height()/2)+'px');
				
				
			}
			if(jQuery(window).width() < 767){

				if($(slider).height() < $(slider).find('.qcld_hero_content_area:visible').height()){
					$(slider).height($(slider).find('.qcld_hero_content_area:visible').height());
				}
				
			}
			
		})
		
		
        // Private run method
        var slideExcute = function(slider, kids, settings, flag){
			
			
			
            // Get our vars
            var vars = slider.data('sliderXData');
           //console.log(vars.currentBlock);
			//sliderX next previous button controlling logic.
            if(typeof(flag)=='string') {
				
                if(flag === 'prev'){
					vars.currentSlide = parseFloat(vars.currentSlide)-2;
                }
                if(flag === 'next'){
					
					if(vars.currentSlide >= vars.totalSlides){
						vars.currentSlide = 0;
					}
					
					vars.currentBlock = $(kids[vars.currentSlide]).html();
                }
            }
			
           // Button slide controlling logic.
		   if(typeof(flag)=='number') {
			   vars.currentSlide = flag;
			  
			   vars.currentBlock = $(kids[vars.currentSlide]).html();
		   }
			/*if(vars.currentSlide >= vars.totalSlides){
				vars.currentSlide = 0;
			}*/
			// Make bold of current slider number from bottom controller
			

			
			
				            
				if(vars.currentSlide >= vars.totalSlides){
					if(settings.repeat){
						vars.currentSlide = 0;

					}else{
						if(settings.redirecturl!=='' && settings.repeat==0){
							redirectdelay = (settings.redirectdelay==''?1000:settings.redirectdelay);
							setTimeout(function(){
								window.location.replace(settings.redirecturl);
							},redirectdelay)
						}
						clearInterval(timer);
						return;
					}
					
					
					
					
				}
			

			
			if(vars.currentSlide < 0) {
				vars.currentSlide = (vars.totalSlides - 1); 
				
			}
			
			
			
			var activeSlideDom=$(slider).find('.qc-sliderX-bottomCon').children('.qc-sliderX-bottom-slide');
			for( var j=0;j<=activeSlideDom.length;j++){
				if(j==vars.currentSlide){
					$(activeSlideDom[j]).addClass('qc-sliderx-bottom-current');
				}else{
					$(activeSlideDom[j]).removeClass('qc-sliderx-bottom-current');
				}
			}			
			
			
			//In effect
			var titleanimation = $(kids[vars.currentSlide]).find(".slider-x-lead-title");
			titleanimation.each(function(){
				if(settings.titleoutAnimation!=''){
					$(this).removeClass(settings.titleoutAnimation);
				}
				$(this).addClass('animated '+settings.titleAnimation);
				if(settings.titleAnimation=='anim-text-flow'){
					$(this).html(function(i, html) {
						if(html.match(/<span>/g)){
							return html;
						}else{
							var chars = jQuery.trim(html).split("");  
							return '<span>' + chars.join('</span><span>') + '</span>';
						}
						
					});
				}
				if(settings.titleAnimation=='hero_matrix'){
					setTimeout(function(){
						terminal();
					},1000)
					
				}
				if(settings.titleAnimation=='hero_shuffle'){
					strs = [$(this).data('title')];
					
					setTimeout(function(){						
						changeText( 0 );
					},1000)
					
				}
				if(settings.titleAnimation=='hero_rearrange'){

					setTimeout(function(){						
						sh_rearrange( );
					},1000)
					
				}
			})
			
			
			//code for description animation mh//
			var desanimation = $(kids[vars.currentSlide]).find(".slider-x-item-title");
			desanimation.each(function(){
				if(settings.desoutAnimation!=''){
					$(this).removeClass(settings.desoutAnimation);
				}
				$(this).addClass('animated '+settings.desAnimation);
			})
			
			$(kids[vars.currentSlide]).find(".hero_slider_button").each(function(){
				if(settings.buttonoutAnimation!=''){
					$(this).removeClass(settings.buttonoutAnimation);
				}
				$(this).addClass('animated ' + settings.buttonAnimation);
			})
			
			
			
            // Set vars.currentBlock
			 vars.currentBlock = $(kids[vars.currentSlide]).html();
			 
			
				//out effect
				 if(settings.titleoutAnimation!=''){
					 present_slide = slider.find('.qcld_hero_content_area:visible');
					 $(present_slide).find(".slider-x-lead-title").each(function(){// Title transaction out
						 //$(this).removeClass(settings.titleAnimation);
							$(this).addClass(settings.titleoutAnimation);
					 })
				 }
				 
				 if(settings.lfxtitleout!=''){
					 present_slide = slider.find('.qcld_hero_content_area:visible');
					 $(present_slide).find(".slider-x-lead-title").each(function(){// Title transaction out
							letterfxobj.config.fx = settings.lfxtitleout;
							letterfxobj.config.backwards = true;
							$(this).letterfx(letterfxobj.config);
					 })
				 }
				 
				 if(settings.lfxdesout!=''){
					 
					 present_slide = slider.find('.qcld_hero_content_area:visible');
					 $(present_slide).find(".slider-x-item-title p").each(function(){// Title transaction out
							letterfxobj.config.fx = settings.lfxdesout;
							letterfxobj.config.backwards = true;
							$(this).letterfx(letterfxobj.config);
					 })
				 }
				 
				 if(settings.desoutAnimation!==''){
					 
					 $(present_slide).find(".slider-x-item-title").each(function(){// Description transaction out
						$(this).removeClass(settings.desAnimation);
						$(this).addClass(settings.desoutAnimation);
					 })
				 }
				 
				 if(settings.buttonoutAnimation!=''){
					 $(present_slide).find(".hero_slider_button").each(function(){// Button transaction out
						 $(this).removeClass(settings.buttonAnimation);
						 $(this).addClass(settings.buttonoutAnimation);
					
					 })
				 }
			 
             
			 //console.log($(kids[vars.currentSlide]).children().find('data-item').html());
			   
			  /* $('#'+settings.mainId+' .qcld_hero_content_area').last().remove();*/
			  
			  var url = $(kids[vars.currentSlide]).attr('data-bg-image');
				
				
				if(flag=='firstslide'){
					delayinit = 500;
				}else{
					delayinit = (settings.paddingTime<500?500:settings.paddingTime);
				}
			   
			   
			   
				setTimeout(function(){
					
					var url = $(kids[vars.currentSlide]).attr('data-bg-image');
					$('#'+settings.mainId+' .qcld_hero_content_area:visible').last().remove();
					
					if(typeof(url)!='undefined' && url!='' && flag!='firstslide'){
					  /*slider.css({
						   'background-image': 'url('+url+')',
						   
					   })*/
					   
					   if(settings.slidertype=='video'){

							$('#hero_vid'+settings.sid).animate({opacity: 0}, 1000, function(){
							   $(this).css({
									'opacity':'1'
								});
								$('#hero_vid'+settings.sid+' source').attr('src', url);
								$('#hero_vid'+settings.sid)[0].load();
						   })
						
					   }else if(settings.slidertype=='youtube_video'){
							
							if(typeof(player)!='undefined'){
								player.loadVideoById(url, 5, "large");
							}
							
					   }else if(settings.slidertype=='vimeo_video'){
						  
						   if(typeof(vplayer)!='undefined'){
							   urlpart = vplayer.element.src.split('?');
								vplayer.element.src = 'https://player.vimeo.com/video/'+url+'?'+urlpart[1];
							}
							
					   }else{

						   slider.css({
							   'overflow': 'hidden',
							})
							slider.find('.hero_bg_image1').css({
								'display':'block',
								'background':'url('+url+')'
							});
							console.log(flag+' asdfdsf')
							var transition = settings.bgtransition;
							//console.log(settings.bgtransition);
							if( flag == 'prev' ) {
								transition = settings.bgtransitionreverse;
							}
							if(transition=='fade'){ //fade transition effect
								
								slider.find('.hero_bg_image').animate({opacity: 0},800, function(){
									$(this).css({
										'opacity':'1',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								});
							}
							else if(transition=='slide-top'){
								slider.find('.hero_bg_image').animate({top: - slider.height()},1000, function(){
									$(this).css({
										'top':'0',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								})
							}
							else if(transition=='slide-bottom'){
								console.log('asdf');
								slider.find('.hero_bg_image').animate({top: slider.height()},1000, function(){
									$(this).css({
										'top':'0',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								})
							}
							else if(transition=='slide-left'){
								slider.find('.hero_bg_image').animate({left: - slider.width()},1000, function(){
									$(this).css({
										'left':'0',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								});
							}
							else if(transition=='slide-right'){
								
								slider.find('.hero_bg_image').animate({left: slider.width()},1000, function(){
									$(this).css({
										'left':'0',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								});
							}else{
								slider.find('.hero_bg_image').animate({opacity: 0},1000, function(){
									$(this).css({
										'opacity':'1',
										'background':'url('+url+')'
									});
									slider.find('.hero_bg_image1').css({
										'display':'none'
									});
									
								});
							}
						   
						   
					   }
						
						
					}
					
					slider.append('<div class="qcld_hero_content_area">'+vars.currentBlock+'</div>');
					
					
					if(jQuery(window).width() < 767 || settings.contentposition=='center'){
						
						slider.find('.qcld_hero_content_area:visible').css('margin-top','-'+Math.round(slider.find('.qcld_hero_content_area:visible').height()/2)+'px');
						
						if($(slider).height() < $(slider).find('.qcld_hero_content_area:visible').height()){
							$(slider).height($(slider).find('.qcld_hero_content_area:visible').height());
						}
						
					}
					if(jQuery(window).width() < 767){

						if($(slider).height() < $(slider).find('.qcld_hero_content_area:visible').height()){
							$(slider).height($(slider).find('.qcld_hero_content_area:visible').height());
						}
						
					}
					
					if(settings.lfxtitlein!==''){
						letterfxobj.config.fx = settings.lfxtitlein;
						letterfxobj.config.backwards = false;
						letterfxobj.config.words = true;
						$('.slider-x-lead-title').letterfx(letterfxobj.config);
					}
					
					if(settings.lfxdesin!==''){
						letterfxobj.config.fx = settings.lfxdesin;
						letterfxobj.config.backwards = false;
						letterfxobj.config.words = true;
						$('.slider-x-item-title p').letterfx(letterfxobj.config);
					}

					vars.currentSlide++;
					
					
				},delayinit)
			  
 
			
        };
		
        return this;
    };
        
    $.fn.sliderX = function(options) {
        return this.each(function(key, value){
            var childSliderX = new functionSliderX(this, options);
        });
    };
    
    //Default settings


    //$.fn._reverse = [].reverse;
    
})(jQuery);