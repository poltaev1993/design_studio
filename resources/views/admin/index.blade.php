@extends('admin_home')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Главная</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            {!! Form::open(['url' => 'admin/categories/add-new']) !!}

            <div class="col-md-12">

                <h3>
                    Добавить категорию |
                    <small>
                        <a href="{{ url('admin/categories') }}">Управление категориями</a>
                    </small>
                </h3>

                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('name', 'Название: ', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Введите название категории', 'required']) !!}
                        <small></small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('value', 'Name: ', ['class' => 'control-label']) !!}
                        {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of category', 'required']) !!}
                        <small></small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('url', 'Ссылка: ', ['class' => 'control-label']) !!}
                        <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right"
                                title="Ссылка, желательно, чтобы была переводом названия на английский, не слишком длинной,
                            дружелюбной, удобночитаемой и несущей смысл.
                            Например, 'Интерьер и дизайн' => 'interior-design'.
                        Выглядеть это будет вот так: ilyaskali.com/interior-design">
                        </i>
                        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'interior-design', 'required']) !!}
                        @if(Session::has('error-url-unique'))
                            <div class="alert alert-danger">
                                {{ Session::get('error-url-unique') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('&nbsp;', '', ['class' => 'control-label']) !!}
                        {!! Form::submit('Добавить', ['class' => 'btn btn-success', 'style' => 'display:block']) !!}
                    </div>
                </div>

            </div>

            {!! Form::close() !!}
        </div>

        <hr>

        <div class="row" id="sortable">
            @foreach($categories as $category)
                <div class="col-md-3" id="{{ $category->id }}">
                    <div class="panel panel-{{ $colors[rand(0, count($colors) - 1)] }}">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="text-center" style="font-size: 152px">
                                        {{ ucfirst(substr($category->url, 0, 1)) }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <div style="font-size: 24px">
                                        {{ $category->name }}
                                    </div>
                                    <small>
                                        {{ $category->url }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('admin/control/' . $category->url) }}">
                            <div class="panel-footer">
                                <span class="pull-left">Детали страницы</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /#page-wrapper -->
@stop