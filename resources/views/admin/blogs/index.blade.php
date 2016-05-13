@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Все {{ $category->url == 'drawing-school' ? 'новости' : 'посты' }}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        @if ($is_instagram_available)
            <div class="row">
                <div class="col-md-6 text-center">
                    <h4>
                        <strong>
                            Посты с инстаграм
                        </strong>
                    </h4>
                </div>
                <div class="col-md-6 text-center">
                    <a href="/admin/control/{{ $category->url }}/blog/insta-toggle/enable" class="btn btn-success"
                            {{ $is_instagram_enabled ? 'disabled' : '' }}>
                        Включить
                    </a>
                    <a href="/admin/control/{{ $category->url }}/blog/insta-toggle/disable" class="btn btn-danger"
                            {{ $is_instagram_enabled ? '' : 'disabled' }}>
                        Отключить
                    </a>
                </div>
            </div>
            <hr>
        @endif

        @foreach(array_chunk($blogs->all(), 4) as $blog_rows)
            <div class="row">
                @foreach($blog_rows as $blog)
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $blog->title }}</b>
                            </div>
                            <div class="panel-body">
                                @if ($blog->preview)
                                    <img src="{{ $blog->preview }}" alt="{{ $blog->title }}" class="img img-responsive"/>
                                @endif
                                <hr/>
                                <p>
                                    {{ $blog->description }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/control/' . $category->url . '/blog/edit/' . $blog->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/control/' . $category->url . '/blog/delete/' . $blog->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if( ! count($blogs))
            <p class="text-center">
                Данный раздел пуст.
            </p>
        @endif

        {!! $blogs->render() !!}
    </div>

@stop