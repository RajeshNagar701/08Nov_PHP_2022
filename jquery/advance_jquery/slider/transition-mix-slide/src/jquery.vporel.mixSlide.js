
//Plug-in constants
//LAyouts
const MXS_LAYOUT_1 = 1, MXS_LAYOUT_2 = 2, MXS_LAYOUT_3 = 3, MXS_LAYOUT_4 = 4;

//Z-index
const MXS_Z_INDEX_FRONT = 10,
	MXS_Z_INDEX_BACK = 8;

// Positions
const MXS_BOTTOM_POS = "bottom",
	MXS_TOP_POS = "top",
	MXS_LEFT_POS = "left",
	MXS_RIGHT_POS = "right",
	MXS_CENTER_POS = "center",
	MXS_TOP_LEFT_POS = "top-left",
	MXS_TOP_RIGHT_POS = "top-right",
	MXS_BOTTOM_LEFT_POS = "bottom-left",
	MXS_BOTTOM_RIGHT_POS = "bottom-right";
const MXS_FOUR_POSITION = [MXS_TOP_POS, MXS_RIGHT_POS, MXS_BOTTOM_POS, MXS_LEFT_POS];
	MXS_ORIGINS_POSITIONS = [MXS_TOP_LEFT_POS, MXS_TOP_RIGHT_POS, MXS_CENTER_POS, MXS_BOTTOM_LEFT_POS, MXS_BOTTOM_RIGHT_POS];

//Directions
const MXS_FORWARD = "forward",
	MXS_BACKWARD = "backward";
const MXS_VERTICAL_DIR = "vertical",
	MXS_HORIZONTAL_DIR = "horizontal",
	MXS_SKEW_1_DIR = "skew1";
	MXS_SKEW_2_DIR = "skew2";
const MXS_SIMPLE_DIRECTIONS = [MXS_VERTICAL_DIR, MXS_HORIZONTAL_DIR],
	MXS_ALL_DIRECTIONS = [MXS_VERTICAL_DIR, MXS_HORIZONTAL_DIR, MXS_SKEW_1_DIR, MXS_SKEW_2_DIR];

//Controls
const MXS_CONTROLS_PREV_CODE = "&#10094",
	MXS_CONTROLS_NEXT_CODE = "&#10095",
	MXS_CONTROLS_PAUSE_CODE = "&#9208",
	MXS_CONTROLS_PLAY_CODE = "&#9205",
	MXS_CONTROLS_CLOSE_CODE = "&#10006";
	MXS_CONTROLS_SQUARE_CODE = "&#11034";

// Transitions
const MXS_SIMPLE_TRANSITION = "simple", MXS_CUTTING_TRANSITION = "cutting", MXS_SHAPE_TRANSITION = "shape";
const MXS_RANDOM = {
		name : "random",
		constant : false
	},
	MXS_FADE = {
		name : "fade",
		type : MXS_SIMPLE_TRANSITION
	},
	MXS_SLIDE = {
		name : "slide",
		type : MXS_SIMPLE_TRANSITION,
		direction : MXS_HORIZONTAL_DIR
	},
	MXS_SLICES = {
		name : "slices",
		type : MXS_CUTTING_TRANSITION,
		direction : MXS_HORIZONTAL_DIR,
		count : 4
	},
	MXS_TILES = {
		name : "tiles",
		type : MXS_CUTTING_TRANSITION,
		count : 16,
		random : false
	},
	MXS_CIRCLE = {
		name : "circle",
		type : MXS_SHAPE_TRANSITION,
		origin : "center"
	},
	MXS_SQUARE = {
		name : "square",
		type : MXS_SHAPE_TRANSITION,
		origin : "center"
	};
const MXS_TRANSITIONS = [MXS_FADE, MXS_SLIDE, MXS_SLICES, MXS_TILES, MXS_CIRCLE, MXS_SQUARE];

function getTransition(name)
{
	let transition = null;
	for (var i = 0; (i < MXS_TRANSITIONS.length && MXS_TRANSITIONS[i].name != name); i++);
	if(i < MXS_TRANSITIONS.length)
		transition = MXS_TRANSITIONS[i];
	return transition;	
}

