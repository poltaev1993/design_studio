@extends('ilyaskali')

@section('content')
    <div class="fullvideo_effect__js"></div>
    <div class="welcome-page">
        <div class="container-fluid">
            <div class="row w_content">

               <!--  <div class="col-xs-12 col-sm-12 col-md-12 item text-center" align="center">
                   <div class="main_logo index-logo">
                       <img width="150" src="/img/redesign/logo.png">
                   </div>
               </div> -->

                <div class="col-xs-12 col-sm-12 col-md-12 item">
                    <ul class="menu-list main-page-list-menu">
                        {{--<li><a data-video-href="../video/Nature Is Speaking- Edward Norton is The Soil - 大自然在說話- 愛德華諾頓聲演「土壤」- 保護國際基金會 (CI).mp4" href="/about">Interior Design</a></li>--}}
                        @foreach($categories as $category)
                            <li>
                                <a data-video-href="../video/Nature Is Speaking- Edward Norton is The Soil - 大自然在說話- 愛德華諾頓聲演「土壤」- 保護國際基金會 (CI).mp4" href="{{ url('page/' . $category->url) }}">
                                    {{ $category->value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bottom-fixed-logo">
        <img width="150" src="/img/redesign/main_logo.png">
    </div>
@stop