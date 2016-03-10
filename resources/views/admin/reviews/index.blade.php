@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все отзывы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($reviews->all(), 4) as $review_rows)
            <div class="row">
                @foreach($review_rows as $review)
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $review->title }}</b>
                            </div>
                            <div class="panel-body">
                                @if ($review->image)
                                    <img src="{{ $review->image }}" alt="{{ $review->title }}" class="img img-responsive"/>
                                @endif
                                <hr/>
                                <p>
                                    {{ $review->description }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="/admin/reviews/edit/{{ $review->id }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="/admin/reviews/delete/{{ $review->id }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($reviews))
            <p class="text-center">
                Нет отзывов.
            </p>
        @endif

        {!! $reviews->render() !!}
    </div>

@stop