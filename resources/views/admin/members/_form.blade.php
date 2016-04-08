<div class="form-group">
    {!! Form::label('avatar', 'Аватар: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($member) ? $member->avatar : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('avatar', ['class' => 'form-control', 'accept' => 'image/*', isset($member) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Имя: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Введите имя', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('position', 'Позиция: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Введите позицию', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('photos', 'Проекты участника: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        <div class="photos-section">
            @if(isset($member))
                @foreach($member->projects as $project)
                    <div class="col-md-6">
                        <img src="{{ $project->image }}" class="upload-icon-preview img-responsive" />
                        <div class="col-md-8">
                            {!! Form::file('photos['.$project->id.']', ['class' => 'form-control', 'accept' => 'image/*', isset($member) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
                        </div>
                        <div class="col-md-4">
                            <button type="button" data-photo-id="{{ $project->id }}" class="btn btn-danger" onclick="deletePhoto(this, '{{ $category->url }}', 'members')"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6">
                    <img src="/img/upload_photo.png" class="upload-icon-preview img-responsive" />
                    <div class="col-md-12">
                        {!! Form::file('photos[]', ['class' => 'form-control', 'accept' => 'image/*', 'onchange' => 'showPreview(this)']) !!}
                    </div>
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

<div>

</div>