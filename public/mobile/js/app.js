var pageSlider, leftContentSlider, mainSlider, teamSwiperSlider, 
ProjectDetailsSwiperSlider, projectsSwiperSlider, reviewsSwiperSlider, 
questAndAnswSwiperSlider, blogAndAnswSwiperSlider, parnersSwiperSlider;

$(function(){
	var sliders = [];
	pageSlider = new Swiper ('#page_slider', pageSliderSettings);
	// left slider setttings
	leftContentSlider = new Swiper ('#left-content-slider', leftSliderSettings);
	mainSlider = new Swiper ('#main_swiper_slider__js', mainSettings);
	teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);
	ProjectDetailsSwiperSlider = new Swiper('#projects_details_swiper_slider__js', projectsDetailsSlider);
	projectsSwiperSlider = new Swiper('#projects_swiper_slider__js', projectSliderSettings);
	reviewsSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewsSlider);
	questAndAnswSwiperSlider = new Swiper('#question_and_answer_swiper_slider__js', questAnswSlider);
	blogAndAnswSwiperSlider = new Swiper('#blog_swiper_slider__js', blogAnswSlider);
	parnersSwiperSlider = new Swiper('#partners_slider__js', partnerSliderSettings);
	

	$('.select_item_menu__js').find('a').on('click', function(e){
		e.preventDefault();
		$(".select_item_menu__js").find('a').removeClass('active');
    	$(this).addClass('active');
		var selectedIndex = $(this).parent('li').index();
		console.log(selectedIndex)
		pageSlider.slideTo(selectedIndex, 700, false);
		leftContentSlider.slideTo(selectedIndex, 1500, false);
		$('.right-nav-bar').removeClass('show');
		$('.bg').removeClass('show_bg');
	});

	$('.perfect_scroll_init_js').perfectScrollbar();

	//3dGallery
	/*$('#dg-container').gallery({
		autoplay:	true,
		interval: 5000
	});*/

	$('.dg-container').each(function(){
		$(this).gallery({
			autoplay:	true,
			interval: 5000
		});
	});

	/*$('#dg-container2').gallery({
		autoplay:	true,
		interval: 5000
	});*/

	$('.certain-swiper-slider').each(function(){
		var slider = new Swiper($(this), {
			slidesPerView: 1,
			spaceBetween: 0,
			spaceBetween: 30,
			// Optional parameters
			direction: 'horizontal',
			pagination: $(this).find('.swiper-pagination'),
	        paginationClickable: true
		});
	});

	$('.burger__js').on('click', function(){
		$('.right-nav-bar').addClass('show');
		$(this).hide();
		$('.logo').hide();
		$('.close2__js').show();
		$('.slogan').show();
		$('.bg').addClass('show_bg');
	});

	$('.close__js, .close2__js').on('click', function(){
		$('.right-nav-bar').removeClass('show');
		$('.burger__js').show();
		$('.logo').show();
		$('.slogan').hide();
		$('.close__js').hide();
		$('.close2__js').hide();
		$('.bg').removeClass('show_bg');
	});

	$('.menu-list').find('a').on('click', function(){
		$('.right-nav-bar').removeClass('show');
		$('.bg').removeClass('show_bg');
		$('.close__js').trigger('click');
	});

	if($('#map').length){
		setMap();
		ymaps.ready(init);
	}
	$(window).resize(function(){
		if($('#map').length){
			setMap();
			ymaps.ready(init);
		}
	});

	$('.callback__js').on('click', function(){
		$('#callback').addClass('md-show');
	});
	$('#callback').find('.md-close').on('click', function(){
		$('#callback').removeClass('md-show');
	});

	// Slider hide/show operations
	$('.md-modal').find('.dg-container').hide();
	$('.md-trigger').on('click', function(){
		$('.md-modal').find('.dg-container').show();
	});
	$('.md-close, .md-overlay').on('click', function(){
		$('.md-modal').find('.dg-container').hide();
	});
});

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
    var mapHeight = $('#section10').innerHeight() / 2;
    var mapWidth = $('#section10').innerWidth();
    
    $map.height(mapHeight);
    $map.width(mapWidth);
  }