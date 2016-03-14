@extends('ilyaskali')

@section('page_title')
    Блог | inStudio | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <section class="container">
        <div class="review-blocks">
            <div class="rev-grid clearfix">
                <div class="rev-1-3">
                    <div class="news blog-p">
                    @foreach($col1 as $blog)
                        <div class="one-review video-block clearfix">
                            @if($blog->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $blog->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($blog->preview))
                                            <div class="rev-image" style="background-image: url({{ $blog->preview }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>
                                        <p>
                                            {{ $blog->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="rev-1-3">
                    <div class="news blog-p">
                    @foreach($col2 as $blog)
                        <div class="one-review video-block clearfix">
                            @if($blog->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $blog->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($blog->preview))
                                            <div class="rev-image" style="background-image: url({{ $blog->preview }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>
                                        <p>
                                            {{ $blog->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="rev-1-3">
                    <div class="news blog-p">
                    @foreach($col3 as $blog)
                        <div class="one-review video-block clearfix">
                            @if($blog->isVideo)
                                <div class="rev-collspan">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>

                                        <iframe class="rev-iframe" height="315"
                                                src="{!! $blog->videoUrl !!}"></iframe>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="rev-left-bl float-left">
                                    <div class="rev-content">
                                        @if (strlen($blog->preview))
                                            <div class="rev-image" style="background-image: url({{ $blog->preview }})"></div>
                                        @endif
                                    </div>
                                </div>

                                <div class="rev-right-bl float-left">
                                    <div class="rev-content">
                                        <h4>{{ $blog->title }}</h4>
                                        <p>
                                            {{ $blog->description }}
                                        </p>

                                        <div class="text-right">
                                            <a class="read-more" href="#blogInfo{{ $blog->id }}" href="#">Подробнее...</a>
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

        {!! $blogs->render() !!}

    </section>

    @foreach(array_merge($col1, $col2, $col3) as $blog)
        <div class="remodal-bg">
            <div class="remodal remodal__js" data-remodal-id="blogInfo{{ $blog->id }}">
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1>{{ $blog->title }}</h1>
                <hr>
                @if($blog->isVideo)
                    <iframe class="fullwidth"
                            src="{!! $blog->videoUrl !!}"></iframe>
                @endif
                <div id="blog-content">
                    {!! $blog->description !!}
                </div>
                <hr>
                <div id="blog-content">
                    {!! $blog->body !!}
                </div>
            </div>
        </div>
    @endforeach
@stop