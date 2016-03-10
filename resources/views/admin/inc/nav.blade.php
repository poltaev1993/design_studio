<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">inStudio Admin</a>
        <a class="navbar-brand" href="/">Вернуться на сайт</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                </li>
                <li class="divider"></li>
                <li><a href="/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>

    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                {{--<li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>--}}
                <li>
                    <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Главная</a>
                </li>
                {{--<li>
                    <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Управление текстом<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Проекты</a>
                        </li>
                        <li>
                            <a href="#">О Студии</a>
                        </li>
                        <li>
                            <a href="#">Как мы работаем?</a>
                        </li>
                        <li>
                            <a href="/admin/contacts-text">Контакты</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>--}}
                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Проекты<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/projects">Все проекты</a>
                        </li>
                        <li>
                            <a href="/admin/projects/add">Добавить проект</a>
                        </li>
                        <li>
                            <a href="/admin/projects/sort">Сортировать проекты</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="/admin/requests"><i class="fa fa-table fa-fw"></i> Обратная связь</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Блог<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/blog">Все посты</a>
                        </li>
                        <li>
                            <a href="/admin/blog/add">Добавить пост</a>
                        </li>
                        <li>
                            <a href="/admin/blog/sort">Сортировать посты</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-microphone fa-fw"></i> Отзывы<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/reviews">Все отзывы</a>
                        </li>
                        <li>
                            <a href="/admin/reviews/add">Добавить отзыв</a>
                        </li>
                        <li>
                            <a href="/admin/reviews/sort">Сортировать отзывы</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-blackboard"></i> Школа<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/school/categories">Категории</a>
                        </li>
                        <li>
                            <a href="/admin/school/news">Новости</a>
                        </li>
                        <li>
                            <a href="#">Слайдер <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="/admin/school/slider">Все фотографии</a>
                                </li>
                                <li>
                                    <a href="/admin/school/slider/sort">Сортировать фотографии</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/about"><i class="fa fa-info-circle fa-fw"></i> О студии</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>