function chooseTransition()
{
	let transition = MXS_TRANSITIONS[Math.round(Math.random() * (MXS_TRANSITIONS.length-1))];
	if(transition.type == MXS_SHAPE_TRANSITION)
	{
		transition.origin = MXS_ORIGINS_POSITIONS[Math.round(Math.random() * (MXS_ORIGINS_POSITIONS.length-1))];
	}
	else if(transition.name == MXS_TILES.name)
	{
		transition.random = (Math.round(Math.random()) == 0) ? false : true;
	}
	else if(transition.name == MXS_SLICES.name || transition.name == MXS_SLIDE.name)
	{
		transition.direction = MXS_SIMPLE_DIRECTIONS[Math.round(Math.random())];
	}
	return transition;
}

(function($){
	$.fn.mixSlide = function(opt){

		let defaults = {
			fullscreen:false,
			animation:{
				speed:1,
				delay:3
			},
			transition : {
				name : "fade"
			},
			autoplay : false,
			controls : true,
			minimal_controls:false,
			thumbs : false,
			labels:true
		};

		let options = $.extend(true, defaults, opt);
		//Checking the integrity of the parameters
		options.animation.speed = options.animation.speed*1000;
		options.animation.delay = options.animation.delay*1000;

		if(options.transition.name != MXS_RANDOM.name)
		{
			let choosed_transition = getTransition(options.transition.name);
			if(choosed_transition == null)
				options.transition = MXS_FADE;
			else
				options.transition = $.extend(true, choosed_transition, options.transition);
		}
		else
		{
			if(options.transition.constant){
				options.transition = chooseTransition();
			}
		}
		//End checking
		this.each(function(){
			let $obj = $(this), timer;
			/*

					Définitions des éléments

			*/
			//Update object data
			$obj.addClass('mixSlide-frame');
			$obj.data("mixSlide-options", options);
			$obj.mixSlideData('animated', options.autoplay);

			if(options.fullscreen){
				$obj.addClass('fullscreen');
			}
			let images = [];
			let $imageDivs = $obj.find('div');
			//Retrieve images and labels
			for(let i = 0;i<$imageDivs.length;i++)
			{
				$imageDivs.eq(i).addClass("mixSlide-image");
				images.push({
					src:$imageDivs.eq(i).find('img').attr('src'),
					label : $imageDivs.eq(i).find('p').text()
				});
			}
			$obj.data("images", images);
			$obj.find('.mixSlide-image').wrapAll('<div class="mixSlide-images"></div>');
			$obj.find('.mixSlide-images').wrap('<div class="mixSlide-container"></div>');
			let $container = $obj.find('.mixSlide-container'),
				$images = $container.find('.mixSlide-images');
			$imageDivs.css('z-index', MXS_Z_INDEX_BACK).hide(-1);
			$imageDivs.eq(0).show(-1).css('z-index', MXS_Z_INDEX_FRONT);
			let currentImageIndex = 0,
				lastImageIndex = images.length - 1;

			if(options.labels){
				$images.find('p').show(-1);
			}else{
				$images.find('p').hide(-1);
			}
			if(options.thumbs){
				let thumbs_code = '<div class="mixSlide-thumbs">';
				for(let i = 0; i < images.length; i++){
					thumbs_code += '<span class="mixSlide-thumb"data-image-index="'+i+'"><img src="'+images[i].src+'"/></span>';
				}
				thumbs_code += "</div>";
				$container.append(thumbs_code);
			}

			$container.append('<div class="mixSlide-controls"></div>');
			let $controls = $container.find(".mixSlide-controls");

			//Controls buttons
			if(options.controls)
			{
				if(!options.minimal_controls){
					let controls_code = '\
						<div class="mixSlide-slide-buttons">\
							<span class="mixSlide-prev">'+MXS_CONTROLS_PREV_CODE+'</span>\
							<span class="mixSlide-next">'+MXS_CONTROLS_NEXT_CODE+'</span>\
							<span class="mixSlide-start-slide">'+MXS_CONTROLS_PLAY_CODE+'</span>\
							<span class="mixSlide-open-close-fullscreen">'+MXS_CONTROLS_SQUARE_CODE+'</span>\
						</div>';
					$controls.append(controls_code);

					if($obj.mixSlideData('animated'))
						$controls.find('.mixSlide-start-slide').html(MXS_CONTROLS_PAUSE_CODE);
					if(options.fullscreen){
						$controls.find('.mixSlide-open-close-fullscreen').html(MXS_CONTROLS_CLOSE_CODE);
						$obj.mixSlideData('fullscreen', true);
					}else{
						$obj.mixSlideData('fullscreen', false);
					}
					if(!options.thumbs){
						let points_code = '<div class="mixSlide-points">';
						for(let i = 0; i < images.length; i++){
							points_code += '<span class="mixSlide-point"data-image-index="'+i+'"></span>';
						}
						points_code += "</div>";
						$controls.append(points_code);
						
					}		
				}else{
					$controls.addClass("minimal");
					
					let points_code = '<div class="mixSlide-points">';
						for(let i = 0; i < images.length; i++){
							points_code += '<span class="mixSlide-point"data-image-index="'+i+'"></span>';
						}
						points_code += "</div>";
						$controls.append(points_code);
				}		
			}
			if(!options.minimal_controls){
				switch(options.layout)
				{
					case MXS_LAYOUT_1:
						$controls.addClass("top-right");
						$container.find('.mixSlide-thumbs').addClass("bottom");
						$images.find('p').addClass("left");
						if(options.thumbs) $images.find('p').addClass("top");
						else $images.find('p').addClass("bottom");
					break;
					case MXS_LAYOUT_2:
						$controls.addClass("bottom-right");
						$container.find('.mixSlide-thumbs').addClass("top");
						$images.find('p').addClass("left");
						if(options.thumbs) $images.find('p').addClass("bottom");
						else $images.find('p').addClass("top");
					break;
					case MXS_LAYOUT_3:
						$controls.addClass("bottom-right");
						$container.find('.mixSlide-thumbs').addClass("top-left");
						$images.find('p').addClass("top-right");
					break;
					default:
						$controls.addClass("top-left");
						$container.find('.mixSlide-thumbs').addClass("top-right");
						$images.find('p').addClass("bottom-left");
					break;
				}
			}else{
				$controls.addClass("bottom");
				$images.find('p').addClass("top-left");
			}

			/*

				ACTIONS
			*/
			if(options.controls)
			{
				$controls.find('.mixSlide-points span').click(function(){
						let indexImage = parseInt($(this).attr('data-image-index'));
						if(indexImage > currentImageIndex)
							changeImage(MXS_FORWARD, indexImage);
						else if(indexImage < currentImageIndex)
							changeImage(MXS_BACKWARD, indexImage);
					});
				$controls.find('.mixSlide-prev').click(function(){changeImage(MXS_BACKWARD);});
				$controls.find('.mixSlide-next').click(function(){changeImage(MXS_FORWARD);});
				$controls.find('.mixSlide-start-slide').click(function(){
					if($obj.mixSlideData('animated')){
						stopAnimation();
						$(this).html(MXS_CONTROLS_PLAY_CODE);
					}else{
						launchAnimation();
						$(this).html(MXS_CONTROLS_PAUSE_CODE);
					}
				});
				$controls.find('.mixSlide-open-close-fullscreen').click(function(){
					if($obj.mixSlideData('fullscreen')){
						$obj.mixSlideData('fullscreen', false);
						$(this).html(MXS_CONTROLS_SQUARE_CODE);
					}else{
						$obj.mixSlideData('fullscreen', true);
						$(this).html(MXS_CONTROLS_CLOSE_CODE);
					}
				});
			}
			if(options.thumbs)
			{
				$container.find('.mixSlide-thumbs span').click(function(){
					let indexImage = parseInt($(this).attr('data-image-index'));
					if(indexImage > currentImageIndex)
						changeImage(MXS_FORWARD, indexImage);
					else if(indexImage < currentImageIndex)
						changeImage(MXS_BACKWARD, indexImage);
				});
			}

			let transition = options.transition;
			function changeImage(dir, nextImageIndex = -1, isAutomatic = false)
			{
				if(options.transition.name == MXS_RANDOM.name){
					transition = chooseTransition();
				}
				if(nextImageIndex == -1){
					nextImageIndex = currentImageIndex+1;
					if(dir == MXS_BACKWARD){
						nextImageIndex = currentImageIndex-1;
						if(nextImageIndex < 0){
							nextImageIndex = lastImageIndex;
						}
					}
					if(dir == MXS_FORWARD && nextImageIndex > lastImageIndex){
						nextImageIndex = 0;
					}
				}
				if(!isAutomatic && $obj.mixSlideData('animated')){
					stopAnimation();
					setTimeout(launchAnimation, options.animation.speed);
				}
				//Variables for animation
				let currentTemp = currentImageIndex, nextTemp = nextImageIndex;
				//Simple transition
				if(transition.type == MXS_SIMPLE_TRANSITION)
				{
					//Fade Transition
					if(transition.name == MXS_FADE.name)
					{
						$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT).fadeIn(options.animation.speed);
						$imageDivs.eq(currentTemp).fadeOut(options.animation.speed).css("z-index", MXS_Z_INDEX_BACK);
					}
					//Slide Transition
					else if(transition.name == MXS_SLIDE.name)
					{
						let animated_property_forward = {left:"-100%"},
							animated_property_backward = {left:"0"};
						if(transition.direction == MXS_VERTICAL_DIR){
							animated_property_forward.left = "0";
							animated_property_forward.top = "-100%";
							animated_property_backward.top = "0";
						}else if(transition.direction == MXS_SKEW_1_DIR){
							animated_property_forward.top = "-100%";
							animated_property_backward.top = "0";
						}else if(transition.direction == MXS_SKEW_2_DIR){
							animated_property_forward.bottom = "-100%";
							animated_property_backward.bottom = "0";
						}
						if(dir == MXS_FORWARD){
							$imageDivs.eq(nextTemp).show(-1);
							$imageDivs.eq(currentTemp).animate(animated_property_forward, 
								options.animation.speed, function(){
									$(this).css({"z-index":MXS_Z_INDEX_BACK}).css(animated_property_backward).hide(-1);
									$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT);
								}
							);
						}else{
							$imageDivs.eq(currentTemp).css({"z-index":MXS_Z_INDEX_BACK});
							$imageDivs.eq(nextTemp).css(animated_property_forward).css({"z-index":MXS_Z_INDEX_FRONT}).show(-1);
							$imageDivs.eq(nextTemp).animate(animated_property_backward, 
								options.animation.speed, function(){
									$imageDivs.eq(currentTemp).hide(-1);
								}
							);
						}
					}
				}
				//Cutting transition
				else if(transition.type == MXS_CUTTING_TRANSITION)
				{
					$images.find('.mixSlide-div-over').remove();
					$images.append('<div class="mixSlide-div-over"></div>');
					let $divOver = $images.find('.mixSlide-div-over'),
						imageIndex = (dir == MXS_FORWARD) ? currentTemp : nextTemp;
					//Slices transition
					if(transition.name == MXS_SLICES.name)
					{
						let animated_even_forward = {left:"-100%"},
							animated_odd_forward = {left:"100%"},
							animated_backward = {left:"0"};
						if(transition.direction == MXS_VERTICAL_DIR){
							animated_even_forward = {top:"-100%"};
							animated_odd_forward = {top:"100%"};
							animated_backward = {top:"0"};
						}
						// Div over
						for(let i = 0;i<transition.count;i++){
							$divOver.append('\
								<div class="mixSlide-div-clip slice '+transition.direction+'" data-number="'+i+'">\
									<img src="'+images[imageIndex].src+'"/>\
								</div>'
							);
						}
						let size = (100/transition.count);
						$divOver.find('div').each(function(){
							let number = parseInt($(this).attr('data-number'));
							if(transition.direction == MXS_HORIZONTAL_DIR)
								clipSquare($(this), 0, number*size, 100, size);
							else
								clipSquare($(this), number*size, 0, size, 100);
							
							if(dir == MXS_FORWARD){
								$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT).show(-1);
								$imageDivs.eq(currentTemp).hide(-1).css("z-index", MXS_Z_INDEX_BACK);
								if(number%2 == 0){
									$(this).animate(animated_even_forward, options.animation.speed);
								}else{
									$(this).animate(animated_odd_forward, options.animation.speed);
								}
							}else{
								if(number%2 == 0){
									$(this).css(animated_even_forward);
									$(this).animate(animated_backward, options.animation.speed);
								}else{
									$(this).css(animated_odd_forward);
									$(this).animate(animated_backward, options.animation.speed, function(){
										$imageDivs.eq(currentTemp).css({"z-index":MXS_Z_INDEX_BACK}).hide(-1);
										$imageDivs.eq(nextTemp).css({"z-index":MXS_Z_INDEX_FRONT}).show(-1);
									});
								}
							}
						});
					}
					//Tiles transition
					else if(transition.name == MXS_TILES.name)
					{
						let animated_forward = {}, 
							animated_backward = {left:"0", top:"0"},
							sqrt_count = Math.sqrt(transition.count);
						let k = 0;
						for(let i = 0;i<sqrt_count;i++){
							for(let j = 0;j<sqrt_count;j++){
								$divOver.append('\
									<div class="mixSlide-div-clip slice '+options.transition.direction+'" data-number="'+k+'" data-x="'+i+'" data-y="'+j+'">\
										<img src="'+images[imageIndex].src+'"/>\
									</div>'
								);
								k++;
							}
						}
						let size = 100/sqrt_count;
						$divOver.find('div').each(function(){
							let x = parseInt($(this).attr('data-x')),
								y = parseInt($(this).attr('data-y'));
							clipSquare($(this), x*size, y*size, size)
						});
						let unitSpeed = options.animation.speed/transition.count;
						//Animation width random order
						if(transition.random)
						{
							let number = 0, $element,  x, y, distance_left, distance_top, elements_numbers = [];//Couples' elements (x&y)
							let element_number;
							do{
								do{
									element_number = Math.floor(Math.random()*transition.count);
								}while(elements_numbers.indexOf(element_number) != -1);
								elements_numbers.push(element_number);
								let $element = $divOver.find('div[data-number="'+element_number+'"]');
								animated_forward.left = (Math.floor(Math.random()*2) == 0) ? '-100%' : '100%';
								animated_forward.top = (Math.floor(Math.random()*2) == 0) ? '-100%' : '100%';
								if(dir == MXS_FORWARD){
									$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT).show(-1);
									$imageDivs.eq(currentTemp).hide(-1).css("z-index", MXS_Z_INDEX_BACK);
									$element.animate(animated_forward, unitSpeed*(number+1));
								}else{
									$element.css(animated_forward);
									if(number == transition.count-1){
										$element.animate(animated_backward, unitSpeed*(number+1), function(){
											$imageDivs.eq(currentTemp).css({"z-index": MXS_Z_INDEX_BACK}).hide(-1);
											$imageDivs.eq(nextTemp).css({"z-index":MXS_Z_INDEX_FRONT}).show(-1);
										});
									}else{
										$element.animate(animated_backward, unitSpeed*(number+1));
									}
								}
								number++;
							}while(number < transition.count);
						}
						//Animation with defined order
						else
						{ 
							let number = 0, $element;
							if(dir == MXS_FORWARD){
								$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT).show(-1);
								$imageDivs.eq(currentTemp).hide(-1).css("z-index", MXS_Z_INDEX_BACK);
							}
							animated_forward.left = (Math.floor(Math.random()*2) == 0) ? '-100%' : '100%';
							animated_forward.top = (Math.floor(Math.random()*2) == 0) ? '-100%' : '100%';
							for(let i = 0;i<sqrt_count;i++){
								for(let j = 0;j<sqrt_count;j++){
									$element = $divOver.find('div[data-x="'+i+'"][data-y="'+j+'"]');
									if(dir == MXS_FORWARD){
										$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT).show(-1);
										$imageDivs.eq(currentTemp).hide(-1).css("z-index", MXS_Z_INDEX_BACK);
										$element.animate(animated_forward, unitSpeed*(number+1));
									}else{
										$element.css(animated_forward);
										if(number == transition.count-1){
											$element.animate(animated_backward, unitSpeed*(number+1), function(){
												$imageDivs.eq(currentTemp).css({"z-index":MXS_Z_INDEX_BACK}).hide(-1);
												$imageDivs.eq(nextTemp).css({"z-index":MXS_Z_INDEX_FRONT}).show(-1);
											});
										}else{
											$element.animate(animated_backward, unitSpeed*(number+1));
										}
									}
									number++;
								}
							}
						}
					}
				}
				//Shape transition
				else if(transition.type == MXS_SHAPE_TRANSITION)
				{
					let origin,  x = 50, y = 50, radius = 70;
					if(transition.origin != MXS_CENTER_POS)
						if(transition.name == MXS_CIRCLE.name)
							radius = 150;
						else
							radius = 100;
					switch(transition.origin){
						case MXS_TOP_LEFT_POS: x = 0, y = 0;break;
						case MXS_TOP_RIGHT_POS: x = 100, y =  0;break;
						case MXS_BOTTOM_LEFT_POS: x = 0, y =  100;break;
						case MXS_BOTTOM_RIGHT_POS: x = 100, y = 100;break;
					}
					origin = x+"% "+y+"%";
					//Circle transition
					if(transition.name == MXS_CIRCLE.name)
					{
						
						if(dir == MXS_FORWARD){
							$imageDivs.eq(nextTemp).css({"clip-path":"circle(0% at "+origin+")", "z-index":MXS_Z_INDEX_FRONT}).show(-1);
							$imageDivs.eq(currentTemp).css({"z-index":MXS_Z_INDEX_BACK});
							$imageDivs.eq(nextTemp).animate(
								{step:radius},
								{
									duration:options.animation.speed,
									step:function(val){
										$imageDivs.eq(nextTemp).css({"clip-path":"circle("+val+"% at "+origin+")"});
									},
									always : function(){
										$imageDivs.eq(currentTemp).hide(-1);
										$imageDivs.eq(nextTemp).css({"clip-path":"none"}).animate({step:0},0);
									}
								}
							);
						}else{
							$imageDivs.eq(nextTemp).css({"z-index":MXS_Z_INDEX_BACK}).show(-1);
							$imageDivs.eq(currentTemp).css('clip-path', 'circle('+radius+'% at '+origin+')')
							$imageDivs.eq(currentTemp).animate(
								{step:radius},
								{
									duration:options.animation.speed,
									step:function(val){
										$imageDivs.eq(currentTemp).css({"clip-path":"circle("+(radius-val)+"% at "+origin+")"});
									},
									always:function(){
										$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT);
										$imageDivs.eq(currentTemp).css({"clip-path":"none","z-index":MXS_Z_INDEX_BACK}).hide(-1).animate({step:0},0);
										
									}
								}
							);
						}
					}
					//Square transition
					else if(transition.name == MXS_SQUARE.name)
					{
						let x_m, x_p, y_m, y_p;
						if(dir == MXS_FORWARD){
							$imageDivs.eq(nextTemp).css({
								"clip-path":"polygon("+x+"% "+y+"%, "+x+"% "+y+"%, "+x+"% "+y+"%, "+x+"% "+y+"%)",
								"z-index":MXS_Z_INDEX_FRONT
							}).show(-1);
							$imageDivs.eq(currentTemp).css({"z-index":MXS_Z_INDEX_BACK});
							$imageDivs.eq(nextTemp).animate(
								{step:radius},
								{
									duration:options.animation.speed,
									step:function(val){
										x_m = x-val, x_p = x+val, y_m = y-val, y_p = y+val;
										$imageDivs.eq(nextTemp).css({"clip-path":"polygon("+x_m+"% "+y_m+"%, "+x_p+"% "+y_m+"%, "+x_p+"% "+y_p+"%, "+x_m+"% "+y_p+"%)"});
									},
									always : function(){
										$imageDivs.eq(currentTemp).hide(-1);
										$imageDivs.eq(nextTemp).css({"clip-path":"none"}).animate({step:0},0);
									}
								}
							);
						}else{
							$imageDivs.eq(nextTemp).css({"z-index":MXS_Z_INDEX_BACK}).show(-1);
							x_m = x-radius, x_p = x+radius, y_m = y-radius, y_p = y+radius;									
							$imageDivs.eq(currentTemp).css('clip-path',"polygon("+x_m+"% "+y_m+"%, "+x_p+"% "+y_m+"%, "+x_p+"% "+y_p+"%, "+x_m+"% "+y_p+"%)");
							$imageDivs.eq(currentTemp).animate(
								{step:radius},
								{
									duration:options.animation.speed,
									step:function(val){
										x_m = x-(radius-val), x_p = x+(radius-val), y_m = y-(radius-val), y_p = y+(radius-val);
										$imageDivs.eq(currentTemp).css({"clip-path":"polygon("+x_m+"% "+y_m+"%, "+x_p+"% "+y_m+"%, "+x_p+"% "+y_p+"%, "+x_m+"% "+y_p+"%)"});
									},
									always:function(){
										$imageDivs.eq(nextTemp).css("z-index", MXS_Z_INDEX_FRONT);
										$imageDivs.eq(currentTemp).css({"clip-path":"none","z-index":MXS_Z_INDEX_BACK}).hide(-1).animate({step:0},0);
										
									}
								}
							);
						}
					}
				}
				currentImageIndex = nextImageIndex;
				refresh();
			}
			function refresh()
			{
				let $current_thumb = $container.find('.mixSlide-thumbs span').eq(currentImageIndex),
					$thumbs = $container.find('.mixSlide-thumbs');
				$controls.find('.mixSlide-points span').removeClass('active');
				$container.find('.mixSlide-points span').eq(currentImageIndex).addClass('active');
				if(options.thumbs){
					$thumbs.find('span').removeClass('active');
					$current_thumb.addClass('active');
					let d_from_first = Math.abs($current_thumb.offset().left - $('.mixSlide-thumb:eq(0)').offset().left),
						scroll = d_from_first - $thumbs.offset().left + ($thumbs.width()/2) - 80;
					if($thumbs.height() > $thumbs.width()){
						d_from_first = Math.abs($current_thumb.offset().top - $('.mixSlide-thumb:eq(0)').offset().top);
						scroll = d_from_first - $thumbs.offset().top + ($thumbs.height() / 2) - 80;
					}
					console.log(scroll)
					$thumbs.animate(
						{step:scroll},
						{
							duration:1000,
							step:function(val){
								if($thumbs.height() < $thumbs.width())
									$thumbs.scrollLeft(val);
								else
									$thumbs.scrollTop(val);
							}
						}
					);
				}
			}
			refresh();
			function animation()
			{
				changeImage(MXS_FORWARD, -1, true);
			}
			function launchAnimation()
			{
				timer = setInterval(animation, options.animation.delay+options.animation.speed);
				$obj.mixSlideData('animated', true);
			}
			function stopAnimation()
			{
				clearInterval(timer);
				$obj.mixSlideData('animated', false);
			}
			if(options.autoplay)
				launchAnimation();
		});
		return this;
	}


	function clipSquare($element, x, y, width, height = null){
		if (height == null)
			height = width;
		let P1 = x+"% "+y+"%",
			P2 = (x+width)+"% "+y+"%",
			P3 = (x+width)+"% "+(y+height)+"%",
			P4 = x+"% "+(y+height)+"%";
		$element.css('clip-path', 'polygon('+P1+', '+P2+', '+P3+', '+P4+')');
	}

	$.fn.mixSlideData = function(datum, val = null){
		let $obj = $(this);
		if(val == null){
			return $obj.data("mixSlide-options")[datum];
		}else{
			if(typeof datum == "string"){
				let mixSlide_options = $obj.data("mixSlide-options");
				mixSlide_options[datum] = val;
				if(datum == "fullscreen"){
					if(val){
						$obj.addClass('fullscreen');
			
						$obj.find('.mixSlide-open-close-fullscreen').html(MXS_CONTROLS_CLOSE_CODE);
				
					}else{
						$obj.removeClass('fullscreen');
						$obj.find('.mixSlide-open-close-fullscreen').html(MXS_CONTROLS_SQUARE_CODE);
					}
				}
				$obj.data("mixSlide-options", mixSlide_options);
			}else{
				console.log("Error (mixSlideData : the datum must be a string");
			}
			return this;
		}
	}


	$.fn.mixSlideOperation = function(operation, val = null){
		this.each(function(){
			let $obj = $(this);
			if(operation == "change"){
				if(val != null){
					let position = -1,
						images = $obj.data("images");
					for(let i = 0;(i<images.length && position < 0);i++){
						if(images[i].src == val){
							position = i;
						}
					}
					if(position > -1){
						let thumbs = $obj.mixSlideData("thumbs");
						if(thumbs.active)
							$obj.find('.mixSlide-thumbs span[data-image-index="'+position+'"]').trigger('click');
						else
							$obj.find('.mixSlide-points span[data-image-index="'+position+'"]').trigger('click');
					}
				}
			}
		});
		return this;
	}
})(jQuery);