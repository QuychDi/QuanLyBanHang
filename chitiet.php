<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiết sản phẩm</title>
	<style>
		*{
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.chitiet{
			margin-top: 100px;
			width: 1200px;
		}
		.chitiet .image_sp{
			width: 500px;
			height: 600px;
			float: left;
		}
		.thongtin_image{
			width: 700px;
			height: 500px;
			float: left;
		}
		.thongtin_image .thongtin{
			width: 200px;
			height: 40px;
			background-color: #025BCB;
			color: #FDFDFD;
			border-radius: 10px;
			line-height: 40px;
			padding-left: 5px;
			float: left;
		}
		.thongtin_image .thongtin_sp{
			padding: 10px;
			clear: both;
			width: 400px;
			
			border: 1px solid #1A5FAD;
			border-radius: 10px;
			float: left;
			margin-top: 5px;
		}
		.thongtin_image .btn_giaban{
			clear: both;
			float: left;
			margin-top: 5px;
			width: 700px;
			height: 40px;
		}
		.thongtin_image .btn_giaban span{
		margin-left: 20px;
			font-size: 18px;
		}
		.thongtin_image .btn_mua{
			clear: both;
			float: left;
			width: 400px;
			height: 40px;
		}
		.thongtin_image .btn_mua .icon_themgiohang{
			width: 59px;
			height: 35px;
			float: left;
			padding-top: 2px;
			padding-left: 10px;
			border-left: 1px solid  #EC8A15;
		}
		.thongtin_image .btn_mua .icon_themgiohang button{
			color: #EC8A15;
			background: no-repeat;
		}
		.thongtin_image .btn_mua .icon_themgiohang a{
			color: #EC8A15;
		}
/*
		.thongtin_image .btn_mua .mua{
			width: 300px;
			height: 40px;
			float: left;
			line-height: 40px;
			text-align: center;
			background-color: #EC8A15;
		}
*/
		.thongtin_image .btn_mua .mua input{
			width: 100%;
			height: 40px;
			float: left;
			line-height: 40px;
			text-align: center;
			background-color: #EC8A15;
			outline: none;
			border: none;
		}
		.thongtin_image .btn_mua .mua input:hover{
			background-color: #F53108;
		}
		.thongtin_image .btn_mua .icon_themgiohang button:hover{
			color: #F53108;
		}
		.thongtin_image .btn_mua .mua a{
			color: #070707;
		}
		.thongtin_image .soluong{
			clear: both;
			float: left;
			width: 700px;
			margin-top: 5px;
			margin-bottom: 40px;
		}
		.thongtin_image .soluong .soluongmua{
			float: left;
			margin-left: 5px;
			margin-right: 10px;
		}
		.thongtin_image .soluong .soluongmua input{
			outline: none;
			border: 1px solid #EC8A15;
			border-radius: 2px;
			text-align: center;
			
		}
		.thongtin_image .soluong .soluongkho{
			
		}
		.share ul li{
			float: left;
			width: 3.2%;
		}
		.share ul li svg{
		}
		#sanphamlienquan{
			width: 320px;
			height: 40px;
			background-color: #EF570E;
			float: left;
			padding-left: 10px;
			line-height: 40px;
			border-bottom-right-radius: 10px;
			clear: both;
		}
		.sanpham_lienquan{
			clear: both;
			width: 1200px;
		}
		.sanpham_lienquan ul li{
			float: left;
			width: 200px;
			height: 250px;
			border: 1px solid #3A64E7;
			margin: 10px;
			padding-top: 10px;
			text-align: center;
			list-style: none;
		}
		.sanpham_lienquan ul li:hover{
			box-shadow: 0px 0px 20px #3366CC;	
			
		}
	</style>
