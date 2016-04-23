@extends('mobile')

@section('page_title')
    {{ $category->name }} | IlyasKali | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')

    <!-- Begin about section -->
    <section id="section1" class="section">
        <div class="block-abs">
            <div class="slogan">Interiors</div>
            <div id="main_swiper_slider__js" class="swiper-container first-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url({{ asset('img/slide1.jpg') }});">
                    </div>
                    <div class="swiper-slide" style="background-image:url({{ asset('img/slide1.jpg') }});">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- Begin team section -->
    <section id="section2" class="section">
        <div class="block-abs">
            <h2 class="uppercase">Команда</h2>
            <div id="team_swiper_slider__js" class="swiper-container team-slider">
                <div class="swiper-wrapper">
                    <!--First Slide-->
                    <div class="swiper-slide">
                        <div class="member">
                            <img src="/mobile/img/employee.jpg" alt="">
                        </div>

                        <div class="text-center team_name">
                            <div>Ильяс Калиев</div>
                            <div>архитектор</div>
                        </div>

                        <div class="row projects">
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project13.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project14.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project15.jpg" alt="">
                            </div>

                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project14.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project15.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project13.jpg" alt="">
                            </div>

                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project13.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project14.jpg" alt="">
                            </div>
                            <div class="col-xs-4 item">
                                <img class="img-responsive" src="/mobile/img/project15.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- End team section -->

    <!-- Begin video section -->
    <section id="section3" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">О студии</h2>
            <video id="myvideo" class="video-js" controls
                   preload="auto" width="auto" height="160" poster="/mobile/img/sl1.jpg"
                   data-setup="{}">
                <source src="/mobile/video/Central Cardamom Protected Forest.mp4" type='video/mp4'>
            </video>

            <div class="section-info">
                <h2>Как мы это делаем?</h2>
                <p>
                    К вашему вниманию
                    короткометражный фильм
                    о нашей студии!
                    О том как мы работаем,
                    как мы создаем
                    наши проекты.
                </p>
            </div>
        </div>
    </section>
    <!-- End video section -->

    <!-- Begin section4 section -->
    <section id="section4" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">Cостав проекта</h2>
            <div id="projects_details_swiper_slider__js" class="swiper-container project-slider">
                <div class="swiper-wrapper">
                    <!--First Slide-->
                    <div class="swiper-slide">
                        <div class="row what-we-take">
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-1"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-1">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-2"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-2">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-3"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-3">задание на проектирование</a></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- End section4 section -->

    <!-- Begin section section -->
    <section id="section5" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">Проекты</h2>
            <div id="projects_swiper_slider__js" class="swiper-container project-slider">
                <div class="swiper-wrapper">
                    <!--First Slide-->
                    <div class="swiper-slide">
                        <div class="row what-we-take">
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-1"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-1">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-2"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-2">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-3"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-3">задание на проектирование</a></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- End section section -->

    <!-- Begin project section -->
    <section id="section6" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">ОТЗЫВЫ</h2>
            <div id="reviews_swiper_slider__js" class="swiper-container reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="md-trigger" data-modal="reviews-1">
                            <div class="r_avatar" style="background-image:url({{ asset('mobile/img/review1.jpg') }})">
                            </div>
                            <h1 class="client_review" align="center">ЧУДЕСНО!</h1>
                            <hr>
                            <h4 class="client_name" align="center">Арнольд Пьер</h4>
                            <p align="center">
                                Превосходно нет слов
                                совсем нет!
                                хотел что то сказать
                                но слов нет просто
                                замечательно
                            </p>
                            <div class="date" align="center">12.10.2015</div>
                        </a>
                    </div>
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
            <h2 class="uppercase" align="center">ОТВЕТЫ</h2>
            <div id="question_and_answer_swiper_slider__js" class="swiper-container question_and_answer-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Begin answer_question -->
                        <div class="row answer_question">
                            <div class="col-md-6 item">
                                <a class="answer md-trigger block-item" data-modal="modal-4">
                                    <h3>Вопрос</h3>
                                    <p>
                                        Здравствуйте! Скажите пожалуйста
                                        по каким принципам Вы существуете в этом обществе
                                        и вообще что мне делать с унитазом?
                                    </p>

                                    <div class="name">
                                        Ирина 21.06.2017г.
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 item">
                                <div class="question block-item">
                                    <h3>Ответ</h3>
                                    <p>
                                        Здравствуйте! Скажите пожалуйста
                                        по каким принципам Вы существуете в этом обществе
                                        и вообще что мне делать с унитазом?
                                    </p>

                                    <div class="name">
                                        Ирина 21.06.2017г.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End answer_question -->

                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End project section -->

    <section id="section8" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">Блог</h2>
            <div id="blog_swiper_slider__js" class="swiper-container project-slider">
                <div class="swiper-wrapper">
                    <!--First Slide-->
                    <div class="swiper-slide">
                        <div class="row what-we-take">
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-1"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-1">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-2"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-2">задание на проектирование</a></a>
                            </div>
                            <div class="col-md-4 text-center item">
                                <a class="md-trigger" data-modal="modal-3"><img src="/mobile/img/sl1.jpg" alt=""
                                                                                class="img-responsive">
                                    <a class="md-trigger" data-modal="modal-3">задание на проектирование</a></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section id="section9" class="section">
        <div class="block-abs">
            <h2 class="uppercase" align="center">Партнеры</h2>
            <div id="partners_slider__js" class="swiper-container partners-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row what-we-take">
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4 text-center item">
                                <a class="md-trigger" data-modal="partners-1">
                                    <img src="/mobile/img/square.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Begin section10 section -->
    <section id="section10" class="section">
        <div class="block-abs">
            <div id="map"></div>
        </div>
    </section>
    <!-- End section10 section -->
    <div class="bg"></div>
    <div class="burger-icon">
        <a class="burger__js"></a>
    </div>
    <!-- Begin navbar -->
    <div class="right-nav-bar bars">
        <div class="icon-bar">
            <a href="/" class="icon home-icon"></a>
            <a class="icon close__js"></a>
            <a class="icon phone md-trigger" data-modal="callback"></a>
        </div>
        <div class="wrapper-block right">
            <div class="logo">
                <a href="/"><img width="180" src="/mobile/img/logo.png"></a>
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

    <!-- Begin Process modals -->
    <div class="md-modal md-effect-12" data-modal-category="processes" id="modal-1">
        <div class="md-content">
            <h3>Задание на проектирование</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <img src="/mobile/img/sl1.jpg">
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to
                        read what they say.
                    </li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and
                        appreciate its presence.
                    </li>
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

@stop