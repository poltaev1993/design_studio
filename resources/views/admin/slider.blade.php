@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Слайдер раздела
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Картинки для слайдера</h3>

                {!! Form::open(['files' => true]) !!}
                <div class="form-group">
                    <div class="photos-section">
                        @if(isset($slides) && $slides->count())
                            @foreach($slides as $photo)
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            {!! Form::file('photos['.$photo->id.']', ['class' => 'form-control', 'accept' => 'image/*', isset($slides) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
                                        </div>
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <img src="{{ $photo->image }}" class="upload-icon-preview" />
                                            </div>
                                        </div>
                                        <div class="panel-footer text-center">
                                            {!! Form::text('title['.$photo->id.']', $photo->title, ['class' => 'form-control', 'placeholder' => 'Описание']) !!}
                                            <button data-photo-id="{{ $photo->id }}" class="delete-slider-photo btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        {!! Form::file('photos[]', ['class' => 'form-control', 'accept' => 'image/*', 'required', 'onchange' => 'showPreview(this)']) !!}
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <img src="/img/upload_photo.png" class="upload-icon-preview" />
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        {!! Form::text('title[]', null, ['class' => 'form-control', 'required', 'placeholder' => 'Описание']) !!}
                                    </div>
                                </div>


                            </div>
                        @endif
                    </div>

                    <div class="col-md-3 text-center">
                        <span id="add-slider" class="btn btn-primary">+1 Photo</span>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    {!! Form::submit('Сохранить', ['class' => 'btn btn-lg btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop