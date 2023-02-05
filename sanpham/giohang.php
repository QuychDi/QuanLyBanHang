<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thong Tin Gio Hang</title>
	<style>
		*{
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.main{
			width: 1200px;
	
		}
		.main .thongtinkh{
			width: 1200px;
			height: 200px;
		}
		.main .thongtin_kh table{
			margin: 0px;
			padding: 0px;
			text-align: center;
		}
		.main .thongtinkh table td{
			border: none;
			padding-left: 5px;
		
		}
		.main .thongtingiohang{
			width: 1200px;
		}
		.main .thongtingiohang table, th, td{
   		 border:1px solid #DB6A2E;
		}
		.main .thongtingiohang table{
    border-collapse:collapse;
			text-align: center;
		}
		.main .thongtingiohang table td, th{
			width: 350px;

		}
		.main .thongtingiohang table td{
			height: 45px;
			text-align: center;
		}
		.main .thongtingiohang table th{
			height: 30px;
			border: none;
			background-color: #DB6A2E;
			color: #F4F4F4;
		}
		.capnhat_thongtin {
			clear: both;
			width: 1200px;
		}
		.capnhat_thongtin table{
			margin: 0px;
			padding: 0px;
		}
		.capnhat_thongtin table tr td input{
			outline: none;
			height: 30px;
			background-color: #337AE6;
			border: 1px solid #1135E7;
			color: #FFFEFE;
		}
		.capnhat_thongtin table tr td input#btn_1:hover, input#btn_2:hover{
			background-color: #00358E;
		}
		.btnmua{
			margin-top: 0.5%;
		
			float: right;
			width: 10%;
			height: 40px;
			background-color:#DB6A2E;
			line-height: 40px;
			text-align: center;
		}
		.btnmua:hover{
			background-color: #F2A45E;
		}
	</style>
</head>

