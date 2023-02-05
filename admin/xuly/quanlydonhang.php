<!doctype html>
<?php if(isset($_COOKIE['MSNV'])){ ?>
<html>
<head>
<meta charset="utf-8">
<title>Quản lý đơn hàng</title>
	<style>
	*{
		margin: 0 ;
		padding: 0 ;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
}
		.main_donhang{
		}
		table#thongtin_kh{
		}
		table#thongtin_kh tr td{
		}
		table#chitietdonhang th{
			height: 40px;
			background-color: #646363;
			color: #FEFEFE;
		}
		.dsdonhang table#chitietdonhang{
			margin-top: 10px;
			margin-bottom: 20px;
			border-bottom: 1px solid #494949;
			text-align: center;
		}
		.dsdonhang{
			clear: both;
			width: 100%;
			float: left;
		}
		.dsdonhang table#chitietdonhang{
			border-collapse: collapse;
			width: 100%;
		}
		.dsdonhang table#chitietdonhang th{
			border-top: none;
		}
		 .dsdonhang table#chitietdonhang td{
			border: 1px solid #949292;
			 height: 30px;
		}
		.timkiem{
			width: 100%;
/*			background-color: #000000;*/
	margin-bottom: 18px;
		}
		.timkiem #btn input{
			border: 1px solid #0069D6;
			border-radius: 10px;
			width: 20%;
			height: 35px;
			margin-left: 5px;
			padding-left: 5px;
			outline: none;
		}
		.timkiem #btn button{
			height: 35px;
			margin-left: 5px;
			padding-left: 5px;
			background: none;
			border: none; 
			padding-right: 10%;
			color: #0069D6;
		}
		.timkiem #btn button:hover{
			color: #181B9D;
		}
		.timkiem table#chitietdonhang{
			margin-top: 10px;
			border-collapse: collapse;
			width: 100%;
			border-bottom: 1px solid #494949;
			text-align: center;
		}
		.timkiem table#chitietdonhang td{
			background-color: #AEA6A6;
			border: 1px solid #CBC4C4;
			 height: 30px;
		}
		#thongtinkh table#thogntin_kh td{
			padding-left: 5px;
		}
	</style>
</head>

