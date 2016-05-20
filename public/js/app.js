$(document).ready(function(){
	$('.loader').hide();
	var isModalActive = false;

	setMaxHeight($('.answer_question').find('.block-item'));
	// Perfect scrollbar 
	$('.perfect_scroll_init_js').perfectScrollbar();
	$('.info__js').on('click', function(e){
		e.stopPropagation();
		if(!$(this).hasClass('clicked')){
			$('.left-nav-bar').addClass('show');
			$('body').css('background-color', '#3A3737');
			$(this).addClass('clicked');
		} else {
			$('.left-nav-bar').removeClass('show');
			$('body').css('background-color', '#fff');
			$(this).removeClass('clicked');
		}
	});

	$('.burger__js').on('click', function(e){
		e.stopPropagation();
		if(!$(this).hasClass('clicked')){
			$('.right-nav-bar').addClass('show');
			$('body').css('background-color', '#3A3737');
			$(this).addClass('clicked');
		} else {
			$('.right-nav-bar').removeClass('show');
			$('body').css('background-color', '#fff');
			$(this).removeClass('clicked');
		}
	});

	$('body').on('click', function(){
		$('.left-nav-bar').removeClass('show');
		$('.right-nav-bar').removeClass('show');
		$('.info__js, burger__js').removeClass('clicked');
		$('body').css('background-color', '#fff');
	});
	if($('.fullvideo_effect__js').length > 0){
		var BV = new $.BigVideo({
	        // If you want to use a single mp4 source, set as true
	        useFlashForFirefox:true,
	        // If you are doing a playlist, the video won't play the first time
	        // on a touchscreen unless the play event is attached to a user click
	        forceAutoplay:false,
	        controls:false,
	        doLoop:false,
	        container:$('body'),
	        shrinkable:false,
	    });
		BV.init();
		$('#big-video-vid_html5_api').prop("volume", 0);;
		 $('.menu-list').find('a').on('mouseover', function(e) {
	        e.preventDefault();
	        BV.show($(this).data('videoHref'));
	        autoHide(true);
	        isShowingPlaylist = true;
	    });	
	}
	
	
	$(window).on('load', function(){
		$('.loader').show();
	});
	setTimeout(function(){
		$('.loader').hide();
	}, 100);
	$('.set_logo__js').css('top', $('.first-slider').offset().top / 2 - 20);
	// alert($('#section1').find('.block-abs').position().top);
	//$('.set_logo__js').css('top', $('#section1').find('.block-abs').position().top - 30);
	$('.md-trigger').on('click', function(){
		isModalActive = true;
	});

	$('.md-overlay, .md-close').on('click', function(){
		isModalActive = false;
	});

	$('.next-modal').on('click', function(){
		var category = $(this).closest('.md-modal').data('modalCategory');
		var nextCategory = $('.md-show').next().data('modalCategory');
		/*if(!$('.md-show').next().hasClass('md-show')) {
			isModalActive = false;
			$('.md-show').removeClass('md-show');
			return;
		}*/

		if(category == nextCategory){
			$('.md-show').removeClass('md-show').next().addClass('md-show');
			isModalActive = true;
		} else {
			$('.md-show').removeClass('md-show');
			isModalActive = false;
		}
	});

	$('.prev-modal').on('click', function(){
		var category = $(this).closest('.md-modal').data('modalCategory');
		var prevCategory = $('.md-show').prev().data('modalCategory');
		/*if(!$('.md-show').prev().hasClass('md-show')){
			isModalActive = false;
			$('.md-show').removeClass('md-show');
			return;	
		} */

		if(category == prevCategory){
			$('.md-show').removeClass('md-show').prev().addClass('md-show');
			isModalActive = true;
		} else {
			$('.md-show').removeClass('md-show');
			isModalActive = false;
		}
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
		pagination: '.swp__js',
		paginationClickable: true,
		speed: 700,
		effect: 'coverflow',
		simulateTouch: false,
		autoplay: 3000,
		coverflow: {
			  rotate: 50,
			  stretch: 0,
			  depth: 100,
			  modifier: 1,
			  simulateTouch: false
			}
    	});
      //var miniSlidePerView = $('#mini_main_slider').find('.swiper-slide').length;
      /*var miniSlider = new Swiper ('#mini_main_slider', {
		slidesPerView: 3,
		spaceBetween: 10,
		centeredSlides: true,
		// Optional parameters
		direction: 'horizontal',
		autoplay: 3000
    	});*/

      var wordSlider = new Swiper ('#main_titles_slider', {
			slidesPerView: 1,
			spaceBetween: 0,
			// Optional parameters
			direction: 'horizontal',
			simulateTouch: false,
    	});

   /*   miniSlider.on('slideChangeStart', function(event){
      	wordSlider.slideTo(miniSlider.activeIndex);
      	mainSlider.slideTo(miniSlider.activeIndex);
      });

      $('#mini_main_slider').find('.swiper-slide').on('click', function(){
      	miniSlider.slideTo($(this).index());
      });*/
  	}
  	var teamSettings;
  	if($('#team_swiper_slider__js').length > 0){
  		teamSettings = {
			slidesPerView: 4,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			speed: 700,
			pagination: '#team_swiper_slider__js .swiper-pagination',
			nextButton: '#team_swiper_slider__js .swiper-button-next',
			prevButton: '#team_swiper_slider__js .swiper-button-prev',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	            return '<span class="' + className + '">' + (index + 1) + '</span>';
	        }
	  	}
  		var teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);
  	}

  	$('.certain-swiper-slider').each(function(){
  		var newSlider = new Swiper ($(this), {
			slidesPerView: 1,
			spaceBetween: 0,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			pagination: $(this).find('.swiper-pagination'),
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	            return '<span class="' + className + '">' + (index + 1) + '</span>';
	        }
    	});
  	});

	// Project slider
	var countPagination = 0;
	var projectSwiperSlider = new Swiper('#project_swiper_slider__js', {
			slidesPerView: 2,
			slidesPerColumn: 2,
			spaceBetween: 20,
			// Optional parameters
			direction: 'horizontal',
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

		var projectSwiperSlider = new Swiper('#processes_swiper_slider__js', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 20,
			// Optional parameters
			direction: 'horizontal',
			speed: 700,
			nextButton: '#processes_swiper_slider__js .swiper-button-next',
			prevButton: '#processes_swiper_slider__js .swiper-button-prev',
			pagination: '#processes_swiper_slider__js .swiper-pagination',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	            var line = '';
	            line = '<span class="' + className + '">' + (index + 1) + '</span>'
	            return line;
	        }
	  	});
		if($.trim($('.slogan').text()) == 'Logo'){
			console.log(projectSwiperSlider);
			projectSwiperSlider = new Swiper('#project_swiper_slider__js', {
			slidesPerView: 4,
			slidesPerColumn: 2,
			spaceBetween: 20,
			// Optional parameters
			direction: 'horizontal',
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
		}
	var reviewSettings = {
			slidesPerView: 4,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			loop: false,
			speed: 700,
			pagination: '#reviews_swiper_slider__js .swiper-pagination',
			nextButton: '#reviews_swiper_slider__js .swiper-button-next',
			prevButton: '#reviews_swiper_slider__js .swiper-button-prev',
	        paginationClickable: true,
	        paginationBulletRender: function (index, className) {
	        	var line = '';
        		line = '<span class="' + className + '">' + (index + 1) + '</span>';
	        	
	            return line;
	        }
	  	};
	var reviwesSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewSettings);

	var questionAnswerSlider = new Swiper('#question_and_answer_swiper_slider__js', {
		slidesPerView: 1,
		spaceBetween: 30,
		// Optional parameters
		direction: 'horizontal',
		loop: false,
		speed: 700,
		pagination: '#question_and_answer_swiper_slider__js .swiper-pagination',
		nextButton: '#question_and_answer_swiper_slider__js .swiper-button-next',
		prevButton: '#question_and_answer_swiper_slider__js .swiper-button-prev',
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
		loop: false,
		speed: false,
		pagination: '#blog_slider__js .swiper-pagination',
		nextButton: '#blog_slider__js .swiper-button-next',
		prevButton: '#blog_slider__js .swiper-button-prev',
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
		loop: false,
		speed: 700,
		pagination: '#partners_slider__js .swiper-pagination',
		nextButton: '#partners_slider__js .swiper-button-next',
		prevButton: '#partners_slider__js .swiper-button-prev',
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
  		if(isModalActive) return;
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

  	detectswipe('bodyID',myfunction);

  	/*$('body').on('swipedown', function(){
  		var hash = getHash();
		var neededSection = getPrevSection(hash);
		goToHashSection('#' + neededSection, 'up');
  	});

  	$('body').on('swipeup', function(){
  		var hash = getHash();
		var neededSection = getNextSection(hash);
		goToHashSection('#' + neededSection, 'down');
  	});*/

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
		loop: false
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

	sliderWidthChanging();
	if($('#map').length){
		setMap();
		ymaps.ready(init);
	}
	$(window).resize(function(){
		sliderWidthChanging();
		if($('#map').length){
			setMap();
			ymaps.ready(init);
		}
	});
	

	function sliderWidthChanging(){
		var ww = $(window).width()
		teamSwiperSlider.destroy();
		if (ww >= 1000) {
			teamSwiperSlider.params.slidesPerView = 4;
			reviwesSwiperSlider.params.slidesPerView = 4;
		}
		if (ww > 0 && ww < 1000) {
			teamSwiperSlider.params.slidesPerView = 1;
			reviwesSwiperSlider.params.slidesPerView = 1;
		}
		teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);
		reviwesSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewSettings);
	}
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
		/*console.log('thisLeftLinePos', thisLeftLinePos, 'parentTopPos', parentTopPos);*/
		diff = (rightLineTopPos + rightParent.position().top) - (thisLeftLinePos);
		// diff = (thisLeftLinePos + parentTopPos) - (rightLineTopPos + rightParent.position().top);
		shift = toPercent(diff, $(window).outerHeight());
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
		return 'section11';
	}
	$('.arrow').removeClass('turn_off');
	return $(section).next().attr('id');
}

