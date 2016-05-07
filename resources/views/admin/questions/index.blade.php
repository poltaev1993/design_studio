@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все вопрос-ответы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($questions->all(), 4) as $question_rows)
            <div class="row">
                @foreach($question_rows as $question)
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $question->questioner }}</b>
                            </div>
                            <div class="panel-body">
                                <p>
                                    {!! $question->question !!}
                                </p>
                                <hr/>
                                <p>
                                    {!! $question->answer !!}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/questions/edit/' . $question->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/questions/delete/' . $question->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($questions))
            <p class="text-center">
                Нет вопрос-ответов.
            </p>
        @endif

        {!! $questions->render() !!}

    </div>

@stop