$(function(){
	var desktopProcess, desktopProjects, fullquestAndAnswSwiperSlider;
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
		init();
		$(window).resize(function(){
			init();
		});

		$(window).on('load', function(){
			setTimeout(function(){
				$('.loader').hide();
			}, 1300)
			relateBlockByBottom($('#main_swiper_slider__js'), $('.right-nav-bar').find('.wrapper-block'));
			lineAlignment($('.left-line__js'), $('.right-line'));
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
	} else {
		$('.loader').hide();
	}

	// Initial methods and variables
	function init(){
		// Perfect scrollbar 
		$('.perfect_scroll_init_js').perfectScrollbar();
		relateBlockByBottom($('#main_swiper_slider__js'), $('.right-nav-bar').find('.wrapper-block'));
		lineAlignment($('.left-line__js'), $('.right-line'));
		setMaxHeight($('.answer_question').find('.block-item'));
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

		// Initialization of answer&question swiper slider
		fullquestAndAnswSwiperSlider = new Swiper('#full_question_and_answer_swiper_slider__js', questAnswSlider);
		
		// Initialization and setting features of review swiper slider
		desktopProjects = new Swiper('#desktop_blog_swiper_slider__js', desktopBlogsSettings);
		setHeightByWidth($('#desktop_blog_swiper_slider__js').find('.img-item'), 2.5); // set heigth for desktop-process slider
		
	}

	function setHeightByWidth(el, coeff){
		el.innerHeight(el.innerWidth() / coeff + 25);
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

	// Line1 = .page_name, line2 = right-line; moveblock = .wrapper-block;
	function lineAlignment($leftLine, $rightLine){
		var absPosition = $rightLine.offset().top;
		$leftLine.each(function(){
			var parent = $(this).closest('.wrapper-block'); // find parent of line element
			var upperElHeight = parent.find('.page_name').outerHeight(); // find height of elements that locates before line
			var diff = 0;
			diff = absPosition - (upperElHeight + 30);
			parent.css('top', diff);
		});
	}

	function relateBlockByBottom(el1, el2){
		var bottomPosition = el1.offset().top + el1.innerHeight();
		var windowHeight = $(window).innerHeight();
		var diff = bottomPosition - el2.innerHeight() - 20;
		el2.css('top', diff);
	}

	function toPercent(value, fullVal){
		return (value * 100) / fullVal;
	}
});
