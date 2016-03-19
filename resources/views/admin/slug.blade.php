@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{ $category->name }}
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>
                    Добро пожаловать в раздел "{{ $category->name }}"!
                </h3>
            </div>

            <div class="col-md-6">
                {!! Form::model($category) !!}

                <div class="form-group">
                    {!! Form::label('welcome_text', 'Приветственный текст: ', ['class' => 'control-label']) !!}
                    {!! Form::textarea('welcome_text', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Сохранить', ['class' => 'btn btn-success btn-lg']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop