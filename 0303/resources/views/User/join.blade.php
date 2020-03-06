
<html>
<head>
    <title>회원가입 화면</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" charset="utf-8">
</head>
<body>
    <form name="Join" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{old('name')}}" placeholder="name">사용할 별명<br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="id">아이디<br>
        <input type="password" name="password" placeholder="비밀번호는 최소 4자리">비밀번호<br>
        <input type="email" name="email" value="{{old('email')}}" placeholder="email">이메일<br>

        <button type="submit" name="전송" onclick="find();">입력완료</button>
        <span class="text-danger">{{ $errors->first('submit') }}</span>
    </form>
    @include('sweetalert::alert')
</body>
</html>
