@extends('ilyaskali')

@section('page_title')
    {{ $category->name }} | IlyasKali | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')
    <div class="infoAndNav">
        <!-- <div class="info info__js"></div> -->
        <div class="navburger burger__js"></div>
    </div>
    <div class="left-nav-bar bars">
        <div class="left-sections">
            <!-- Begin  left_section -->
            <section class="left_container text-right" id="left_section1">
                <div class="wrapper-block">
                    <h1 class="page_name">{{ $category->greetings->home_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->team_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->about_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->process_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->projects_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->reviews_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->questions_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->blog_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->partners_heading }}</h1>
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
                    <h1 class="page_name">{{ $category->greetings->contacts_heading }}</h1>
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
            <div class="slogan">
                <!-- <img src="/img/redesign/slogan.png"> -->
                {{ $category->value }}
            </div>
            <hr class="right-line">
            

            <nav class="menu">
                <ul class="menu-list select_item_menu__js">
                    <li><a class="active" href="#section1">главная</a></li>
                    <li><a href="#section2">команда</a></li>
                    <li>
                        <a href="#section3">
                            {{ $category->url == 'drawing-school' ? 'о курсах' : 'о студии' }}
                        </a>
                    </li>
                    <li><a href="#section4">процесс</a></li>
                    <li>
                        <a href="#section5">
                            {{ $category->url == 'drawing-school' ? 'работы учеников' : 'проекты' }}
                        </a>
                    </li>
                    <li><a href="#section6">отзывы</a></li>
                    <li><a href="#section7">вопрос ответ</a></li>
                    <li>
                        <a href="#section8">
                            {{ $category->url == 'drawing-school' ? 'новости' : 'блог' }}
                        </a>
                    </li>
                    <li><a href="#section9">партнеры</a></li>
                    <li><a href="#section10">контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="logo set_logo__js">
        <a href="/"><img src="/img/redesign/logo.png"></a>
    </div>
    <main>
        <div class="icon-bar">
            <a href="/" class="icon home-icon"></a>
            <div class="icon arrows">
                <div id="prev_section" class="arrow top"></div>
                <div id="next_section" class="arrow bottom"></div>
            </div>
            <a class="icon phone md-trigger" data-modal="callback"></a>
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
                <div class="swiper-pagination swp__js"></div>
                
               <!--  <div class="width300">
                   <div id="mini_main_slider" class="swiper-container mini_main-slider">
                       <div class="swiper-wrapper">
                           @foreach($category->slides as $slide)
                               <div class="swiper-slide">
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div> -->
                
                <div id="main_titles_slider" class="swiper-container depended-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->slides as $slide)
                            <div class="swiper-slide">
                                {{ $slide->title }}
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
                        @foreach($category->members()->sorted($category->id)->get() as $member)
                        <!--First Slide-->
                        <div class="swiper-slide"> 
                            <a class="md-trigger" data-modal="teamProjects-{{ $member->id}}">
                                <div class="member">
                                    <img src="{{ $member->avatar }}" alt="{{ $member->name }}">
                                </div>

                                <div class="text-center team_name">
                                    <div>{{ $member->name }}</div>
                                    <div class="one-line">{{ $member->position }}</div>
                                </div>

                                <div class="row projects">
                                    <?php $i = 0; ?> 
                                    @foreach($member->projects()->take(9)->get() as $project)
                                        @if($i % 3 == 0 && $i != 0)
                                        </div>
                                        <div class="row projects">
                                        @endif
                                        <div class="col-md-4 col-sm-4 col-xs-4 item">
                                            <img class="img-responsive" src="{{ $project->image }}" alt="">
                                        </div>
                                        <?php $i++; ?>
                                    @endforeach
                                </div>

                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End team section -->
        
        <!-- Begin video section -->
        <section id="section3" class="section">
            <div class="block-abs">
               <video id="myvideo" class="video-js" controls
                    preload="auto" width="auto" height="400"
                    poster="{{ $category->about ? $category->about->poster : asset('img/sl1.jpg') }}"
                    data-setup="{}">
                    <source src="{{ $category->about ? $category->about->video : '' }}" type='video/mp4'>
                </video>
            </div>
        </section>
        <!-- End video section -->
        
        <!-- Begin section4 section -->
        <section id="section4" class="section">
            <div class="block-abs">
                <div id="processes_swiper_slider__js" class="swiper-container project-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->processes()->sorted($category->id)->get()->all(), 9) as $process_slide)
                            <div class="swiper-slide">
                                @foreach(array_chunk($process_slide, 3) as $process_rows)
                                <div class="row what-we-take process_block">
                                        @foreach($process_rows as $process)
                                        <div class="col-md-4 text-center item">
                                            <a class="md-trigger img-text" data-modal="processes-{{ $process->id }}">
                                                <div class="overflow-hidden">
                                                    <img src="{{ $process->image }}" alt="" class="img-responsive">
                                                </div>
                                                <div class="abs-text">
                                                    {{ $process->name }}
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section4 section -->

        <!-- Begin project section -->
        <section id="section5" class="section">
            <div class="block-abs">
                <div id="project_swiper_slider__js" class="swiper-container project-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->projects()->sorted($category->id)->get() as $project)
                            <div class="swiper-slide">
                                <a class="md-trigger overflow-hidden-item img-text" data-modal="projects-{{ $project->id }}">
                                    <div class="overflow-hidden">
                                        <img class="img-responsive" src="{{ $project->preview }}" alt="project">
                                    </div>
                                    <div class="abs-text">
                                        {{ $project->title }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin project section -->
        <section id="section6" class="section">
            <div class="block-abs">
                <div id="reviews_swiper_slider__js" class="swiper-container reviews-slider">
                    <div class="swiper-wrapper">
                        @foreach($category->reviews()->sorted($category->id)->get() as $review)
                            <div class="swiper-slide">
                                <a class="md-trigger" data-modal="reviews-{{ $review->id }}">
                                    <div class="r_avatar" style="background-image:url({{ $review->avatar }})">
                                    </div>
                                    <h1 class="client_review" align="center">{{ $review->heading }}</h1>
                                    <hr>
                                    <h4 class="client_name" align="center">{{ $review->name }}</h4>
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
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin project section -->
        <section id="section7" class="section">
            <div class="block-abs">
                <div id="question_and_answer_swiper_slider__js" class="swiper-container question_and_answer-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->questions()->sorted($category->id)->get()->all(), 3) as $question_row)
                            <div class="swiper-slide"> 
                                @foreach($question_row as $item)
                                    <div class="row answer_question">
                                        <a class="md-trigger" data-modal="questions-{{ $item->id }}">
                                            <div class="col-md-6 item">
                                                <div class="answer block-item">
                                                    <h3>Вопрос</h3>
                                                    <p>
                                                        {!! mb_substr($item->question, 0, 100) !!}
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
                                                        {!! mb_substr($item->answer, 0, 100) . '...' !!}
                                                    </p>
                                                    <div class="name">
                                                        IlyasKali.com {{ date('d.m.Yг.', strtotime($item->created_at)) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End project section -->

        <!-- Begin section4 section -->
        <section id="section8" class="section">
            <div class="block-abs">
                <div id="blog_slider__js" class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        @if ($is_instagram_enabled)
                            @foreach(array_chunk($instagram_data->get()->all(), 6) as $blog_slider_row)
                                <div class="swiper-slide">
                                    <div class="row what-we-take">
                                        @foreach(array_chunk($blog_slider_row, 3) as $blog_row)
                                            @foreach($blog_row as $blog)
                                                <div class="col-md-4 col-xs-4 text-center item">
                                                    <div class="img-text">
                                                        <a class="md-trigger blog-hidden" data-modal="blog-{{ $blog['id'] }}">
                                                            <img src="{{ $blog['images']['low_resolution']['url'] }}" alt="" class="img-responsive">
                                                            
                                                        </a>
                                                        <a class="md-trigger abs-text" data-modal="blog-{{ $blog['id'] }}">{{ mb_substr($blog['caption']['text'], 0, 75) . '...' }}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach(array_chunk($category->blogs()->sorted($category->id)->get()->all(), 6) as $blog_slider_row)
                                <div class="swiper-slide">
                                    <div class="row what-we-take">
                                        @foreach(array_chunk($blog_slider_row, 3) as $blog_row)
                                            @foreach($blog_row as $blog)
                                                <div class="col-md-4 col-xs-4 text-center item">
                                                    <div class="img-text">
                                                        <a class="md-trigger blog-hidden" data-modal="blog-{{ $blog->id }}">
                                                            <img src="{{ $blog->preview }}" alt="" class="img-responsive">
                                                        </a>
                                                        <a class="md-trigger abs-text" data-modal="blog-{{ $blog['id'] }}" >{{ $blog->title }}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section4 section -->

        <!-- Begin section4 section -->
        <section id="section9" class="section">
            <div class="block-abs">
                <div id="partners_slider__js" class="swiper-container partners-slider">
                    <div class="swiper-wrapper">
                        @foreach(array_chunk($category->partners()->sorted($category->id)->get()->all(), 18) as $partner_slider_row)
                            <div class="swiper-slide"> 
                                
                                @foreach(array_chunk($partner_slider_row, 6) as $partner_row)
                                    <div class="row what-we-take">
                                        @foreach($partner_row as $partner)
                                            <div class="col-md-2 text-center item">
                                                <a class="md-trigger partners-hidden" data-modal="partners-{{ $partner->id }}">
                                                    <img src="{{ $partner->image }}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section4 section -->

        <!-- Begin section10 section -->
        <section id="section10" class="section">
            <div class="block-abs">
                <div id="map"></div>
            </div>
        </section>
        <!-- End section10 section -->
    </main>
    
    <!-- Begin Callback -->
    <div class="md-modal perfect_scroll_init_js md-effect-12" id="callback">
        <div class="md-content">
            <div id="callback-toggle">
                <h2 class="text-center">Вам перезвонить?</h2>
                {!! Form::open(['url' => 'page/callback-request']) !!}
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

                        <input type="hidden" id="category_slug" value="{{ $category->url }}">

                        <div class="input-form">
                            <input class="btn btn-submit" id="submit-callback" value="Позвоните мне" type="submit">
                        </div>
                    </div>

                {!! Form::close() !!}
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
    <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="teamProjects" id="teamProjects-{{ $member->id }}">
        <div class="md-content">
            <div align="center">
                <div class="row">
                    <div class="col-xs-3" style="text-align: left;">
                        <img src="{{ $member->avatar}}" style="border-radius: 50%; width:120px;" alt="">        
                    </div>
                    <div class="col-xs-9">
                        <h3 style="font-size: 2em; text-align: left; padding-left:0;">{{ $member->name }} </h3>
                        <p style="text-align: left;">
                            Должность - <strong>{{ $member->position }}</strong>
                        </p>
                    </div>
                </div>
                
                

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
                <div class="visibility-hidden">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum repudiandae deserunt 
                </div>
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
        <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="processes" id="processes-{{ $process->id }}">
            <div class="md-content">
                <h3>{{ $process->name }}</h3>
                <div>
                    <img src="{{ $process->image }}">
                    <p>
                        {!! $process->description !!}
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
    {{-- Processes --}}

    {{-- Projects --}}
    @foreach($category->projects()->sorted($category->id)->get() as $project)
        <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="projects" id="projects-{{ $project->id }}">
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
                    {{--<img src="{{ $project->preview }}">--}}
                    {!! $project->description !!}
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
    {{-- Projects --}}

    {{-- Reviews --}}
    @foreach($category->reviews()->sorted($category->id)->get() as $review)
        <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="reviews" id="reviews-{{ $review->id }}">
            <div class="md-content">
                <h3>{{ $review->heading }}</h3>
                <div>
                    <h4 style="font-size: 1.8em;">
                        <strong>{{ $review->name }}</strong>
                    </h4>
                    <br>
                    <div class="r_avatar" style="background-image:url({{ $review->avatar }})">
                    </div>
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
        <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="questions" id="questions-{{ $question->id }}">
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
    @if ($is_instagram_enabled)
        @foreach($instagram_data->get() as $blog)
            <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="blogs" id="blog-{{ $blog['id'] }}">
                <div class="md-content">
                    <h3>{{ mb_substr($blog['caption']['text'], 0, 25) . '...' }}</h3>
                    <div>
                        <img src="{{ $blog['images']['standard_resolution']['url'] }}">
                        <hr>
                        <p>
                            {!! $blog['caption']['text'] !!}
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
    @else
        @foreach($category->blogs()->sorted($category->id)->get() as $blog)
            <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="blogs" id="blog-{{ $blog->id }}">
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
    @endif
    {{-- Blog --}}

    {{-- Partners --}}
    @foreach($category->partners()->sorted($category->id)->get() as $partner)
        <div class="md-modal perfect_scroll_init_js md-effect-12" data-modal-category="partners" id="partners-{{ $partner->id }}">
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
    <!-- <div class="loader"></div> -->

    @if(app()->environment() == 'production')
    <div class="loader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
    @endif
@stop
