<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dng nhap</title>
	<style>
		*{
			margin: 0 auto;
			padding: 0 auto;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		}
		.main_index{
			margin-top: 100px;
			width: 500px;
			height: 500px;
			background-color: #2789DC;
			border-radius: 50px;
			box-shadow: 20px 20px 5px #aaaaaa;
		}
		.main_index table{
			padding-top: 80px;
		}
		.main_index table th{
			padding-bottom:  10px;
		}
		.main_index table input{
			width: 300px;
			height: 30px;
			outline: none;
			margin-bottom: 5px;
			border-radius: 10px;
			padding-left: 10px;
		}

		.main_index table tr td button{
			margin-top: 10px;
			width: 180px;
			height: 30px;
			margin-left: 60px;
			outline: none;
			border-radius: 20px;
			background-color: #EFEFEF;
			
		}
		.main_index table tr td button:hover{
			background-color:#888888;
			
		}
	</style>

</head>
<body>
	<form action="xuly/xuly_dangnhap.php" method="POST">
	<div class="main_index">
		
	<table>
		<tr>
		<th><img src="images/icondangnhap.png" style="width: 80px;" /></th>
		</tr>
		<tr>
		<th style="color: #F7F5F5;;; font-size: 25px;">ĐĂNG NHẬP</th>
			<tr>
		<td><input type="text" name="user_name" value="" placeholder="Tên Đăng Nhập"/></td>
		</tr>
		<tr>
		<td><input type="password" name="pass_user" value="" placeholder="Mật Khẩu"/></td>
		</tr>
		<tr>
		<td><button type="submit" name="dangnhap" onClick="check()"><b style="color: #1552E4;">ĐĂNG NHẬP</b></button></td>
		</tr>
		</table>
	</div>
		</form>
		
</body>
</html>
