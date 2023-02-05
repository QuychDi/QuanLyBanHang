<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<style>
		.center, .content_popup_popup{
			
			
			right: 50%;
			transform: translate(-30%,5%);
		}
		#click{
			display: none;
		}
		.content_popup{
			opacity: 0;
			visibility: hidden;
			width: 400px;
			height: 350px;
			background-color: #CFC9C9;
			border-radius: 3px;
			box-shadow: 0 2px 12px 0 rgba(0,0,0,.4);
			z-index: 2;
		}
		.click-me{
			animation: bounce; 
			 animation-duration: 4s;
			display: block;
			width: 150px;
			height: 50px;
			background-color: #136F20;
			border: 1px solid #026001;
			
			font-size: 22px;
			line-height: 50px;
			text-align: center;
			border-radius: 10px;
			cursor: pointer;
		}
		.click-me:hover{
			background-color: #03743D;
			color: white;
			transition: .10s;
			
		}
		.header{
			height: 60px;
			background-color: #03743D;
			overflow: hidden;
			border-radius: 3px;
			box-shadow: 0 2px 3px 0 rgba(0,0,0,.2);
		}
		.header h4{
			color:white;
			padding-left: 10px;
			line-height: 68px;
		}
		.fa-times{
			position: absolute;
			right: -90px;
			top: 70px;
			color: white;
			cursor: pointer;
			transition: .25s;
		}
		.fa-times:hover{
			color: #CC0D10;
		}
		p{
			padding-top: 10px;
			font-size: 19px;
			color: #1a1a1a;
			text-align: center;
		}
		.line{
			position: absolute;
			bottom: 60px;
			width: 100%;
			height: 1px;
			background-color: silver;
		}
		.close-btn{
			position: absolute;
			bottom: 12px;
			right: 25px;
			border: 1px solid #019549;
			color: #019549;
			padding: 8px 10px;
			font-size: 18px;
			cursor: pointer;
		}
		.close-btn:hover{
			background-color: #019549;
			color: white;
			transition: .5s;
		}
		#click:checked ~ .content_popup{
			opacity: 1;
			visibility: visible;
		}
		#hinhsp{
			width: 50%;
			padding-left: 5%;
			float: left;
		}
		#hinhsp img{
/*			float: left;*/
			padding-top: 20%;
			
		}
		#thongtin{
			width: 50%;
			height: 100px;

			float: left;
		}
	</style>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="center">
		<input type="checkbox" id="click">
		<label for="click" class="click-me">Xem Chi Tiết
		</label>
<!--		<label for="click" class="click-me" >Click Me</label>-->
		<div class="content_popup">
			<div class="header">
				<h4>Thông Tin Chi Tiết</h4>
				<label for="click" class="fas fa-times">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
</svg>
				</label>
			</div>
				<?php
			$sanpham1 = "SELECT*FROM HANGHOA WHERE MSHH='HH000034'";
			$qrsp1 = mysqli_query($mysqli, $sanpham1);
			$r1 = mysqli_fetch_array($qrsp1);
			?>
			<div id="hinhsp">
				<img style="width: 80%" src="img/img_sanpham/<?php echo $r1['image']; ?>">
			</div>
			<div id="thongtin">
				<?php if($r1['QuyCach'] > 1){ ?>
				<b>Giá: <del><h4><?php echo number_format($r1['Gia'])." VNĐ"; ?></h4></del></b>
				<b>Giảm còn: <h4 style="color: #A71114;"><?php echo number_format($r1['QuyCach'])." VNĐ"; ?></h4></b>
				<?php }else{ ?>
						<b>Giá: <del><h4><?php echo number_format($r1['Gia'])." VNĐ"; ?></h4></del></b>
							<?php } ?>
					<form action="" method="post">
							<div class="soluong">
							
				<div class="soluongmua">Số lượng <input style="width: 50px;" type="number" name="sl" required value="1"/></div>
				<div class="soluongkho">Số lượng kho <b><?php echo $r1['SoLuongHang'];?></b></div>
									
			</div>
						</form>
				<a href="index.php?themgiohang=HH000034">THÊM GIỎ HÀNG</a>
			</div>
			<div class="line"></div>
			<label for="click" class="close-btn">Close</label>
		</div>
		</div>
	</div>
	<?php 
	if(isset($_COOKIE['mskh'])){
	if(isset($_GET['themgiohang']) && isset($_POST['sl'])){
	$giadathang = "SELECT GIA, QUYCACH FROM HANGHOA WHERE MSHH='HH000034'";
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
	mysqli_query($mysqli, $them);
	$mshd = "SELECT Max(SoDonDH) as LastHD FROM DatHang";
	$thucthi_mahd = mysqli_query($mysqli, $mshd);
	$row_mahd = mysqli_fetch_array($thucthi_mahd);
	$numLastHD = $row_mahd['LastHD'];
	$them_ctdh = "insert into chitietdathang (SoDonDH,mshh,soluong, GiaDatHang, GIAMGIA) VALUES ('$numLastHD','HH000034','".$_POST['sl']."','".$giadh."','".$giamgia."')";
	mysqli_query($mysqli, $them_ctdh);
		$UPDATE_SOLUONG = " CALL UPDATE_SOLUONGHANG('".$_POST['sl']."','HH000034')";
	mysqli_query($mysqli, $UPDATE_SOLUONG);
	}
	}else{ ?>
<!--
	<script>
		alert("Vui lòng đăng nhập.");
	</script>
-->
<?php 
} ?>
</body>
</html>
