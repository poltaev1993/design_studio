<!DOCTYPE html>
<html lang="en" {{ Request::is('project/*') ? 'class=fullscreen ng-app=instudio' : '' }} {{ Request::is('school') ? 'class=about_bg_2' : '' }} {{ Request::is('reviews') || Request::is('blog') || Request::is('about') ? 'class=about_bg_blog' : '' }}>

    @include('pages.inc.meta')

    <body>


        <div class="wrapper">

            @include('pages.inc.header')

            @yield('content')

        </div>

        @include('pages.inc.curtain')

        @include('pages.inc.scripts')

    </body>
</html>
