@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все участники</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @foreach(array_chunk($members->all(), 4) as $member_rows)
            <div class="row">
                @foreach($member_rows as $member)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $member->name }}</b>
                            </div>
                            <div class="panel-body">
                                <img src="{{ $member->avatar }}" alt="{{ $member->name }}" class="img img-responsive"/>
                                <hr/>
                                <p>
                                    {{ $member->position }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/members/edit/' . $member->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/members/delete/' . $member->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($members))
            <p class="text-center">
                Нет участников в этой категории.
            </p>
        @endif

        {!! $members->render() !!}
    </div>

@stop