<?php
session_start();
require "navbar.php";

?>
<html>
<body>
<br>
<br>
<form action="insert_post.php" method="post" enctype="multipart/form-data" >
<table align="center" >
<tr>
<td> Post Title: </td>
<td><input type="text" name="post_title" id="post_title" size="40px"></td>
</tr>
<tr>
<td></td>
</tr>




<tr>
<td> Description: </td>
<td><textarea name="post_detail" id="post_detail" rows=5 cols=42 placeholder="1000 character"></textarea></td>
</tr>

<tr>
<td>upload image: </td>
<td><input type="file"  name="file" id="file"  ></td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td><input type="submit" class="btn-success my-2 my-sm-0" name="submit" id="submit" value="create"></td>
<td><input type="reset" class="btn-light my-2 my-sm-0" name="reset" id="reset" value="Clear all">
</tr>

</table>
</form>
</body>
</html>