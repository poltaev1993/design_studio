<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0  maximum-scale=1.0, user-scalable=no" />

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png" />
    {{--<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png" />--}}
    {{--<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png" />--}}
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png" />
    {{--<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png" />--}}
    <link rel="manifest" href="/manifest.json" />

    <link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
    
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff" />

    <title>@yield('page_title', 'IlyasKali | Студия Архитектуры и Дизайна | Алматы')</title>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css"/>

    {{-- STYLES for only main page --}}
    @if (\Illuminate\Support\Facades\Request::is('/'))

    @else
        {{-- STYLES for pages --}}
        <link rel="stylesheet" type="text/css" href="/js/min/perfect-scroll/perfect-scrollbar.min.css"/>
        {{-- SB_SLDIER CSS --}}
        <link rel="stylesheet" type="text/css" href="/js/new_plugins/sb_slider/custom.css"/>
        <link rel="stylesheet" type="text/css" href="/js/new_plugins/sb_slider/slicebox.css"/>
        <link rel="stylesheet" href="/js/new_plugins/3dGallery/style.css">

        <!-- modal window -->
        <link rel="stylesheet" type="text/css" href="/js/modal/css/component.css" />

        <!-- gridImageLoadingEffect -->
        <link rel="stylesheet" href="/js/new_plugins/image_grid_effects/style2.css">
        <!-- Remodal -->
        <link rel="stylesheet" type="text/css" href="/js/min/remodal/remodal.css"/>
        <link rel="stylesheet" type="text/css" href="/js/min/remodal/remodal-default-theme.css"/>
        <link rel="stylesheet" type="text/css" href="/js/vendor/swiper/swiper.min.css"/>
    @endif

    <!-- Videojs -->
    <link rel="stylesheet" type="text/css" href="/js/videojs/video-js.css">
    <link rel="stylesheet" href="/plugins/bigvideo/css/bigvideo.css">

    <script type="text/javascript" src="/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="/js/new_plugins/image_grid_effects/modernizr-custom.js"></script>

</head>