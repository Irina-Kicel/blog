<!DOCTYPE html>

<head>

    <meta charset="UTF-8" />
    <meta name="Description" content="..." />
    <meta name="Keywords" content="..." />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />-->
    <script type="text/javascript" src="{{asset('/')}}/js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}/js/script.js"></script>
    <script type="text/javascript" src="{{asset('/')}}/js/script_display.js"></script>
    <script type="text/javascript" src="{{asset('/')}}/js/comment-reply.js"></script>
    <script type="text/javascript" src="{{asset('/')}}/js/myscripts.js"></script>
</head>

<body>
<div id="wrapper">
    <header>

        <div class="title">
            <h1>СПК <span> "ЛОКОМОТИВ"</span></h1>
            <p>Персональный сайт садоводческого кооператива&hellip;</p>
        </div>
    </header>

    <div class="content">
        <div class="column-left">
            <!-- Menu -->

            @section('navigation')
            {{--@include('blocks.navigation')--}}
            @show
        </div>
        <div class="column-right">
            <!-- Content -->

            @yield('content')

            <div class="cleaner">&nbsp;</div>

            @include('blocks.footer')
        </div>

    </div>

</div>

</body>

</html>