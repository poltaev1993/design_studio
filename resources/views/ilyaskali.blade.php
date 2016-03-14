<!DOCTYPE html>
<html lang="en" {{ Request::is('project/*') ? 'ng-app=instudio' : '' }}>

    @include('pages.inc.meta')

    <body>


        <div class="wrapper">

            @yield('content')

        </div>

        @include('pages.inc.scripts')

    </body>
</html>
