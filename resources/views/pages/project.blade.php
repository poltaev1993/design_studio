@extends('instudio')

@section('page_title')
    {{ $project->title }} | inStudio | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <!-- Begin Container -->
    <section class="container">
        <!-- <div id="slides">
          <div class="slides-container">
            <img src="/img/slide1.jpg"  alt="">
            <img src="/img/home-banner-01.jpg"  alt="">
          </div>

          <nav class="slides-navigation">
                      <a href="#" class="next"></a>
                      <a href="#" class="prev"></a>
                    </nav>
        </div> -->

        <!-- Swiper -->
        <div class="swiper-container swiper-container__js">
            <div class="swiper-wrapper">
                @foreach($project->photos as $photo)
                    <div class="swiper-slide">
                        <img src="{{ $photo->image }}" alt="">
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </section>
    <!-- End Container -->
@stop