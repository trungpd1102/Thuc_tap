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
<form method="post">
	<table  cellpadding="0px" cellspacing="0px" border="1px" bgcolor="#00CCCC" >
    	<tr>
        	<td colspan="2" align="center">Đăng nhập tài khoản</td>
        </tr>
        <tr>	
        	<td>Tên đăng nhập</td>
            <td><input type="text" name="tendn"/></td>
        </tr>
        <tr>
         	<td>Mật khẩu</td>
            <td><input type="password" name="mk"/></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" name="ok" value="Đăng nhập"></td>
        </tr>
    </table>
</form>
<?php 
	if(isset($_POST['ok']))
		{
			include('connect.php');
			$user=$_POST['tendn'];
			$pass=$_POST['mk'];
			if ($user=='admin'){// Kiểm tra nếu là tài khoản Admin thì chuyển đến trang hienthi_admin.php. Có thể sửa, xóa các bản ghi(người dùng ) và biết được mật khẩu
				$sqldn="select * from dangky where Account='admin' and Password='12'";
				$thucthidn=mysqli_query($con,$sqldn);
				$num=mysqli_num_rows($thucthidn);
				
				if($num==1)
				{
					$_SESSION['name']=$user;
					header('location:Index.php');
					}
					else echo "<script> alert(Không đăng nhập được! Tài khoản hoặc mật khẩu không đúng)</script>";
					}
			else{// Nếu không là tkhoan Admin thì đăng nhập vào trang hienthi.php, trang này chỉ có thể xem thông tin
				$sqldn1="select * from dangky where Account='$user' and Password='$pass'";
				$thucthidn1=mysqli_query($con,$sqldn1);
				$num1=mysqli_num_rows($thucthidn1);
				
				if($num1==1)
				{
					$_SESSION['name']=$user;
					header('location:Index.php');
					}
					else echo "<script> alert(Không đăng nhập được! Tài khoản hoặc mật khẩu không đúng)</script>";
					}
		}
					
?>
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
