<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	include('connect.php');
	$id= $_GET['id'];
	echo $id;
	$s= "Delete from thuecanho  where ID='$id'";
	$tt= mysqli_query($con,$s);
	if($tt)
		{header('location: chothuenha.php');}
	else {echo"Không xóa được";}
?>
</body>
</html>