@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Слайдер</h1>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <h3>Картинки для слайдера</h3>

                {!! Form::open(['files' => true]) !!}
                    <div class="form-group">
                        <div class="photos-section">
                            @if(isset($slider_photos) && $slider_photos->count())
                                @foreach($slider_photos as $photo)
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                {!! Form::file('photos['.$photo->id.']', ['class' => 'form-control', 'accept' => 'image/*', isset($slider_photos) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
                                            </div>
                                            <div class="panel-body">
                                                <div class="text-center">
                                                    <img src="{{ $photo->url }}" class="upload-icon-preview" />
                                                </div>
                                            </div>
                                            <div class="panel-footer text-center">
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
                                        <div class="panel-footer"></div>
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

@stop