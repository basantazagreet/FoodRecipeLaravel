<form action="addphoto" method="POST" enctype="multipart/form-data">

@csrf
<input type="file" name="file">
<br><br>
<input type="submit" value="Upload">


</form>