<?php
$con= new mysqli("localhost","root","","log");
$sql="SELECT * FROM `".$_SESSION['table']."`";
$res=$con->query($sql);
if(mysqli_num_rows($res))
{
while($row=$res->fetch_assoc())
{
	$title=$row['post_title'];
	$det=$row['post_detail'];
?>
	
	
<center>
<div class="card" style="width: 30rem; height: 30rem;" align="center">
  <img src="uploads\<?php echo $row['img'];?>" class="card-img-top" alt="You not upload any image">
  <div class="card-body">
    <h5 class="card-title"><?php echo $title;?></h5>
    <p class="card-text"><?php echo substr($det,0,50);echo "...";?></p>
    <a href="#" class="btn btn-primary">Read More</a>

  </div>
</div>
<br>

</center>

<?php
	
}
}
else
{
	echo "<h1><center>you not uploaded any post</center></h1>";
}
?>
