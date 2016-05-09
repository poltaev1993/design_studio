<!DOCTYPE html>
<html lang="en">

    <head>

        @include('admin.inc.meta')

    </head>

    <body>

        <div id="wrapper">

            @include('admin.inc.nav_home')

            @yield('content')

        </div>
        <!-- /#wrapper -->

        @include('admin.inc.scripts')

    </body>

</html>
