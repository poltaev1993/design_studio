@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Редактировать вопрос-отве</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                {!! Form::model($question, ['class' => 'form-horizontal', 'role' => 'form']) !!}

                @include('admin.questions._form', ['button_text' => 'Сохранить'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop