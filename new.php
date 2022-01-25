<?php
	
if(isset($_POST['submit']))
{$upload=true;
	$con=new mysqli("localhost","root","","file");	
	if($con)
	{
		echo "<br>Conneccted to database";
	}
	$file=$_FILES['file']['name'];
	$file_tmp=$_FILES['file']['tmp_name'];
	$sql2="SELECT * FROM `reg`";
	$res2=$con->query($sql2);
	while($row=$res2->fetch_assoc())
	{
		if($row['imagepath']==$file)
		{
			$upload=false;
		}
	}
	if($upload)
	{
		move_uploaded_file($file_tmp,'new/'.$file);
		$sql="INSERT INTO `reg` (`nm`,`imagepath`)VALUES('$file_tmp','$file')";
		$res=$con->query($sql);if($res){echo "<br> Image Uploaded into databse ";
	
	$sql1="SELECT * FROM `reg`";
	$res1=$con->query($sql1);
	while($row=$res1->fetch_assoc())
	{?>
		<img src="uploads/<?php echo $row['imagepath'];?>" height="100" width="100">
		<?php
	}
	
	else
	{
		echo "<br> Image Already stored in databse";
	}
	}?><html><form method="post" enctype="multipart/form-data"><input type="file" name="file" value="file"><input type="submit" name="submit" value="submit"></form></html>
