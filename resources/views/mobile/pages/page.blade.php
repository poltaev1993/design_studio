@extends('mobile')

@section('page_title')
    {{ $category->name }} | IlyasKali | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <div class="fixed-header">
        <div class="burger-icon">
            <a class="burger__js"><i class="fa fa-navicon"></i></a>
            <a class="close2__js"></a>
            <a href="/" class="f_home"><i class="fa fa-home"></i></a>
        </div>
        <div class="logo">
            <img src="/mobile/img/logo.png" width="100">
        </div>
        <div class="slogan">
            {{ $category->value }}
        </div>
        <!-- <a class="home" href="/">
        </a> -->
    </div>
    <div id="page_slider" class="swiper-container page-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- Begin about section -->
                <section id="section1" class="section">
                    <div class="block-abs">
                        <div id="main_swiper_slider__js" class="swiper-container first-slider">
                            <div class="swiper-wrapper">
                                @foreach($category->slides as $slide)
                                    <div class="swiper-slide" style="background-image:url({{ $slide->image }});">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End about section -->
            </div>
            <div class="swiper-slide">
                <!-- Begin team section -->
                <section id="section2" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase">
                            {{ $category->greetings->team_heading }}
                        </h2>
                        <div id="team_swiper_slider__js" class="swiper-container team-slider">
                            <div class="swiper-wrapper">
                                @foreach($category->members()->sorted($category->id)->get() as $member)
                                <!--First Slide-->
                                <div class="swiper-slide">
                                    <a class="md-trigger" data-modal="member-{{ $member->id }}">
                                        <div class="member">
                                            <img src="{{ $member->avatar }}" alt="{{ $member->name }}">
                                        </div>

                                        <div class="text-center team_name">
                                            <div>{{ $member->name }}</div>
                                            <div>{{ $member->position }}</div>
                                        </div>

                                        <div class="row projects">
                                            @foreach($member->projects()->take(3)->get() as $project)
                                                <div class="col-xs-4 item">
                                                    <img class="img-responsive" src="{{ $project->image }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Navigation -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </section>
                <!-- End team section -->
            </div>
            <div class="swiper-slide">
                <!-- Begin video section -->
                <section id="section3" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">О студии</h2>
                        <video id="myvideo" class="video-js" controls
                               preload="auto" width="auto" height="160"
                               poster="{{ $category->about ? $category->about->poster : asset('img/sl1.jpg') }}"
                               data-setup="{}">
                            <source src="{{ $category->about ? $category->about->video : '' }}" type='video/mp4'>
                        </video>

                        <div class="section-info text-center">
                            <h2>
                                {{ $category->greetings->about_heading }}
                            </h2>
                            {!! $category->greetings->about_description !!}
                        </div>
                    </div>
                </section>
                <!-- End video section -->
            </div>

            <div class="swiper-slide">
                <!-- Begin section4 section -->
                <section id="section4" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">
                            {{ $category->greetings->process_heading }}
                        </h2>
                        <div id="dg-container" class="dg-container">
                            <div class="dg-wrapper">
                                @foreach($category->processes()->sorted($category->id)->get()->all() as $process_rows)
                                <a class="md-trigger" data-modal="processes-{{ $process_rows->id }}" 
                                style="background-image:url({{ $process_rows->image }})">                                    
                                    <p class="text-center add-infoo">{{ $process_rows->name }}</p>
                                </a>
                                @endforeach
                                <!-- <a href="#">
                                    <img src="http://lorempixel.com/600/400/people/3/" alt="image01">
                                </a>
                                
                                <a href="#">
                                    <img src="http://lorempixel.com/600/400/people/6/" alt="image01">
                                </a> -->
                            </div>
                            <nav>
                                <span class="dg-prev"><</span>
                                <span class="dg-next">></span>
                            </nav>
                    </div>
                    
                        <!-- <div id="projects_details_swiper_slider__js" class="swiper-container project-slider">
                            <div class="swiper-wrapper">
                                First Slide
                                @foreach(array_chunk($category->processes()->sorted($category->id)->get()->all(), 1) as $process_rows)
                                <div class="swiper-slide">
                                    <div class="row what-we-take">
                                        @foreach($process_rows as $process)
                                            <div class="col-md-4 text-center item">
                                                <a class="md-trigger wwt-item" data-modal="processes-{{ $process->id }}">
                                                    <img src="{{ $process->image }}" alt="" class="img-responsive">
                                                    <a class="md-trigger color-black" data-modal="processes-{{ $process->id }}">
                                                        {{ $process->name }}
                                                    </a>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            Add Navigation
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div> -->
                    </div>
                </section>
                <!-- End section4 section -->
            </div>

            <div class="swiper-slide">
                <!-- Begin section section -->
                <section id="section5" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">
                            {{ $category->greetings->projects_heading }}
                        </h2>
                        <div id="dg-container2" class="dg-container">
                            <div class="dg-wrapper">
                                @foreach($category->projects()->sorted($category->id)->get()->all() as $project_rows)
                                <a class="md-trigger" data-modal="processes-{{ $project_rows->id }}" style="background-image:url({{ $project_rows->preview }})">
                                    <p class="text-center add-infoo">{{ $project_rows->title }}</p>
                                </a>
                                @endforeach
                                <!-- <a href="#">
                                    <img src="http://lorempixel.com/600/400/people/3/" alt="image01">
                                </a>
                                
                                <a href="#">
                                    <img src="http://lorempixel.com/600/400/people/6/" alt="image01">
                                </a> -->
                            </div>
                            <nav>
                                <span class="dg-prev"><</span>
                                <span class="dg-next">></span>
                            </nav>
                    </div>
                        <!-- <div id="projects_swiper_slider__js" class="swiper-container project-slider">
                            <div class="swiper-wrapper">
                                
                                @foreach(array_chunk($category->projects()->sorted($category->id)->get()->all(), 3) as $project_rows)
                                <div class="swiper-slide">
                                    <div class="row what-we-take">
                                        @foreach($project_rows as $project)
                                            <div class="col-md-4 text-center item img-text">
                                                <a class="md-trigger wwt-item" data-modal="projects-{{ $project->id }}">
                                                    <img src="{{ $project->preview }}" alt="" class="img-responsive abs-on-hover">
                                                </a>
                                                {{--<a class="md-trigger color-black one-line" data-modal="projects-{{ $project->id }}">
                                                    {{ $project->title }}
                                                </a>--}}
                                                <a class="md-trigger wwt-item abs-text" data-modal="projects-{{ $project->id }}">
                                                    {{ $process->name }}
                                                </a>
                                                <a  class="mini-bg md-trigger" data-modal="projects-{{ $project->id }}"></a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                                First Slide
                                
                            </div>
                            Add Navigation
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div> -->
                    </div>
                </section>
                <!-- End section section -->
            </div>
            <div class="swiper-slide">
                <!-- Begin project section -->
                <section id="section6" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">
                            {{ $category->greetings->reviews_heading }}
                        </h2>
                        <div id="reviews_swiper_slider__js" class="swiper-container reviews-slider">
                            <div class="swiper-wrapper">
                                @foreach($category->reviews()->sorted($category->id)->get() as $review)
                                    <div class="swiper-slide">
                                        <a class="md-trigger" data-modal="reviews-{{ $review->id }}">
                                            <div class="r_avatar" style="background-image:url({{ $review->avatar }})">
                                            </div>
                                            <h1 class="client_review one-line" align="center">{{ $review->heading }}</h1>
                                            <hr>
                                            <h4 class="client_name" align="center"><strong>{{ $review->name }}</strong></h4>
                                            <p align="center">
                                                {!! mb_substr($review->text, 0, 70) . '...' !!}
                                            </p>
                                            <div class="date" align="center">
                                                {{ date('d.m.Y', strtotime($review->created_at)) }}
                                            </div>
                                        </a>
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
            </div>
            <div class="swiper-slide">
                <!-- Begin project section -->
                <section id="section7" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" style="margin-top: 60px;" align="center">
                            {{ $category->greetings->questions_heading }}
                        </h2>
                        <div id="question_and_answer_swiper_slider__js" class="swiper-container question_and_answer-slider">
                            <div class="swiper-wrapper">
                                @foreach(array_chunk($category->questions()->sorted($category->id)->get()->all(), 1) as $question_row)
                                    <div class="swiper-slide">
                                        @foreach($question_row as $item)
                                            <!-- Begin answer_question -->
                                            <div class="row answer_question">
                                                <div class="col-md-6 item">
                                                    <a class="answer md-trigger block-item" data-modal="questions-{{ $item->id }}">
                                                        <h3>Вопрос</h3>
                                                        <p>
                                                            {!! mb_substr($item->question, 0, 50) !!}
                                                        </p>
                                                        <div class="name">
                                                            {{ $item->questioner }} {{ date('d.m.Yг.', strtotime($item->created_at)) }}
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6 item">
                                                    <div class="question block-item">
                                                        <h3>Ответ</h3>
                                                        <p>
                                                            {!! mb_substr($item->answer, 0, 50) . '...' !!}
                                                        </p>

                                                        <div class="name">
                                                            IlyasKali.com {{ date('d.m.Yг.', strtotime($item->created_at)) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End answer_question -->
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
            </div>
            <div class="swiper-slide">
                <section id="section8" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">
                            {{ $category->greetings->blog_heading }}
                        </h2>
                        <div id="blog_swiper_slider__js" class="swiper-container project-slider">
                            <div class="swiper-wrapper">
                                <!-- Begin new -->
                                @foreach(array_chunk($category->blogs()->sorted($category->id)->get()->all(), 3) as $blog_slider_row)
                                <div class="swiper-slide">
                                    <div class="row what-we-take">
                                        @foreach($blog_slider_row as $blog)
                                            <div class="col-md-4 text-center item img-text">
                                                <a class="md-trigger wwt-item" data-modal="blog-{{ $blog->id }}">
                                                    <img src="{{ $blog->preview }}" alt="" class="img-responsive abs-on-hover">
                                                    <a class="md-trigger wwt-item abs-text" data-modal="projects-{{ $project->id }}">
                                                    {{ $blog->title }}
                                                    </a>
                                                    <a  class="mini-bg md-trigger" data-modal="processes-{{ $blog->id }}"></a>
                                                </a>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                                <!-- End new -->
                            </div>
                            <!-- Add Navigation -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section id="section9" class="section">
                    <div class="block-abs">
                        <h2 class="uppercase" align="center">
                            {{ $category->greetings->partners_heading }}
                        </h2>
                        <div id="partners_slider__js" class="swiper-container partners-slider">
                            <div class="swiper-wrapper">
                                @foreach(array_chunk($category->partners()->sorted($category->id)->get()->all(), 18) as $partner_slider_row)
                                    <div class="swiper-slide">
                                        <div class="row what-we-take">
                                            @foreach(array_chunk($partner_slider_row, 6) as $partner_row)
                                                @foreach($partner_row as $partner)
                                                    <div class="col-xs-4 text-center item">
                                                        <a class="md-trigger" data-modal="partners-{{ $partner->id }}">
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
            </div>
            <div class="swiper-slide">
                <!-- Begin section10 section -->
                <section id="section10" class="section">
                    <!-- <h2 class="uppercase" style="margin-top: 60px;" align="center">
                        Контакты
                    </h2> -->
                    <div class="block-abs">
                        <div id="map"></div>
                        <div class="row map-info">
                            <div class="col-xs-6" align="right">
                                <p>
                                    Республика Казахстан<br>
                                    г. Алматы, ул. Сатпаева 30/1<br>
                                    ЖК Тенгиз Towers, Офис 86
                                </p>
                                
                            </div>
                            <div class="col-xs-6" align="left">
                                <p>
                                    www.ilyaskali.com<br>
                                    email: ilyaskali@gmail.com<br>
                                    #ilyaskaliinteriors
                                </p>
                                <p>
                                    +7(727)224-24-60<br>
                                    +7(777)771-77-10
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End section10 section -->
            </div>
        </div>
    </div>
    
    <div class="bg"></div>
    <!-- <div class="burger-icon">
        <a class="burger__js"></a>
    </div> -->
    <!-- Begin navbar -->
    <div class="right-nav-bar bars">
        <a class="icon close__js"></a>
        <div class="wrapper-block right">
            <!-- <div class="slogan">
                <span>{{ $category->value }}</span>
            </div> -->
            <nav class="menu">
                <ul class="menu-list select_item_menu__js">
                    <li><a class="active" data-section="0" href="#section1">Главная</a></li>
                    <li><a href="#section2" data-section="1">Команда</a></li>
                    <li>
                        <a href="#section3" data-section="2">
                            {{ $category->url == 'drawing-school' ? 'о курсах' : 'о студии' }}
                        </a>
                    </li>
                    <li><a href="#section4" data-section="3">Процесс</a></li>
                    <li>
                        <a href="#section5" data-section="4">
                            {{ $category->url == 'drawing-school' ? 'работы учеников' : 'проекты' }}
                        </a>
                    </li>
                    <li><a href="#section6" data-section="5">Отзывы</a></li>
                    <li><a href="#section7" data-section="6">Вопрос ответ</a></li>
                    <li>
                        <a href="#section8" data-section="7">
                            {{ $category->url == 'drawing-school' ? 'новости' : 'блог' }}
                        </a>
                    </li>
                    <li><a href="#section9" data-section="8">Партнеры</a></li>
                    <li><a href="#section10" data-section="9">Контакты</a></li>
                </ul>
            </nav>
        </div>

        <div class="icon-bar">
            <a class="md-trigger icon phone callback__js" data-modal="callback"></a>
        </div>
    </div>
    <!-- End navbar -->

    <!-- Begin Callback -->
    <div class="md-modal perfect_scroll_init_js md-effect-12" id="callback">
        <div class="md-content">
            <div id="callback-toggle">
                <h2 class="text-center">Вам перезвонить?</h2>
                <!-- {!! Form::open(['url' => 'page/callback-request']) !!} -->
                <div id="callback-hide">
                    <div class="input-form">
                        <div class="input-item">
                            <label for="name">Как вас зовут?</label>
                        </div>
                        <div class="input-item">
                            <input type="text" name="callback_name" placeholder="Введите ваше имя..." required>
                        </div>
                    </div>

                    <div class="input-form">
                        <div class="input-item">
                            <label for="name">Ваш номер:</label>
                        </div>
                        <div class="input-item">
                            <input type="text" name="callback_phone" placeholder="Введите ваш номер..." id="phone" required>
                        </div>
                    </div>

                    <!-- <input type="hidden" id="category_slug" value="{{ $category->url }}"> -->

                    <div class="input-form">
                        <input class="btn btn-submit" id="submit-callback" value="Позвоните мне" type="submit">
                    </div>
                </div>

                <!-- {!! Form::close() !!} -->
            </div>
            <div>
                <h4>Наши телефоны</h4>
                <div>
                    <div class="contact-info">
                        <strong>T.</strong> +7(727)224-24-60 <br>
                        <strong>M.</strong> +7(777)771-77-10
                    </div>
                </div>
            </div>
            <button class="md-close"></button>
        </div>
    </div>
    <!-- End Callback -->
    
    <!-- Begin TeamProjects -->
    @foreach($category->members()->sorted($category->id)->get() as $member)
    <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="teamProjects" id="member-{{ $member->id }}">
        <div class="md-content">
            <div align="center">
                <img src="{{ $member->avatar}}" width="300" alt="">
                <h3>{{ $member->name }} </h3>
                <p>
                    {{ $member->position }}
                </p>

                <br>
                
                <div class="swiper-container certain-swiper-slider">
                    <div class="swiper-wrapper">
                        @foreach($member->projects as $project)
                        <div class="swiper-slide">
                            <img class="img-responsive" src="{{ $project->image }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>

                </div>
                <!-- <img src=""> -->
                <button class="md-close"></button>
                <div class="navigation">
                    <div class="modal-arrow prev-modal"></div>
                    <div class="modal-arrow next-modal"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach    
    <!-- End TeamProjects -->
    {{-- Processes --}}
    @foreach($category->processes()->sorted($category->id)->get() as $process)
        <div class="md-modal md-effect-12" data-modal-category="processes" id="processes-{{ $process->id }}">
            <div class="md-content">
                <h3>{{ $process->name }}</h3>
                <div>
                    <img src="{{ $process->image }}">
                    <p>
                        {!! $process->description !!}
                    </p>
                    <br>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Processes --}}

    {{-- Projects --}}
    @foreach($category->projects()->sorted($category->id)->get() as $project)
        <div class="md-modal md-effect-12" data-modal-category="projects" id="projects-{{ $project->id }}">
            <div class="md-content">
                <h3>{{ $project->title }}</h3>
                <div>
                    <div class="swiper-container certain-swiper-slider">
                        <div class="swiper-wrapper">
                            @foreach($project->photos as $photo)
                                <div class="swiper-slide">
                                    <img class="img-responsive" src="{{ $photo->image }}" alt="{{ $project->title }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>

                    </div>
                    <br>
                    <p>
                        {!! $project->description !!}
                    </p>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Projects --}}

    {{-- Reviews --}}
    @foreach($category->reviews()->sorted($category->id)->get() as $review)
        <div class="md-modal md-effect-12" data-modal-category="reviews" id="reviews-{{ $review->id }}">
            <div class="md-content">
                <h3>{{ $review->heading }}</h3>
                <div>
                    <p>
                        {{ $review->name }}
                    </p>
                    <br>
                    <img src="{{ $review->avatar }}">
                    <br>
                    <p>
                        {!! $review->text !!}
                    </p>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Reviews --}}

    {{-- Questions --}}
    @foreach($category->questions()->sorted($category->id)->get() as $question)
        <div class="md-modal md-effect-12" data-modal-category="questions" id="questions-{{ $question->id }}">
            <div class="md-content">
                <h3>{!! $question->question !!}</h3>
                <div>
                    <p>
                        {{ $question->questioner }}
                    </p>
                    <hr>
                    <p>
                        {!! $question->answer !!}
                    </p>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Questions --}}

    {{-- Blog --}}
    @foreach($category->blogs()->sorted($category->id)->get() as $blog)
        <div class="md-modal md-effect-12" data-modal-category="blogs" id="blog-{{ $blog->id }}">
            <div class="md-content">
                <h3>{{ $blog->title }}</h3>
                <div>
                    <img src="{{ $blog->preview }}">
                    <p>
                        {{ $blog->description }}
                    </p>
                    <hr>
                    <p>
                        {!! $blog->body !!}
                    </p>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Blog --}}

    {{-- Partners --}}
    @foreach($category->partners()->sorted($category->id)->get() as $partner)
        <div class="md-modal md-effect-12" data-modal-category="partners" id="partners-{{ $partner->id }}">
            <div class="md-content">
                <h3>{{ $partner->name }}</h3>
                <div>
                    <img src="{{ $partner->image }}">
                    <p>
                        {!! $partner->description !!}
                    </p>
                    <button class="md-close"></button>
                    <div class="navigation">
                        <div class="modal-arrow prev-modal"></div>
                        <div class="modal-arrow next-modal"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Partners --}}

    <div class="md-overlay"></div><!-- the overlay element -->

@stop