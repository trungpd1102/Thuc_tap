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
		
		<h2 align="center"> Trang thông tin cho thuê nhà</h2>
			<?php include('connect.php')?>
			<table border="1">
	<tr>
        
        <th>Tên nhà</th>
        <th>Loại nhà</th>
        <th>Loại Phòng</th>
        <th>Địa chỉ</th>
        <th>Phòng ngủ</th>
		<th>Phòng tắm</th>
		<th>Giá tiền</th>
		<th>Nội dung</th>
		<th>Ảnh</th>
		<th> </th>
		<th> </th>
		
        </tr>
	<?php 
	$s= "select * from thuecanho";
	$tt2=mysqli_query($con,$s);
	while($row = mysqli_fetch_array($tt2))
	{?>
	<tr>
       
        <td><?php echo $row['Ten']?></td> 
        <td><?php echo $row['Loainha']?></td> 
        <td><?php echo $row['Loaiphong']?></td> 
        <td><?php echo $row['Diachi']?></td> 
        <td><?php echo $row['Phongngu']?></td>  
  <td><?php echo $row['Phongtam']?></td>    
  <td><?php echo $row['Mota']?></td>    
  <td><?php echo $row['Gia']?></td>   
   <td><img src=<?php echo "images/".$row['Anh']?>  width='50px' height='50px'/></td> 
		<td><a href="del.php?id=<?php echo $row['ID']?>" onClick="if(confirm('Bạn có chắc chắn muốn hủy '))return true;else return false;">Hủy yêu cầu</a></td>
        <td><a href="up.php?id=<?php echo $row['ID'];?>">Sửa</td>
    </tr>
	
    <?php }?>   
    </table>
		</div>
		<div class="sidebar">
			<form>
				<input type="text" name="search" placeholder="Search..">
				<button type="search">Tìm kiếm</button>
			</form>
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
