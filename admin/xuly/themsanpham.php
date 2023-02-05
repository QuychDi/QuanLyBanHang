<!doctype html>
<?php if(isset($_COOKIE['MSNV'])){ ?>
<html><head>
<meta charset="utf-8">
	<style>
	*{
	margin: 0px auto;
	padding: 0px auto;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
}
p{

	padding-left: 10px;
}
.title{
	color:#3366CC;
}
input, textarea{
	border: 2px solid #F5790A;
	font-size: 18px;
	outline: none;
	padding-left: 10px;
}
input .tieude{
	color: #E9060A;
}
.main{
}
.main h3{
	color: #313131;
/*
	float: left;
	padding-left: 5px;
	height: 40px;
	width: 300px;
	line-height: 40px;
	padding-left: 5px;
	margin-bottom: 20px;
*/
}
.noidungsanpham{
	
	clear: both;
	width: 450px;
	height: 450px;
	float: left;
	margin-left: 8%;
}
.noidungsanpham .tieude{
	float: left;
	padding: 10px 0px 0px 8px;
	
}
		input{
			border-radius: 10px;
			border: 1px solid #4B4B4B;
		}
.noidungsanpham .tieude input{
	border: 1px solid #4B4B4B;
	margin-left: 2px;
	width: 320px;
	height: 35px;
	
	
}
.noidungsanpham .motasanpham{
	float: left;
	padding:10px 0px 0px 8px;
}
.noidungsanpham .motasanpham td{
	padding: 5px 0px 5px 0px;
}
.chitietsanpham{
	width: 400px;
	height: 430px;
	float: left;
	padding-top: 20px;
}
.chitietsanpham input.hinhsanpham{
	margin-top: 5px;
}
.lietke{
	width: 850px;
	height: 400px;
	margin: 0px;
	padding: 0px;
	margin-top: 20px;
}
.lietke h3{
	text-align: center;
			width: 100%;
			height: 40px;
			font-size: 25px;
			border-bottom-right-radius: 20px;
			color: #A43D00;
			margin-bottom: 15px;
			line-height: 40px;
			padding-left: 10px;
			float: left;
}
#chitietban{
	margin: 0 auto;
	padding: 0 auto;
}
#chitietban table.sanphamchitiet{
	margin-top: 40px;
}
#chitietban table.sanphamchitiet tr td{
	padding-bottom: 8px;
}
#chitietban table.sanphamchitiet tr td input{
	margin-right: 2px;
}
.capnhat{
	margin-top: 10px;
}
button {
	width: 120px;
	background-color: #02B42C;
	height: 35px;
	line-height: 30px;
	color: #F4F0F0;
	margin-left: 50px;
	cursor: pointer;
}
button:hover{
	background-color: #278226;
	color: #D96316;
	outline: none;
	
}
		.lietke{
			
			width: 100%;
			clear: both;
		}
.lietke table,.lietke th,.lietke td{
	clear: both;
	text-align: center;
	border: 1px solid #BAB8B8;
	height: 30px;
}
.lietke table th{
	background-color:#494949;
	height: 35px;
	color: #FFFFFF;
	line-height: 35px;

}
.lietke table{
	border-collapse: collapse;
		border: 1px solid #BAB8B8;
}
.lietke table tr td{
	width: 400px;
}
input#taoqc{
	background: none;
	color: #FFFFFF;
	border: none;
	font-weight: bold;

}
#taoqc{
	visibility: hidden;
	opacity: 0;
	background-color: none;
}
#taoqc.active{
	visibility: visible;
	opacity: 1;
	cursor: pointer;
}
#taoqc.active:hover{
	transition: 0.2s ease;
	color: 	#008000;
}

	</style>
	<script>
		function quangcaosp() {
			var tao_qc = document.getElementById("taoqc");
			var check = document.getElementById("check");
				tao_qc.classList.toggle('active');
				check.classList.toggle('active');
		
		// var i;
		// var result = "";
		// for(i=0;i<check.length;i++)
		// 	if(check[i].checked == true)
			
		// 		tao_qc.style.color = "red";
		
	}
		
	</script>
