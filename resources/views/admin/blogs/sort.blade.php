@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать посты</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel-group" id="sortable-data" role="tablist" aria-multiselectable="true">
                    @foreach($blogs as $blog)
                        <div class="panel panel-default" id="{{ $blog->id }}">
                            <div class="panel-heading" role="tab" id="heading{{ $blog->id }}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $blog->id }}" aria-expanded="false" aria-controls="collapse{{ $blog->id }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $blog->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $blog->id }}">
                                <div class="panel-body">
                                    <div class="col-md-3">
                                        <img class="img img-responsive" src="{{ $blog->preview }}" alt=""/>
                                    </div>
                                    <div class="col-md-9">
                                        {{ $blog->description }}
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