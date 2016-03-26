@extends('ilyaskali')

@section('page_title')
    {{ $category->name }} | IlyasKali | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <div class="infoAndNav">
        <div class="info info__js"></div>
        <div class="navburger burger__js"></div>
    </div>
    <div class="left-nav-bar bars">
        <div class="left-sections">
            <!-- Begin  left_section -->
            <section class="left_container text-right" id="left_section1">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">1.</i>{{ $category->greetings->home_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->home_description !!}
                    </p>
                </div>
            </section>
            <!-- End  left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section2">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">2.</i>{{ $category->greetings->team_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->team_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->
            
            <!-- Begin  left_section -->
            <section class="left_container" id="left_section3">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">3.</i>{{ $category->greetings->about_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->about_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->
            
            <!-- Begin  left_section -->
            <section class="left_container" id="left_section4">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">4.</i>{{ $category->greetings->process_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->process_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->
            
            <!-- Begin  left_section -->
            <section class="left_container" id="left_section5">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">5.</i>{{ $category->greetings->projects_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->projects_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section6">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">6.</i>{{ $category->greetings->reviews_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->reviews_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section7">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">7.</i>{{ $category->greetings->questions_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->questions_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section8">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">8.</i>{{ $category->greetings->blog_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->blog_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section9">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">9.</i>{{ $category->greetings->partners_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->partners_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->

            <!-- Begin  left_section -->
            <section class="left_container" id="left_section10">
                <div class="wrapper-block">
                    <h1 class="page_name"><i class="number">10.</i>{{ $category->greetings->contacts_heading }}</h1>
                    <hr class="left-line__js">
                    <p class="text-right">
                        {!! $category->greetings->contacts_description !!}
                    </p>
                </div>
            </section>
            <!-- End left_section -->
        </div>
    </div>

    <div class="right-nav-bar bars">
        <div class="wrapper-block right">
            <div class="logo">
                <img src="/img/redesign/logo.png">
            </div>
            <hr class="right-line">
            <div class="slogan">
                <img src="/img/redesign/slogan.png">
            </div>

            <nav class="menu">
                <ul class="menu-list select_item_menu__js">
                    <li><a class="active" href="section1">главная</a></li>
                    <li><a href="section2">команда</a></li>
                    <li><a href="section3">о студии</a></li>
                    <li><a href="section4">процесс</a></li>
                    <li><a href="section5">проекты</a></li>
                    <li><a href="section6">отзывы</a></li>
                    <li><a href="section7">вопрос ответ</a></li>
                    <li><a href="section8">блог</a></li>
                    <li><a href="section9">партнеры</a></li>
                    <li><a href="section10">контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <main>
        <div class="icon-bar">
            <a href="/" class="icon home-icon"></a>
            <div class="icon arrows">
                <div id="prev_section" class="arrow top"></div>
                <div id="next_section" class="arrow bottom"></div>
            </div>
            <div class="icon phone"></div>
        </div>
        
        <!-- Begin about section -->
        <section id="section1" class="section">
            <div class="block-abs">
                <div id="main_swiper_slider__js" class="swiper-container first-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->slides as $slide)
                            <div class="swiper-slide">
                                <img src="{{ $slide->image }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="width300">
                    <div id="mini_main_slider" class="swiper-container mini_main-slider">
                        <div class="swiper-wrapper">
                            @foreach($category->slides as $slide)
                                <div class="swiper-slide" style="background-image: url({{ $slide->image }}})">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div id="main_titles_slider" class="swiper-container depended-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->slides as $slide)
                            <div class="swiper-slide">
                                интерьер гостинной<br>
                                Esentai Park
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->
        
        <!-- Begin team section -->
        <section id="section2" class="section">
            <div class="block-abs">
                <div id="team_swiper_slider__js" class="swiper-container team-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->members()->sorted() as $member)
                        <!--First Slide-->
                        <div class="swiper-slide"> 
                            <div class="member">
                                <img src="{{ $member->avatar }}" alt="{{ $member->name }}">
                            </div>
                            
                            <div class="row projects">
                                @foreach($member->projects as $project)
                                    <div class="col-md-4 col-sm-4 col-xs-4 item">
                                        <img class="img-responsive" src="{{ $project->image }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End team section -->
        
        <!-- Begin video section -->
        <section id="section3" class="section">
            <div class="block-abs">
               <video id="myvideo" class="video-js" controls
                 preload="auto" width="auto" poster="/img/sl1.jpg"
                data-setup="{}">
                    <source src="{{ $category->about ? $category->about->video : '' }}" type='video/mp4'>
                </video>
            </div>
        </section>
        <!-- End video section -->
        
        <!-- Begin section4 section -->
        <section id="section4" class="section">
            <div class="block-abs">
                @foreach(array_chunk($category->processes()->sorted()->get()->all(), 3) as $process_rows)
                    <div class="row what-we-take">
                        @foreach($process_rows as $process)
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-1">
                                    <img src="{{ $process->image }}" alt="" class="img-responsive">
                                    <a class="md-trigger" data-modal="processes">
                                        {{ $process->name }}
                                    </a>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        <!-- End section4 section -->

        <!-- Begin project section -->
        <section id="section5" class="section">
            <div class="block-abs">
                <div id="project_swiper_slider__js" class="swiper-container project-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->projects()->sorted() as $project)
                            <div class="swiper-slide">
                                <img class="img-responsive" src="{{ $project->preview }}" alt="project">
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin project section -->
        <section id="section6" class="section">
            <div class="block-abs">
                <div id="reviews_swiper_slider__js" class="swiper-container reviews-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->reviews()->sorted() as $review)
                            <div class="swiper-slide"> 
                                <div class="r_avatar" style="background-image:url({{ $review->avatar }})">
                                </div>
                                <h1 class="client_review" align="center">{{ $review->heading }}</h1>
                                <hr>
                                <h4 class="client_name" align="center">{{ $review->name }}</h4>
                                <p align="center">
                                    {!! $review->text !!}
                                </p>

                                <div class="date" align="center">{{ date('d.m.Y', strtotime($review->created_at)) }}</div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin project section -->
        <section id="section7" class="section">
            <div class="block-abs">
                <div id="question_and_answer_swiper_slider__js" class="swiper-container question_and_answer-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->questions()->sorted()->get()->all(), 5) as $question_row)
                            <div class="swiper-slide"> 
                                @foreach($question_row as $item)
                                    <div class="row answer_question">
                                        <div class="col-md-6 item">
                                            <div class="answer block-item">
                                                <h3>Вопрос</h3>
                                                <p>
                                                    {!! $item->question !!}
                                                </p>

                                                <div class="name">
                                                    {{ $item->questioner }} {{ date('d.m.Yг.', strtotime($item->created_at)) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 item">
                                            <div class="question block-item">
                                                <h3>Ответ</h3>
                                                <p>
                                                    {!! $item->answer !!}
                                                </p>

                                                <div class="name">
                                                    IlyasKali.com {{ date('d.m.Yг.', strtotime($item->created_at)) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin section4 section -->
        <section id="section8" class="section">
            <div class="block-abs">
                <div id="blog_slider__js" class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->blogs()->sorted()->get()->all(), 9) as $blog_slider_row)
                            <div class="swiper-slide">
                                <div class="row what-we-take">
                                @foreach(array_chunk($blog_slider_row, 3) as $blog_row)
                                        @foreach($blog_row as $blog)
                                            <div class="col-md-4 col-xs-4 text-center item">
                                                <a class="md-trigger" data-modal="modal-1">
                                                    <img src="{{ $blog->preview }}" alt="" class="img-responsive">
                                                    <a>{{ $blog->title }}</a>
                                                </a>
                                            </div>
                                        @endforeach
                                @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End section4 section -->

        <!-- Begin section4 section -->
        <section id="section9" class="section">
            <div class="block-abs">
                <div id="partners_slider__js" class="swiper-container partners-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->partners()->sorted()->get()->all(), 18) as $partner_slider_row)
                            <div class="swiper-slide"> 
                                <div class="row what-we-take">
                                @foreach(array_chunk($partner_slider_row, 6) as $partner_row)
                                        @foreach($partner_row as $partner)
                                            <div class="col-md-2 text-center item">
                                                <a class="md-trigger" data-modal="modal-1">
                                                    <img src="{{ $partner->image }}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        @endforeach
                                @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End section4 section -->
    </main>
    
    <div class="md-modal md-effect-12" id="modal-1">
        <div class="md-content">
            <h3>Задание на проектирование</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <img src="/img/sl1.jpg">
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button class="md-close"></button>
                <div class="navigation">
                    <div class="modal-arrow prev-modal"></div>
                    <div class="modal-arrow next-modal"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-12" id="modal-2">
        <div class="md-content">
            <h3>Задание на проектирование 2</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <img src="/img/sl1.jpg">
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button class="md-close"></button>
                <div class="navigation">
                    <div class="modal-arrow prev-modal"></div>
                    <div class="modal-arrow next-modal"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div><!-- the overlay element -->
    <div class="loader"></div>
@stop



