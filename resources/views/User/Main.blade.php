<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>main</title>
    </head>

    <body>
        <div class="bg-pink-300 rounded">
            <div class="text-center">
                @if(Auth::check())
                    <h2 class="text-lg"> 아이디 : {{ Auth::user()->id }}</h2>
                @else
                    <h2 class="text-lg"> 로고로고로고</h2>
                @endif
            </div>
        </div>
        <!--해당 부분은 로그인 유무로 판별하는 부분-->
        <h3>메인 입니다.</h3>
        <b>아래 버튼을 누르면 각 화면으로 이동합니다.</b><br>
        @if(Auth::check())
            <a href="/List"><button name="List_Click">리스트</button></a>
            <a href="/UpdateUser"><button name="Update_Click">회원정보수정</button></a>
            <a href="/Signout"><button name="SignOut_Click">회원탈퇴</button></a>
            <a href="/Logout"><button name="Logout_Click">로그아웃</button></a><br>
        @else
            <a href="/Register"><button name="Register_Click">회원가입</button></a><br>
            <a href="/Login"><button name="Login_Click">로그인</button></a>
        @endif
        <!--리스트나오는 부분-->
        <hr><br>
        @include('List.Viewarticle')
        @include('sweetalert::alert')
        <br><hr>
        <hr>
    </body>
    <script src="/js/app.js"></script>
</html>
