<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>login</title>
    </head>
    <body>
    <form name="login" method="POST">
        {{ csrf_field() }}
        <input type="text" name="id" placeholder="id">ID<br>
        <input type="password" name="password" placeholder="password">password<br>

        <button type="submit" name="전송" onclick="store();">입력완료</button>
    </form>
    </body>
    @include('sweetalert::alert')
</html>