</head>
<body>
	<div class="chitiet">
		<form action="" name="muahang" method="post">
		<?php 
	$xemchitiet = "SELECT MSHH,TENHH, GHICHU ,IMAGE,QUYCACH ,GIA, SOLUONGHANG FROM HANGHOA WHERE MSHH ='".$_GET['id']."' ";
		$_SESSION['mahh']=$_GET['id']; 
		$giamgia = "SELECT QUYCACH FROM HANGHOA WHERE QUYCACH < GIA AND MSHH = '".$_GET['id']."'";
		$tv_gia = mysqli_query($mysqli, $giamgia);
		$xem = mysqli_query($mysqli, $xemchitiet);
	if(mysqli_num_rows($xem)>0){
	while($rem = mysqli_fetch_array($xem)){?>
	<div class="image_sp">
		<b style="font-size: 20px; padding-left: 10px; color:#D90408 "><?php echo $rem['TENHH'];?></b>
		<img style="width: 400px;" src="img/img_sanpham/<?php echo $rem['IMAGE']; ?>">
		</div>
		<div class="thongtin_image">
		<div class="thongtin"><b>THÔNG TIN CHI TIẾT</b></div>
			<div class="thongtin_sp" style="margin-bottom: 10px;">
				<span><?php echo $rem['GHICHU']; ?></span>
			</div>
			<div class="btn_giaban">
				<?php 
				if(mysqli_num_rows($tv_gia)>0){?>
				<span class="giamgia">Đơn giá: <b style="color:#858282; font-size: 20px;">
				<strike><?php echo $rem['GIA']; ?> VNĐ</strike></b></span>
				<span class="dongian_ban"style="color: #D50B0E; ">Giảm còn: <b style="font-size: 20px;"><?php echo $rem['QUYCACH']; ?> VNĐ</b></span>
				
				<?php }else{ ?>
		 <span class="giamgia" >Đơn giá: <b style="color:#C0080B; font-size: 20px;"><?php echo $rem['GIA']; ?> VNĐ</b></span>
										 <?php  } ?>
			</div>
			
			<div class="soluong">
				<div class="soluongmua">Số lượng <input style="width: 50px;" type="number" name="sl_mua" required value="1"/></div>
				<div class="soluongkho">Số lượng kho <b><?php echo $rem['SOLUONGHANG']; ?></b></div>
			</div>
				
					<?php 
	}
	}
	?>
			
	<div class="btn_mua">
	
				
				<div class="mua"><input type="submit" name="themgiohang" value="THÊM GIỎ HÀNG"/></div>
		</div>
			
			</div>
		
		</div>
	</form>

	<div class="share" style="float: left; width: 100%;height: 50px;">
	<ul><li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" style="color: #1F60DA;" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></li>
		<li><svg style="color: #DC0A93;" xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></li>
		<li><svg style="color: #086FE3;" xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></li></ul>
	</div>
	<div id="sanphamlienquan" style="color: #FFFDFD; float: left">SẢN PHẨM LIÊN QUAN </div>
	<div class="sanpham_lienquan">
				<ul>
				<?php
			$sq = "SELECT MSHH,Gia, IMAGE, tenHH FROM hanghoa LIMIT 15";
			$thucthi = mysqli_query($mysqli, $sq);
			while($kt= mysqli_fetch_array($thucthi)){
						?>
					<a href="index.php?id=<?php echo $kt['MSHH'];?>">
					<li style="z-index: -1">
						<table>
					<tr>
						<td><img style="width: 110px;" src="img/img_sanpham/<?php echo $kt['IMAGE']; ?>"/></td></tr>
						<tr><td><b style="color: #C7240D; font-size: 14px;"><?php echo $kt['tenHH']; ?></b></td></tr>
						<tr>
							<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17"><?php echo $kt['Gia']; ?> VNĐ</b></td></tr>
							<tr><td style="width: 180px; height:40px;"><a style=" color: #4A4949;" name="xem">Xem Chi Tiet</a></td></tr>
							</table>
						</li>
						</a>
			<?php }?>
						</ul>

		</div>
</body>
<?php 
//	include("login/config.php");	
	include("xuly/mua_themgiohang.php");
	if(isset($_POST['themgiohang'])){
		
		mua_themgiohang();
	}
	?>
</html>