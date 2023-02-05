<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	.popup {
display: none;
position: fixed;
padding-top: 50px;
left: 0;
top: 0;
width: 100%;
height: 100%;
background-color: rgb(0, 0, 0);
background-color: rgba(0, 0, 0, 0.5);
}
.popup-content {
	height: 700px;
position: relative;
background-color: #FAFAFA;
padding: 15px;
margin: auto;
width: 70%;
}
.close-btn {
float: right;
color: #2E2E2E;
font-size: 25px;
font-weight: 700;
}
.close-btn:hover {
color: #D2D2D2;
		}
		.tensp{
			width: 100%;
			height: 40px;
			color: #A60003;
		}
		.thongtinchitiet{
			width: 100%;
		}
		.thongtinchitiet .img_sp{
			width: 40%;
			float: left;
		}
		.thongtinsanpham{
			width: 60%;
			float: left;
			height: 450px;
		}
		button#popup-btn{
			background-color: #F0990B;
			border: none;
			height: 40px;
			width: 50%;
		}
		.thongtinsanpham #lbthongtin{
			width: 40%;
			background-color: #1B8539;
			height: 40px;
			padding-left: 10px;
			float: left;
			margin: 2%;
		}
		
		.thongtinsanpham #mota{
			border: 2px solid #0098B5;
			clear: both;
			width: 80%;
			margin: 5%;
			background-color: #FCFCFC;
			color: #1E1097;
			padding: 2% 5% 2% 5%;
		}
		.btn_giaban{
			clear: both;
			float: left;
			margin-top: 5px;
			width: 700px;
			height: 40px;
		}
	.btn_giaban span{
		margin-left: 20px;
			font-size: 18px;
		}
		.soluong{
			margin-left: 15px;
			clear: both;
			float: left;
			width: 700px;
			margin-top: 5px;
			margin-bottom: 40px;
		}
		 .soluong .soluongmua{
			float: left;
			margin-left: 5px;
			margin-right: 10px;
		}
	.soluong .soluongmua input{
			outline: none;
			border: 1px solid #EC8A15;
			border-radius: 2px;
			text-align: center;
			
		}
		.btn_giaban{
			clear: both;
			float: left;
			margin-top: 5px;
			width: 700px;
			height: 40px;
		}
		.btn_giaban span{
		margin-left: 20px;
		font-size: 18px;
		}
		.btn_mua{
			clear: both;
			float: left;
			width: 400px;
			height: 40px;
		}
	.btn_mua .icon_themgiohang{
			width: 59px;
			height: 35px;
			float: left;
			padding-top: 2px;
			padding-left: 10px;
			border-left: 1px solid  #EC8A15;
		}
		 .btn_mua .icon_themgiohang button{
			color: #EC8A15;
			background: no-repeat;
		}
		.btn_mua .icon_themgiohang a{
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
		.btn_mua .mua input{
			width: 300px;
			height: 40px;
			float: left;
			line-height: 40px;
			text-align: center;
			background-color: #EC8A15;
			outline: none;
			border: none;
		}
		.btn_mua .mua input:hover{
			background-color: #F53108;
		}
		.btn_mua .icon_themgiohang button:hover{
			color: #F53108;
		}
		 .btn_mua .mua a{
			color: #070707;
		}
	</style>
</head>
<body>
	<button id="popup-btn"><b>MUA NGAY</b></button>
<div class="popup">
<div class="popup-content">
<span class="close-btn">&times;</span>
		<form action="" name="muahang" method="post">
		<?php 
	$xemchitiet = "SELECT MSHH,TENHH, GHICHU ,IMAGE,QUYCACH as giamgia,GIA as giagoc, SOLUONGHANG FROM HANGHOA WHERE MSHH ='HH000030' ";
		$giamgia = "SELECT QUYCACH FROM HANGHOA WHERE QUYCACH < GIA AND MSHH = 'HH00011'";
		$tv_gia = mysqli_query($mysqli, $giamgia);
		$xem = mysqli_query($mysqli, $xemchitiet);
		$rem = mysqli_fetch_array($xem)
 ?>
			<div class="tensp"><h4 style="font-size: 20px"><b><?php echo $rem['TENHH']; ?></b></h4></div>
			<div class="thongtinchitiet">
				<div class="img_sp">
					<img style="width:80%; padding-left: 15%; float: left;" src="img/img_sanpham/<?php echo $rem['IMAGE']; ?>"/>
				</div>
				<div class="thongtinsanpham">
				<div id="thongtin">
					<div id="lbthongtin"><h3 style="font-size: 20px; padding-top: 6px; color: #F4F300">THÔNG TIN CHI TIẾT</h3></div>
				<div id="mota">
					<?php echo $rem['GHICHU']; ?>
					</div>
					<div class="btn_giaban">
				<?php 
				if($rem['giamgia'] > 0){?>
				<span class="giamgia" >Đơn giá: <b style="color:#858282; font-size: 20px;"><strike><?php echo number_format($rem['giagoc']).'VNĐ'; ?></strike></b></span>
				<span class="dongian_ban"style="color: #D50B0E; font-size: 25px;">Giảm còn: <b style="font-size: 28px;"><?php echo number_format($rem['giamgia']).'VNĐ'; ?></b></span>
				
				<?php }else{ ?>
		 <span class="giamgia" >Đơn giá: <b style="color:#C0080B; font-size: 20px;"><?php echo number_format( $rem['giagoc']).'VNĐ'; ?></b></span>
										 <?php  } ?>
			</div>
					<div class="soluong">
				<div class="soluongmua">Số lượng <input style="width: 50px;" type="number" name="sl_mua" required value="1"/></div>
				<div class="soluongkho">Số lượng kho <b><?php echo $rem['SOLUONGHANG']; ?></b></div>
			</div>
						<div class="btn_mua">
			<div class="icon_themgiohang"><button onClick="themhanghoa();"  type="submit" style="border: none;" name="themgiohang"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">

  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
</svg></button></div>
				
				<div class="mua"><input type="submit" name="muahang" value="MUA NGAY"/></div>
		</div>
				</div>
				</div>
			</div>
	</form>
			</div>
</div>
	<script>
let modalBtn = document.getElementById("popup-btn");
let modal = document.querySelector(".popup");
let closeBtn = document.querySelector(".close-btn");
// Hiển thị popup khi nhấp chuột vào button
modalBtn.onclick = function(){
modal.style.display = "block"
}
// Đóng popup khi ấn vào nút đóng
closeBtn.onclick = function(){
modal.style.display = "none"
}
// Đóng khi nhấp chuột vào bất cứ khu vực nào trên màn hình
window.onclick = function(e){
if(e.target == popup){
modal.style.display = "none"
}
}
</script>
</body>
	
<?php
	include("xulymuahang.php");
	if(isset($_POST['muahang']) || isset($_POST['themgiohang'])){
		mua_themgiohang_QC();
	}
	?>
</html>