</head>

<body>
	<?php if(isset($_COOKIE['MSNV'])){ ?>
<!--	CAP NHAT SAN PHAM-->
	<?php 
			if(isset($_GET['sua_hh'])){?>
			<div class="nen" style="border-bottom: none;">
		<form method="POST" enctype="multipart/form-data" action="">
	<div class="main" style="border-bottom: none;">
		<h2 style="color: #7A3605;"><svg style="margin-left: 5px; margin-right: 5px; " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg>CẬP NHẬT SẢN PHẨM e<?php echo $_GET['sua_hh']; ?></h2>

	
<!--	NOi dung trai TIEU DE, MOTA NGAN, DAI -->
			
	<div class="noidungsanpham">
		<?php	$TRUYVAN = "SELECT MSHH, TENHH, GHICHU ,QUYCACH ,GIA, SOLUONGHANG, image, MaLoaiHang FROM HANGHOA where MSHH = '".$_GET['sua_hh']."'";
		$thucthi = mysqli_query($mysqli, $TRUYVAN);
		while($lietke = mysqli_fetch_array($thucthi)){?>
					<table class="tieude">
						<tr>
							<td style="color: #D56002;"><b>TIÊU ĐỀ</b></td>
							<td><input required type="text" name="tensanpham" value="<?php echo $lietke['TENHH']; ?>"/></td>
						</tr>
					</table>
					<table class="motasanpham">
						<tr>
							<td style="color: #D56002;"><b>MÔ TẢ NGẮN SẢN PHẨM</b></td><td>&nbsp;</td>
						</tr>
						<tr>
							<td><input style="width: 420px; height:50px;"  type="text" name="motangan" value="<?php echo $lietke['GHICHU']; ?>"/></td>
						</tr>
<!--
						<tr>
							<td style="color: #0F4A04"><b>MÔ TẢ DÀI SẢN PHẨM</b></td><td>&nbsp;</td>
						</tr>
						<tr>
							<td><textarea rows="15" cols="60" name="motadai" form="giatri"></textarea></td>
						</tr>
-->
					</table>
			
			
	</div>
<!--	MO TA CHI TIET SP DON GIA, GIAM GIA, SO LUONG KHO-->
	<div class="chitietsanpham">
		<p><b style="color: #D56002;">Hình đại diện</b></p>
		<img style= "width: 60px;" src="../../img/img_sanpham/<?php echo $lietke['image']; ?>"/><span><?php echo $lietke['image']; ?></span><br>
		<input type="file"  style="border: none; color: #F11317" value="<?php echo $lietke['image']; ?>" class="hinhsanpham" value="" name="avatar"/>
		<div id="chitietban">
			
			<table class="sanphamchitiet">
				<th style="color: #D56002; text-align: left" colspan="2">MÔ TẢ THÔNG TIN TIẾT</th>
			<tr>
				<td>Mã sản phẩm</td>	<td><input style="background:#585656; color: #969696" required readonly type="text" name="MAHANGHOA" value="<?php echo $lietke['MSHH']; ?>" /></td></tr>
				<tr>
					<td><span>Mã Loại Hàng:</td><td> <?php echo $lietke['MaLoaiHang']; if($lietke['MaLoaiHang']==1){echo " (APPLE)"; }else if($lietke['MaLoaiHang']==2){ echo " (DELL)"; }if($lietke['MaLoaiHang']==3){
					echo "(HP)";
		}if($lietke['MaLoaiHang']==4){
					echo "ASUS";
		}?> </span></td></tr>
				<tr><td>Cập Nhật</td>
					<td><input type="radio" name="loaigiay" value="1" checked/>APPLE
					<input style="margin-left: 5px;" name="loaigiay" type="radio" value="2"/>DELL
					<input type="radio" name="loaigiay" style="margin-left: 5px;" value="3"/>HP
					<input type="radio" name="loaigiay" style="margin-left: 5px;" value="4"/>ASUS
					</td>
					</tr>
				<tr>
					<td>Số lượng kho </td>
					<td><input type="number" name="soluong" value="<?php echo $lietke['SOLUONGHANG']; ?>"/></td></tr>
				<tr>
					<td>Đơn giá</td>
					<td><input required type="text" value="<?php echo $lietke['GIA']; ?>" name="dongia"/> VNĐ</td>
				</tr>
				<tr>
					<td>Giảm giá</td>
					<td><input type="text" value="<?php echo $lietke['QUYCACH']; ?>" name="giamgia"/> VNĐ</td>
				</tr>
			</table>
			
		</div>
		<div class="capnhat">
		<button type="submit" name="CAPNHAT_HH" ><b>CẬP NHẬT</b></button>
			<button style="margin-left: 0px;" type="reset"><b>RESET</b></button>
		</div>
		
			</div>
	</div>
	<?php } ?>
		</form>
</div>
<?php }else{?>
<!--THEM HANG HOA-->
	<div class="nen" style="border-bottom: none;">
		<h2 style="color: #7A3605;"><svg style="margin-left: 5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg>CẬP NHẬT SẢN PHẨM</h2>
		<form method= "post" enctype="multipart/form-data" action="">
		
<!--	NOi dung trai TIEU DE, MOTA NGAN, DAI -->
			
	<div class="noidungsanpham">
					<table class="tieude">
						<tr>
							<td style="color: #0F4A04"><b>TIÊU ĐỀ</b></td>
							<td><input required type="text" name="tensanpham" value=""/></td>
						</tr>
					</table>
					<table class="motasanpham">
						<tr>
							<td style="color: #0F4A04"><b>MÔ TẢ NGẮN SẢN PHẨM</b></td><td>&nbsp;</td>
						</tr>
						<tr>
							<td><input style="width: 420px; height:50px;" type="text" name="motangan" value=""/></td>
						</tr>
<!--
						<tr>
							<td style="color: #0F4A04"><b>MÔ TẢ DÀI SẢN PHẨM</b></td><td>&nbsp;</td>
						</tr>
						<tr>
							<td><textarea rows="15" cols="60" name="motadai" form="giatri"></textarea></td>
						</tr>
-->
					</table>
			
			
	</div>
<!--	MO TA CHI TIET SP DON GIA, GIAM GIA, SO LUONG KHO-->
	<div class="chitietsanpham">
		<p><b style="color: #0F4A04;">Hình đại diện</b></p>
		<input type="file"  style="border: none; color: #F11317" class="hinhsanpham" required name="avatar"/>
		<div id="chitietban">
			<table class="sanphamchitiet">
				<th style="color: #0F4A04; text-align: left" colspan="2">MÔ TẢ THÔNG TIN TIẾT</th>
			<tr>
				<td>Mã sản phẩm</td>
				<td><input required type="text" name="MAHANGHOA" value=""/></td>
				</tr>
				<tr><td>Loại Hãng</td>
					<td><input type="radio" name="loaigiay" value="1" checked/>APPLE
					<input style="margin-left: 5px;" name="loaigiay" type="radio" value="2"/>DELL
					<input type="radio" name="loaigiay" style="margin-left: 5px;" value="3"/>HP
					<input type="radio" name="loaigiay" style="margin-left: 5px;" value="4"/>ASUS
					</td>
					</tr>
				<tr>
					<td>Số lượng kho </td>
					<td><input type="number" name="soluong" value=""/></td></tr>
				<tr>
					<td>Đơn giá</td>
					<td><input required type="text" value="" name="dongia"/> VNĐ</td>
				</tr>
				<tr>
					<td>Giảm giá</td>
					<td><input type="text" value="" name="giamgia"/> VNĐ</td>
				</tr>
			</table>
			
		</div>
		<div class="capnhat">
		<button type="submit" name="submit" onClick="checkHH();" value="thuchien"><b>THỰC HIỆN</b></button>
			<button style="margin-left: 0px;" type="reset"><b>RESET</b></button>
		</div>
	
			</div>
				</form>
		</div>
	<?php }
?>
	<div class="lietke">
		<h3>DANH SÁCH SẢM PHẨM</h3>
		<form action="" method="post" name="dssp">
		<table style="padding-top:20px">
			<tr>
				<th>MSHH</th><th>IMG</th><th>TEN HANG HOA</th><th>GIÁ</th><th>GIẢM GIÁ</th><th>SỐ LƯỢNG</th><th>LOẠI</th><th>CẬP NHẬT</th>
				<th style="background-color:#088A4B"><input id="taoqc" type="submit" name="tao_qc" value="TẠO QUẢNG CÁO" /></th></tr>
		<?php 
		$TRUYVAN = "SELECT MSHH, TENHH, QUYCACH ,GIA, SOLUONGHANG, image, MaLoaiHang, QUANGCAO FROM HANGHOA";
		$thucthi = mysqli_query($mysqli, $TRUYVAN);
		while($lietke = mysqli_fetch_array($thucthi)){?>
		<tr>
		<td><?php echo $lietke['MSHH'];?></td>
			<td><img style="width: 40px;" src="../../img/img_sanpham/<?php echo $lietke['image']; ?>"/></td>
			<td><?php echo $lietke['TENHH']; ?></td>
			<td><?php echo number_format($lietke['GIA']).' VNĐ'; ?></td>
			<td><?php echo number_format($lietke['QUYCACH']).' VNĐ'; ?></td>
			<td><?php echo $lietke['SOLUONGHANG'];?></td>
			<td><?php echo $lietke['MaLoaiHang']; ?></td>
			<td><a style="color: #AB2325;" href="main.php?xoa_hh=<?php echo $lietke['MSHH']; ?>" style="color: #000000;"><b>XÓA </b></a >
			|<a style="color:#106D02" href="main.php?sua_hh=<?php echo $lietke['MSHH']; ?>" style="color: #106D02;"><b> SỬA</b></a></td>
			<?php if($lietke['QUANGCAO'] == NULL){ ?>
			<td><input type="checkbox" id="check" onClick="quangcaosp()" name="chck_qc[]" value="<?php echo $lietke['MSHH']; ?>"/></td>	
			<?php }else{?>
			<td><a style="color: RED" href="main.php?xoa_qc=<?php echo $lietke['MSHH']; ?>" ><ion-icon name="close"></ion-icon></a></td>
			<?php	} ?>
		</tr>
		<?php }?>
			</table>
			</form>
		</div>

<!------------------------------------------------------------------------------------------->
	</body>
<?php 
include("modules_xuly.php");
/*THEM HANG HOA */
if(isset($_POST['submit'])){
	themhanghoa();
}
/* UPDATE HANG HOA */
if(isset($_POST['CAPNHAT_HH'])){
	update_hanghoa();
} ?>
<!--	XOA HANG HOA-->
	<?php if(isset($_GET['xoa_hh'])){
	$hinh = "SELECT*FROM hanghoa WHERE MSHH = '".$_GET['xoa_hh']."'";
	$qr = mysqli_query($mysqli, $hinh);
	$layhinh = mysqli_fetch_array($qr);
	$link_hinh = "../../img/img_sanpham/".$layhinh['image'];
	if(is_file($link_hinh)){
		unlink($link_hinh);
	}
	$delete = "DELETE FROM HANGHOA WHERE MSHH= '".$_GET['xoa_hh']."'";
	mysqli_query($mysqli, $delete);?>
	
	<script>
		alert("XÓA SẢN PHẨM THÀNH CÔNG")
		window.location = "main.php";
</script>
<?php } 

}
// ------TAO QUANGCAO //////////
if(isset($_POST['tao_qc'])){
	taoquangcao_sp();
}
// ------XOA QUANG CAO /////////
if(isset($_GET['xoa_qc'])){
	xoa_quangcao();
}
?>
</html>
<?php } ?>