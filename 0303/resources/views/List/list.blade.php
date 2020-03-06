<html>
    <head>
        <title>List</title>
    </head>
    <body>
        <!--~님 안녕하세요. 좋은 하루 되세요등등....-->
        <a href="/"><button name="main">메인화면으로</button></a><br>
        <p> 지금 접속중인 이름 {{ $nameData['name'] }} </p>        <!--책 소개 화면-->
        <b>책 화면 나올 부분</b>
        <!--footer 에 퍼온 곳 정보 넣기-->
    </body>
    @include('sweetalert::alert')
</html>
