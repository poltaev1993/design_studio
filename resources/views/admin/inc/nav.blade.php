<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('admin') }}">IlyasKali Admin</a>
        <a class="navbar-brand" href="{{ url('/') }}">Вернуться на сайт</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                </li>
            </ul>
        </li>

    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <h3 class="text-center">
                {{ $category->name }}
            </h3>
            <br>
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Главная</a>
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/slider') }}"><i class="fa fa-picture-o fa-fw"></i> Слайдер</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Команда<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/members') }}">Все участники</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/members/add') }}">Добавить участника</a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/members/sort') }}">Сортировать участников</a>
                        </li>--}}
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/about') }}"><i class="fa fa-info-circle fa-fw"></i> О студии</a>
                </li>
                {{--<li>
                    <a href="{{ url('admin/control/' . $category->url . '/requests') }}"><i class="fa fa-table fa-fw"></i> Процесс</a>
                </li>--}}
                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Проекты<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects') }}">Все проекты</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects/add') }}">Добавить проект</a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects/sort') }}">Сортировать проекты</a>
                        </li>--}}
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-microphone fa-fw"></i> Отзывы<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews') }}">Все отзывы</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews/add') }}">Добавить отзыв</a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews/sort') }}">Сортировать отзывы</a>
                        </li>--}}
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Вопрос-ответ<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/faqs') }}">Все вопрос-ответы</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/faqs/add') }}">Добавить вопрос-ответ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Блог<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog') }}">Все посты</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog/add') }}">Добавить пост</a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog/sort') }}">Сортировать посты</a>
                        </li>--}}
                    </ul>
                </li>
                {{--<li>
                    <a href="#"><i class="glyphicon glyphicon-blackboard"></i> Школа<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/school/categories') }}">Категории</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/school/news') }}">Новости</a>
                        </li>
                        <li>
                            <a href="#">Слайдер <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('admin/control/' . $category->url . '/school/slider') }}">Все фотографии</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/control/' . $category->url . '/school/slider/sort') }}">Сортировать фотографии</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>--}}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>