<div class="form-group">
    {!! Form::label('avatar', 'Аватар: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($review) ? $review->avatar : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('avatar', ['class' => 'form-control', 'accept' => 'image/*', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Кто отозвался?', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя фамилия', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('heading', 'Как отозвался?', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('heading', null, ['class' => 'form-control', 'placeholder' => 'Чудесно', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('text', 'Текст отзыва: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'post', 'placeholder' => 'Введите описание', 'required']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>