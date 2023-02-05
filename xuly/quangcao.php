<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		.main_quangcao{
			width: 100%;
		}
/*
		.main_quangcao .qc_top{
			width: 100%;
			height: 300px;
		}
		.main_quangcao .qc_top .spleft{
			width: 50%;
			float: right;
			height: 300px;
		}
		.main_quangcao .spleft .image{
			width: 50%;
			float: left;
			height: 300px;
		}
		.main_quangcao .spleft .image img{
			width: 100%;
			padding: 5%;
			
		}
 		.main_quangcao .spleft .noidung_popup{
			width: 50%;
			padding-top: 5%;
			float: left;
			height: 300px;
	
		}
		.main_quangcao .qc_top .spright{
			
		} 
*/
/*
		.main_quangcao .qc_top .spright img{
			width: 60%;
			float: left;
		}
*/
		.timkiem{
			width: 100%;
			position: relative;
		}
		.timkiem input{
			position: relative;
			width: 95%;
			height: 40px;
			outline: none;
			border-left: 1px solid #EF7410;
			border-top: 1px solid #EF7410;
			border-bottom: 1px solid #EF7410;
			border-right: none;
			padding-left: 1%;
		}
		
		.timkiem button#icon_search{
			border: none;
			padding: 1%;
			border-radius: 100px;
			background-color: #EF7410;
			display: flex;
			left: 94.9%;
			font-size: 17px;
			position: absolute;
			top: -1%;
			justify-content: center;
			align-items: center;
		}
		.timkiem button#icon_search:hover{
			background-color: #A84E05;
			color: #FFFFFF;
			transition: 0.5s ease;
		}
		.timkiem ul{
			margin: 0;
			padding: 0;			
		}
		.timkiem ul li{
			text-align: center;
	margin-left: 20px;
	float: left;
	width: 150px;
	height: 280px;
	margin: 10px;
/*	padding: 2px;*/
	border-radius: 5px;
	border: 1px solid #F18D4A;
/*	font-weight: 400;*/
		}
		.timkiem ul li:hover{
			transition: 0.3s ease;
			box-shadow: 0px 0px 20px #F18D4A;	
		}
		.main_quangcao .qc_bottom{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			z-index: -1;
			margin-top: 5%;
			margin-bottom: 5%;
		width: 100%;
		animation:backInUp; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s;
	
		
		}
		.qc_bottom ul{
			position: relative;
			z-index: -1;
/*
			width: 100%;
			height: 180px;
			background-color: #3A3A3A;
*/
		}
		.qc_bottom ul li{
			 
			border-top: 3px solid #D78500;
			text-align: center;
			padding-top: 2%;
			padding-bottom: 2px;
			width: 160px;
			height: 180px;
			color: #F0F0F0;
			float: left;
			border-bottom: 3px solid #D78500;
		}
		.qc_bottom ul li img{
			
			width: 80%;
		}
		.qc_bottom:hover{
		}
	</style>
	
</head>
<body>
	<div class="main_quangcao">
		<div class="timkiem">
			<form action="" method="post">
			<input type="search" name="timkiem" value="" placeholder="Bạn muốn tìm gì với DiViLa Shop">
				<button id="icon_search" name="submit" type="submit">
				<ion-icon name="search"></ion-icon>
					</button>
			</form>
			<div class="sptimkiem">
			<?php
				if(isset($_POST['submit'])){
					include("xulymuahang.php");
					timkiem();
				}
			?>
				</div>
		</div>
		<div class="qc_bottom">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <ul>
				<?php $spqc = "SELECT*FROM hanghoa ORDER BY gia ASC LIMIT 7 ";
					$qrsp = mysqli_query($mysqli, $spqc);
					while($sp = mysqli_fetch_array($qrsp)){?>
				<li><img src="img/img_sanpham/<?php echo $sp['image']; ?>"</li>
				<?php } ?>
			</ul>
    </div>
    <div class="carousel-item">
      <ul>
				<?php $spqc = "SELECT*FROM hanghoa ORDER BY GHICHU DESC LIMIT 7 ";
					$qrsp = mysqli_query($mysqli, $spqc);
					while($sp = mysqli_fetch_array($qrsp)){?>
				<li><img src="img/img_sanpham/<?php echo $sp['image']; ?>"</li>
				<?php } ?>
			</ul>
    </div>
    <div class="carousel-item">
    <ul>
				<?php $spqc = "SELECT*FROM hanghoa ORDER BY SOLUONGHANG LIMIT 7 ";
					$qrsp = mysqli_query($mysqli, $spqc);
					while($sp = mysqli_fetch_array($qrsp)){?>
				<li><img src="img/img_sanpham/<?php echo $sp['image']; ?>"</li>
				<?php } ?>
			</ul>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
			<?php for($i=0; $i<3 ;$i++){ ?>
			
			<?php } ?>
		</div>
	</div>
</body>
</html>
