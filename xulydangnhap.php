		<?php
include("login/config.php");
	$mang = array($_POST['tendangnhap'], $_POST['matkhau']);
	$truyvan_taikhoan = "SELECT TAIKHOAN.TENDANGNHAP 
	FROM TAIKHOAN JOIN KHACHHANG ON TAIKHOAN.TENDANGNHAP = KHACHHANG.SODIENTHOAI 
	WHERE TAIKHOAN.TENDANGNHAP = '".$_POST['tendangnhap']."' AND TAIKHOAN.PASS = '" .$_POST['matkhau']. "'";
	$kh = "SELECT MSKH FROM KHACHHANG WHERE SODIENTHOAI = '".$_POST['tendangnhap']."'";
	$que_kh = mysqli_query($mysqli, $kh);
	$query_tk = mysqli_query($mysqli, $truyvan_taikhoan);
			if(mysqli_num_rows($query_tk)>0){
				$result = mysqli_fetch_array($que_kh);
				header("Location: index.php");
				setcookie('mskh',$result['MSKH'], time() + 1000);
			}else { 
?>
		<script type="text/javascript" language="javascript">
			alert("Ten dang nhap hoac mat khau khong ton tai...");
			 window.location="dangnhap.php";
		</script>
	<?php 
			}
	?>
	<!-- MAIN THONGKE -->
	