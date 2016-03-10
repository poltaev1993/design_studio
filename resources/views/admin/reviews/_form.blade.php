<div class="form-group">
    {!! Form::label('preview', 'Изображение: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9 text-center">
        <img src="{{ isset($review) ? $review->image : '/img/upload_logo.png' }}" class="upload-icon-preview" />
        {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/*', 'onchange' => 'showPreview(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('', '', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::checkbox('isVideo', 1, true, ['id' => 'isVideo']) !!}
        {!! Form::label('isVideo', ' - Видеоотзыв', ['class' => 'control-label']) !!}
    </div>
</div>

<div class="form-group" id="form-video">
    {!! Form::label('videoUrl', 'Ссылка на видео: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('videoUrl', null, ['class' => 'form-control', 'placeholder' => 'Ссылка с YouTube']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('title', 'Название: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Введите название', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Введите описание', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('body', 'Текст отзыва: ', ['class' => 'control-label col-sm-3']) !!}
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