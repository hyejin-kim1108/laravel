<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>login</title>
    </head>
    <body>
    <form name="Login" method="POST" action="{{route('Login')}}">
        {{ csrf_field() }}
        <input type="text" name="id" placeholder="id">ID<br>
        <input type="password" name="password" placeholder="password">password<br>

        <button type="submit" name="전송">입력완료</button>
    </form>
        <a href="/"><button name="Main_Return">메인으로</button></a>
        <a href="/Register"><button name="Join_click">회원가입으로</button>
    </body>
    @include('sweetalert::alert')
</html>
