<?php
session_start();

$con= new mysqli("localhost","root","","log");
$nm=$_REQUEST['nm'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$file=$_FILES['file']['name'];
$filetmp=$_FILES['file']['tmp_name'];
$sql="SELECT * FROM `leg` WHERE `nm`='$nm' and `email`='$email'";
$res=$con->query($sql);
$reg=true;
if(mysqli_num_rows($res))
{
		$_SESSION['login']=false;
		require "navbar.php";
		echo "<center><b>User already exsist</center> ";
}
else
{
	$_SESSION['login']=false;
	require "navbar.php";
	$sql1="INSERT INTO `leg` (`nm`,`email`,`pass`,`img`)VALUES('$nm','$email','$pass','$file')";
	$res1=$con->query($sql1);
	move_uploaded_file($filetmp,'uploads/'.$file);
	$_SESSION['table']=$nm;
	$sql2="CREATE TABLE `log`.`". $_SESSION['table']."` ( `id` INT NOT NULL AUTO_INCREMENT , `post_title` VARCHAR(100) NOT NULL , `post_detail` VARCHAR(1000) NOT NULL , `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `time` TIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` BOOLEAN NOT NULL DEFAULT TRUE , `img` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
	$res2=$con->query($sql2);
	
	echo "<center><b>You are Registered";
	
}

?>
<html>
<body>
<form action="insert.php" method="post"> 
<h1 align="center">Register page</h1>
<table align="center" border="1px">
<tr>
<td>Name:</td>
<td><input type="text" name="nm" id="nm" value=""></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="email" name="email" id="email" value=""></td>
</tr>

<tr>
<td>password:</td>
<td><input type="password" name="pass" id="pass" value=""></td>
</tr>

<td><input type="submit" name="submit" id="submit" value="submit"></td>
<td><input type="reset" name="reset" id="reset" value="clear"></td>

</table>
</form>
<h4 align="center" ><a href="login.php">Login here</a></h6>
</body>
</html>