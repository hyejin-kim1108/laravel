<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>
<body>
<form name="Article_List" method="POST" enctype="multipart/form-data">
    <label>게시판 작성</label>
    {{ csrf_field() }}
    <div name="head">
        <label>글 제목 : </label>
        <input type="text" name="List_Title" id="Title" placeholder="제목을 적어주세요">
        <br>
        <label>글 내용 : </label><br>
        <textarea name="List_Enter" id="Enter" rows="5" cols="50"></textarea>
        <br>
        <input type="file" name="File" id="files" value="파일업로드" multiple="multiple">
        <br>
        <label>작성자 : {{ Auth::user()->id }} </label><br>
        <label>현재 날짜, 시간 : {{ date('Y-m-d H:i:s') }}</label>
        <br><br>
        <input type="submit" name="Article_Submit" value="입력완료">
    </div>
</form>
@include('sweetalert::alert')
</body>
</html>
