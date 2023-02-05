<!doctype html>
<?php if(isset($_COOKIE['MSNV'])){ ?>
<html>
<head>
<meta charset="utf-8">
	<style>
		*{
		
			margin: 0px;
			padding:0px;
		}
		.main{
	
/*
			
			width: 180%;
			background-color: #655D5D;
			float: left;
			clear: left;
*/	
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.main h2{
/*
			height: 55px;
			float: left;
			background-color: #4D4C4C;
			line-height: 55px;
			border-bottom-right-radius: 30px;
*/
			color:#403D3D;
			
		}
		.main .tieude_baiviet{
			clear: both;
			padding-top: 50px;
			height: 100px;
			padding-left: 50px;
			font-size: 20px;
			color: #D56002;
		}
		input{
			border-radius: 10px;
			border: 1px solid  #524E4E;
		}
		.main .tieude_baiviet input{
			
		}
		.main .tieude_baiviet input:focus{
			 box-shadow: 10px 10px 5px #FFCC33;
			box-shadow: 0px 0px 10px #3366CC;	
		}
		.main .motangan_baiviet{

			height: 350px;
			padding-left: 250px;
			font-size: 20px;
			color: #D56002;
		}
		.motangan_baiviet input {
			border: 1px solid #1C7CC5;
			outline: none;
			padding-left: 10px;
		}
		.main .motangan_baiviet #button{
			margin-top: 20px;
		}
		.main .motangan_baiviet #button button{
			width: 80px;
			height: 30px;
			background-color: #424040;
			outline: none;
			border: none;
			margin-right: 5px;
			color: #FAF7F7;
		}
		.main .motangan_baiviet #button button:hover{
			background-color: #383737;
		}
		.danhsachbaiviet{
			width: 100%;
		}
		.danhsachbaiviet table{
		
			border-collapse: collapse;
		}
		.danhsachbaiviet table#table_ds th,.danhsachbaiviet table#table_ds td{
			border: 1px solid #BAB8B8;
		}
		.danhsachbaiviet table#table_ds tr th{
			color: #F4F1F1;
			height: 40px;
		}
		.main .danhsachbaiviet table tr td{
			padding: 5px;
			text-align: center;
			width: 200px;
		}
		.danhsachbaiviet table#table_ds tr td a{
			color: #000000;
		}
		.danhsachbaiviet h3{
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
	</style>
</head>
<body>
	<?php  if(isset($_COOKIE['MSNV'])){ ?>
			<div class="main">
<?php 
	if(isset($_GET['sua_baiviet'])){
				$get_baiviet = "SELECT ID_BAIVIET ,TIEUDE, MOTANGAN, SRC FROM BAIVIET WHERE ID_BAIVIET = '".$_GET['sua_baiviet']."'";
				$thucthi_get = mysqli_query($mysqli, $get_baiviet);
				?>
		<form action="" method="post">
			<?php while($ds = mysqli_fetch_array($thucthi_get)){ ?>
	<div class="quanlybaiviet"><h2 style="color: #7A3605;"><svg style="margin-left: 5px; margin-right: 5px;"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg>CẬP NHẬT BÀI VIẾT</h2></div>
	<div class="tieude_baiviet"><tr><td><b>Tiêu đề bài viết</b></td><td><input style="margin-left: 40px; height: 35px; width: 450px; padding-left: 10px; outline: none;" type="text" name="tieude" value="<?php echo $ds['TIEUDE']; ?>" /></td></tr></div>
	<div class="motangan_baiviet"><b>MÔ TẢ NGẮN BÀI VIẾT</b><br>
	<input style="width: 75%;  height: 60px; margin-top: 20px; margin-bottom: 20px; margin-left: 10px;" type="text" name="mota" value="<?php echo $ds['MOTANGAN']; ?>"  placeholder="The evolution of electronicsis expanding the realm of connectivity.
Contributing to liberation of our connected world." /><br>
		<b>Đường dẫn bài viết </b>
	<br><input style="width: 75%;  height: 30px; margin-top: 20px; margin-bottom: 20px; margin-left: 10px;" type="text" name="src_baiviet" value="<?php echo $ds['SRC']; ?>" placeholder="https://www.casio-watches.com/technology/en/technology/" /><br>
		<div id="button">
		<button type="submit" name="capnhat">CẬP NHẬT</button>
		<button type="reset" name="reset">RESET</button>
			<button type="submit" name="xoa"><a href="main.php?quanly=quanlybaiviet&&xoa_baiviet=<?php echo $ds['ID_BAIVIET']; ?>">XÓA BÀI</a></button>
			</div>
	</div> 
			<?php } ?>
		</form>
<?php	}else{
	?>
	<form action="" method="post">	
	<div class="quanlybaiviet"><h2 style="color: #7A3605;"><svg style="margin-left: 5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg>CẬP NHẬT BÀI VIẾT</h2></div>
	<div class="tieude_baiviet"><tr><td><b>Tiêu đề bài viết</b></td><td><input style="margin-left: 40px; height: 35px; width: 450px; padding-left: 10px; outline: none;" type="text" name="tieude" value="" required placeholder="CASIO 2021" /></td></tr></div>
	<div class="motangan_baiviet"><b>MÔ TẢ NGẮN BÀI VIẾT</b><br>
	<input  style="width: 75%; height: 60px; margin-top: 20px; margin-bottom: 20px; margin-left: 10px;" type="text" name="mota" value="" required placeholder="The evolution of electronicsis expanding the realm of connectivity.
Contributing to liberation of our connected world." /><br>
		<b>Đường dẫn bài viết </b>
	<br><input style="width: 75%;  height: 50px; margin-top: 20px; margin-bottom: 20px; margin-left: 10px;" type="text" name="src_baiviet" value="" placeholder="https://www.casio-watches.com/technology/en/technology/" required /><br>
		<div id="button">
		<button type="submit" name="gui">GỬI</button>
		<button type="reset" name="reset">RESET</button>
			</div>
	</div>
		</form>
				<?php  } ?>
					</div>
		<div class="danhsachbaiviet">
			<form name="danhsach_baiviet" method="GET" action="">
			<div class="quanlybaiviet"><h3 style="padding-top: 10px;">DANH SÁCH BÀI VIẾT</h3></div>
		<table id="table_ds" style="width: 100%;">
			<tr style="background-color: #4E4E4F;">
			<th>MSNV</th><th>NHÂN VIÊN</th><th>TIÊU ĐỀ</th><th>MÔ TẢ NGẮN</th><th>NGUỒN</th><th>NGÀY TẠO</th><th>CẬP NHẬT</th>
			</tr>
			
		<?php	$truyvan_baiviet = "SELECT ID_BAIVIET ,BAIVIET.MSNV, NHANVIEN.HoTenNV, BAIVIET.TieuDe, BAIVIET.motangan, BAIVIET.src, BAIVIET.ngaytao FROM BAIVIET JOIN NHANVIEN ON BAIVIET.MSNV = NHANVIEN.MSNV";
				$thucthi_baiviet = mysqli_query($mysqli, $truyvan_baiviet);
				while($lietke_baiviet = mysqli_fetch_array($thucthi_baiviet)){
			
			?>
			<tr>
				<td><?php echo $lietke_baiviet['MSNV'];?></td>
				<td><?php echo $lietke_baiviet['HoTenNV'];?></td>
				<td style="width:400px; padding-left: 5px"><?php echo $lietke_baiviet['TieuDe'];?></td>
				<td style="width:400px; padding-left: 5px"><?php echo $lietke_baiviet['motangan'];?></td>
				<td style="width: 200px; padding-left: 5px;"><?php echo $lietke_baiviet['src'];?></td>
				<td><?php echo $lietke_baiviet['ngaytao'];?></td>
				<td><a href="main.php?quanly=quanlybaiviet&&xoa_baiviet=<?php echo $lietke_baiviet['ID_BAIVIET']; ?>"><b style="color: #BD070A">XÓA</b></a> | <a href="main.php?quanly=quanlybaiviet&&sua_baiviet=<?php echo $lietke_baiviet['ID_BAIVIET']; ?>" ><b style="color: #0A7D00;">SỬA</b></a></td>
			</tr>
			<?php } ?>
			</table>
				</form>
		</div>
	
	<?php 
	include("modules_xuly.php");
	if(isset($_POST['gui'])){
		quanlybaiviet();
	}
if(isset($_GET['xoa_baiviet'])){
	xoa_baiviet();
}
	if(isset($_POST['capnhat'])){
		capnhatbaiviet();
	}
}
	?>
</body>
</html>
<?php } ?>
