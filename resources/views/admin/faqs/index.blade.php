@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все вопрос-ответы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($faqs->all(), 4) as $faq_rows)
            <div class="row">
                @foreach($faq_rows as $faq)
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $faq->questioner }}</b>
                            </div>
                            <div class="panel-body">
                                <p>
                                    {{ $faq->question }}
                                </p>
                                <hr/>
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/faqs/edit/' . $faq->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/faqs/delete/' . $faq->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($faqs))
            <p class="text-center">
                Нет вопрос-ответов.
            </p>
        @endif

    </div>

@stop