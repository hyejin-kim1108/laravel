
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>회원정보수정</title>
    </head>
    <body>
        <form name="UpdateUser" method="POST">
            {{ csrf_field() }}
            <b>변경사항이 없으시면 뒤로 가기를 눌러주세요</b>
            <br>
            <!--<input type="text" name="id" placeholder='id'>사용중인 아이디<br>-->
            <input type="text" name="name" value={{ Auth::user()->name }}>변경할 별명<br>
            <input type="password" name="password" value={{ Auth::user()->password }}>새로운 비밀번호<br>
            <input type="email" name="email" value={{ Auth::user()->email }}>새로운 이메일<br>

            <button type="submit" name="전송" onclick="store()">입력완료</button>
            <span class="text-danger">{{ $errors->first('submit') }}</span>
        </form>
        @include('sweetalert::alert')
    </body>
</html>
