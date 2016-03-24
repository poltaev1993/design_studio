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
                    <a href="{{ url('admin/control/' . $category->url) }}" {{ $active == 'index' ? 'class=active' : '' }}>
                        <i class="fa fa-dashboard fa-fw"></i>
                        Главная
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/greetings') }}" {{ $active == 'greetings' ? 'class=active' : '' }}>
                        <i class="fa fa-file fa-fw"></i>
                        Текста
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/slider') }}" {{ $active == 'slider' ? 'class=active' : '' }}>
                        <i class="fa fa-picture-o fa-fw"></i>
                        Слайдер
                    </a>
                </li>
                <li {{ $active == 'members' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-users fa-fw"></i>
                        Команда
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'members' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/members') }}"
                               {{ $active == 'members' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все участники
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/members/add') }}"
                                {{ $active == 'members' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить участника
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/members/sort') }}"
                                {{ $active == 'members' && $sub_active == 'sort' ? 'class=active' : '' }}>
                                Сортировать участников
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/about') }}" {{ $active == 'about' ? 'class=active' : '' }}>
                        <i class="fa fa-info-circle fa-fw"></i>
                        О студии
                    </a>
                </li>
                <li {{ $active == 'processes' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-list-ol fa-fw"></i>
                        Процессы
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'processes' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/processes') }}"
                                {{ $active == 'processes' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все процессы
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/processes/add') }}"
                                {{ $active == 'processes' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить процесс
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/processes/sort') }}"
                                {{ $active == 'processes' && $sub_active == 'sort' ? 'class=active' : '' }}>
                                Сортировать процессы
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li {{ $active == 'projects' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-tasks fa-fw"></i>
                        Проекты
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'projects' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects') }}"
                                {{ $active == 'projects' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все проекты
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects/add') }}"
                                {{ $active == 'projects' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить проект
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/projects/sort') }}"
                                {{ $active == 'projects' && $sub_active == 'sort' ? 'class=active' : '' }}>
                                Сортировать проекты
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li {{ $active == 'reviews' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-microphone fa-fw"></i>
                        Отзывы
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'reviews' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews') }}"
                                {{ $active == 'reviews' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все отзывы
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews/add') }}"
                                {{ $active == 'reviews' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить отзыв
                            </a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/reviews/sort') }}">
                                Сортировать отзывы
                            </a>
                        </li>--}}
                    </ul>
                </li>
                <li {{ $active == 'questions' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-question fa-fw"></i>
                        Вопрос-ответ
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'questions' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/faqs') }}"
                                {{ $active == 'questions' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все вопрос-ответы
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/faqs/add') }}"
                                {{ $active == 'questions' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить вопрос-ответ
                            </a>
                        </li>
                    </ul>
                </li>
                <li {{ $active == 'blog' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-edit fa-fw"></i>
                        Блог
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'blog' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog') }}"
                                {{ $active == 'blog' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все посты
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog/add') }}"
                                {{ $active == 'blog' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить пост
                            </a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog/sort') }}">Сортировать посты</a>
                        </li>--}}
                    </ul>
                </li>
                <li {{ $active == 'partners' ? 'class=active' : '' }}>
                    <a href="#">
                        <i class="fa fa-briefcase fa-fw"></i>
                        Партнеры
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level {{ $active == 'partners' ? 'collapse in' : '' }}">
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/partners') }}"
                                    {{ $active == 'partners' && $sub_active == 'all' ? 'class=active' : '' }}>
                                Все партнеры
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/control/' . $category->url . '/partners/add') }}"
                                    {{ $active == 'partners' && $sub_active == 'add' ? 'class=active' : '' }}>
                                Добавить партнера
                            </a>
                        </li>
                        {{--<li>
                            <a href="{{ url('admin/control/' . $category->url . '/blog/sort') }}">Сортировать посты</a>
                        </li>--}}
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/control/' . $category->url . '/contacts') }}" {{ $active == 'contacts' ? 'class=active' : '' }}>
                        <i class="fa fa-phone fa-fw"></i>
                        Контакты
                    </a>
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