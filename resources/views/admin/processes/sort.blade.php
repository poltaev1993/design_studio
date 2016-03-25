@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать процессы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel-group" id="sortable-data" role="tablist" aria-multiselectable="true">
                    @foreach($processes as $process)
                        <div class="panel panel-default" id="{{ $process->id }}">
                            <div class="panel-heading" role="tab" id="heading{{ $process->id }}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $process->id }}" aria-expanded="false" aria-controls="collapse{{ $process->id }}">
                                        {{ $process->name }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $process->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $process->id }}">
                                <div class="panel-body">
                                    <div class="col-md-9">
                                        {{ $process->image }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop