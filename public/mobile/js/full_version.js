$(function(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
		init();
		$(window).resize(function(){
			init();
		});

		$(window).on('load', function(){
			sliderPagination();
			$('.loader').hide();
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

	function setHeightByWidth(el){
		el.innerHeight(el.innerWidth() / 1.619 + 25);
	}

	function init(){
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
		teamSwiperSlider.destroy(false, true);
		teamSettings.slidesPerView = 4;
		teamSettings.spaceBetween = 30;
		teamSettings.simulateTouch = false;
		teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);

		reviewsSlider.slidesPerView = 4;
		reviewsSlider.spaceBetween = 30;
		reviewsSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewsSlider);
		setHeightByWidth($('.first-slider'));
	}

	function sliderPagination(){
		$('.numeric-pagination').each(function(){
			var closest = $(this).closest('.swiper-container');
			var countSl = closest.find('.swiper-slide').length;
			var bullet = 0;
			var line = '';
			var count = 0;
			for(var i = 1; i < countSl; i++){
				if(count == 0){
					bullet++;
					line += $(this).append('<span class="swiper-pagination-bullet">' + bullet + '</span>');						
				}
				count++;
				if(count == 3){
					count = 0;
				}
			}

			$(this).on('click', '.swiper-pagination-bullet', function(){
				$('.swiper-pagination-bullet-active').removeClass('swiper-pagination-bullet-active');
				$(this).addClass('swiper-pagination-bullet-active');
				var index = $(this).index();
				teamSwiperSlider.slideTo((index) * 4);
			})
		});
	}
});