function getPrevSection(section){
	if($(section).prev().attr('id') === undefined){
		$('#prev_section').addClass('turn_off');
		return 'section0';
	} 
	$('.arrow').removeClass('turn_off');
	return $(section).prev().attr('id');
}

function goToHashSection(section, direction){
	var positionOfSection = $(section).innerHeight();
	$('html, body').animate({
	    scrollTop: positionOfSection
	 }, 300);
	$('html, body').stop().animate({
	    'scrollTop': positionOfSection
	}, 900, 'swing', function () {
	    console.log('lol');
	});
	var num = +cut(section, 0, 7);
	if(direction === 'down'){
		if(section === "#section11") return;
		$(section).find('.block-abs').css({
			bottom: 'auto',
			top: '100%',
			opacity: 0,
			transform: 'translateY(-50%)'
		});

		$(section).find('.block-abs').animate({
			top: '50%',
			opacity: 1,
			transform: 'translateY(-50%)'
		}, { duration: 750, queue: false });
		/*setTimeout(function(){
			$('.set_logo__js').stop().animate({
				'top': $(section).find('.block-abs').position().top - 70
			});
		}, 751);*/
		$('.left-sections').stop().animate({scrollTop:(num-1) * positionOfSection}, 1200);

	} else {
		if(section === "#section0") return;
		$(section).find('.block-abs').css({
			top: 'auto',
			bottom: '100%',
			opacity: 0,
			transform: 'translateY(50%)'
		});
		$(section).find('.block-abs').animate({
			bottom: '50%',
			opacity: 1,
			transform: 'translateY(50%)'
		}, { duration: 750, queue: false });
		/*setTimeout(function(){
			$('.set_logo__js').stop().animate({
				'top': $(section).find('.block-abs').position().top - 70
			});
		}, 751);*/
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

// init map
function init(){     
    myMap = new ymaps.Map("map", {
        center: [43.235134, 76.92245],
        zoom: 15
    });

    myPlacemark = new ymaps.Placemark([43.235134, 76.92245], { 
      content: 'inStudio!', 
      balloonContent: 'г. Алматы, ул. Сатпаева 30а/1. офис 86' + 
                        'график работы: 9:00-19:00 пн/пт' +
                        'Мы всегда рады помочь Вам!' });
    myMap.geoObjects.add(myPlacemark);
}

  function setMap(){
    var $map = $('#map');
    var mapHeight = $('#main_swiper_slider__js').innerHeight();
    var mapWidth = $('#section10').innerWidth();
    
    $map.height(mapHeight);
    $map.width(mapWidth);
  }


// SwipeJS
function detectswipe(el,func) {
  swipe_det = new Object();
  swipe_det.sX = 0;
  swipe_det.sY = 0;
  swipe_det.eX = 0;
  swipe_det.eY = 0;
  var min_x = 20;  //min x swipe for horizontal swipe
  var max_x = 40;  //max x difference for vertical swipe
  var min_y = 40;  //min y swipe for vertical swipe
  var max_y = 50;  //max y difference for horizontal swipe
  var direc = "";
  ele = document.getElementById(el);
  ele.addEventListener('touchstart',function(e){
    var t = e.touches[0];
    swipe_det.sX = t.screenX; 
    swipe_det.sY = t.screenY;
  },false);
  ele.addEventListener('touchmove',function(e){
    e.preventDefault();
    var t = e.touches[0];
    swipe_det.eX = t.screenX; 
    swipe_det.eY = t.screenY;    
  },false);
  ele.addEventListener('touchend',function(e){
    //horizontal detection
    if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y)))) {
      if(swipe_det.eX > swipe_det.sX) direc = "r";
      else direc = "l";
    }
    //vertical detection
    if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
      if(swipe_det.eY > swipe_det.sY) direc = "d";
      else direc = "u";
    }

    if (direc != "") {
      if(typeof func == 'function') func(el,direc);
    }
    direc = "";
  },false);  
}


function setMaxHeight(el){
	var max = el.innerHeight();
	$.each(el, function(){
		if(max < $(this).innerHeight()){
			max = $(this).innerHeight();

		}
	});
	/*console.log('max = ', max);*/
	el.innerHeight(max);
}

function myfunction(el,d) {
	//alert("you swiped on element with id '"+el+"' to "+d+" direction");
	//
	if(d == 'd'){
		var hash = getHash();
		var neededSection = getPrevSection(hash);
		goToHashSection('#' + neededSection, 'up');	
	}
	else if(d == 'u'){
		var hash = getHash();
		var neededSection = getNextSection(hash);
		goToHashSection('#' + neededSection, 'down');	
	}
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