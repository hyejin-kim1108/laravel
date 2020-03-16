<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>회원탈퇴</title>
    </head>
    <body>
        <b>회원 탙퇴를 하시겠습니까?</b>
        <br>
        <b>탈퇴를 하시면 지금까지 쓰신 글,댓글은 남아있지만 회원정보는 사라지며 정보는 복구할 수 없습니다.</b>
        <br>
        <b>아래 버튼을 눌러주세요.</b>
        <form name="SignOut" method="POST">
            {{ csrf_field() }}
            <input type="submit" name="button"  value="Yes_Click" onclick="Yes_Click()">예</button>
            <input type="submit" name="button"  value="No_Click" onclick="No_Click()">아니오</button>
        </form>
    </body>
    @include('sweetalert::alert')
</html>
