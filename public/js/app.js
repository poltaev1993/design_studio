$(document).ready(function(){

	$(window).on('load', function(){
		$('.loader').show();
	});
	setTimeout(function(){
		$('.loader').hide();
	}, 2000);

	$('.next-modal').on('click', function(){
		$('.md-show').removeClass('md-show').next().addClass('md-show');
	});

	$('.prev-modal').on('click', function(){
		$('.md-show').removeClass('md-show').prev().addClass('md-show');
	});

	// function hrAlignment($leftLines, $rightLine, parent){
	hrAlignment($('.left-line__js'), $('.right-line'), '.wrapper-block');

	// fixLeftSection();
	//  Swiper slider
	if($('#main_swiper_slider__js').length > 0){
      var mainSlider = new Swiper ('#main_swiper_slider__js', {
		slidesPerView: 1,
		spaceBetween: 0,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		pagination: '.swiper-pagination',
		autoplay: 3000,
		speed: 700,
		effect: 'coverflow',
		coverflow: {
			  rotate: 50,
			  stretch: 0,
			  depth: 100,
			  modifier: 1,
			  slideShadows : true
			}
    	});
      var miniSlidePerView = $('#mini_main_slider').find('.swiper-slide').length;
      var miniSlider = new Swiper ('#mini_main_slider', {
		slidesPerView: miniSlidePerView,
		spaceBetween: 10,
		centeredSlides: true,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		simulateTouch: false
    	});

      var wordSlider = new Swiper ('#main_titles_slider', {
			slidesPerView: 1,
			spaceBetween: 0,
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			simulateTouch: false,
    	});

      mainSlider.on('slideChangeStart', function(event){
      	wordSlider.slideTo(mainSlider.activeIndex);
      	miniSlider.slideTo(mainSlider.activeIndex);
      });
  	}

  	if($('#team_swiper_slider__js').length > 0){
  		var teamSwiperSlider = new Swiper('#team_swiper_slider__js', {
			slidesPerView: 4,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 700,
			pagination: '#team_swiper_slider__js .swiper-pagination',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	        	console.log('index', index);
	            return '<span class="' + className + '">' + (index + 1) + '</span>';
	        }
	  	});
  	}

	// Project slider
	var countPagination = 0;
	var projectSwiperSlider = new Swiper('#project_swiper_slider__js', {
			slidesPerView: 2,
			slidesPerColumn: 2,
			spaceBetween: 20,
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 700,
			nextButton: '#project_swiper_slider__js .swiper-button-next',
			prevButton: '#project_swiper_slider__js .swiper-button-prev',
			pagination: '#project_swiper_slider__js .swiper-pagination',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	            var line = '';
	            if(index == 0){
	            	countPagination = 0;
	            }
	            if(index % 2 == 0){
	            	line = '<span class="' + className + '">' + ++countPagination + '</span>'
	            }
	            return line;
	        }
	  	});

	var reviewsCounter = 0;
	var reviwesSwiperSlider = new Swiper('#reviews_swiper_slider__js', {
			slidesPerView: 4,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			speed: 700,
			pagination: '#reviews_swiper_slider__js .swiper-pagination',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	        	var line = '';
	        	if(index % 4 == 0){
	        		line = '<span class="' + className + '">' + ++reviewsCounter + '</span>';
	        	}
	            return line;
	        }
	  	});

	var questionAnswerSlider = new Swiper('#question_and_answer_swiper_slider__js', {
		slidesPerView: 1,
		spaceBetween: 30,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		speed: 700,
		pagination: '#question_and_answer_swiper_slider__js .swiper-pagination',
        paginationClickable: true,
        paginationBulletRender: function (index, className) {
    		var line = '<span class="' + className + '">' + ++index + '</span>';
            return line;
        }
	});
	var blogAnswerSlider = new Swiper('#blog_slider__js', {
		slidesPerView: 1,
		spaceBetween: 30,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		speed: 700,
		pagination: '#blog_slider__js .swiper-pagination',
        paginationClickable: true,
        paginationBulletRender: function (index, className) {
    		var line = '<span class="' + className + '">' + ++index + '</span>';
            return line;
        }
	});

	var blogAnswerSlider = new Swiper('#partners_slider__js', {
		slidesPerView: 1,
		spaceBetween: 30,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		speed: 700,
		pagination: '#blog_slider__js .swiper-pagination',
        paginationClickable: true,
        paginationBulletRender: function (index, className) {
    		var line = '<span class="' + className + '">' + ++index + '</span>';
            return line;
        }
	});


  	$('.select_item_menu__js').find('a').on('click', function(event){
  		event.preventDefault();

  		var $th = $(this);
  		var refName = $th.attr('href');
  		setHash(refName);
		goToHashSection('#' + refName, 'down');
  	});


  	var windowHeight = $(window).innerHeight();
  	/*var initialHash = getHash();
  	if(initialHash === undefined){
  		initialHash = '#section1';
  	}*/
  	var initialHash = '#section1';
  	setHash(initialHash);
	goToHashSection(initialHash, 'down');

  	$(document).on('mousewheel', function(e){
  		// fixLeftSection();
  		var hash = getHash();
  		if(e.originalEvent.wheelDelta /120 > 0) {
  			var neededSection = getPrevSection(hash);
			goToHashSection('#' + neededSection, 'up');
		}
		else{
			var neededSection = getNextSection(hash);
  			goToHashSection('#' + neededSection, 'down');
		}
  	});

  	$('#prev_section').on('click', function(){
  		var hash = getHash();
		var neededSection = getPrevSection(hash);
		goToHashSection('#' + neededSection, 'up');
  	});

  	$('#next_section').on('click', function(){
  		var hash = getHash();
		var neededSection = getNextSection(hash);
		goToHashSection('#' + neededSection, 'down');
  	});

	$('.team_buttons').find('.swiper-button-prev').on('click', function(){
		mySwiper1.slideNext();
	});

	$('.team_buttons').find('.swiper-button-next').on('click', function(){
		mySwiper1.slidePrev();
	});

	$('.review_buttons').find('.swiper-button-prev').on('click', function(){
		mySwiper2.slideNext();
	});

	$('.review_buttons').find('.swiper-button-next').on('click', function(){
		mySwiper2.slidePrev();
	});
	var mySwiper2 = new Swiper ('#review_slider', {
		slidesPerView: 5,
		spaceBetween: 30,
		// Optional parameters
		direction: 'horizontal',
		loop: true
	});

	//Sb_slider
	Page.init();
	//end sb_slider

	//3dGallery
	$('#dg-container').gallery({
		autoplay:	true,
		interval: 3000
	});



	var $dropdown;
	$('.swiper-block__js').hover(
		function(){
			$dropdown = $(this).find('.dropdown');
			$dropdown.css('height', 'auto');
			var swiperBlockHeight = $dropdown.innerHeight();
			$dropdown.css('height', '0');
			$dropdown.animate({
				height: swiperBlockHeight
			}, 350);
		}, 
		function(){
			$dropdown.animate({
				height: 0
			}, 350);
		}
	);

	
});

