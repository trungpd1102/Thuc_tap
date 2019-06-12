<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<title>Thuê Căn Hộ</title>
	<link rel="stylesheet" href="web.css" />
</head>

<body>
	<div class="header">
		<ul >
			<li class="header-left"><a href="tel:0363994444">Hotline: 0967.xxx.xxx</a></li>
			<li class="header-left"><a href="mailto:thuenha@gmail.com">Email: thuecanho@gmail.com</a></li>
			<li class="header-right_1" ><a href="#">Đăng nhập</a></li>
			<li class="header-right_2"><a href="#">Đăng ký</a></li>
		</ul>
	</div>
	<div class="menu">

		<ul >
			<li class="right"><a href="index.html">Trang chủ</a></li>
			<li class=""><a href="dangtin.php">Đăng căn hộ</a></li>
			<li class="" id="tt"><a href="#">Thuê căn hộ</a></li>
			<li class=""><a href="#">Trợ giúp</a></li>
		</ul>

	</div>
	<div class="body">
		<div class="center">
<div style=" width:800px; height:750px; margin:auto">
<form method="post" enctype="multipart/form-data">
<table bgcolor="#FF9900" style="color:#0F3">
	<tr>
    	<td colspan="2" align="center"><h3>Đăng ký thông tin</h3></td>
    </tr>
    <tr>
    	<td width="155">Họ và tên</td>
        <td width="250"><input type="text" name="ten" width="250px"></td>
    </tr>
    <tr>
    	<td>Địa chỉ</td>
        <td><input type="text" name="add" width="250px"></td>
    </tr>
    <tr>
    	<td>Điện thoại</td>
        <td><input type="text" name="tel"></td>
    </tr>
    <tr>
    	<td>Tên tài khoản</td>
        <td><input type="text" name="ttk" width="250px"></td>
    </tr>
    <tr>
    	<td>Mật khẩu</td>
        <td><input type="password" name="pass" width="250px"></td>
    </tr>
    <tr>
    	<td>Nhập lại mật khẩu</td>
        <td><input type="password" name="pass2" width="250px"></td>
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="ok" value="Đăng ký"></a></td>
    </tr>
</table>
</form>
<?php
	include ('connect.php');
	if (isset($_POST['ok']))
	{
	$demst="";
		$hoten=$_POST['ten'];
		$diachi=$_POST['add'];
		$phone=$_POST['tel'];
		$ttk=$_POST['ttk'];
		$pass=$_POST['pass'];
		$repass=$_POST['pass2'];
		if ($pass==$repass)
		{
			$sql="insert into nhanvien(Name,Address,Phone,Account,Password) values('$hoten', '$diachi' ,'$phone' ,'$ttk','$pass')";
			$thucthi= mysqli_query($con,$sql);
			if($thucthi) { "<script> alert('Thanh cong')</script>";
 							 header ('location:Index.php');}
  	 		else echo "<script> alert('Khong thanh cong')</script>";
		}
  
  		else echo "<script> alert('Mật khẩu không giống nhau!!! Nhập lại!!')</script>";
	}
?>
</div>
		</div>
	</div>
	<div class="footer">
		<div class="tt">
			<p style="margin-top: 10px;margin-bottom: 10px;font-size:24px;">Thông tin liên hệ</p>
			<ul >
				<li> Địa chỉ: Ngõ 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</li>
				<li> Email: thuecanho@gmail.com</li>
				<li> Điện thoại: 0967.xxx.xxx</li>
			</ul>
		</div>
		<div class="cs" style="text-align: center;">
			<p style="margin-top: 10px;margin-bottom: 10px;font-size:24px;">Quy định chính sách</p>
			<ul>
				<li><a href="#"> Giới thiệu</a></li>
				<li><a href="#"> Điều khoản sử dụng</a></li>
				<li><a href="#"> Giải quyết khiếu nại</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
