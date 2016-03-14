@extends('ilyaskali')

@section('page_title')
    Школа | inStudio | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')

    <section class="container school-bg">
        <div class="review-blocks">
            <div class="rev-grid clearfix">
                <div class="rev-2-3">
                    <!-- Begin Swiper -->
                    <div class="sw-wrapp">
                        <div class="swiper-container swiper-school-container school_slider__js">
                            <div class="swiper-wrapper">
                                @foreach($slider as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image->url }}" alt="School Slider">
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- End Swiper -->

                    {{-- Begin new grid --}}
                    <div class="rev-grid clearfix">
                        <div class="rev-1">
                            <div class="news shcool">
                            @foreach($col1 as $category)
                                <div class="one-review clearfix">
                                    <div class="rev-left-bl float-left">
                                        <div class="rev-content">
                                            <div class="rev-image"
                                                 style="background-image: url({{ $category->image }})">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rev-right-bl float-left">
                                        <div class="rev-content">
                                            <h4>{{ $category->name }}</h4>

                                            <p>
                                                {{ $category->description }}
                                            </p>

                                            <div class="text-right">
                                                <a class="read-more" href="#categoryMore-{{ $category->id }}">Подробнее...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="rev-1">
                            <div class="news shcool">
                            @foreach($col2 as $category)
                                <div class="one-review clearfix">
                                    <div class="rev-left-bl float-left">
                                        <div class="rev-content">
                                            <div class="rev-image"
                                                 style="background-image: url({{ $category->image }})">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rev-right-bl float-left">
                                        <div class="rev-content">
                                            <h4>{{ $category->name }}</h4>

                                            <p>
                                                {{ $category->description }}
                                            </p>

                                            <div class="text-right">
                                                <a class="read-more" href="#categoryMore-{{ $category->id }}">Подробнее...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- End new grid --}}
                </div>
                <div class="rev-1-3">
                    <div class="news shcool">
                        {{-- <h1>Новости</h1> --}}
                        @foreach($news as $new)
                            <div class="one-review clearfix">
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        <div class="rev-image"
                                             style="background-image: url({{ $new->image }})">
                                        </div>
                                    </div>
                                </div>
                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $new->title }}</h4>
                                        <p>
                                            {{ $new->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#newsMore-{{ $new->id }}">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@foreach($categories as $category)
    <div class="remodal-bg">
        <div class="remodal remodal__js" data-remodal-id="categoryMore-{{ $category->id }}">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>{{ $category->name }}</h1>
            <hr>
            <div id="blog-content">
                {!! $category->body !!}
            </div>
        </div>
    </div>
@endforeach

@foreach($news as $new)
    <div class="remodal-bg">
        <div class="remodal remodal__js" data-remodal-id="newsMore-{{ $new->id }}">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>{{ $new->title }}</h1>
            <hr>
            <div id="blog-content">
                {!! $new->body !!}
            </div>
        </div>
    </div>
@endforeach
