@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{ $category->url == 'drawing-school' ? 'О курсах' : 'О студии' }}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                {!! Form::model($about, ['class' => 'form-horizontal', 'files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('poster', 'Постер для видео: ', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-sm-9 text-center">
                        <img src="{{ isset($about) ? $about->poster : '/img/upload_logo.png' }}" class="upload-icon-preview" />
                        {!! Form::file('poster', ['class' => 'form-control', 'accept' => 'image/*', isset($about) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
                    </div>
                </div>

                <br>

                <div class="form-group">
                    {!! Form::label('video', 'Видео: ', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-sm-9 text-center">
                        {!! Form::file('video', ['class' => 'form-control']) !!}
                        <small style="color:red">
                            Размер видео-файла не должен превышать 100 мб.
                        </small>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 text-right">
                        {!! Form::submit('Сохранить', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop