<!doctype html>
<html>
<head>
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<title>DiViLa Shope</title>
	<style>
		*{
	padding: 0px auto;
	
	margin: 0px auto;
}
a{
	text-decoration: none;
}
ul{
	list-style: none;
}
.top{
/*	animation:fadeInDown; */
	animation-duration: 2s;
	margin-top: 10px;
	background-image:url("img/baner1.png");
	width: 1200px;
	height: 190px;
	background-color: #E76506;
}
.chungnang_login{
	padding-top: 5px;
	float: left;
	width: 1200px;
	text-align: center;
}
.chungnang_login ul{
	margin: 0px;
	padding: 0px;
}
.chungnang_login ul li{
	border-right: 1px solid #A39E9E;
	font-size: 13px;
	width: 120px;
	list-style: none;
	float: right;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
}
.chungnang_login ul li a{
	color: #DED5D5;
}
.chungnang_login ul li a:hover{
	color: #F4EDED;
}
.relative {	
	width: 1200px;
	height: 40px;
	position: relative;	
}
.menu{
	
	z-index: 2;
	width: 1200px;
	height: 50px;
	background-color: #F37531;
	position: fixed;
}
.menu ul{
	list-style: none;
	margin: 0px;
	padding: 0px;
}
.menu ul a li{
	color: #363535;
}
		.menu ul li:hover{
			border-bottom: 1px solid #FFFFFF;
		}
.menu ul li{
/*
	animation:fadeInUp; 
	animation-duration: 2s;
*/
	transition: .75s;
	float: left;	
	line-height: 50px;
	width: 240px;
	text-align: center;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
}

.menu ul li:hover, .menu ul li a:hover{
	background-color: #E76506;
	color: #F3EFEF;
}
.menu li.dropdown{
	display: inline-block;
}
.dropdown-content{
	z-index:-1;
	display: none;
	min-width: 160px;
	position: absolute;
	background-color: #E76506;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.slider{
width: 1200px;
height: 360px;
}

.main{ 
/*
	animation:fadeInDown; 
	animation-duration: 2s;
*/
	width: 1200px;
}
.content{
	margin-top: 5px;
	width: 1200px;
}

.content #sanphammoinhat{
/*
	animation:fadeInDown; 
	animation-duration: 2s;
*/
	clear: both;
	width: 1200px;
	/*height: 1400px;*/
	position:relative;
	
}
.content #sanphammoinhat .title_spmoinhat{
	height:40px;
	width: 230px;
	background-color: #F17523;
	float: left;
	list-style: none;
	line-height: 40px;
	color:#FFFFFF;
	padding-left: 15px;
	border-bottom-right-radius: 20px;

}
.content #sanphammoinhat .sanpham{
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
width: 1120px;
/*height: 1020px;*/
float:left;
padding-left: 80px;
	font-size: 13px;
/*	margin-bottom: 54%;*/
}
.content #sanphammoinhat .sanpham ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
	margin-top: 10px;
	margin-top: 10px;
}
.content #sanphammoinhat .sanpham ul  li{
	text-align: center;
	margin-left: 20px;
	float: left;
	width: 185px;
	height: 320px;
	margin: 10px;
/*	padding: 2px;*/
	border-radius: 5px;
	border: 1px solid #F18D4A;
/*	font-weight: 400;*/


}
/*		--------------QUANG CAO POPUP-----------*/
		.content#main_qc.active{
			user-select: none;
			pointer-events:inherit;
		}
		
.content #sanphammoinhat .sanpham  input, .content #sanphamNu .right_nu .sanpham ul li input,.content #sanphamNam .left_nam .sanpham ul li input{
	outline: none;
	margin-bottom: 2px;
	display: flex;
	border: none;
	height: 30px;
	background-color: #F57E3E;
	color:#020E3F;
	border-bottom-left-radius: 20px;
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;
	border-bottom-right-radius: 20px;
	

}
		.quancaosp{
			position: relative;
			animation:fadeInDown; 
	animation-duration: 2s;
			width: 100%;
			height: 400px; 
			background-image:url("img/video_quangcao/quangcao.gif");
		}
		.quancaosp #clear{
/*
			width: 60%;
			height: 60px;
*/
		}
		.quancaosp #avatasp{
			width: 30%;
/*			height: 340px;*/
			float: left;
	
		}
		.quancaosp #thongtinkhuyenmai{
/*			width: 32.5%;*/
			height: 340px;
			float: left;
			position: relative;
		}
		.quancaosp  #thongtinkhuyenmai a#click_xemthem{
			position: relative;
			width: 50%;
			background-color: #129427;
			padding:2%;
			color: #FFFFFF;
			display: flex;
			justify-content: center;
			align-items: center;
			top: -2%;
			left: -15%;
		}
		.quancaosp  #thongtinkhuyenmai .content{
			max-width: 120vh;
			height: 50vh;
			position: absolute;
			padding: 12% 5% 5% 5%;
			top: -30%;
			left: -50%;
			box-shadow: 0 5px 30px rgba(0,0,0,.30);
			background-color:#FCFCFC;
			display: flex;
			border-radius: 10px;
			visibility: hidden;
			opacity: 0;
			transition: 0.5s ease;
		}
		.quancaosp  #thongtinkhuyenmai .content#popup.active{
			visibility: visible;
			user-select:contain;
			pointer-events: auto;
			opacity: 1;
			transition: 0.5s ease;
		}
		.quancaosp  #thongtinkhuyenmai .content a#click_close{
			display: flex;
			justify-content: center;
			align-items: center;
			max-width: 20%;
			padding: 1%;
			font-size: 2rem;
			color: #EE1610;
			position: absolute;
			border-radius: 1px;
			top: 0;
			right: 0;

		}
		.quancaosp  #thongtinkhuyenmai .content a#click_close:hover{
			color: #8C0A0D;
			transition: 0.5s ease;
		}
/*
		.quancaosp #thongtinkhuyenmai .slogan{
			width: 100%;
			
*/
		}
		.quancaosp button#popup-btn{
			margin-left: 15%;
		}
		.quancaosp button#popup-btn:hover{
			background-color: #C4BA18;
		}
		.quancaosp  #thongtinkhuyenmai a#click_xemthem:hover{
			background-color: #015F11;
			color: #FFFD0A;
			transition: 0.5s ease;
		}
		.quancaosp .btn_mua_km .mua input#input_mua:hover{
			background-color: #0A4702;
			color: #F8FD00;
		}
		
.content #sanphammoinhat .sanpham  input:hover, .content #sanphamNu .right_nu .sanpham ul li input,.content #sanphamNam .left_nam .sanpham ul li input:hover{
	background-color: #B05808;
	color: #EFE9E9;
	outline: none;
	
}
/*		san pham nam (apple)*/
.content #sanphamNam{
	animation:fadeInDown; 
	animation-duration: 2s;
	float: left;
	width: 1200px;
	margin-top: 10%;
}
.content #sanphamNam .left_nam .title{
	width: 500px;
	height: 35px;
	background-color: #F17523;
	float: left;
	list-style: none;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	line-height: 35px;
	color:#FFFFFF;
	padding-left: 15px;
	border-bottom-right-radius: 20px;
	margin-bottom: 18px;

}
.content #sanphamNam .left_nam{
	width: 1000px;
	float: left;
}
.content #sanphamNam .left_nam .sanpham{
	width: 1000px;
	float: left;
}

.content #sanphamNam .right_nam{
	width: 200px;
	float:right;
}
/*
.content #sanphamNam .right_nam img{
	width: 100%;
	height: 1000px;
}
*/
.content #sanphamNu{
	display: flex;
	animation:fadeInDown; 
	animation-duration: 2s;
	width: 1200px;
}
.content #sanphamNu .left_nu{
	width: 200px;
	float: left;
}
.content #sanphamNu .right_nu{
	width: 1000px;
	float:left;;
}
.content #sanphamNu .right_nu .title{
	width: 600px;
	height: 35px;
	background-color: #F17523;
	float: left;
	list-style: none;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	display:inherit;
	justify-content: center;
	align-items: center;
	color:#FFFFFF;
	border-bottom-right-radius: 20px;
}
.content #sanphamNu .right_nu .sanpham{
	padding-top: 10px;
	display: flex;
	width: 1000px;
	
}
.content #sanphamNu .right_nu .sanpham ul li,.content #sanphamNam .left_nam .sanpham ul li{
text-align: center;
	margin-left: 20px;
	float: left;
	width: 190px;
	height: 320px;
	margin: 10px;
	padding: 2px;
	border: 1px solid #F18D4A;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
	border-top-right-radius: 10px;
	border-bottom-left-radius: 10px;
}
/*FOCUS SAN PHAM*/
.content #sanphamNam .left_nam .sanpham ul li:hover,.content #sanphammoinhat .sanpham ul  li:hover, .content #sanphamNu .right_nu .sanpham ul li:hover{
	transition: 0.2s ease;
	box-shadow: 0px 0px 20px #3366CC;	
}
.content #sanphamNam .left_nam .sanpham ul li input:hover,.content #sanphammoinhat .sanpham ul  li input:hover, .content #sanphamNu .right_nu .sanpham ul li input:hover{
	transition: 0.2s ease;
	box-shadow: 0px 0px 10px #F57E3E;	
}
.title{
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	padding: 5px 0px 5px 10px;
	color: #EF4D10;
}
/*		QUANG CAO KHUYEN MAI -----------------------------------*/
		.quangcao_khuyenmai{
/*			display: flex;*/
			user-select: none;
			position: relative;
			width: 100%;
			min-height: 900px;
			
/*			background-color: #E4690E;*/
		}
		.quangcao_khuyenmai .top_left{
			width: 50%;
			min-height: 400px;
			float: left;
			display: flex;
/*			position: relative;*/
		}
		.quangcao_khuyenmai .top_right{
			width: 50%;
			min-height: 400px;
/*			background-color: #000000;;*/
			float: left;
			display: flex;
			position: relative;
		}
		.quangcao_khuyenmai .bottom_sp{
			position: relative;
			width: 100%;
			height: 500px;
			clear: both;
		}
		.quangcao_khuyenmai .bottom_sp .btleft{
			position: relative;
			width: 33.33%;
			height: 500px;
			float: left;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.quangcao_khuyenmai .bottom_sp .btcenter{	position: relative;
			width: 33.33%;
			height: 500px;
			
			float: left;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.quangcao_khuyenmai .bottom_sp .btright{
			position: relative;
			width: 33.33%;
			height: 500px;
			float: left;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.quangcao_khuyenmai .bottom_sp .btleft #hoversp
		{
			padding-top: 3%;
			width: 100%;
			height:25vh;
			position: absolute;
			visibility: visible;
			opacity: 0;
			transition: 0.6s ease;
			 
		}
		.quangcao_khuyenmai .bottom_sp .btleft:hover > #hoversp{
/*			position: absolute;*/
			visibility: visible;
			opacity: 1;
			animation: fadeInUp;
  			animation-duration: 0.5s;

		}
/*SAN PHAM QUAN CAO CENTETR*/
		.quangcao_khuyenmai .bottom_sp .btcenter #hoversp
		{
			padding-top: 3%;
			width: 100%;
			height:25vh;
			position: absolute;
			visibility: visible;
			opacity: 0;
			transition: 0.6s ease;
			 
		}
		.quangcao_khuyenmai .bottom_sp .btcenter:hover > #hoversp{
/*			position: absolute;*/
			visibility: visible;
			opacity: 1;
			animation: fadeInUp;
  			animation-duration: 0.5s;

		}
/*		SAN PHAM RIGHT: -----;*/
		.quangcao_khuyenmai .bottom_sp .btright #hoversp
		{
			padding-top: 3%;
			width: 100%;
			height:25vh;
			position: absolute;
			visibility: visible;
			opacity: 0;
			transition: 0.6s ease;
			 
		}
		.quangcao_khuyenmai .bottom_sp .btright:hover > #hoversp{
/*			position: absolute;*/
			visibility: visible;
			opacity: 1;
			animation: fadeInUp;
  			animation-duration: 0.5s;

		}
		