<body>
<?php  if(isset($_COOKIE['MSNV'])){?>
	<!--	TRUY VAN DON DAT HANG NEU TON TAI NGAY DAT HANG SE TRUY VAN RDA DON HANG-->
	<div class="timkiem">
		<div id="btn">
			<form name="btn_timkiem" action="" method="POST">
	<b style="color: #07328C; margin-left: 5px; font-size: 17px;"><i>Tìm kiếm đơn hàng</i></b><input type="search" placeholder="tìm kiếm đơn hàng" name="timkiem_sodondh" value=""/><button name="timkiem" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
				</form>
			</div>
		<div id="ketqua">
			<?php
			if(isset($_POST['timkiem'])){
					include("modules_xuly.php");
				timkiemdonhang();
			}
			?>
		</div>
	</div>
	<hr style="margin-bottom: 20px;">
	<div class="main_donhang">
		<h3 style="padding-left: 20px; color: #9E0609;">QUẢN LÝ ĐƠN HÀNG</h3>
		<?php
	include("../../login/config.php");
//	echo $_COOKIE['MSNV'];
		$truyvan_kh = "SELECT dathang.MSKH, khachhang.HoTenKH, diachikh.DiaChi, khachhang.SoDienThoai FROM DATHANG, KHACHHANG, diachikh WHERE DATHANG.MSKH = KHACHHANG.MSKH AND diachikh.MSKH = khachhang.MSKH GROUP BY MSKH";
		$thucthi_kh = mysqli_query($mysqli, $truyvan_kh);
		while($col_kh = mysqli_fetch_array($thucthi_kh)){
		?>
		<div class="thongtin_kh" style="margin-top: 10px;">
		<table id="thongtin_kh">
			<tr><td><svg style="margin-left: 5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg><b><i>Khách hàng </i></b></td><td style="color: #1751B3;"><b style="margin-right: 20px;"><?php echo $col_kh['HoTenKH']; ?></b></td><td><svg  style="margin-left: 5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg><b style="margin-right: 5px;"><i>Số ĐT</i></b></td><td style="color: #1751B3;"><b><?php echo $col_kh['SoDienThoai']; ?></b></td>
			</tr>
			<tr>
			<td><svg style="margin-left: 5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
</svg><b><i>Địa chỉ giao hàng </i></b></td><td colspan="2" style="text-align: center; color: #1751B3;"><b><?php echo $col_kh['DiaChi']; ?></b></td>
			</tr>
		</table>
			</div>
		</div>
		<?php 	
	$truyvan_donhang = "SELECT dathang.SoDonDH, dathang.NGAYGH as ngaygh ,dathang.MSKH,dathang.NGAYDH ,chitietdathang.SoLuong, chitietdathang.GiaDatHang,chitietdathang.MSHH, chitietdathang.GiamGia, hanghoa.TenHH, khachhang.HoTenKH, khachhang.SoDienThoai, dathang.MSNV FROM dathang, chitietdathang, hanghoa, khachhang WHERE dathang.SoDonDH = chitietdathang.SoDonDH AND chitietdathang.MSHH = hanghoa.MSHH AND dathang.MSKH = khachhang.MSKH AND DATHANG.MSKH='".$col_kh['MSKH']."' AND dathang.NGAYDH IS NOT NULL" ;
		$thucthi_dh = mysqli_query($mysqli, $truyvan_donhang);
//	$MSNV = "SELECT MSNV FROM DATHANG WHERE MSNV IS NOT NULL";
//			$thucthi_manv = mysqli_query($mysqli, $MSNV);
//			$col_manv = mysqli_fetch_array($thucthi_manv);
	?>
		<div class="dsdonhang">	
	<table id="chitietdonhang">
		<tr>
			<th>Mã Số KH</th>
			<th>Số Đơn ĐH</th>
			<th>Mã Số HH</th>
			<th>Số Lượng</th>
			<th>Đơn Giá</th>
			<th>Giảm Giá</th>
			<th>Số Điện Thoại</th>
			<th>N.Đặt Hàng</th>
			<th>N.Giao Hàng</th>
			<th>Trạng Thái</th>
		</tr>
	<?php 	while($col_dh = mysqli_fetch_array($thucthi_dh))
		{ 
	?>
			
		
		<tr>
				<td  style="width: 10%;"><?php echo $col_dh['MSKH']; ?></td>
			<td  style="width: 10%;"><?php echo $col_dh['SoDonDH']; ?></td>
				<td  style="width: 10%;"><?php echo $col_dh['MSHH']; ?></td>
			<td style="width: 8%;"><?php echo  $col_dh['SoLuong']; ?></td>
			<td style="width: 10%;"><?php echo number_format($col_dh['GiaDatHang']); ?></td>
			<td style="width: 10%;"><?php echo number_format($col_dh['GiamGia']); ?></td>
			<td style="width: 10%;"><?php echo $col_dh['SoDienThoai']; ?></td>
			<td style="width: 10%;"><?php echo $col_dh['NGAYDH']; ?></td>
			<form action="" method="POST">
				<?php if($col_dh["ngaygh"]  != null ){?>
				<td  style="width: 11%;"><?php echo $col_dh['ngaygh']; ?></td>
				<?php }else { ?>
			<td  style="width: 11%;"><input style="border: none;" type="date" name="ngayGH" value=""/></td>
				<?php } ?>
			<td style="width: 18%;">
			<?php if($col_dh['MSNV'] > 1){ ?>
		<a style="color:#000000;"><b style="color:#009323;">ĐÃ DUYỆT</b></a> | <a href="main.php?quanly=quanlydonhang&huy_dh=<?php echo $col_dh['SoDonDH'];?>" style="color:#000000;"><b style="color: #BC0E11;">HỦY</b></a><?php } else { ?><button type="submit" value="<?php echo $col_dh['SoDonDH']; ?>" name="sohd" style="border: none; "><b style="color:#009323;font-size: 16px;">DUYỆT</b></button><?php } ?>
			</form>
		</td>
		</tr>

		<?php } ?>
	
</table>
					<?php 
			}
	?>	
<!--
	<form action="" method="post">
	<td>
			<input type="date" name="ngaygiaohang" value=""/></td>
	<input type="submit" name="duyet" />
	</form>
-->
			</div>
<!--THEM DON HANG-->

<?php 
	if(isset($_POST['sohd'])){
		$check_ngaygh = "SELECT DATHANG.NGAYDH FROM DATHANG, CHITIETDATHANG WHERE DATHANG.SoDonDH = chitietdathang.SoDonDH AND dathang.SoDonDH = '".$_POST['sohd']."'";
	echo $check_ngaygh;
		$qr = mysqli_query($mysqli, $check_ngaygh);
		$num_qr = mysqli_fetch_array($qr);
		if($_POST['ngayGH'] > $num_qr['NGAYDH']){
$DUYET_DON = "UPDATE DATHANG SET MSNV = '". $_COOKIE['MSNV']."', NGAYGH = '".$_POST['ngayGH']."' WHERE SODONDH = '".$_POST['sohd']."'";
	mysqli_query($mysqli, $DUYET_DON);
			header("refresh: 5");
		?>
	<script>
	alert ("Duyệt đơn hàng thành công");
		window.location = "main.php?quanly=quanlydonhang";
	</script>
<?php	} 
	else{ ?>
		<script>
	alert ("Ngày giao hàng không hợp lệ... ");
		window.location = "main.php?quanly=quanlydonhang";
	</script>
	<?php  }
	}
	/*  <!--	HUY DON HANG-->*/
	if(isset($_GET['huy_dh'])){
		$HUY_DH = "UPDATE DATHANG SET MSNV = NULL, NGAYGH = null WHERE SODONDH = '".$_GET['huy_dh']."' ";
		mysqli_query($mysqli, $HUY_DH); ?>
	<script>
		alert("Hủy thành công đơn hàng.");
		window.location = "main.php?quanly=quanlydonhang";
	</script>
	<?php
	}
}
	?>
	<script>	
	function mydate();
	</script>

</body>
</html>
<?php } ?>