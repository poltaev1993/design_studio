@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    О студии
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                {!! Form::model($about, ['files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('video', 'Видео: ', ['class' => 'control-label']) !!}
                    {!! Form::file('video', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Сохранить', ['class' => 'btn btn-lg btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop