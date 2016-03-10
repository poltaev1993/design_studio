@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Новости школы</h1>
            </div>

            <div class="col-md-12">
                <a href="/admin/school/news/add" class="btn btn-lg btn-success">
                    Добавить новость
                </a>
            </div>
        </div>

        <br>
        <hr>

        <div class="row">
            <div class="col-md-12">
                @foreach($news as $new)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img img-circle" width="120" height="120" src="{{ $new->image }}" alt="{{ $new->name }}">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">
                                    {{ $new->name }}
                                </a>
                            </h4>
                            <p>
                                {{ $new->description }}
                            </p>
                            <hr>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading{{ $new->id }}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $new->id }}" aria-expanded="true" aria-controls="collapse{{ $new->id }}">
                                                Подробнее
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $new->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $new->id }}">
                                        <div class="panel-body">
                                            {!! $new->body !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-right">
                            <a href="/admin/school/news/delete/{{ $new->id }}" title="Удалить"><i class="glyphicon glyphicon-remove"></i></a>
                            <br>
                            <a href="/admin/school/news/edit/{{ $new->id }}" title="Редактировать"><i class="glyphicon glyphicon-pencil"></i></a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@stop