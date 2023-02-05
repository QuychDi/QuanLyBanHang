<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<style>
	*{
	margin: 0 auto;
	padding: 0 auto;
}
#content{
	position: relative;
	margin-top: 150px;
	width: 500px;
	height: 350px;
	border: 2px solid #E76C12;
	padding-top: 20px;
	box-shadow: 0px 0px 20px 0px #888888;
}
h2{
	margin-bottom: 5px;
	text-align: center;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	color: #E75010;
}
#content input{
	/* position: absolute; */
	display: flex;
	padding-left: 12%;
	justify-content: center;
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
	background-color: none;
}
button{
	position: relative;
	margin-top: 2px;
	width: 120px;
	height: 28px;
	font-size: 13px;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	line-height: 28px;
	/* display: flex; */
	justify-content: center;
	/* float: left; */
	background-color: #F8B56B;
	border: none;
	outline: none;
	color: #AD4602;
	transform: translate(118%,0%);
}
button:hover {
	background-color:  #AD4602;
	color: #FBF8F8;
}
#content .dangky{
	font-size: 13px;
	text-align: center;
	margin-top: 5%;
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
	color: #605E5E;
}
#content .dangky a{
	text-decoration: none;
	font-size: 14px;
	color: #E6380D;
}
#content .dangky a:hover {
	text-decoration-line: overline;
}
		#icon_index:hover{
			color: #FEB100;
		}

	</style>

</head>
<body>
	<form action="xulydangnhap.php" method="POST">
	<div id="content">
		
		<h2>ĐĂNG NHẬP</h2>
			<p class="logo"><img style="width: 80px;padding-left: 150px;padding-bottom: 15px" src="img/logo/logo.png" /></p>
			<table>
		<tr>
			<td>
				<svg style="position:fixed; height: 15px; width: 15px; margin-top: 8px; margin-left: 10px; opacity: 0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
				<input type="text" name="tendangnhap" placeholder="Số điện thoại"  value=""/></td>
			</tr>
			<tr>
			<td>
				<svg style="position:fixed; height: 15px; width: 15px; margin-top: 8px; margin-left: 10px; opacity: 0.5" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg>
				<input type="password" placeholder="Mật khẩu" name="matkhau"  value=""/></td>
			</tr>
				
				</table>
			<button type="submit" name="submit"><b>ĐĂNG NHẬP</b></button>
			<button type="reset" name="rest"><b>KHÔI PHỤC</b></button>
		
		<div class="dangky"><a href="index.php"><svg id=icon_index xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
			</svg></a> Bạn mới biết đến DiViLa Shope ?<a href="dangky.php"> Đăng Ký</a></div>
	</div>
		</form>
</body>
</html>