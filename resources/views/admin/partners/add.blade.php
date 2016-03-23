@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Добавить партнера</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                {!! Form::open(['class' => 'form-horizontal', 'role' => 'form', 'files' => true]) !!}

                @include('admin.projects._form', ['button_text' => 'Добавить'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop