<div class="form-group">
    {!! Form::label('image', 'Изображение: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($about) ? $about->image : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*', isset($about) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('title', 'Название: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Название']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Описание (2 предложения)', 'required', 'rows' => '3']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('body', 'Пост: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'post', 'placeholder' => 'Введите описание', 'required']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>