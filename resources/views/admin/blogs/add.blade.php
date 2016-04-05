@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Добавить {{ $category->url == 'drawing-school' ? 'новость' : 'пост' }}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                {!! Form::open(['class' => 'form-horizontal', 'role' => 'form', 'files' => true]) !!}

                @include('admin.blogs._form', ['button_text' => 'Добавить'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop