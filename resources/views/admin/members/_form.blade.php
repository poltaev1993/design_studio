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
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>

<div>

</div>