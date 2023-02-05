<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style> 
		*{
			margin: 0px auto;
			padding: 0px auto;
		}
		.main_tk{
			z-index: 1;
			position: absolute;
			width: 680px;
			height: 320px;
			border-radius: 30px;
			border: 5px solid #0F77EC;
			background-color: #FAF5F5;
			box-shadow: 20px 20px 50px #267BF1;
			margin-left: 280px;
		}
		.main_tk #close{
			margin-right: 15px;
		}
		.main_tk #close a:hover{
			color: #BE4B06;
		}
		.main_tk table tr td input{
			outline: none;
			padding-left: 5px;
		}
		.main_tk .truyvan{
			clear: both;
		}
		.main_tk .truyvan table tr td{
			padding-left: 10px;
		}
		.main_tk .truyvan table tr td input{
			outline: none;
			width: 220px;
			padding-left: 8px;
			border: 1px solid #000000;
			border-radius: 10px;
		
		}
		.main_tk .truyvan #btn_capnhat{
			padding-left: 100px;
		}
	</style>
</head>

<body>
	<div class="main_tk">
		<div id="close" style="float: right;">
		<a href="index.php"  style="color: #E80003;"><b>ĐÓNG X</b></a>
				</div>
		<div class="truyvan">
			<form method="post" action="xuly/kh_capnhattaikhoan.php">
				<?php
				if(isset($_COOKIE['mskh'])){?>
			<?php	if(isset($_POST['kh_capnhat'])){ ?>
				<table>
					<th colspan="4" style="text-align: center; padding-bottom: 10px; color: #05AC6B; font-size: 20px;"><img style="width: 80px;" src="img/kh_capnhatTK/logokh.png"/> CẬP NHẬT THÔNG TIN KHÁCH HÀNG</th>
						<?php 
						$truyvan_kh = "SELECT*FROM KHACHHANG WHERE MSKH = '".$_COOKIE['mskh']."'";
						$thucthi_kh = mysqli_query($mysqli, $truyvan_kh);
						$col_kh = mysqli_fetch_array($thucthi_kh)
						?>
						<tr>
							<td><b>Khách hàng </b></td><td><input name="hotenKH" type="tex" value="<?php echo $col_kh['HoTenKH']; ?>"/></td><td><b>Số ĐT</b></td><td><input  style="width: 160px; text-align: center; padding: 0px;" readonly value="<?php echo $col_kh['SoDienThoai'];?>"</td>
						</tr>
						<tr>
							<td><b>Email</b></td><td colspan="4"><input name="emailKH" style="width: 400px;" type="text" value="<?php echo $col_kh['Email'];?>"</td>
						</tr>
						<tr>
							<td><b>Công ty </b></td><td colspan="4"><input name="congtyKH"  style="width: 400px;"  type="text" value="<?php echo $col_kh['TenCongTy'];?>"</td>
						</tr>
				</table>
				<div id="btn_capnhat">
					<button style="font-size: 12px; margin-top: 25px; border: none; height: 30px ; background-color: #157AC7; outline: none; color: #FBF8F8;border-radius: 20px; width: 200px;" type="submit" name="capnhat_tt" ><b>CẬP NHẬT THÔNG TIN</b></button>
					<button style="font-size: 12px; margin-top: 25px; border: none; height: 30px ; background-color: #157AC7; outline: none; color: #FBF8F8;border-radius: 20px; width: 200px;" type="reset" name="capnhat_tt" ><b>RESET</b></button>
				</div>
				<?php  }else{ ?>
				<table>
					<div id="logo_kh" style="float: left; z-index: 2; position: relative;"><img style="width: 180px;" src="img/kh_capnhatTK/logokh.png"/></div>
					<th colspan="4" style="text-align: center; padding-bottom: 10px; color:  #0F77EC; font-size: 20px;">THÔNG TIN KHÁCH HÀNG</th>
						<?php 
						$truyvan_kh = "SELECT*FROM KHACHHANG WHERE MSKH = '".$_COOKIE['mskh']."'";
						$thucthi_kh = mysqli_query($mysqli, $truyvan_kh);
						$col_kh = mysqli_fetch_array($thucthi_kh)
						?>
						<tr>
							<td><b>Khách hàng: </b></td><td><b style="color: #018B3A;"><i><?php echo $col_kh['HoTenKH']; ?></i></b></td><td><b >Số ĐT:</b></td><td><b style="color: #018B3A;"><i><?php echo $col_kh['SoDienThoai'];?></i></b></td>
						</tr>
						<tr>
							<td ><b>Email</b></td ><td colspan="4"><b><i><?php echo $col_kh
							['Email'];?></i></b></td>
						</tr>
						<tr>
							<td><b>Công ty </b></td><td colspan="4"><b><i><?php echo $col_kh['TenCongTy']; ?></i></b></td>
						</tr>

			</table>
				</form>
				<div id="btn_capnhat">
					<form action="" method="post">
					<button style="font-size: 12px; margin-top: 25px; border: none; height: 30px ; background-color: #157AC7; outline: none; color: #FBF8F8;border-radius: 20px; width: 200px;" type="submit" name="kh_capnhat" ><b>CẬP NHẬT THÔNG TIN</b></button>
						</form>
				</div>
			
				<?php } }else{?>
				<img src="img/login.png"/><a href="dangnhap.php"><b style="color: #079D49;">VUI LÒNG ĐĂNG NHẬP</a></b>
				<?php }
				?>
				
			</div>
	</div>
</body>
</html>