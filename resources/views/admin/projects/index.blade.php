@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все проекты</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($projects->all(), 4) as $project_rows)
            <div class="row">
                @foreach($project_rows as $project)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $project->title }}</b>
                            </div>
                            <div class="panel-body">
                                <img src="{{ $project->preview }}" alt="{{ $project->title }}" class="img img-responsive"/>
                                <hr/>
                                <p>
                                    {{ $project->purpose }}
                                </p>
                                <p>
                                    {{ $project->category->name }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="/admin/projects/edit/{{ $project->id }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="/admin/projects/delete/{{ $project->id }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($projects))
            <p class="text-center">
                Нет проектов.
            </p>
        @endif

        {!! $projects->render() !!}
    </div>

@stop