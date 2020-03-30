<form name="File_Upload" method="POST" enctype="multipart/form-data" >
    <b>파일업로드 부분</b><br><br>
    {{ csrf_field() }}
    <input type="file" name="File" id="files" value="파일업로드" multiple="multiple"><br>
    <input type="submit" name="File_Submit" id="submit" value="전송">
</form>
<hr>
