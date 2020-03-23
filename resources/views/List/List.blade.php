
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
    <form name="File_Upload" method="POST" enctype="multipart/form-data" action ="{{route('File_Upload')}}">
        {{ csrf_field() }}
        <b>전송가능한 파일 확장자는 png,jpg,zip 입니다</b><br>
        <input type="file" name="File" id="files" value="파일업로드" multiple="multiple"><br>
        <input type="submit" name="File_Submit" id="submit" value="전송">
    </form>
    <script src="/js/app.js"></script>
    </body>
    @include('sweetalert::alert')
</html>
