@extends('ilyaskali')

@section('page_title')
    Отзывы | inStudio | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <section class="container">
        <div class="review-blocks">
            <div class="rev-grid clearfix">
                <div class="rev-1-3">
                    <div class="news">
                    @foreach($col1 as $review)
                        <div class="one-review video-block clearfix">
                            @if($review->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $review->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($review->image))
                                            <div class="rev-image" style="background-image: url({{ $review->image }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>
                                        <p>
                                            {{ $review->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="rev-1-3">
                    <div class="news">
                    @foreach($col2 as $review)
                        <div class="one-review video-block clearfix">
                            @if($review->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $review->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($review->image))
                                            <div class="rev-image" style="background-image: url({{ $review->image }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>
                                        <p>
                                            {{ $review->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="rev-1-3">
                    <div class="news">
                    @foreach($col3 as $review)
                        <div class="one-review video-block clearfix">
                            @if($review->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $review->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($review->image))
                                            <div class="rev-image" style="background-image: url({{ $review->image }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $review->title }}</h4>
                                        <p>
                                            {{ $review->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $review->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        {!! $reviews->render() !!}

    </section>

    @foreach(array_merge($col1, $col2, $col3) as $review)
        <div class="remodal-bg">
            <div class="remodal remodal__js" data-remodal-id="blogInfo{{ $review->id }}">
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1>{{ $review->title }}</h1>
                <hr>
                @if($review->isVideo)
                    <iframe class="fullwidth"
                            src="{!! $review->videoUrl !!}"></iframe>
                @endif
                <div id="blog-content">
                    {!! $review->description !!}
                </div>
                <hr>
                <div id="blog-content">
                    {!! $review->body !!}
                </div>
            </div>
        </div>
    @endforeach
@stop