@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать партнеров</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel-group" id="sortable-data" role="tablist" aria-multiselectable="true">
                    @foreach($partners as $partner)
                        <div class="panel panel-default" id="{{ $partner->id }}">
                            <div class="panel-heading" role="tab" id="heading{{ $partner->id }}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $partner->id }}" aria-expanded="false" aria-controls="collapse{{ $partner->id }}">
                                        {{ $partner->name }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $partner->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $partner->id }}">
                                <div class="panel-body">
                                    <div class="col-md-3">
                                        <img class="img img-responsive" src="{{ $partner->image }}" alt=""/>
                                    </div>
                                    <div class="col-md-9">
                                        {{ $partner->description }}
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