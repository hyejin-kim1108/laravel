
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>main</title>
    </head>
    <body>
        <h3>메인 입니다.</h3>
            <b>아래 버튼을 누르면 각 화면으로 이동합니다.</b><br>
            @if(!(@session('id')))
                <a href="/join"><button name="joinclick">회원가입</button></a><br>
                <a href="/login"><button name="loginclick">로그인</button></a>
            @endif

            @if (@session('id'))
                <a href="/joinout"><button name="joinout">회원탈퇴</button></a><br>
                <a href='/logout'><button name="logout">로그아웃</button></a><br>
                <a href="/list"><button name="list">게시글 화면으로</button></a><br>

                <b>이 페이지는 로그인 하신 분만 볼 수 있습니다.</b>
            @endif
    </body>
    @include('sweetalert::alert')
</html>
