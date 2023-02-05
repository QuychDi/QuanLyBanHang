<!doctype html>
<?php if(isset($_COOKIE['MSNV'])){ ?>
<html>
<head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<meta charset="utf-8">
<title>Chào Admin</title>
	<style>
		*{
/*
			margin: 0 auto;
			padding: 0 auto;
*/
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.top{
			width: 100%;
			background-color: #4D4C4C;
			height: 100px;
		}
		.top .img{
			width: 100px;
			height: 100px;
			float: left;
		}
		.top .info_nv{
			height: 100px;
			float: left;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 25px;
		}
/*
		.top #title {
			background-color: #D21114;
			width: 400px;
			align-items: center;
			height: 50px;
			color: #FFFFFF;
		}
*/
		.content{
			width: 100%;
			height: 550px;
		}
		.content .danhmuc{
			text-align: left;

		}
		.menu_danhmuc ul{
			margin: 0px;
			padding: 0px;
/*
		margin: 0 auto;
		padding: 0 auto;
*/
		}
		.menu_danhmuc ul li{
			padding-left: 15px;
			height: 30px;
			line-height: 30px;
			list-style: none;
			padding-top: 10px;
			border-bottom: 1px solid #567AF8;
		}
		a{
			text-decoration: none;
			color: #C4C2C2;
		}
		a:hover{
			color: #F8F0F0;
		}
		.menu_danhmuc ul li:hover{
			background-color: #2D2828;;
		}
		.content .main{
			width: 80%;
			float: left;

	
		}
		.menu_danhmuc{
			float: left;
			width:20%;
			height: 500px;
			background-color:#484545;
			clear: both;
		}
		.menu_danhmuc ul li a b{
			padding-left: 10px;
		}
		.thongbaodonhang {
		}
	</style>
<!--
	<script language="javascript" type="text/javascript">
	function danhmuc_caphat(){
		var id_titile = document.getElementById("title").innerHTML =" ";
		var titile = document.getElementById("titile_danhmuc").textContent;
		alert(titile)
		id_titile.innerHTML = titile;
		
		
	}
	</script>
-->
</head>

<body>
	<?php ?>
	<?php 
	include("../../login/config.php");
	?>
	<div class="top">
		
		<?php 
		$name = "SELECT HOTENNV FROM NHANVIEN WHERE MSNV= ".$_COOKIE['MSNV']."";
		$qr_name = mysqli_query($mysqli, $name);
		?>
	<div class="img"><img style="width: 80px; margin-top: 10px; margin-left: 8px;" SRC="../images/IMG_BAIVIET/ICONADMIN.jpg"/></div>
		<div class="info_nv"><?php
			$nv = "SELECT HOTENNV FROM NHANVIEN WHERE MSNV = '".$_COOKIE['MSNV']."'";
			$thucthi_nv = mysqli_query($mysqli, $nv);
									  $num_nv = mysqli_fetch_array($thucthi_nv);?>
		<b style="color: #FAFAFA;">Xin chào <?php echo $num_nv['HOTENNV']; ?></b>
		</div>
		<div id="title">
		
		</div>
	</div>
	<div class="content">
	<div class="danhmuc">
		<div style="width:20%; height: 50px; background-color: #3E3D3D; color: #FEFAFA; float: left;" class="title">
			<b style="line-height: 50px;">DANH MỤC</b>
		</div>
		<div class="menu_danhmuc">
			<ul>
				<li onClick="danhmuc_caphat()" ><a href="main.php?quanly=danhmucsanpham&id=1"><ion-icon name="layers"></ion-icon><b id="titile_danhmuc">CẬP NHẬT SẢN PHẨM</b></a></li>
				<?php 
				$admin = "SELECT taikhoan.TENDANGNHAP from taikhoan JOIN nhanvien on taikhoan.TENDANGNHAP = nhanvien.SoDT WHERE nhanvien.MSNV = '".$_COOKIE['MSNV']."'";
				$thucthi_admin = mysqli_query($mysqli, $admin);
										$col_admin = mysqli_fetch_array($thucthi_admin);
				if($col_admin['TENDANGNHAP'] == '0344747623'){
				?>
				<li><a href="main.php?quanly=quanlynhanvien"><ion-icon name="person-circle"></ion-icon><b>QUẢN LÝ NHÂN VIÊN</b></a></li>
				<?php } ?>
				<li><a href="main.php?quanly=quanlybaiviet"><ion-icon name="planet"></ion-icon><b>QUẢN LÝ BÀI VIẾT</b></a></li>
				<!-- QUẢN LÝ ĐƠN HÀNG -->
				<li><a href="main.php?quanly=quanlydonhang"><ion-icon name="cart"></ion-icon></ion-icon><b>QUẢN LÝ ĐƠN HÀNG</b>
					<?php $SODONHANG = "SELECT COUNT(*) AS SODON FROM dathang WHERE NGAYDH IS NOT NULL";
						$thucthi_sodh = mysqli_query($mysqli, $SODONHANG);
						$sodon = mysqli_fetch_array($thucthi_sodh);
						if($sodon['SODON']>0){
					?>
						<h5 style="height: 30px; background-color: #E20509; width: 30px; border-radius: 20px; float: right; margin-right: 60px;">
							<b style="text-align: center;"><?php echo $sodon['SODON']; ?></b>
						</h5>
					<?php }else{
						echo "";
								} ?></a></li>
				<!-- THỐNG KÊ -->
				<li><a href="main.php?quanly=thongke"><ion-icon name="bar-chart"></ion-icon><b>THỐNG KÊ</b></a></li>
			</ul>
			<?php  include("lich.html"); ?>
		</div>
	</div>
	<!-- MAIN TRANG CHINH -->
	<div class="main">
		<?php
			// if(isset($_COOKIE['MSNV'])){
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("themsanpham.php");
				}elseif($tam=='quanlynhanvien'){
					include("../capquyenNV.php");
				}elseif($tam=='quanlybaiviet'){
					include("quanlybaiviet.php");
				}elseif($tam=='quanlydonhang'){
					include("quanlydonhang.php");	
			}elseif($tam=='thongke'){
					include("thongke.php");
			}else{
					include("themsanpham.php");
			}
		?>
	</div>
	</div>
		<?php 
		?>
</body>
</html>
<?php } ?>