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
            <h3 class="text-center">
                Управление контентом текущей категории. Следуйте меню.
            </h3>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@stop