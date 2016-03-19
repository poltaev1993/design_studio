<div class="form-group">
    {!! Form::label('question', 'Вопрос: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('question', null, ['class' => 'form-control', 'id' => 'post', 'placeholder' => 'Введите вопрос', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('answer', 'Ответ: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('answer', null, ['class' => 'form-control', 'id' => 'post', 'placeholder' => 'Введите ответ', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('questioner', 'Кто задал вопрос?', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('questioner', null, ['class' => 'form-control', 'placeholder' => 'Имя фамилия', 'required']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>