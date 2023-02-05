<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng ký tài khoản</title>
		<style>
	*{
	margin: 0 auto;
	padding: 0 auto;
}
			li{
				text-decoration:  none;
				list-style: none;
			}
			ul{
			 margin: 0px;
			padding: 0px;
			}
#content{
	margin-top: 150px;
	width: 540px;
	height: 530px;
	border: 2px solid #E76C12;
	padding-top: 20px;
	border-radius: 20px;
	box-shadow: 0px 0px 20px 0px #888888;
}
h2{
	margin-bottom: 5px;
	text-align: center;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	color: #E75010;
}
#content input{
	padding-left: 30px;
	outline: none;
	margin-bottom: 5px;
	height: 24px;
	width: 220px;
	border-radius: 10px;
	border: 1px solid #EC600C;
 }
#content input:hover{
	border: 1px solid #10E21E;
}
#content input:focus{
	background-color: #3789A9;
}
			.nut{
				width: 310px;
				margin-bottom: 20px;
				padding-left: 170px;
				padding-top: 10px;
			}
button{
	height: 28px;
	width: 120px;
	font-size: 13px;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	line-height: 28px;
	background-color: #F8B56B;
	border: none;
	outline: none;
	color: #AD4602;
}
button:hover {
	background-color:  #AD4602;
	color: #FBF8F8;
}
#content .dangnhap{
	margin-top: 6%;
	width: 150px;
	background-color: #FFFFFF;
	font-size: 13px;
	text-align: center;
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
	color: #605E5E;
}
#content .dangnhap a{
	text-decoration: none;
	font-size: 14px;
	color: #E6380D;
}
#content .dangnhap a:hover {
	text-decoration-line: overline;
	
}
	</style>
</head>
<body>
	<div id="content">
	<h2>ĐĂNG KÝ THÀNH VIÊN</h2>
				<div id="clear"></div>
<p class="logo"><img style="padding-left: 30%; width: 40%"  src="img\logo\logo.png"/></p>
		<form action="xuly/xulyDKTK.php" method="post">
		<table>
			<tr>
				<td>Họ và Tên </td>
				<td><input type="text" name="hoten_KH" required value=""/></td>
			</tr>
			<tr>
				<td>Tên công ty </td>
				<td><input type="text" name="tencongty" value=""/></td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="email" required value=""/></td>
			</tr>
			<tr>
				<td>Địa chỉ </td>
				<td><input type="text" name="diachi_KH" required value=""/></td>
			</tr>
			<tr>
				<td>Số điện thoại </td>
				<td><input type="text" name="soDT" required value=""/></td>
			</tr>
			<tr>
				<td>Mật khẩu </td>
				<td><input type="password" name="matkhau_KH" required value=""/></td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu </td>
				<td><input type="password" name="nhaplaimk_KH" required value=""/></td>
			</tr>
			</table>
			<div class="nut">
				<button type="submit"  name="dangky" onClick="check()" ><b>ĐĂNG KÝ</b></button>
				<button type="reset"><b>RESET</b></button>
				</div>
				</form>
		<div class="dangnhap">
			<li><a href="dangnhap.php"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a><a href="dangnhap.php" style="color: #8B8687;">Quay về đăng nhập</a></li>
		</div>
	</div>
	<?php 
	
	?>
</body>
</html>
