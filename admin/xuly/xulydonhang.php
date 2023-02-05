<!--	XU LY DON HANG-->
	<?php 
	if(isset($_GET['duyet_dh'])){
	$DUYET_DH = "UPDATE DATHANG SET MSNV = '".$_COOKIE['MSNV']."' WHERE SODONDH = '".$_GET['duyet_dh']."'";
		mysqli_query($mysqli, $DUYET_DH);
	}elseif(isset($_GET['huy_dh'])){
		$HUY_DH = "DELETE FROM DATHANG WHERE SODONDH = '".$_GET['huy_dh']."'";
		mysqli_query($mysqli, $HUY_DH);
	}else{
		echo "";
	}
?>