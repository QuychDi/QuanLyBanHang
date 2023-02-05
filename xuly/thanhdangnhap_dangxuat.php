		<div class="chungnang_login">
		<ul>
			<li style="width: 180px;"><a><b style="color: #FFDE04;"><?php
				$mskh = $_COOKIE['mskh'];
				$TENKH = "SELECT HoTenKH FROM KHACHHANG WHERE MSKH = '$mskh'";
				$truyvan = mysqli_query($mysqli, $TENKH);
				$row = mysqli_fetch_array($truyvan);
				echo  'Xin chào ' .$row['HoTenKH']; ?></b></a></li>
			<li><a href="index.php?log_out=1">DANG XUAT</a></li>
<!--				<input type="submit" name="log_out" value="ĐĂNG XUẤT"/></li>-->
		</ul>
	</div>
<?php 
	
	?>