<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="Description" content="..." />
    <meta name="Keywords" content="..." />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css"/>

    <script type="text/javascript" src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>

</head>
    <body>
    <div id="wrapper-admin">
        <header>

            <div class="title">
                <h1>СПК <span> "ЛОКОМОТИВ"</span></h1>
                <p>Панель администратора садоводческого кооператива</p>
            </div>
        </header>

        <div class="content">
            <div class="column-left">
                <!-- Menu -->
                @section('navigation')
                    @include('admin.navigation')
                @show
            </div>

            <div class="column-right">
                    @yield('content')
                <div class="cleaner"></div>
                <hr>
                    @include('blocks.footer')
            </div>
        </div>
    </div>
    </body>
</html>

