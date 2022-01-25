<?php
session_start();

$con=new mysqli("localhost","root","","log");
$nm=$_REQUEST['nm'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$sql="SELECT * FROM `leg` WHERE `nm`='$nm' and `email`='$email' and `pass`='$pass'";
$res=$con->query($sql);


	

if(mysqli_num_rows($res))
	
	{
		
		
		$_SESSION['nm']=$nm;
		$_SESSION['email']=$email;
		$_SESSION['login']=true;
		$_SESSION['table']=$nm;
		$_SESSION['login']=true;
		
		require "homes.php";
	}
	
	else 
	{
		echo "<center><b> You are not Registered </center>";
		?>
		<html>
<body>
<form action="check.php" method="post"> 
<h1 align="center">Login page</h1>
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
<h4 align="center" ><a href="register.php">Register here</a></h6>
</body>
</html>
		<?php
	}


?>
