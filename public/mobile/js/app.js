$(function(){
	var sliders = [];
	var pageSlider = new Swiper ('#page_slider', pageSliderSettings);
	var mainSlider = new Swiper ('#main_swiper_slider__js', mainSettings);
	var teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);
	var ProjectDetailsSwiperSlider = new Swiper('#projects_details_swiper_slider__js', projectsDetailsSlider);
	var projectsSwiperSlider = new Swiper('#projects_swiper_slider__js', projectSliderSettings);
	var reviewsSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewsSlider);
	var questAndAnswSwiperSlider = new Swiper('#question_and_answer_swiper_slider__js', questAnswSlider);
	var blogAndAnswSwiperSlider = new Swiper('#blog_swiper_slider__js', blogAnswSlider);
	$('.perfect_scroll_init_js').perfectScrollbar();

	$('.select_item_menu__js').find('a').on('click', function(){
		var selectedIndex = $(this).index();
		pageSlider.slideTo(selectedIndex);
		$('.right-nav-bar').removeClass('show');
		$('.bg').removeClass('show_bg');
	});

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
		$('.bg').addClass('show_bg');
	});

	$('.close__js').on('click', function(){
		$('.right-nav-bar').removeClass('show');
		$('.bg').removeClass('show_bg');
	});

	$('.menu-list').find('a').on('click', function(){
		$('.right-nav-bar').removeClass('show');
		$('.bg').removeClass('show_bg');
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
    var mapHeight = $('#section10').innerHeight() / 3;
    var mapWidth = $('#section10').innerWidth();
    
    $map.height(mapHeight);
    $map.width(mapWidth);
  }