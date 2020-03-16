
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>게시판</title>
    </head>
    <body>
    <div class="bg-pink-300 rounded">
        <div class="text-center">
        <h2 class="text-lg"> 이름(별명) : {{ Auth::user()->name }}</h2>
        <div class="text-gray-600">이메일 : {{ Auth::user()->email }}</div>
        </div>
    </div>
    <hr><br>
    <b>ddd</b>
     <script src="/js/app.js"></script>
    </body>
</html>
