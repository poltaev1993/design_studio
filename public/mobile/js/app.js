$(function(){
	var mainSlider = new Swiper ('#main_swiper_slider__js', mainSettings);
	var teamSwiperSlider = new Swiper('#team_swiper_slider__js', teamSettings);
	var ProjectDetailsSwiperSlider = new Swiper('#projects_details_swiper_slider__js', projectsDetailsSlider);
	var projectsSwiperSlider = new Swiper('#projects_swiper_slider__js', projectSliderSettings);
	var reviewsSwiperSlider = new Swiper('#reviews_swiper_slider__js', reviewsSlider);
	var questAndAnswSwiperSlider = new Swiper('#question_and_answer_swiper_slider__js', questAnswSlider);
	var blogAndAnswSwiperSlider = new Swiper('#blog_swiper_slider__js', blogAnswSlider);
	$('.burger__js').on('click', function(){
		$('.right-nav-bar').addClass('show');
		$('.bg').addClass('show_bg');
	});

	$('.close__js').on('click', function(){
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
});

 function setMap(){
    var $map = $('#map');
    var mapHeight = $('#section10').innerHeight() / 2;
    var mapWidth = $('#section10').innerWidth();
    
    $map.height(mapHeight);
    $map.width(mapWidth);
  }