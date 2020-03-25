
    <form name="File_Upload" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <b>전송가능한 파일 확장자는 png,jpg,zip 입니다</b><br>
        <input type="file" name="File" id="files" value="파일업로드" multiple="multiple"><br>
        <input type="submit" name="File_Submit" id="submit" value="전송">
    </form>
