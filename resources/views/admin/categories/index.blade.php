@extends('admin_home')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Категории</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        @foreach(array_chunk($categories->all(), 4) as $category_rows)
            <div class="row">
                @foreach($category_rows as $category)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>{{ $category->value }}</b>
                            </div>
                            <div class="panel-body">
                                <p>
                                    {{ $category->name }}
                                </p>
                                <p>
                                    {{ $category->url }}
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ url('admin/categories/edit/' . $category->id) }}"><i class="fa fa-pencil fa-fw"></i> Редактировать</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ url('admin/categories/delete/' . $category->id) }}" style="color:red"><i class="fa fa-times fa-fw"></i> Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if(!count($categories))
            <p class="text-center">
                Нет категорий.
            </p>
        @endif

    </div>
    <!-- /#page-wrapper -->
@stop