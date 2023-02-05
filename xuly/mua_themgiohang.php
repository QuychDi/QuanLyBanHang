	<!--			THEM GIO HANG-->
	
	<?php 
	// include("../login/config.php");
function mua_themgiohang_QC(){
	$_GET['id'] = 'HH000030';
if(isset($_COOKIE['mskh'])){
	/*- KHACH HANG NHAN BUTTON MUA HANG -*/
if(isset($_POST['muahang'])){
	/*LAY GIA DAT HANG TRONG BANG HANG HOA */
	$giadathang = "SELECT GIA, QUYCACH, SOLUONGHANG FROM HANGHOA WHERE MSHH='HH000030'"; 
	$UPDATE_SOLUONG = " CALL UPDATE_SOLUONGHANG('".$_POST['sl_mua']."','".$_GET['id']."')";
	$tt_giadathang = mysqli_query($mysqli, $giadathang);
	$num_tt_giadathang = mysqli_fetch_array($tt_giadathang); 
	if($_POST['sl_mua'] < $num_tt_giadathang['SOLUONGHANG'] && $_POST['sl_mua'] > 0){ 
	$time = time();
	$date = date('y-m-d H:i:s');
	/*gia */
	$giadh = $num_tt_giadathang['GIA'];
	/* GIAM GIA */
	$giamgia = $num_tt_giadathang['QUYCACH'];
	/*Kiem TRA DON HANG TON TAI CAP NHAT LAI SO LUONG */
		$UPDATE_SLHH = "SELECT*FROM chitietdathang, hanghoa, dathang WHERE chitietdathang.MSHH = hanghoa.MSHH AND dathang.SoDonDH = chitietdathang.SoDonDH AND chitietdathang.MSHH = 'HH000030' AND dathang.MSKH='".$_COOKIE['mskh']."'";
		$qr_updatehh = mysqli_query($mysqli, $UPDATE_SLHH);
		$taodonhang= "INSERT INTO DATHANG(MSKH,NGAYDH) VALUES('".$_COOKIE['mskh']."','$date') ";
		
		mysqli_query($mysqli, $taodonhang);
//	/*------------------------- */
		$trangthai_donhang = "SELECT*FROM DATHANG WHERE MSKH = '".$_COOKIE['mskh']."' AND NGAYGH IS NOT NULL";
		$query = mysqli_query($mysqli, $trangthai_donhang);
		$mshd = "SELECT Max(SoDonDH) as LastHD FROM DatHang";
		$thucthi_mahd = mysqli_query($mysqli, $mshd);
		$row_mahd = mysqli_fetch_array($thucthi_mahd);
		$numLastHD = $row_mahd['LastHD'];
		// $gia_dat_hang = 0;
		// if($giadh > $giamgia){
		// 	$gia_dat_hang = $giamgia;
		// }else{
		// 	$gia_dat_hang = $giadh;
		// }
		$check_mahh = "SELECT chitietdathang.MSHH FROM chitietdathang, dathang, hanghoa WHERE chitietdathang.MSHH = hanghoa.MSHH and dathang.MSKH = '".$_COOKIE['mskh']."'";
		$thucthi_chekmahh = mysqli_query($mysqli, $check_mahh);
			$them_ctdh = "insert into chitietdathang (SoDonDH,mshh,soluong, GiaDatHang, GIAMGIA) VALUES ('$numLastHD','".$_GET['id']."','".$_POST['sl_mua']."','".$giadh."','".$giamgia."')";
	mysqli_query($mysqli, $them_ctdh);
		mysqli_query($mysqli, $UPDATE_SOLUONG);
		
	 ?>
	<li style="list-style: none;"><a href="http://localhost/quanlybanhang/index.php?danhmuc=giohang"><b style="color:#1466E3">Đặt hàng thành công<svg style="color: #057B06; margin-left: 5px;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>đưa tôi đến giỏ hàng</b></a></li>
   <?php  exit();
	}else{?>
		<b style="color: #E9191D;">Vui lòng kiểm tra số lượng mua. </b>
<?php	}	
	/*DROP TRIGGER IF EXISTS `trigger_dathang`;CREATE DEFINER=`root`@`localhost` TRIGGER `trigger_dathang` AFTER INSERT ON `dathang` FOR EACH ROW update hanghoa SET hanghoa.SoLuongHang = hanghoa.SoLuongHang - (SELECT chitietdathang.SoLuong FROM chitietdathang, hanghoa WHERE chitietdathang.MSHH = hanghoa.MSHH) WHERE hanghoa.MSHH = chitietdathang.MSHH */
	/* =============================== KHACH HANG NHAN VAO THEM GIO HANG ----------------------------- */
}elseif(isset($_POST['themgiohang'])){
//	$ms = $_SESSION['mahh'];
	/*LAY GIA DAT HANG TRONG BANG HANG HOA */
	$giadathang = "SELECT GIA, QUYCACH FROM HANGHOA WHERE MSHH='HH000030'";
	$tt_giadathang = mysqli_query($mysqli, $giadathang);
	$num_tt_giadathang = mysqli_fetch_array($tt_giadathang);
	/*gia */
	$giadh = $num_tt_giadathang['GIA'];
	/* GIAM GIA */
	$giamgia = $num_tt_giadathang['QUYCACH'];
	
//	$thutuc_giohang = "CALL insertCT_HD('".$_SESSION['mahh']."','".$_POST['sl_mua']."','$giadh','$giamgia','".$_COOKIE['mskh']."')";
//	mysqli_query($mysqli, $thutuc_giohang);
		
		/*------------------------- */
	$them = "INSERT INTO DATHANG (MSKH) VALUES('".$_COOKIE['mskh']."')";
	$UPDATE_SOLUONG = " CALL UPDATE_SOLUONGHANG('".$_POST['sl_mua']."','".$_GET['id']."')";
	mysqli_query($mysqli, $them);
	$mshd = "SELECT Max(SoDonDH) as LastHD FROM DatHang";
	$thucthi_mahd = mysqli_query($mysqli, $mshd);
	$row_mahd = mysqli_fetch_array($thucthi_mahd);
	$numLastHD = $row_mahd['LastHD'];
	// $gia_dat_hang = 0;
	// 	if($giadh > $giamgia){
	// 		$gia_dat_hang = $giamgia;
	// 	}else{
	// 		$gia_dat_hang = $giadh;
	// 	}
	$them_ctdh = "insert into chitietdathang (SoDonDH,mshh,soluong, GiaDatHang, GIAMGIA) VALUES ('$numLastHD','".$_GET['id']."','".$_POST['sl_mua']."','".$giadh."','".$giamgia."')";
	mysqli_query($mysqli, $them_ctdh);
	mysqli_query($mysqli, $UPDATE_SOLUONG);
	?>
	
	<li style="list-style: none"><a href="index.php"><b style="color: #0038CF;">Thêm vào giỏ hàng thành công <svg style="color: #036F00" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg> Tiếp tục mua hàng.</b></a></li>
	<?php 
    exit();
}
	}else{
		?>
	<script type="text/javascript" language="javascript">
	alert("Vui lòng đăng nhập");
	</script>
	<?php }
};

