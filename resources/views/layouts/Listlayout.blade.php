<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('header')
    </head>
    <body>
        <div class="bg-pink-300 rounded">
            <div class="text-center">
                @if(Auth::check())
                    <h2 class="text-lg"> 아이디 : {{ Auth::user() }}</h2>
                @else
                    <h2 class="text-lg"> 로고로고로고</h2>
                @endif
            </div>
        </div>
        @yield('body')
    </body>
    <script src="/js/app.js"></script>
    @include('sweetalert::alert')
</html>
