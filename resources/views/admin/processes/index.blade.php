@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все процессы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($processes->all(), 4) as $process_rows)
            <div class="row">
                @foreach($process_rows as $process)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $process->name }}</b>
                            </div>
                            <div class="panel-body">
                                <img src="{{ $process->image }}" alt="{{ $process->name }}" class="img img-responsive"/>
                                <hr/>
                                <p>
                                    {{ $process->name }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/processes/edit/' . $process->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/processes/delete/' . $process->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($processes))
            <p class="text-center">
                Нет процессов в этой категории.
            </p>
        @endif

        {!! $processes->render() !!}
    </div>

@stop