// BUTTON MUA HANG
function mua_themgiohang(){
	include("login/config.php");
	echo $_SESSION['mahh'];
if(isset($_COOKIE['mskh'])){
	?>
	<script>
		alert("Thêm <?php echo $_GET['id']; ?> vào giỏ hàng thành công. ");
		window.location("index.php?id=<?php echo $_GET['id'];?>");
	</script>
	<?php
	/*- KHACH HANG NHAN BUTTON MUA HANG -*/
if(isset($_POST['muahang'])){
	/*LAY GIA DAT HANG TRONG BANG HANG HOA */
	$giadathang = "SELECT GIA, QUYCACH, SOLUONGHANG FROM HANGHOA WHERE MSHH='".$_SESSION['mahh']."'"; 
	$UPDATE_SOLUONG = " CALL UPDATE_SOLUONGHANG('".$_POST['sl_mua']."','".$_GET['id']."')";
	$tt_giadathang = mysqli_query($mysqli, $giadathang);
	$num_tt_giadathang = mysqli_fetch_array($tt_giadathang); 
	if($_POST['sl_mua'] < $num_tt_giadathang['SOLUONGHANG'] && $_POST['sl_mua'] > 0){ 
	$time = time();
	$date = date('y-m-d H:i:s');
	$ms = $_SESSION['mahh']; 
	/*gia */
	$giadh = $num_tt_giadathang['GIA'];
	/* GIAM GIA */
	$giamgia = $num_tt_giadathang['QUYCACH'];
	/*Kiem TRA DON HANG TON TAI CAP NHAT LAI SO LUONG */
		$UPDATE_SLHH = "SELECT*FROM chitietdathang, hanghoa, dathang WHERE chitietdathang.MSHH = hanghoa.MSHH AND dathang.SoDonDH = chitietdathang.SoDonDH AND chitietdathang.MSHH = '".$_SESSION['mahh']."' AND dathang.MSKH='".$_COOKIE['mskh']."'";
		$qr_updatehh = mysqli_query($mysqli, $UPDATE_SLHH);
	$taodonhang= "INSERT INTO DATHANG(MSKH,NGAYDH) VALUES('".$_COOKIE['mskh']."','$date') ";
	// echo $taodonhang;
		mysqli_query($mysqli, $taodonhang);
//	/*------------------------- */
		$trangthai_donhang = "SELECT*FROM DATHANG WHERE MSKH = '".$_COOKIE['mskh']."' AND NGAYGH IS NOT NULL";
		$query = mysqli_query($mysqli, $trangthai_donhang);
		$mshd = "SELECT Max(SoDonDH) as LastHD FROM DatHang";
		$thucthi_mahd = mysqli_query($mysqli, $mshd);
		$row_mahd = mysqli_fetch_array($thucthi_mahd);
		$numLastHD = $row_mahd['LastHD'];
		$check_mahh = "SELECT chitietdathang.MSHH FROM chitietdathang, dathang, hanghoa WHERE chitietdathang.MSHH = hanghoa.MSHH and dathang.MSKH = '".$_COOKIE['mskh']."'";
		$thucthi_chekmahh = mysqli_query($mysqli, $check_mahh);
		
		$them_ctdh = "insert into chitietdathang (SoDonDH,mshh,soluong, GIAMGIA) 
		VALUES ('$numLastHD','".$_GET['id']."','".$_POST['sl_mua']."','".$giamgia."')";
		$update_giadathang = "UPDATE CHITIETDATHANG SET GIADATHANG = '".$gia_dat_hang."' WHERE '".$_GET['id']."' ";
	mysqli_query($mysqli, $them_ctdh);
		mysqli_query($mysqli, $UPDATE_SOLUONG);
		mysqli_query($mysqli, $update_giadathang);
		
	 ?>
<script>
	alert("Đặt hàng thành công.");
	window.location = "index.php?id=<?php echo $_SESSION['mahh']; ?>";
</script>
	<li style="list-style: none;"><a href="http://localhost/quanlybanhang/index.php?danhmuc=giohang"><b style="color:#1466E3">Đặt hàng thành công<svg style="color: #057B06; margin-left: 5px;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>đưa tôi đến giỏ hàng</b></a></li>
   <?php  exit();
	}else{?>
		<b style="color: #E9191D;">Vui lòng kiểm tra số lượng mua. </b>
<?php	}	
	/*DROP TRIGGER IF EXISTS `trigger_dathang`;CREATE DEFINER=`root`@`localhost` TRIGGER `trigger_dathang` AFTER INSERT ON `dathang` FOR EACH ROW update hanghoa SET hanghoa.SoLuongHang = hanghoa.SoLuongHang - (SELECT chitietdathang.SoLuong FROM chitietdathang, hanghoa WHERE chitietdathang.MSHH = hanghoa.MSHH) WHERE hanghoa.MSHH = chitietdathang.MSHH */
	/* =============================== KHACH HANG NHAN VAO THEM GIO HANG ----------------------------- */
}elseif(isset($_POST['themgiohang'])){
//	$ms = $_SESSION['mahh'];
	/*LAY GIA DAT HANG TRONG BANG HANG HOA */
	$giadathang = "SELECT GIA, QUYCACH FROM HANGHOA WHERE MSHH='".$_SESSION['mahh']."'";
	$tt_giadathang = mysqli_query($mysqli, $giadathang);
	$num_tt_giadathang = mysqli_fetch_array($tt_giadathang);
	/*gia */
	$giadh = $num_tt_giadathang['GIA'];
	/* GIAM GIA */
	$giamgia = $num_tt_giadathang['QUYCACH'];
	
//	$thutuc_giohang = "CALL insertCT_HD('".$_SESSION['mahh']."','".$_POST['sl_mua']."','$giadh','$giamgia','".$_COOKIE['mskh']."')";
//	mysqli_query($mysqli, $thutuc_giohang);
		
		/*------------------------- */
	$them = "INSERT INTO DATHANG (MSKH) VALUES('".$_COOKIE['mskh']."')";
	$UPDATE_SOLUONG = " CALL UPDATE_SOLUONGHANG('".$_POST['sl_mua']."','".$_GET['id']."')";
	mysqli_query($mysqli, $them);
	$mshd = "SELECT Max(SoDonDH) as LastHD FROM DatHang";
	$thucthi_mahd = mysqli_query($mysqli, $mshd);
	$row_mahd = mysqli_fetch_array($thucthi_mahd);
	$numLastHD = $row_mahd['LastHD'];
	// $gia_dat_hang = 0;
	// if($giadh > $giamgia){
	// 	$gia_dat_hang = $giamgia;
	// }else{
	// 	$gia_dat_hang = $giadh;
	// }
	// return $gia_dat_hang*$_POST['sl_mua'];
	$them_ctdh = "insert into chitietdathang (SoDonDH,mshh,soluong, GiaDatHang, GIAMGIA) 
	VALUES ('$numLastHD','".$_GET['id']."','".$_POST['sl_mua']."','".$giadh."','".$giamgia."')";
	mysqli_query($mysqli, $them_ctdh);
	mysqli_query($mysqli, $UPDATE_SOLUONG);
	?>
	
	<li style="list-style: none"><a href="index.php"><b style="color: #0038CF;">Thêm vào giỏ hàng thành công <svg style="color: #036F00" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg> Tiếp tục mua hàng.</b></a></li>
	<?php 
    exit();
}
	}else{
		?>
	<script type="text/javascript" language="javascript">
	alert("Vui lòng đăng nhập");
	</script>
	<?php }
};
function log_out(){
	if(isset($_GET['log_out'])){
		foreach($_COOKIE as $key => $value)
		// if($_GET['log_out'] == 1)
		// $log_out = $_COOKIE['mskh'];
		// echo $_GET['log_out'];
		// echo $log_out;
		// unset($value);
		// setcookie($key, '',time() - 3600);
		// setcookie('hoa','',1);
		unset($_COOKIE['mskh']);
		setcookie("log_out", "",time() - 300, "/");
		// echo $_COOKIE['log_out'];
		?>
		<!-- <script>
			window.location = "index.php";
		</script> -->
		<?php
	}
};
	?>