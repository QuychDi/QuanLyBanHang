<?php
include("../login/config.php");
	$capnhat_kh = "UPDATE KHACHHANG SET HOTENKH = '".$_POST['hotenKH']."', EMAIL = '".$_POST['emailKH']."', TENCONGTY = '".$_POST['congtyKH']."' WHERE MSKH = '".$_COOKIE['mskh']."'";
				if(mysqli_query($mysqli, $capnhat_kh))
?>
<script>
alert("CẬP NHẬT THÀNH CÔNG");
	window.location = " ../index.php";
</script>