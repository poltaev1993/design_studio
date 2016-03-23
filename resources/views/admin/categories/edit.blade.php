@extends('admin_home')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Редактировать категорию</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                {!! Form::model($category, ['class' => 'form-horizontal', 'role' => 'form']) !!}

                @include('admin.partners._form', ['button_text' => 'Сохранить'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop