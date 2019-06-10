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
			<li class="" id="tt"><a href="#">Đăng căn hộ</a></li>
			<li class=""><a href="chothuenha.php">Thuê căn hộ</a></li>
			<li class=""><a href="#">Trợ giúp</a></li>
		</ul>

	</div>
	<div class="body">
	<!---Center--> 
	<?php
	if(isset($_POST['ok'])){
		$tennha=$_POST['tennha'];
		$loainha=$_POST['loainha'];
		$loaiphong=$_POST['loaiphong'];
		$diachi=$_POST['diachi'];
		$phongngu=$_POST['phongngu'];
		$phongtam=$_POST['phongtam'];
		$gia=$_POST['gia'];
		$nd=$_POST['nd'];
		$anh= $_POST['anh'];
		$tp1=$_FILES['anh']['tmp_name'];
			$tp2=$_FILES['anh']['name'];
			$up=move_uploaded_file($tp1,'images/'.$tp2);
	include('connect.php');
			$s= "insert into thuecanho (Ten,Loainha,Loaiphong,Diachi,Phongngu,Phongtam,Mota,Gia	,Anh) values('$tennha','$loainha','$loaiphong','$diachi','$phongngu','$phongtam','$gia','$nd','$tp2')";
			$tt= mysqli_query($con,$s);
			
	}
	?>
		<div class="center">
			<h2 align="center" style="margin-top:10px; ">Đăng tin cho thuê căn hộ</h2>
			<form class="formdangtin" method="POST" >
				<label>Tên Nhà<a style="color: red">(*)</a>:</label><br>
				<input type="text" class="formselect" name="tennha"><br>
				<label>Loại nhà<a style="color: red">(*)</a>:</label><br>
				<select style="width: 110px; height:30px;" class="formselect" name="loainha">
					<option >Nhà 2 tầng</option>
					<option>Nhà 3 tầng</option>
					<option>Nhà 4 tầng</option>
					<option>Nhà 5tầng</option>
					<option>Biệt thự</option>
				</select><br>
				<label>Loại phòng<a style="color: red">(*)</a>:</label><br>
				<select style="width: 120px; height:30px;" class="formselect" name="loaiphong">
					<option> Phòng standard</option>
					<option>Phòng Superior</option>
					<option>Phòng Deluxe </option>
					<option>Phòng Suite</option>
				</select><br>
				<label>Địa chỉ<a style="color: red">(*)</a>:</label><br>
				<input type="text" class="formselect" name="diachi"><br>
				<label>Phòng ngủ<a style="color: red">(*)</a>:</label><br>
				<select style="width: 55px; height:30px;" class="formselect" name="phongngu">
					<option >1 </option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select><br>
				<label>Phòng tắm<a style="color: red">(*)</a>:</label><br>
				<select style="width: 55px; height:30px;" class="formselect" name="phongtam">
					<option >1 </option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select><br>
				<label>Giá tiền<a style="color: red">(*)</a>:</label><br>
				<input type="text" style="width: 150px;" class="formselect" name="gia">
				<select class="gia" style="width: 55px; height:30px;" class="formselect" name="gia">
					<option >Triệu </option>
					<option>Tỷ</option>
				</select><br>
				<label class="mota">Mô tả<a style="color: red">(*)</a>:</label><br>
				<textarea style="width: 500px; height: 100px;" class="formselect" name="nd"></textarea><br>
				<label>Ảnh<a style="color: red">(*)</a>: </label><br>
				<input type="file" name="anh"><br>
				<button type="submit" align="center" class="dangtin" name="ok">Đăng tin</button>
			</form>
		</div>
		<div class="sidebar">
			<form>
				<input type="text" name="search" placeholder="Search..">
				<button type="search">Tìm kiếm</button>
			</form>
			<!--  -->
			<div class="canho">
				<p align="center" class="tin">Tìm kiếm trong các tin rao</p>
				<div class="slect">
					<select>
						<option >--Chọn căn hộ --</option>
						<option>Căn hộ cao cấp</option>
						<option>Căn hộ trung cấp</option>
						<option>Căn hộ bình dân</option>
					</select><br>
					<select>
						<option>--Tỉnh/Thành phố--</option>
						<option>Hà Nội</option>
						<option>Đà Nẵng</option>
						<option>Sài Gòn</option>
						<option>TP.HCM</option>
					</select><br>
					<select>
						<option>--Diện tích--</option>
						<option>30 mét vuông</option>
						<option>50 mét vuông</option>
						<option>80 mét vuông</option>
						<option>100 mét vuông</option>
					</select><br>
					<select>
						<option>--Chọn giá--</option>
						<option>Nhỏ hơn 500.000Đ/Ngày</option>
						<option>500.000-2.000.000Đ/Ngày</option>
						<option>2.000.000-3.000.000Đ/Ngày</option>
					</select><br>
					<button type="timkiem" class="timkiem">Tìm kiếm ngay</button>
				</div>

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