function hrAlignment($leftLines, $rightLine, parent){
	var rightLineTopPos = $rightLine.position().top;
	var rightParent = $rightLine.closest(parent);

	var thisLeftLinePos;
	var parentTopPos;

	var diff;
	var shift;
	$leftLines.each(function(){
		var th =  $(this);
		thisLeftLinePos = th.position().top;
		parentTopPos = th.closest(parent).position().top;

		diff = (thisLeftLinePos + parentTopPos) - (rightLineTopPos + rightParent.position().top);
		shift = 50 - toPercent(diff, $(window).innerHeight());
		
		th.closest(parent).css('top', shift + '%');

	});
}

function toPercent(value, fullVal){
	return (value * 100) / fullVal;
}

function getHash(){
	return location.hash;
}

function setHash(hashName){
	location.hash = hashName;
}

function getNextSection(section){
	if($(section).next().attr('id') === undefined) {
		$('#next_section').addClass('turn_off');
		return 'section9';
	}
	$('.arrow').removeClass('turn_off');
	return $(section).next().attr('id');
}

function getPrevSection(section){
	if($(section).prev().attr('id') === undefined){
		$('#prev_section').addClass('turn_off');
		return 'section1';
	} 
	$('.arrow').removeClass('turn_off');
	return $(section).prev().attr('id');
}

function goToHashSection(section, direction){
	var positionOfSection = $(section).innerHeight();
	// $(window).scrollTop(positionOfSection);
	$('html, body').animate({
	    scrollTop: positionOfSection
	 }, 300);

	 console.log('positionOfSection', positionOfSection);

	// $('html, body').animate({scrollTop:positionOfSection}, 1000);
/*	$('html, body').stop().animate({
	    'scrollTop': positionOfSection
	}, 900, 'swing', function () {
	    console.log('lol');
	});*/
	var num = +cut(section, 0, 8);
	if(direction === 'down'){
		/*$('.section').removeClass('scrollingUp');
		$('.section').removeClass('scrollingDown');*/
		$('.section').find('.block-abs').css({
			top: 'auto',
			bottom: '100%',
			transform: 'translateY(50%)'
		});
		$(section).find('.block-abs').animate({
			bottom: '50%',
			transform: 'translateY(50%)'
		}, 750);

		// $(section).addClass('scrollingDown');
		$('.left-sections').stop().animate({scrollTop:(num-1) * positionOfSection}, 1200);

	} else {
		$('.section').find('.block-abs').css({
			bottom: 'auto',
			top: '100%',
			transform: 'translateY(-50%)'
		});
		$(section).find('.block-abs').animate({
			top: '50%',
			transform: 'translateY(-50%)'
		}, 750);

		positionOfSection = $(section).offset().top;
		$('.left-sections').stop().animate({scrollTop: (-1)*(num-1) * positionOfSection}, 1200);
	}
	setHash(section);

	$('.select_item_menu__js').find('a').removeClass('active');
	$('.select_item_menu__js').find('a[href="' + cut(section, 0, 0) + '"]').addClass('active');
}

function cut(line, start, end){
	return line.substr(0, start) + line.substr(end+1);
}

var Page = (function() {
	var $navArrows = $( '#nav-arrows' ).hide(),
		slicebox = $( '#sb-slider' ).slicebox( {
			onReady : function() {
				$navArrows.show();
			},
			orientation : 'r',
			cuboidsRandom : true,
			disperseFactor : 30,
			autoplay : true,
			interval: 5000
		} ),
		
		init = function() {

			initEvents();
			
		},
		initEvents = function() {

			// add navigation events
			$navArrows.children( ':first' ).on( 'click', function() {

				slicebox.next();
				return false;

			} );

			$navArrows.children( ':last' ).on( 'click', function() {
				
				slicebox.previous();
				return false;

			} );

		};

		return { init : init };

})();