
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>main</title>
    </head>
    <body>
        <h3>메인 입니다.</h3>
            <b>아래 버튼을 누르면 각 화면으로 이동합니다.</b><br>
            <a href="/join"><button name="joinclick">회원가입</button></a><br>
            <a href="/login"><button name="loginclick">로그인</button></a>

        @if(isset($_session['id']))
            <a href="list">전체리스트로</a>
        @endif()
    </body>
    @include('sweetalert::alert')
</html>
