@extends('ilyaskali')

@section('content')
    <div class="fullvideo_effect__js"></div>
    <div class="welcome-page">
        <div class="container-fluid">
            <div class="row w_content">

                <div class="col-xs-12 col-sm-12 col-md-6 item">
                    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 item">
                    <ul class="menu-list">
                        <li><a data-video-href="../video/Nature Is Speaking- Edward Norton is The Soil - 大自然在說話- 愛德華諾頓聲演「土壤」- 保護國際基金會 (CI).mp4" href="/about">Interior Design</a></li>
                        <li><a data-video-href="../video/Villa Altaïr - Real Estate Movie (Modern Architecture Luxury Villa) (online-video-cutter.com) (1).mp4" href="/about">Brand & Logos</a></li>
                        <li><a data-video-href="../video/Villa Altaïr - Real Estate Movie (Modern Architecture Luxury Villa) (online-video-cutter.com).mp4" href="/about">Architecture design</a></li>
                        <li><a data-video-href="../video/Фильм 05.mp4" href="/about">Furniture & Accessories</a></li>
                        <li><a data-video-href="../video/Zaha Hadid- Form in Motion.mp4" href="/about">Drawing courses</a></li>
                        <li><a href="/about">3DS Max Courses</a></li>
                        <li><a href="/about">Event Design</a></li>
                        <li><a href="/about">YCP Kazakhstan</a></li>
                        <li><a href="/about">Art Gallery</a></li>
                    </ul>
                    {{--@foreach(array_chunk($categories->all(), 3) as $category_rows)
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
                    @endforeach--}}
                </div>
            </div>
        </div>
    </div>

@stop