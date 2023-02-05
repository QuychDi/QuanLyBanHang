<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
	<style>
		*{
			margin: 0 auto;
			padding: 0 auto;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.them {
/*			padding-top: 50px;*/
			width: 900px;
			height: 350px;
		}
		.them table#table_them tr td input{
				border: 1px solid #3B6BFF;
		}
		.them table#table_them tr td{
			padding-left: 10px;
		}
		.them table tr td input{
			outline: none;
			width: 180px;
			height: 25px;
			margin-left: 2px;
			border-radius: 5px;
			border:none;
			padding-left: 5px;
		}
		.title{
			border-bottom: 1px solid #5E5A5A;
			display: flex;
			justify-content: center;
			align-items: center;
			padding-bottom: 2px;
			width: 100%;
	
		}
		.title h2{
			width: 250px;
			float: left;
			color: #000000;
			
		}
		.title .timkiem{
			width: 400px;
			height: 50px;
			float: right;
			
/*			margin-top: 10px;*/
		}
		.title .timkiem input{
			margin-left: 12px;
			height: 30px;
			outline: none;
			padding-left: 10px;
			width: 200px;
			border-radius: 5px;
			
		}
		.title .timkiem button{
			margin-left: 2px;
			height: 36px;
				border-radius: 5px;
			background-color: #0AAC3D;
		}
		.title .timkiem input:focus{
			box-shadow: 0px 0px 10px #3366CC;
		}
		.ketqua_timkiem{
		
			width: 400px;
			height: 100px;
	}
		.ketqua_timkiem table tr td{
			width: 170px;
			height: 25px;
			padding-left: 15px;
		}
		.ketqua_timkiem table th{
			color: #0020BD;
		}
	</style>
</head>
<?php if(isset($_COOKIE['MSNV'])){ ?>
<body>
	<form action="" method="post" name="timkiem">
		<div class="title"><img style="width: 48px;margin-left: 10px;margin-top: 10px; float: left;" src="../images/capnhatnhanvien.png" /><h2>CẬP NHẬT NHÂN VIÊN</h2>
	<div class="timkiem"><b style="margin-left: 20px;line-height: 50px; color: #FFFFFF">Tìm kiếm</b>
	<input type="text" placeholder="Nhập sốĐT nhân viên" name="btntimkiem" value="" style="outline: none;" />
	<button type="submit" name="gui_timkiem">TÌM KIẾM</button>
		</div>
	</div>
	
	
				<div class="ketqua_timkiem">
					<?php
					
					if(isset($_POST['gui_timkiem'])){
					include("xuly/modules_xuly.php");
					 ketquatimkiemNV();
					}
					?>
				</div>
	</form>
	<div class="them">
			<form action="" method="POST" name="capquyen">
	<table id="table_them">
		<tr>
			<th colspan="2">CẤP QUYỀN NHÂN VIÊN</th>
		</tr>
		<tr>
		<td>Họ Tên Nhân Viên </td><td><input type="text" name="tenNV" required value=""/></td>
			<td>Địa Chỉ</td><td><input required type="text" name="diachiNV" value=""/></td>
		</tr>
		<tr>
			
		</tr>
		<tr>
			<td>Số Điện Thoại(<b style="color: #FA070B">*</b>)</td><td><input required type="text" name="soDT" value=""/></td>
			<td>Mật khẩu</td><td><input required type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="3" style="font-size: 12px;">(<b style="color: #FA080C">*</b>) Số ĐT mặc định là tên đăng nhập của nhân viên</td>
		</tr>
		<tr>
			
		</tr>
		<tr>
			<td><input style="width: 100px; border: none; background-color: #3F89E7; color: #F3EBEB;" type="submit" onClick="check();" name="submit" value="THÊM"/></td>
		</tr>
			
		</table>

		</div>
	<div class="liet_ke">
		<table>
			<tr>
		<th colspan="6">DANH SÁCH NHÂN VIÊN</th>
				</tr>
			<tr>
			<th>MÃ_NV</th><th>HỌ VÀ TÊN</th><th>ĐỊA CHỈ</th><th>SỐ ĐT</th><th>MẬT KHẨU</th><th>CẬP NHẬT</th>
			</tr>
			<?php
			include("../../login/config.php");
			$truyvan = "SELECT NHANVIEN.MSNV, NHANVIEN.HOTENNV, NHANVIEN.DIACHI, 
			NHANVIEN.SODT, TAIKHOAN.PASS 
			FROM TAIKHOAN INNER JOIN NHANVIEN ON TAIKHOAN.TENDANGNHAP = NHANVIEN.SODT";
			$thucthi_truyvan = mysqli_query($mysqli,$truyvan);
			while($result_nv = mysqli_fetch_array($thucthi_truyvan)){?>
				<tr>
			<td><?php echo $result_nv['MSNV']; ?></td>
			<td name="hotenNV"><?php echo $result_nv['HOTENNV']; ?></td>
			<td><?php echo $result_nv['DIACHI']; ?></td>
			<td><?php echo $result_nv['SODT']; ?></td>
						<td><?php echo $result_nv['PASS'];?></td>
<!--					<td><a style="color: #3D3D3D;"  href="main.php?quanly=quanlynhanvien&xoa_nv =/* ">XÓA</a></td>-->
			</tr>
			<?php
			}							
			?>
			
			
		</table>
	</div>
<!--	XOA NHAN VIEN-->
	<?php
	if(isset($_POST['submit'])){
		include("xuly/modules_xuly.php");
		themNV();
	}
	if(isset($_GET['xoa_nv'])){
//		$delete = "DELETE FROM NHANVIEN WHERE SoDT ='".$_GET['xoa_nv']."' ";
//		$delete_tk = "DELETE FROM TAIKHOAN WHERE TENDANGNHAP = '".$_GET['xoa_nv']."'";
//		mysqli_query($mysqli, $delete);
//		mysqli_query($mysqli, $delete_tk);
		echo "hihi";
	}
	?>
</body>
<?php } ?>
</html>