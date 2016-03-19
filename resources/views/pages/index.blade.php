@extends('ilyaskali')

@section('content')

    <div class="welcome-page">
        <div class="container-fluid">
            <div class="row w_content">

                <div class="col-xs-12 col-md-6 item">
                    <div class="row company-name">
                        <div class="col-md-6 text-right c_name item">
                            <div class="name">Ilyas Kaliyev</div>
                        </div>
                        <div class="col-md-6 item">
                            <div class="lineBefore">
                                <span class="direction">Architecture<br>
                                Design</span>
                                <div class="creative">
                                    <span class="creative-studio">Creative studio</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 item">

                    @foreach(array_chunk($categories->all(), 3) as $category_rows)
                        <div class="square-blocks clearfix">
                            @foreach($category_rows as $category)
                                <a href="{{ url('page/' . $category->url) }}" class="square" style="box-shadow: 0 0 0 1px #000;">
                                    <div class="letter" style="color:black">
                                        {{ ucfirst(substr($category->url, 0, 1)) }}
                                    </div>
                                    <div style="width: 112px; height: 112px;"
                                         data-vide-bg="/video/ocean" data-vide-options="loop: true, muted: false, position: 0% 0%">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop