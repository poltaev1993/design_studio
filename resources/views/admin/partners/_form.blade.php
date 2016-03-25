<div class="form-group">
    {!! Form::label('image', 'Лого: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($partner) ? $partner->image : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*', isset($partner) ? '' : 'required', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Имя: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Введите имя', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Введите описание', 'required', 'id' => 'post']) !!}
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