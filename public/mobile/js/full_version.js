$(function(){
	var desktopProcess, desktopProjects;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
		init();
		$(window).resize(function(){
			init();
		});

		$(window).on('load', function(){
			setTimeout(function(){
				$('.loader').hide();
			}, 1300)
		});
		var isModalActive = false;

		$('.md-trigger').on('click', function(){
			isModalActive = true;
		});

		$('.md-overlay, .md-close').on('click', function(){
			isModalActive = false;
		});
		// Mousewheel 
		$(window).on('mousewheel', function(e){
			if(isModalActive) return;
			var pageIndex = pageSlider.activeIndex;
			if(e.originalEvent.wheelDelta / 120 > 0) {
				// UP
				console.log(pageIndex);
				if(pageIndex == 0) return;
				pageIndex--;
			}
			else{
				// Down
				if(pageIndex == ($('#page_slider').find('.swiper-slide').length - 1)) return;
				pageIndex++;	
				console.log(pageIndex);
			}
			pageSlider.slideTo(pageIndex); 
		});
		$('#page_slider').on('mousewheel', function(e){
			e.stopPropagation();
		});
	}

	function setHeightByWidth(el, coeff){
		el.innerHeight(el.innerWidth() / coeff + 25);
	}

	function init(){
		// Initialization and manipulation of main page slider
		pageSliderSettings.simulateTouch = false;
		pageSlider = new Swiper ('#page_slider', pageSliderSettings);
		pageSlider.on('slideChangeStart', function(event){
	      	leftContentSlider.slideTo(pageSlider.activeIndex);
	      	$('.select_item_menu__js').find('a').removeClass('active');
	      	$('.select_item_menu__js')
	      		.find('li:nth-child(' + (pageSlider.activeIndex + 1) + ')')
	      		.find('a')
	      		.addClass('active');
	    });

	    // Initialization and setting features of team swiper slider
		teamSwiperSlider.destroy(false, true);
		teamSettings.slidesPerView = 4;
		teamSettings.slidesPerGroup = 4;
		teamSettings.spaceBetween = 30;
		teamSettings.simulateTouch = false;
		teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);

		// Initialization and setting features of review swiper slider
		reviewsSwiperSlider.destroy(false, true);
		reviewsSlider.slidesPerView = 4;
		reviewsSlider.slidesPerGroup = 4; 
		reviewsSlider.spaceBetween = 30;
		reviewsSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewsSlider);

		// set heigth for main slider
		setHeightByWidth($('.first-slider'), 1.619);

		// Initialization and setting features of review swiper slider
		desktopProcess = new Swiper('#desktopProcess', processSettings);
		setHeightByWidth($('#desktopProcess').find('.img-item'), 2.5); // set heigth for desktop-process slider

		// Initialization and setting features of review swiper slider
		desktopProjects = new Swiper('#desktopProject', projectsSettings);
		setHeightByWidth($('#desktopProject').find('.img-item'), 2.5); // set heigth for desktop-process slider
	}
});
