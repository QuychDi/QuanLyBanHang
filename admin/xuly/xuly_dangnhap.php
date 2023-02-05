<?php
	include("../../login/config.php");
	$user = $_POST["user_name"];
	$taikhoan = "SELECT TAIKHOAN.TENDANGNHAP FROM TaiKhoan, NHANVIEN WHERE TAIKHOAN.TENDANGNHAP = NHANVIEN.SODT AND TENDANGNHAP = '$user' AND TAIKHOAN.Pass = '".$_POST["pass_user"]."'";
	$query = mysqli_query($mysqli, $taikhoan);
	$kq = mysqli_num_rows($query);
	if(isset($_POST["dangnhap"])){
		if($kq>0){
			$kh = "SELECT NHANVIEN.MSNV FROM TaiKhoan, NHANVIEN WHERE TAIKHOAN.TENDANGNHAP = NHANVIEN.SODT AND TENDANGNHAP = '$user' AND TAIKHOAN.Pass = '".$_POST["pass_user"]."'";
			$que_kh = mysqli_query($mysqli, $kh);
			while($result = mysqli_fetch_array($que_kh)){
					setcookie('MSNV',$result['MSNV'], time() + 3600);
				
				}
			header("Location: main.php");
		
		}else{
		?>
	<script type="text/javascript" language="javascript">
	alert("Tài khoản không tồn tại");
		window.location = "../index.php";
	</script>
	<?php
	}
	}
	?>
		<script type="text/javascript" language="javascript">
			function check(){
			var user = document.forms[0].getElementsByTagName("user_name");
			var pass = document.forms[0].getElementsByTagName("pass_user");
			if(user.length == 0 || pass.length == 0){
			}
			}
		</script>
	