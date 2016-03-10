@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Редактировать новость школы</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-offset-2 col-md-6">

                {!! Form::model($news, ['class' => 'form-horizontal', 'files' => true]) !!}

                @include('admin.school.news._form', ['button_text' => 'Редактировать'])

                {!! Form::close() !!}
            </div>

        </div>
    </div>

@stop