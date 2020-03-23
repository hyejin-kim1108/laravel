
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>main</title>
    </head>
    <body>
        <h3>메인 입니다.</h3>
            <b>아래 버튼을 누르면 각 화면으로 이동합니다.</b><br>
            @if(Auth::check())
                <a href="/List"><button name="List_Click">게시판</button></a>
                <br><br>
                <a href="/UpdateUser"><button name="Update_Click">회원정보수정</button></a>
                <a href="/Signout"><button name="SignOut_Click">회원탈퇴</button></a>
                <a href="/Logout"><button name="Logout_Click">로그아웃</button></a>
            @else
                <a href="/Register"><button name="Register_Click">회원가입</button></a><br>
                <a href="/Login"><button name="Login_Click">로그인</button></a>
            @endif
    </body>
    @include('sweetalert::alert')
</html>
