@extends('admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{ $category->name }}
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <h4>Тут должна быть информация о странице: кол-во проектов и прочее</h4>
            </div>

        </div>
    </div>
@stop