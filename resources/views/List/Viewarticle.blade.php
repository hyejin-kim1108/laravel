<html>
    <head>
    </head>
    <body>
        <div name="List_View" id="view">
        <label>아래는 현재까지 입력된 모든 게시글입니다.</label>
        <table name="View" border="2">
            <tr>
                <td>게시글 번호</td>
                <td>게시글 제목</td>
                <td>게시글 내용</td>
                <td>작성자</td>
            </tr>
            <tr>
                <td>{{ $Article_DB }}</td>
            </tr>

        </table>
        <a href="List_View"><button>글쓰기</button></a>
        </div>
    </body>
</html>
