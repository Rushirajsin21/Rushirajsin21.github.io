<?php
session_start();
require "navbar.php";
$con=new mysqli("localhost","root","","log");
$title=$_REQUEST['post_title'];
$detail=$_REQUEST['post_detail'];
$file=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp,'uploads/'.$file);
$sql="INSERT INTO `".$_SESSION['table']."` (`post_title`,`post_detail`,`img`)VALUES('$title','$detail','$file') ";
$res=$con->query($sql);

echo "<h1 align=center>The post is uploaded</h1>";




?>