var pageSliderSettings = {
	slidesPerView: 1,
	preventClicks: false, 
	spaceBetween: 0,
	// Optional parameters
	direction: 'vertical',
	speed: 700,
	keyboardControl: true,
	mousewheelControl: true,
	prevButton: '.page-buttons .swiper-button-prev', 
	nextButton: '.page-buttons .swiper-button-next', 
};

var leftSliderSettings = {
	slidesPerView: 1,
	spaceBetween: 0,
	// Optional parameters
	direction: 'vertical',
	speed: 1500,
	keyboardControl: true,
	simulateTouch: true
};

var mainSettings = {
	slidesPerView: 1,
	spaceBetween: 0,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	speed: 700,
	pagination: '#main_swiper_slider__js .swiper-pagination',
	paginationClickable: true
};

var teamSettings = {
	simulateTouch: false,
	slidesPerView: 1,
	spaceBetween: 25,
	// Optional parameters
	direction: 'horizontal',
	speed: 700,
	prevButton: '#team_swiper_slider__js .swiper-button-prev',
	nextButton: '#team_swiper_slider__js .swiper-button-next',
	pagination: '#team_swiper_slider__js .swiper-pagination',
	paginationClickable: true,
	paginationBulletRender: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
  	}
};

var processSettings = {
	simulateTouch: false,
	slidesPerView: 3,
	slidesPerGroup: 9,
	slidesPerColumn: 3,
	spaceBetween: 10,
	// Optional parameters
	direction: 'horizontal',
	speed: 700,
	prevButton: '#desktopProcess .swiper-button-prev',
	nextButton: '#desktopProcess .swiper-button-next',
	pagination: '#desktopProcess .swiper-pagination',
	paginationClickable: true,
	paginationBulletRender: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
  	}
};

var projectsSettings = {
	simulateTouch: false,
	slidesPerView: 3,
	slidesPerGroup: 9,
	slidesPerColumn: 3,
	spaceBetween: 10,
	// Optional parameters
	direction: 'horizontal',
	speed: 700,
	prevButton: '#desktopProject .swiper-button-prev',
	nextButton: '#desktopProject .swiper-button-next',
	pagination: '#desktopProject .swiper-pagination',
	paginationClickable: true,
	paginationBulletRender: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
  	}
};

var projectSliderSettings = {
	slidesPerView: 1,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	speed: 700,
	spaceBetween: 25,
	prevButton: '#projects_swiper_slider__js .swiper-button-prev',
	nextButton: '#projects_swiper_slider__js .swiper-button-next'			
};

var projectsDetailsSlider = {
	slidesPerView: 1,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	speed: 700,
	spaceBetween: 25,
	prevButton: '#projects_details_swiper_slider__js .swiper-button-prev',
	nextButton: '#projects_details_swiper_slider__js .swiper-button-next'			
};



var reviewsSlider = {
	slidesPerView: 1,
	spaceBetween: 25,
	loop:false,
	simulateTouch: false,
	// Optional parameters
	direction: 'horizontal',
	speed: 700,
	prevButton: '#reviews_swiper_slider__js .swiper-button-prev',
	nextButton: '#reviews_swiper_slider__js .swiper-button-next',
	pagination: '#reviews_swiper_slider__js .swiper-pagination',
	paginationClickable: true,
	paginationBulletRender: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
  	}		
};

var questAnswSlider = {
	slidesPerView: 1,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	spaceBetween: 25,
	speed: 700,
	prevButton: '#question_and_answer_swiper_slider__js .swiper-button-prev',
	nextButton: '#question_and_answer_swiper_slider__js .swiper-button-next',
	pagination: '#question_and_answer_swiper_slider__js .swiper-pagination',
	paginationClickable: true,
    paginationBulletRender: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
    }	
}

var blogAnswSlider = {
	slidesPerView: 1,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	spaceBetween: 30,
	speed: 700,
	prevButton: '#blog_swiper_slider__js .swiper-button-prev',
	nextButton: '#blog_swiper_slider__js .swiper-button-next'	
}

var partnerSliderSettings = {
	slidesPerView: 1,
	// Optional parameters
	direction: 'horizontal',
	loop: false,
	spaceBetween: 25,
	speed: 700,
	prevButton: '#partners_slider__js .swiper-button-prev',
	nextButton: '#partners_slider__js .swiper-button-next'	
}