<body>
	<?php if(isset($_COOKIE['mskh'])){
	
				$hanghoa = "SELECT hanghoa.TenHH,chitietdathang.mshh, 
				chitietdathang.soluong, chitietdathang.giadathang, chitietdathang.giamgia, 
				GIAMGIA * SOLUONG AS 'THANHTIEN', 
				GIADATHANG * SOLUONG AS 'THANHTIEN_DAT', DATHANG.SoDonDH 
				FROM ((dathang INNER JOIN chitietdathang ON dathang.sodondh = chitietdathang.sodondh) 
				INNER JOIN hanghoa ON chitietdathang.mshh = hanghoa.mshh) 
				WHERE DATHANG.MSKH = '".$_COOKIE['mskh']."' AND DATHANG.NGAYDH IS NULL";				
				$THUCTHI_HANGHOA = mysqli_query($mysqli, $hanghoa);
	
	?>
	<div class="main">
<!--		GIO HANG-->
		<div class="thongtingiohang">
			<div class="menu_1"><p style="color: #DB6A2E"><b><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z"/>
				</svg>GIỎ HÀNG</b></p></div>
		<table id="thongtingiohang">
			<tr>
			<th>Tên sản phẩm</th>
				<th>Số lượng</th>
			<?php 
				$giamgia = "SELECT GIAMGIA FROM chitietdathang, DATHANG 
				WHERE chitietdathang.GIAMGIA > 0 AND chitietdathang.SODONDH = DATHANG.SODONDH";
				$thucthi_giamgia = mysqli_query($mysqli, $giamgia);
				if(mysqli_num_rows($thucthi_giamgia)>0){?>
					<th>Đơn giá (VNĐ)</th>
					<th>Giảm còn (VNĐ)</th>
				<?php }else{?>
					<th>Đơn giá (VNĐ)</th>
				<?php }
				?>
				
			<th>Thành tiền (VNĐ)</th>
			<th>Cập nhập</th>
				</tr>
<?php 
				while($row_hh =mysqli_fetch_array($THUCTHI_HANGHOA)){
					?>
			<tr>
				<td><?php echo $row_hh['TenHH']; ?></td>
				<td><?php echo $row_hh['soluong']; ?></td>
<!--			TAO HANG GIA THANH NEU COT GIAM GIA LON HON 0 THI HIEN COT GIAM GIA VA DON GIA VA NGUOC LAI-->
				<?php $giamgia = "SELECT GIAMGIA FROM chitietdathang, DATHANG 
				WHERE chitietdathang.GIAMGIA > 0 AND chitietdathang.SODONDH = DATHANG.SODONDH";
				$thucthi_giamgia = mysqli_query($mysqli, $giamgia);
				if(mysqli_num_rows($thucthi_giamgia)>0){
				
				?>
				<td><?php echo number_format($row_hh['giadathang']); ?></td>
					<td><?php echo number_format($row_hh['giamgia']); ?></td>
				<?php }else{?>
					<td><?php echo number_format($row_hh['giadathang']); ?></td>
<!--				TINH COT THANH TIEN-->
				<?php }
					
//					$thanhtien_cotgiamgia = "SELECT GIAMGIA * SOLUONG AS 'THANHTIEN', GIADATHANG * SOLUONG AS 'THANHTIEN_DAT' FROM chitietdathang, DATHANG WHERE chitietdathang.SoDonDH = dathang.SoDonDH AND dathang.MSKH='".$_COOKIE['mskh']."'";
//					$thucthi_thanhtien = mysqli_query($mysqli, $thanhtien_cotgiamgia);
//					$co_thanhtien = mysqli_fetch_array($thucthi_thanhtien);
					if(number_format($row_hh['THANHTIEN'])>0){
				?>
				<td><?php echo number_format($row_hh['THANHTIEN']);?> </td>
				<?php } else {?>
					<td><?php echo number_format($row_hh['THANHTIEN_DAT']);?></td>
				<?php	} ?>
				<td><a href="index.php?xoa_giohang=<?php echo $row_hh['mshh']; ?>">XOA</a></td>
			</tr>
			</tr>
				 <?php
					 }
 				?>

	
			</table>
		<div class="btnmua"> 
		<form action="" method="get">
		<?php 	$truyvanddh = "SELECT hanghoa.TenHH,chitietdathang.mshh, chitietdathang.soluong, 
		chitietdathang.giadathang, chitietdathang.giamgia, GIAMGIA * SOLUONG AS 'THANHTIEN',
		GIADATHANG * SOLUONG AS 'THANHTIEN_DAT', DATHANG.SoDonDH 
		FROM ((dathang INNER JOIN chitietdathang ON dathang.sodondh = chitietdathang.sodondh) 
		INNER JOIN hanghoa ON chitietdathang.mshh = hanghoa.mshh) WHERE DATHANG.MSKH = '".$_COOKIE['mskh']."' AND DATHANG.NGAYDH IS NULL";
		$tt = mysqli_query($mysqli, $truyvanddh);
					$sodondh = mysqli_fetch_array($tt); ?>
	<a style="color: #FAFAFA;" href="index.php?mua_sp=<?php echo $sodondh['SoDonDH']; ?>"><ion-icon name="bag-add" style="margin-right: 5px"></ion-icon>MUA</a>
	</form>
			</div>
	
	<?php 
				if(isset($_POST['mua'])){
//					$giohang = "SELECT COUNT(*) as SOLUONG FROM dathang, chitietdathang WHERE chitietdathang.SODONDH = dathang.SODONDH AND DATHANG.MSKH ='".$_COOKIE['mskh']."'";
//					$qr_giohang = mysqli_query($mysqli, $giohang);
//					$sl = mysqli_fetch_array($qr_giohang);
					$chckbox = "SELECT chitietdathang.mshh, hanghoa.TenHH from hanghoa JOIN chitietdathang on chitietdathang.mshh = hanghoa.mshh JOIN dathang ON dathang.SoDonDH = chitietdathang.SoDonDH WHERE chitietdathang.mshh = '".$_GET['chck_mua']."' GROUP BY MSHH'";
					$qr_chk = mysqli_query($mysqli, $chckbox);
					$col = mysqli_fetch_array($qr_chk);
					echo $col['mshh'];
					echo $col['TenHH'];
//					for($i=1;$i<=$sl['SOLUONG'];$i++){
//						echo $i;
//						$time = time();
//						$date = date('y-m-d H:i:s');
//						$update_GIOHANG = "UPDATE DATHANG SET NGAYDH = '$date'";
//						mysqli_query($mysqli, $update_GIOHANG);
//					}
				}
				?>
		</div>
<!--		THONG TIN DAT HANG -->
		
		<div class="thongtingiohang" style="margin-top: 50px;">
			<div class="menu_2"><p style="color: #DB6A2E;"><b><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
</svg>TÌNH TRẠNG ĐƠN HÀNG</b></p></div>
			<?php 
				
			$trangthai_dathang = "SELECT*FROM chitietdathang, dathang WHERE chitietdathang.SoDonDH = DATHANG.SoDonDH AND  dathang.NGAYDH IN (SELECT NGAYDH FROM DATHANG) and dathang.MSKH = '".$_COOKIE['mskh']."'";
			$thucthi_trangthai = mysqli_query($mysqli, $trangthai_dathang);
				?>
		<table id="thongtingiohang">
			<tr>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
			<?php 
				$giamgia = "SELECT GIAMGIA FROM chitietdathang, DATHANG 
				WHERE chitietdathang.GIAMGIA > 0 
				AND chitietdathang.SODONDH = DATHANG.SODONDH";
				$thucthi_giamgia = mysqli_query($mysqli, $giamgia);
				if(mysqli_num_rows($thucthi_giamgia)>0){?>
					<th>Đơn giá (VNĐ)</th>
					<th>Giảm còn (VNĐ)</th>
				<?php }else{?>
					<th>Đơn giá</th>
				<?php }
				?>
				
				<th>Thành tiền (VNĐ)</th>
				<th>Ngày đặt hàng</th>
				<th>Trạng thái</th>
				<th>N.Nhận hàng</th>
				<th>Cập nhập</th>
			</tr>
			<?php
				$hanghoa = "SELECT hanghoa.TenHH, chitietdathang.soluong,dathang.MSNV as MANV  ,
				hanghoa.gia,chitietdathang.MSHH,chitietdathang.GIADATHANG ,DATHANG.NGAYDH,DATHANG.NGAYGH ,chitietdathang.giamgia, 
				GIAMGIA * SOLUONG AS 'THANHTIEN', GIADATHANG * SOLUONG AS 'THANHTIEN_DAT', DATHANG.SoDonDH  
				FROM ((dathang INNER JOIN chitietdathang ON dathang.sodondh = chitietdathang.sodondh) 
				INNER JOIN hanghoa ON chitietdathang.mshh = hanghoa.mshh)
				WHERE DATHANG.MSKH = '".$_COOKIE['mskh']."' 
				AND dathang.NGAYDH in (SELECT NGAYDH FROM DATHANG)";
				$THUCTHI_HANGHOA = mysqli_query($mysqli, $hanghoa);
				while($row_hh =mysqli_fetch_array($THUCTHI_HANGHOA)){ ?>
					<tr>
						<td><?php echo $row_hh['TenHH']; ?></td>
						<td><?php echo $row_hh['soluong']; ?></td>
		<!--			TAO HANG GIA THANH NEU COT GIAM GIA LON HON 0 THI HIEN COT GIAM GIA VA DON GIA VA NGUOC LAI-->
						<?php 
							$giamgia = "SELECT hanghoa.QuyCach, hanghoa.Gia 
							FROM hanghoa,chitietdathang, dathang
							WHERE hanghoa.MSHH = chitietdathang.MSHH 
							AND chitietdathang.SoDonDH = dathang.SoDonDH
							AND chitietdathang.GIAMGIA > 0";
							$thucthi_giamgia = mysqli_query($mysqli, $giamgia);
								if(mysqli_num_rows($thucthi_giamgia)>0){?>
									<td><?php echo number_format($row_hh['gia']); ?></td>
									<td><?php echo number_format($row_hh['giamgia']); ?></td>
							<?php }else{?>
									<td><?php echo number_format($row_hh['gia']); ?></td>
							<?php } ?>
						<td><?php echo number_format($row_hh['GIADATHANG']); ?></td>
						<td><?php echo $row_hh['NGAYDH']; ?></td>
							<?php if($row_hh['MANV'] == null){ ?>
									<td>Đang xử lý...</td>
									<td>...</td>
						<?php }else{?>
									<td>Đang giao hàng..</td>
									<td><?php echo $row_hh['NGAYGH']; ?></td>
							<?php } ?>
					</tr>
				<?php } 
			?>
			
		
			</table>
			<!-- BUTTON MUA HANG -->
			<div class="btnmua">
				<form action="" method="GET">
					<?php 
						$xoadh = "SELECT hanghoa.TenHH, chitietdathang.soluong,dathang.MSNV as MANV,
						chitietdathang.giadathang,chitietdathang.MSHH ,DATHANG.NGAYDH,DATHANG.NGAYGH,
						chitietdathang.giamgia, GIAMGIA * SOLUONG AS 'THANHTIEN', GIADATHANG * SOLUONG AS 'THANHTIEN_DAT',
						DATHANG.SoDonDH  
						FROM ((dathang INNER JOIN chitietdathang ON dathang.sodondh = chitietdathang.sodondh) 
						INNER JOIN hanghoa ON chitietdathang.mshh = hanghoa.mshh) 
						WHERE DATHANG.MSKH = '".$_COOKIE['mskh']."' AND dathang.NGAYDH in (SELECT NGAYDH FROM DATHANG)";
						$qr_xoadh = mysqli_query($mysqli, $xoadh);
						$xoa_dh = mysqli_fetch_array($qr_xoadh); 
					?>
				<td><a href="index.php?xoa_dh=<?php echo $xoa_dh['SoDonDH']; ?>&xoamshh=<?php echo $xoa_dh['MSHH']; ?>">XOA</a></td>		
				</form>
			</div>
		</div>
<!--		THONG TIN KHACH GIAN NHAN HANG-->
			<div class="thongtinkh">
				<div class="menu_dcnhanhang">
					<p style="margin-top: 20px;color: #DB6A2E;">
						<b><svg style="margin-right: 5px; " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
						</svg>ĐỊA CHỈ NHẬN HÀNG</b>
					</p>
				</div>
			<table class="thongtin_kh" style="float: left; padding-top:1px;">
				<?php 
					$truyvan_kh = "SELECT KHACHHANG.HoTenKH, KHACHHANG.TenCongTy, KHACHHANG.SoDienThoai, 
					KHACHHANG.Email, DiaChiKH.DiaChi 
					FROM KHACHHANG INNER JOIN DiaChiKH ON KHACHHANG.MSKH = DiaChiKH.MSKH 
					WHERE KHACHHANG.MSKH = '".$_COOKIE['mskh']."'";
					$thuchi_kh = mysqli_query($mysqli, $truyvan_kh);
					while($row_kh = mysqli_fetch_array($thuchi_kh)){?>
						<tr>
							<td>Họ tên người nhận: </td>
							<td style="border: none;">
								<b><?php echo $row_kh['HoTenKH'];?></b>
							</td>
							<td style="border: none;">Số Điện Thoại: </td>
							<td style="border: none;">
								<b><?php echo $row_kh['SoDienThoai'];?></b>
							</td>
						</tr>
						<tr>
							<td style="border: none;">Địa chỉ giao hàng: </td>
							<td colspan="4" style="border: none;">
								<b><?php echo $row_kh['DiaChi'];?></b>
							</td>
						</tr>
			</table>
			<div class="capnhat_thongtin">
				<form method="post" action="">
					<table style="margin-bottom: 5px;">
						<tr>
							<td>
								<input id="btn_1" type="submit" value="CẬP NHẬT ĐỊA CHỈ" name="capnhat_dc"/>
							</td>
					<?php
						if(isset($_POST['capnhat_dc'])){ ?>
							<td>
								<input style="width: 320px; height: 25px; padding-left: 8px; background:none; border: 1px solid #337AE6; color:#1C1B1B; border-radius: 10px;" type="text" name="nhap_dc" value="<?php echo $row_kh['DiaChi'];?>"/>
							</td>
							<td>
								<input id="btn_2" type="submit" value="CẬP NHẬT" name="capnhat"/>
							</td>
					<?php }
						} ?>
						</tr>
					</table>
				</form>
			</div>
<!--		cap nhat dia chi-->
			<?php 
			if(isset($_POST['capnhat'])){
					$update = "UPDATE DIACHIKH 
					SET DIACHI = '".$_POST['nhap_dc']."' 
					WHERE MSKH = '".$_COOKIE['mskh']."'";
					mysqli_query($mysqli, $update);
						echo "Cập nhật thành công" ; ?>
			<svg style="color: #03AA1A; margin-left: 2px; margin-right: 2px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> 
			<?php echo " Vui lòng tải lại trang...";}
			?>
<!--			XU LY XOA DON HANG-->
			<?php 
?>
<!--			-->
		</div>
	</div>
<?php }else{?>
<div class="main">
<div id="img" ><img style="width:500px; float: left;" src="img/logo/—Pngtree—contact our male customer service_5412873.png"/></div>
<div id="noidung" style="float: left; height: 500px;">
	<marquee ><b style="font-size: 25px; color: #C202BE; line-height: 500px;">VUI LÒNG ĐĂNG NHẬP ĐỂ XEM THÔNG TIN GIỎ HÀNG...</b></marquee>
	</div>
</div>
<?php 
} ?>
</body>
</html>