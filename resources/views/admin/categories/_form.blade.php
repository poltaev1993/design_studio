<div class="form-group">
    {!! Form::label('name', 'Название: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Введите название', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('value', 'Name: ', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Enter name', 'required']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ $button_text }}
        </button>
    </div>
</div>