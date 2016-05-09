@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все "О студии"</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <a href="/admin/about/add" class="btn btn-success btn-lg">Добавить</a>
            </div>
        </div>

        @foreach(array_chunk($abouts->all(), 4) as $about_rows)
            <div class="row">
                @foreach($about_rows as $about)
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $about->title }}</b>
                            </div>
                            <div class="panel-body">
                                @if ($about->image)
                                    <img src="{{ $about->image }}" alt="{{ $about->title }}" class="img img-responsive"/>
                                @endif
                                <hr/>
                                <p>
                                    {{ $about->description }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="/admin/about/edit/{{ $about->id }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="/admin/about/delete/{{ $about->id }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($abouts))
            <p class="text-center">
                Нет "О студии".
            </p>
        @endif

        {!! $abouts->render() !!}
    </div>

@stop