/*
		.quangcao_khuyenmai .bottom_sp .btleft #hoversp::before:hover{
			visibility: visible;
			opacity: 1;
		}
*/
.banner_quangcao{
	display: flex;
	width: 1200px;
	height: 400px;
	
}
.qc_video{
	position:relative;
	margin-top: 10px;
	width: 650px;
	height: 350px;
	float: left;
}
.qc_video video{
	outline: none;
}
.baiviet_qc{
	position: relative;
	width: 550px;
	height: 300px;
	float: left;
}
/*
.baiviet_qc .tieude_bv{
	width: 400px;
	background-color: #F17523;
	float: left;
	color: #F4F0F0;
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	line-height: 50px;
	padding-left: 10px;
	border-bottom-right-radius: 20px;

}
*/
.baiviet_qc ul#ul_bv{
	margin: 0px;
	padding: 0px;
}
.baiviet_qc marquee{
	top: 30%;
	left: 19%;
	width: 350px;
	height: 270px;
}
		
/*		----- GIAO HANG CROSS------------------*/
		.giaohangcross{
			position: relative;
			width: 1200px;
			min-height: 15vh;
			background-color:#EF6A1B;
			border-bottom: 5px dashed #FFFFFF;
		}
		.giaohangcross #hi{
			border-top-left-radius: 30px;
			border-top-right-radius: 30px;
			border-bottom-right-radius: 30px;
			position: absolute;
			padding:2%;
			background-color: #0D89F0;
			top: -175%;
			left: 40%;
			visibility: hidden;
			opacity: 0;	
			animation: dich_chuyen 10s linear infinite;
			
		}
		.giaohangcross img{
			width: 20%;
			position: absolute;
			top: -120%;	
			animation: dich_chuyen 10s linear infinite;
		}
		.giaohangcross img + .giaohangcross #hi{
			visibility: visible;
			opacity: 1;
		}
		@keyframes dich_chuyen{
			from{
				left: 0%;
			}
			to{
				left: 80%;
				transition: 0.5s;
				
			}
			
		}
		@keyframes dich_chuyen_hi{
			20% {left: 20%;visibility: visible; opacity: 1};
			80% {left: 80%; visibility: visible; opacity: 1};
		}
		
/*		FOOTER ----------------------------*/
.footer{
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	width: 1200px;
	height: 320px;
	color:#000000;
	background-color: #E76713;
	padding-bottom: 10px;
	font-size: 10px;
	position: static;
}
.footer .footer_left{
	padding-left: 25px;
	float: left;
	width: 275px;
	height: 280px;
}
.footer .footer_left li a{
	color: #000000;
}
.footer .footer_left li a:hover{
	color: #085503;
}
.footer .footer_center{
	padding-top: 100px;
	float: left;
	width: 500px;
	height: 180px;
}
.footer .footer_center ul li{
	font-size: 12px;
		text-align: center;
}
.footer .footer_right{
	padding-top: 50px;
	padding-left: 30px;
	float: left;
	width: 370px;
	height: 230px;
}
.footer .footer_right tr td{
	margin-left: 2px;
}
.footer ul {
	margin: 0px;	
	padding: 0px;
}
.footer table{
	margin: 0px;
	padding: 0px;
}
.footer table tr td input{
	outline: none;
	margin:1px 5px 1px 5px;
	padding: 5px;
	background-color: #7E7D7D;
	opacity: 50%;
}
.footer table tr td input:focus{
	opacity: 100%;
}

	</style>

</head>
	

<body>
	
	<?php include("login/config.php");
	?>
	<!--MENU	-->
	<div class="relative">
		<div class="menu">
			<ul>
				<!-- TRANG CHỦ -->
				<a href="index.php" >
					<li>
						<ion-icon name="home"></ion-icon><b style="margin-left: 3px;">TRANG CHỦ</b>
					</li>
				</a>
	<!--
				<li class="dropdown">
					<a><svg style="margin-right: 6px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
						<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
					</svg><b>ĐỒNG HỒ</b></a>
					<div class="dropdown-content">
					<a href="index.php?sanpham=nam"><b>ĐỒNG HỒ NAM</b></a>
						<a href="index.php?sanpham=nu"><b>ĐỒNG HỒ NỮ</b></a>
					</div>
				
				</li>
	-->
	<!-- GIỎ HÀNG -->
				<?php if(isset($_COOKIE['mskh'])){ ?>
					<a href="index.php?danhmuc=giohang">
						<li><b><ion-icon name="cart"></ion-icon>GIỎ HÀNG</b></li>
					</a>
				<?php } ?>
				<!-- GIỚI THIỆU -->
				<a href="index.php?menu=gioithieu">
					<li ><ion-icon name="logo-rss"></ion-icon><b style="margin-left: 3px;">GIỚI THIỆU</b></li>
				</a>
				<!-- TÀI KHOẢN -->
				<a href="index.php?menu=taikhoan">
					<li><ion-icon name="person-sharp"></ion-icon><b style="margin-left: 3px;">TÀI KHOẢN</b></li>
				</a>
				<!-- LIÊN HỆ -->
				<a href="index.php?menu=lienhe">
					<li><ion-icon name="call-sharp"></ion-icon><b style="margin-left: 3px;">LIÊN HỆ</b></li>
				</a>
			</ul>
		</div>
	</div>
	<div class="top">
		<div class="chungnang_login">
			<ul>
		<?php
			if(isset($_COOKIE['mskh'])){
			include("xuly/thanhdangnhap_dangxuat.php");					  
			}else{ ?>
				<li><a href="dangnhap.php">ĐĂNG NHẬP</a></li>
				<li><a href="dangky.php">ĐĂNG KÝ</a></li>
 			<?php } ?>
			</ul>
		</div>
	</div>

<!--	SLIDE HINH-->
	<div class="slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
	  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img style="height: 360px;" src="img/slide3.png" class="d-block w-100">
			</div>
			<div class="carousel-item">
			  <img src="img/sl2.png" class="d-block w-100">
			</div>
			<div class="carousel-item">
			  <img src="img/sl1.png" class="d-block w-100">
			</div>
	  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
	 </div>
	</div>
<!-- TRANG HIEN THI SAN PHAM -->
	<div class="content" id="main_qc">
		<?php 
			if(isset($_GET['menu'])){
				$menu = $_GET['menu'];
			}else{
				$menu = "";
			}
			if($menu == 'gioithieu'){
				include("xuly/hotro.php");
			}elseif($menu == 'taikhoan'){
				include("xuly/taikhoan.php");
			}elseif($menu =='lienhe'){
				include("xuly/lienhe.php");
			}
			// LẤY ID SẢN PHẨM HIỆN TRANG CHI TIẾT SẢN PHẨM
				if(isset($_GET['id'])){
					include("chitiet.php");
				}else if(isset($_GET['danhmuc'])){
					$tam = $_GET['danhmuc'];
					if($tam == 'giohang'){
						include("sanpham/giohang.php");	
					}
				}else{ ?>
					<?php include("xuly/main.php"); 
				}
			/*THANH MENU */
			
		?>
	</div>
	<!-- BANNER QUẢNG CÁO VIDEO VÀ TIN TỨC -->
	<div class="banner_quangcao">
		<!-- VIDEO -->
		<div class="qc_video">
			<video controls loop style="width: 650px; height: 350px; float: left;">
				<source src="img/video_quangcao/5894930740336254818.mp4">
			</video>
		</div>
		<!-- BÀI VIẾT -->
		<dv class="baiviet_qc">
			<img src="img/video_quangcao/nocnhaqc.png" style="position: absolute;width: 100%;top:-5px;" />
				<marquee direction="up" scrollamount="3" style="position: absolute; z-index: -2;">
					<?php 
						$truyvan_baiviet = "SELECT TieuDe, motangan, src FROM BaiViet";
						$query_bv = mysqli_query($mysqli, $truyvan_baiviet);
						while($result_bv = mysqli_fetch_array($query_bv)){
							?>
						<ul id="ul_bv" style="padding-left:5px;">
							<li id="tieude_qc" style="	border-bottom: 1px solid #E97622;padding-top: 5px;font-size: 13px;">
								<a href="<?php echo $result_bv['src']; ?>"><b id="bol_tieude" style="color:#0055B7;"><?php echo $result_bv['TieuDe']; ?></b>
									<ul id="con_ul_bv">
										<li style="padding-bottom: 10px; color: #4B4A4A;"><?php echo $result_bv['motangan']; ?></li>
									</ul>
								</a>
							</li>
						</ul>
					<?php } ?>	
				</marquee>
		</div>
	</div>
	<!-- HÌNH ĐỌNG SHIPPER GIAO HÀNG -->
	<div class="giaohangcross">
		<span id="hi">
			<b>Hi<br>Quých Đi ! </b>
		</span>
		<img src="img/video_quangcao/—Pngtree—delivery scooter boy with mask_5431954.png"/>
	</div>
	</div>
<!-- CHÂN TRANG -->
	<div class="footer">
		<div class="footer_left">
			<ul>
				<li style="margin-top: 20px; width: 80%; text-align: center;">
					<img style="width: 100%;" src="img/logo/logo.png"/> DiViLaShop
				</li>
				<li style="border-bottom: 1px solid #5C5B5B; margin-bottom: 8px; margin-top: 25px; padding-bottom: 5px;">
					<b>THÔNG TIN LIÊN HỆ</b>
				</li>
				<li>
					<ion-icon name="mail-sharp"></ion-icon>Email: quychdi113@gmail.com
				</li>
				<li>
					<ion-icon name="call-sharp"></ion-icon>SĐT: 0399012157</li>
				<li style="border-bottom: 1px solid #5C5B5B;border-top: 1px solid #5C5B5B; margin-bottom: 8px; margin-top: 8px; height: 30px; line-height: 30px;">
					<b>CHÍNH SÁCH</b>
				</li>
				<li>
					<a href="#"><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
						<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
						</svg>Chính sách bảo mật thông tin </a>
				</li>
				<li>
					<a href="#"><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
						<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
						</svg>Chính sách bảo hành
					</a>
				</li>
				<li>
					<a href="#"><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
						<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
						</svg>Chính sách trả hàng
					</a>
				</li>
			</ul>
		</div>
		<div class="footer_center">
			<ul>
				<li>
					<svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
					<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
					</svg>ĐỊA CHỈ
				</li>
				<li>
					<svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
					</svg>Địa chỉ khu 1: ĐƯỜNG 30/4 TRẦN HƯNG ĐẠO TT TRI TÔN - AN GIANG
				</li>
				<li>
					<svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
					</svg>Địa chỉ khu 2: TRƯỜNG ĐH CẦN THƠ - P.XUÂN KHÁNH- Q.NINH KIỀU TP CẦN THƠ</li>
			</ul>
		</div>
		<div class="footer_right">
			<b>LIÊN HỆ VỚI CHÚNG TÔI<svg style="margin-left: 8px; color: #0867EB; width: 30px; height: 
					30px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
				<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg>
			</b>
			<form action="" method="post" name="contact">
				<table style="margin-top: 15px; margin-left: 10px;">
					<tr>
						<td>Email: </td>
						<td><input style="width: 200px; height: 20px;" type="email" name="email_contact" value=""/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					<td><input style="width: 200px; height: 30px;" type="text" name="contact_txt" value=""/></td>
					</tr>
					<tr><td>&nbsp;</td>
						<td><input type="submit" style="opacity: 100%; width: 50px; background-color: #2D7807; color: #F5F1F1;" name="submit" value="GỬI" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
<!--	SCRIP SLIDER-->

<!--	XOA DON HANG-->
				
<?php
				if(isset($_GET['xoa_dh'])){
					$time = time();
					$date = date('Y-m-d');	
	$delete = "DELETE FROM DATHANG WHERE NGAYDH IS NOT NULL AND MSNV IS NULL";
					$check_ngaydh = "SELECT chitietdathang.SoLuong, chitietdathang.MSHH,dathang.NGAYGH as ngaygh FROM DATHANG, chitietdathang WHERE chitietdathang.SoDonDH = dathang.SoDonDH AND dathang.SoDonDH = '".$_GET['xoa_dh']."'";
	$qr_chkngdh = mysqli_query($mysqli, $check_ngaydh);
	$num_chkngaydh = mysqli_fetch_array($qr_chkngdh);
					if($date < $num_chkngaydh['ngaygh']){
						mysqli_query($mysqli,$delete);
						
					?>
	<script>
	alert("Xóa Đơn Hàng Thành Công.");
		window.location = "index.php?danhmuc=giohang";
	</script>
			<?php	}elseif($num_chkngaydh['ngaygh'] == NULL) {
		mysqli_query($mysqli,$delete);
	?>
<script>
	alert("Xóa Đơn Hàng Thành Công.");
		window.location = "index.php?danhmuc=giohang";
	</script>
				<?php	}elseif($date == $num_chkngaydh['ngaygh']){?>
						<script>
		alert("Xóa Đơn Hàng Không Còn Hiệu Lực...");
		window.location = "index.php?danhmuc=giohang";
	</script>	
					<?php }
				
				}
				?>
<!--	MUA TRONG GIO HANG-->
	<?php
	$time = time();
	$date = date('y-m-d H:i:s');
	if(isset($_GET['mua_sp'])){
		$soluong_mua = "SELECT CHITIETDATHANG.SOLUONG, CHITIETDATHANG.GIADATHANG*CHITIETDATHANG.SOLUONG AS gia_dh, 
		CHITIETDATHANG.GIAMGIA*SOLUONG as giam_gia 
		FROM CHITIETDATHANG JOIN DATHANG ON CHITIETDATHANG.SODONDH = DATHANG.SODONDH 
		WHERE  CHITIETDATHANG.SODONDH = '".$_GET['mua_sp']."'";
		echo $soluong_mua;
		$qr_sl = mysqli_query($mysqli, $soluong_mua);
		$row = mysqli_fetch_array($qr_sl);
		$giadh = $row['gia_dh'];
		$giamgia = $row['giam_gia'];
		$gia_dat_hang = 0;
		if($row['giam_gia'] > 0){
			 $gia_dat_hang = $row['giam_gia'];
		}else{
			 $gia_dat_hang = $row['gia_dh'];
		}
			$update = "UPDATE DATHANG SET NGAYDH= '$date' 
			WHERE SoDonDH = '".$_GET['mua_sp']."'";
	
			$update_gia_dathang = "UPDATE CHITIETDATHANG SET GIADATHANG = '$gia_dat_hang'
			WHERE SODONDH = '".$_GET['mua_sp']."' ";
			// QUERY THEM NGAY DAT HANG VAO BANG DAT HANG KHI NHAN NUT MUA TREN GIO HANG
			mysqli_query($mysqli, $update);
			// QUERY CAP NHAT LAI SO TIEN DAT HANG VAO BANG CHI TIET DAT HANG 
			mysqli_query($mysqli, $update_gia_dathang);
		?>
	<script>
		alert("Đặt hàng thành công ");
		window.location = "index.php?danhmuc=giohang";
	</script>
<?php	}
	?>
<!--XOA TRONG GIO HANG-->
	<?php 
		if(isset($_GET['xoa_giohang'])){
			$delet_giohang = "DELETE FROM chitietdathang WHERE chitietdathang.mshh = '".$_GET['xoa_giohang']."'";
			mysqli_query($mysqli, $delet_giohang);
			?>
	<script>
		alert("Xóa giỏ hàng thành công.");
			window.location = "index.php?danhmuc=giohang";
	</script>
	<?php
			echo $_GET['xoa_giohang'];
		}
	?>
	<!-- DDANG XUAT -->
	<?php
		include("xuly/mua_themgiohang.php");
		log_out();
	?>
<!--	scipt slide anh-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<meta charset="utf-8">
	<script type="text/javascript" language="javascript">
		function click_xemqc(){
			var blur = document.getElementById("main_qc");
			blur.classList.toggle('active');
			var popup = document.getElementById("popup");
			popup.classList.toggle('active');
		}
	</script>
</html>