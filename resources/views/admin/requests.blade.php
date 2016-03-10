@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Заявки</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @forelse($requests as $request)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{{ $request->id }}">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $request->id}}" aria-expanded="false" aria-controls="collapse{{ $request->id}}">
                                    {{ $request->name }} - {{ date('d.m.Y, H:i', strtotime($request->created_at)) }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{ $request->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $request->id }}">
                            <div class="panel-body">
                                {{ $request->body }}
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Нет заявок</p>
                @endforelse
            </div>
        </div>
    </div>

    {!! $requests->render() !!}

@stop