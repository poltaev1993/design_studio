<div class="form-group">
    {!! Form::label('preview', 'Preview: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($project) ? $project->preview : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('preview', ['class' => 'form-control', 'accept' => 'image/*', isset($project) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('title', 'Название: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Введите название', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('executed_at', 'Дата исполнения: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::input('date', 'executed_at', isset($project) ? null : date('Y-m-d'), ['class' => 'form-control', 'placeholder' => 'Введите название', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('purpose', 'Назначение: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('purpose', null, ['class' => 'form-control', 'placeholder' => 'Введите назначение', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('location', 'Расположение: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Введите расположение', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('area', 'Площадь: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Введите площадь']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Описание проекта', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('photos', 'Фотографии: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        <div class="photos-section">
            @if(isset($project))
                @foreach($project->photos as $photo)
                    <div class="col-md-6">
                        <img src="{{ $photo->image }}" class="upload-icon-preview img-responsive" />
                        <div class="col-md-8">
                            {!! Form::file('photos['.$photo->id.']', ['class' => 'form-control', 'accept' => 'image/*', isset($project) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
                        </div>
                        <div class="col-md-4">
                            <button type="button" data-photo-id="{{ $photo->id }}" class="btn btn-danger" onclick="deletePhoto(this, '{{ $category->url }}', 'projects')"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6">
                    <img src="/img/upload_photo.png" class="upload-icon-preview img-responsive" />
                    {!! Form::file('photos[]', ['class' => 'form-control', 'accept' => 'image/*', 'required', 'onchange' => 'showPreview(this)']) !!}
                </div>
            @endif
        </div>

        <div class="text-center">
            <span id="add-photo" class="btn btn-primary">+1 Photo</span>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>