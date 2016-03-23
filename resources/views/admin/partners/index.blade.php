@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все партнеры</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($partners->all(), 4) as $partner_rows)
            <div class="row">
                @foreach($partner_rows as $partner)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $partner->name }}</b>
                            </div>
                            <div class="panel-body">
                                <img src="{{ $partner->image }}" alt="{{ $partner->name }}" class="img img-responsive"/>
                                <hr/>
                                <p>
                                    {{ $partner->name }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/partners/edit/' . $partner->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/partners/delete/' . $partner->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($partners))
            <p class="text-center">
                Нет партнеров в этой категории.
            </p>
        @endif

        {!! $partners->render() !!}
    </div>

@stop