@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Сортировать отзывы</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel-group" id="sortable-data" role="tablist" aria-multiselectable="true">
                    @foreach($reviews as $review)
                        <div class="panel panel-default" id="{{ $review->id }}">
                            <div class="panel-heading" role="tab" id="heading{{ $review->id }}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $review->id }}" aria-expanded="false" aria-controls="collapse{{ $review->id }}">
                                        {{ $review->name }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $review->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $review->id }}">
                                <div class="panel-body">
                                    <div class="col-md-9">
                                        <p>
                                            {{ $review->heading }}
                                        </p>
                                        {!! $review->text !!}
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