function init(){myMap=new ymaps.Map("map",{center:[43.235134,76.92245],zoom:15}),myPlacemark=new ymaps.Placemark([43.235134,76.92245],{content:"inStudio!",balloonContent:"г. Алматы, ул. Сатпаева 30а/1. офис 86график работы: 9:00-19:00 пн/птМы всегда рады помочь Вам!"}),myMap.geoObjects.add(myPlacemark)}function setMap(){var e=$("#map"),i=$("#section10").innerHeight()/3,t=$("#section10").innerWidth();e.height(i),e.width(t)}$(function(){new Swiper("#main_swiper_slider__js",mainSettings),new Swiper("#team_swiper_slider__js",teamSettings),new Swiper("#projects_details_swiper_slider__js",projectsDetailsSlider),new Swiper("#projects_swiper_slider__js",projectSliderSettings),new Swiper("#reviews_swiper_slider__js",reviewsSlider),new Swiper("#question_and_answer_swiper_slider__js",questAnswSlider),new Swiper("#blog_swiper_slider__js",blogAnswSlider);$(".burger__js").on("click",function(){$(".right-nav-bar").addClass("show"),$(".bg").addClass("show_bg")}),$(".close__js").on("click",function(){$(".right-nav-bar").removeClass("show"),$(".bg").removeClass("show_bg")}),$(".menu-list").find("a").on("click",function(){$(".right-nav-bar").removeClass("show"),$(".bg").removeClass("show_bg")}),$("#map").length&&(setMap(),ymaps.ready(init)),$(window).resize(function(){$("#map").length&&(setMap(),ymaps.ready(init))})});
