@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Категории школы</h1>
            </div>

            <div class="col-md-12">
                <a href="/admin/school/categories/add" class="btn btn-lg btn-success">
                    Добавить категорию
                </a>
            </div>
        </div>

        <br>
        <hr>

        <div class="row">
            <div class="col-md-12">
                @foreach($categories as $category)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img img-circle" width="120" height="120" src="{{ $category->image }}" alt="{{ $category->name }}">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">
                                    {{ $category->name }}
                                </a>
                            </h4>
                            <p>
                                {{ $category->description }}
                            </p>
                            <hr>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading{{ $category->id }}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                                                Подробнее
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $category->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $category->id }}">
                                        <div class="panel-body">
                                            {!! $category->body !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-right">
                            <a href="/admin/school/categories/delete/{{ $category->id }}" title="Удалить"><i class="glyphicon glyphicon-remove"></i></a>
                            <br>
                            <a href="/admin/school/categories/edit/{{ $category->id }}" title="Редактировать"><i class="glyphicon glyphicon-pencil"></i></a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@stop