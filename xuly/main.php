<div class="main">
<!--
		<div class="main_quangcao"> -->
	<?php include("quangcao.php"); ?>
<!--	</div>-->

<div id="sanphammoinhat">
		<div class="title_spmoinhat">
		<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
</svg>
			<b>SẢN PHẨM MỚI NHẤT</b></li></div>
		<div class="sanpham">

<!--			<form action="" method="get"> -->
					<ul>
				<?php
			$sq = "SELECT MSHH ,Gia, IMAGE, QuyCach ,tenHH, QuyCach * Gia as giamgia FROM hanghoa";
			$thucthi = mysqli_query($mysqli,$sq);
			while($kt= mysqli_fetch_array($thucthi)){
				$_SESSION['id_hh'] = $kt['MSHH'];
						?>
						
						<a href="index.php?id=<?php echo $_SESSION['id_hh'];?>">
					<li style="z-index: -1">
						<table>
					<tr>
						<td><img style="width:90%; margin-bottom: 10px; padding-top: 8px;" src="img/img_sanpham/<?php echo $kt['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color:#D5700D; font-size: 13px;"><?php echo $kt['tenHH']; ?></b></td></tr>
						<?php if($kt['giamgia'] > 0){?>
							<tr>
								<td><strike><span style="color:#;">Giá:</span> <b style="color:#383636; font-size: 13px;"><?php echo number_format($kt['Gia']).' VNĐ'; ?></b></strike></td>
							</tr>
							<tr>
								<td><span style="color:#C7240D  ">Giảm còn:</span> <b style="color:#CE0307; font-size: 14px;"><?php echo number_format($kt['QuyCach']).' VNĐ'; ?></b></td>
							</tr>
							<tr>
							<?php }else{ ?>
								<td><span style="color:#C7240D  ">Giá:</span> <b style="color:#CE0307; font-size: 14px;"><?php echo number_format($kt['Gia']). ' VNĐ'; ?></b></td>
							</tr>
							<?php } ?>
					<tr><td><a style="color: #DA6202;" href="index.php?id=<?php echo $kt['MSHH'];?>" name="xem">XEM CHI TIẾT</a></td></tr>
							
							</table>
						</li>
							</a>
			<?php }?>
						</ul>
<!--				</form>-->
			
			</div>
			
		</div>
	<div class="quancaosp" style="display: flex; position:relative">
		<div id="clear"></div>
		<div id="avatasp">
		<?php
			$hinhqc = "SELECT MSHH,TENHH,IMAGE,QUYCACH as giamgia,GIA as giagoc,soluonghang ,GHICHU FROM HANGHOA WHERE MSHH ='HH000029' ";
			$truyvan = mysqli_query($mysqli, $hinhqc);
			$num_r = mysqli_fetch_array($truyvan);
			?>
			<img style="width: 30%;position: absolute; left:0%;top:15%; " src="img/img_sanpham/<?php echo $num_r['IMAGE']; ?>"/>
			
		</div>
		<div id="thongtinkhuyenmai" style="position: absolute ;top: 28%; left: 30%; max-width: auto;">
			<div class="slogan"><b style="font-size: 40px; position: absolute; ">KHUYẾN MÃI</b><br><b style="font-size: 60px; padding-left: 8%;">30/12/2021</b></div>
			<div class="btn_giaban" style="margin-top: 2%; width: 100%; height: 80px; margin-bottom: 5%;">
				<?php 
				if($num_r['giamgia'] > 0){?>
				<span class="giamgia" style="padding-left: 6%;"><b>Giá Gốc:</b> <b style="color:#858282; font-size: 20px;">
					<strike><?php echo number_format($num_r['giagoc']).'VNĐ'; ?></strike></b>
				</span>
				<br>
				<span style="padding-left: 2%;" class="dongian_ban"><b>Giảm còn: </b> <b style="font-size: 30px; color: #E92E00;"><?php echo number_format($num_r['giamgia']).'VNĐ'; ?></b></span>
				
				<?php }else{ ?>
		 <span class="giamgia" >Đơn giá: <b style="color:#C0080B; font-size: 20px;"><?php echo number_format( $num_r['giagoc']).'VNĐ'; ?></b></span>
										 <?php  } ?>
			</div>
			<a id="click_xemthem" onClick="click_xemqc();" href="#" >XEM THÊM</a>
			<div class="content" id="popup">
				<a id="click_close" onClick="click_xemqc();" href="#" ><ion-icon name="close-circle-sharp"></ion-icon></a>
					<div class="imgsp">
						<img style="width: 90%" src="img/img_sanpham/<?php echo $num_r['IMAGE']; ?>"/>
					</div>
					<div class="thongtinchtiet">
						<span style="">
						<?php echo $num_r['GHICHU']; ?>
							</span>
						<br>
						<span>
							<b style="color: #DD1519">Số lượng hàng: <?php echo $num_r['soluonghang']; ?></b>
						</span>
						<br>
						<?php	
				if($num_r['giamgia'] > 0){?>
				<span class="giamgia" style="padding-left: 6%;"><b>Giá Gốc:</b> <b style="color:#858282; font-size: 20px;"><strike><?php echo number_format($num_r['giagoc']).'VNĐ'; ?></strike></b></span>
				<br>
				<span style="padding-left: 2%;" class="dongian_ban"><b>Giảm còn: </b> <b style="font-size: 30px; color: #E92E00;"><?php echo number_format($num_r['giamgia']).'VNĐ'; ?></b></span>
				
				<?php }else{ ?>
		 <span class="giamgia" >Đơn giá: <b style="color:#C0080B; font-size: 20px;"><?php echo number_format( $num_r['giagoc']).'VNĐ'; ?></b></span>
										 <?php  } ?>
					</div>
				<div class="btn_mua_km" style="position: absolute; top: 75%; left: 50%;">			
					<form action="" method="post">
					<div class="mua"><input type="submit" id="input_mua" name="themgiohang" value="THÊM GIỎ HÀNG" style="padding: 5%; border:none; background-color: #057B00; color: #FFFFFF; border-radius: 5px;"/></div></div>
					</form>
			
			</div>
			</div>
	</div>
<!--	SAN PHAM ---------------->
		<div id="sanphamNam">
			<div class="left_nam">
			<div class="title">
				<div class="title_spnam">
					<svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
  <path d="M2.125 8.567l-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
</svg>
				<b>LAPTOP APPLE</b></div>
				</div>
				<div class="sanpham">
				<ul>
				<?php
			$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MaLoaiHang='1'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
			while($kt2= mysqli_fetch_array($thucthi2)){
					$_SESSION['id_hh'] = $kt2['MSHH'];?>
						<a href="index.php?id=<?php echo $_SESSION['id_hh']; ?>">
					<li>
						<table>
					<tr>
						<td><img style="width: 80%; margin-bottom: 10px;" src="img/img_sanpham/<?php echo $kt2['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color:#F58312; font-size: 14px;"><?php echo $kt2['tenHH']; ?></b></td></tr>
							<?php if($kt2['giamgia']>0){ ?>
						<tr>
							<td style="color: #353535; font-size: 12px; "><strike ><span>Giá:</span> <b><?php echo $kt2['Gia']; ?> VNĐ</b></trike></td>
						</tr>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span style="color:#C7240D  ">Giảm còn:</span> <b ><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php }else{ ?>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span>Giá:</span> <b><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php } ?>
							<tr><td style="width: 180px; height:40px;"><a style="color: #DC7A39; font-size: 13px" href="index.php?id=<?php echo $kt2['MSHH'];?>" name="xem">XEM CHI TIẾT</a></td></tr>
							</table>
						</li>
					</a>
			<?php }?>
						</ul>
				</div>
				<div class="sanpham_khuyenmai">
				<div id="avatasp"></div>
				<div id="thongtingiasp"></div>	
				</div>
			</div>
			<div class="right_nam"><img src="img/babber_nam.gif"/></div>
		</div>
<!--	SAN PHAM DELL-->
	<div id="sanphamNam">
			<div class="left_nam" style="width: 100%;margin: 0 auto; padding: 0 auto;">
			<div class="title">
				<div class="title_spnam">
					<svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
  <path d="M2.125 8.567l-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
</svg>
				<b>LAPTOP DELL</b></div>
				</div>
				<div class="sanpham" style="width: 100%;">
				<ul>
				<?php
			$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MaLoaiHang='2'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
			while($kt2= mysqli_fetch_array($thucthi2)){
					$_SESSION['id_hh'] = $kt2['MSHH'];?>
						<a href="index.php?id=<?php echo $_SESSION['id_hh']; ?>">
					<li>
						<table>
					<tr>
						<td><img style="width: 80%; margin-bottom: 10px;" src="img/img_sanpham/<?php echo $kt2['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color:#F58312; font-size: 14px;"><?php echo $kt2['tenHH']; ?></b></td></tr>
							<?php if($kt2['giamgia']>0){ ?>
						<tr>
							<td style="color: #353535; font-size: 12px; "><strike ><span>Giá:</span> <b><?php echo $kt2['Gia']; ?> VNĐ</b></trike></td>
						</tr>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span style="color:#C7240D  ">Giảm còn:</span> <b ><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php }else{ ?>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span>Giá:</span> <b><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php } ?>
							<tr><td style="width: 180px; height:40px;"><a style="color: #DC7A39; font-size: 13px" href="index.php?id=<?php echo $kt2['MSHH'];?>" name="xem">XEM CHI TIẾT</a></td></tr>
							</table>
						</li>
					</a>
			<?php }?>
						</ul>
				</div>
				<div class="sanpham_khuyenmai">
				<div id="avatasp"></div>
				<div id="thongtingiasp"></div>	
				</div>
			</div>
		</div>
<!--	-->
<!--				SAN PHAM HP------------------------------------->
				<div id="sanphamNam">
			<div class="left_nam" style="width: 100%;margin: 0 auto; padding: 0 auto;">
			<div class="title">
				<div class="title_spnam">
					<svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
  <path d="M2.125 8.567l-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
</svg>
				<b>LAPTOP HP</b></div>
				</div>
				<div class="sanpham" style="width: 100%;">
				<ul>
				<?php
			$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MaLoaiHang='3'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
			while($kt2= mysqli_fetch_array($thucthi2)){
					$_SESSION['id_hh'] = $kt2['MSHH'];?>
						<a href="index.php?id=<?php echo $_SESSION['id_hh']; ?>">
					<li>
						<table>
					<tr>
						<td><img style="width: 80%; margin-bottom: 10px;" src="img/img_sanpham/<?php echo $kt2['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color:#F58312; font-size: 14px;"><?php echo $kt2['tenHH']; ?></b></td></tr>
							<?php if($kt2['giamgia']>0){ ?>
						<tr>
							<td style="color: #353535; font-size: 12px; "><strike ><span>Giá:</span> <b><?php echo $kt2['Gia']; ?> VNĐ</b></trike></td>
						</tr>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span style="color:#C7240D  ">Giảm còn:</span> <b ><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php }else{ ?>
							<tr>
							<td style="color: #D14F17; font-size: 14px;"><span>Giá:</span> <b><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php } ?>
							<tr><td style="width: 180px; height:40px;"><a style="color: #DC7A39; font-size: 13px" href="index.php?id=<?php echo $kt2['MSHH'];?>" name="xem">XEM CHI TIẾT</a></td></tr>
							</table>
						</li>
					</a>
			<?php }?>
						</ul>
				</div>
				<div class="sanpham_khuyenmai">
				<div id="avatasp"></div>
				<div id="thongtingiasp"></div>	
				</div>
			</div>
		</div>
<!--				-------------------------->
<!--	---------SAN PHAM LAPTOP ASUS---------------------------->
		<div id="sanphamNu">
			<div class="left_nu"><img src="img/baner_nu1.gif"  style="width: 100%"/></div>
			<div class="right_nu"><div class="title"><ion-icon name="laptop-outline"></ion-icon><b style="padding-left: 2px">LAPTOP ASUS</b></div>
			<div class="sanpham">
				<ul>
				<?php
			$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MaLoaiHang='4'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
			while($kt2= mysqli_fetch_array($thucthi2)){
					$_SESSION['id_hh'] = $kt2['MSHH'];?>
						<a href="index.php?id=<?php echo $_SESSION['id_hh']; ?>">
					<li>
						<table>
					<tr>
						<td><img style="width: 80%; margin-bottom: 8px;" src="img/img_sanpham/<?php echo $kt2['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color: #C7240D; font-size: 14px;"><?php echo $kt2['tenHH']; ?></b></td></tr>
							<?php if($kt2['giamgia']>0){ ?>
						<tr>
							<td style="color: #353535; font-size: 12px; "><strike ><span>Giá:</span> <b><?php echo number_format($kt2['Gia']).' VNĐ'; ?> </b></trike></td>
						</tr>
							<tr>
							<td><span style="color:#C7240D  ">Giảm còn:</span> <b style="color: #D10000; font-size: 14px;"><?php echo number_format($kt2['Gia']).' VNĐ'; ?></b></td>
						</tr>
							<?php } else { ?>
							<tr>
							<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($kt2['Gia']).' VNĐ'; ?></b></td>
						</tr>
							<?php } ?>
							<tr><td style="width: 180px; height:40px;"><a style="color: #DC7A39; font-size: 14px;" href="index.php?id=<?php echo $kt2['MSHH'];?>" name="xem">XEM CHI TIẾT</a></td></tr>
							</table>
						</li>
					</a>
			<?php }?>
						</ul>
			</div>

		</div>
	</div>
<!--	SAN PHAM QUANG CAO KHUYEN MAI-->
	<div class="quangcao_khuyenmai">
		<?php
		$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MSHH = 'HH000026'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
		$sp_qckm = mysqli_fetch_array($thucthi2);
		?>
		<div class="top_left">
		<img style="width: 25%; position: absolute;transform: translate(2%,20%);" src="img/img_sanpham/<?php echo $sp_qckm['IMAGE']; ?>"/>
		<span style="display: flex;position: relative;transform: translate(28%,20%);color:#E20C0F;">
			<b style="font-size: 20px;"><?php echo $sp_qckm['tenHH']; ?></b>
			</span>
			<span style="position: absolute; top: 18%;left: 25%">
			<?php if($sp_qckm['giamgia']>0){ ?>
				<table>
						<tr>
							<td style="color: #353535; font-size: 18px; "><strike><span>Giá:</span> <b><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?> </b></strike></td>
						</tr>
							<tr>
							<td><span style="color:#C7240D  "><b>Giảm còn:</b></span> <b style="color:#FF0509; font-size: 26px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?></b></td>
						</tr>
							<?php } else { ?>
							<tr>
							<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; }
								?></b></td>
				</tr>
					</table>
				</span>
			<a  style="color:#FFF708 ; font-size: 13px; position: absolute;top: 30%; left: 30%; padding: 1%;background-color: #068F38;" href="index.php?id=<?php echo $sp_qckm['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a>
		</div>
<!--		SAN PHAM QUANG CAO BEN PHAI----------->
		<div class="top_right">
			<?php
		$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MSHH = 'HH000002'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
		$sp_qckm = mysqli_fetch_array($thucthi2);
		?>
		<img style="width:55%; position: absolute;transform: translate(0%,10%);" src="img/img_sanpham/<?php echo $sp_qckm['IMAGE']; ?>"/>
		<span style="display: flex;position: relative;transform: translate(28%,18%);color: #E20C0F;;">
			<b style="font-size: 20px;"><?php echo $sp_qckm['tenHH']; ?></b>
			</span>
			<span style="position: absolute; top: 40%;left: 52%">
			<?php if($sp_qckm['giamgia']>0){ ?>
				<table>
						<tr>
							<td style="color: #353535; font-size: 18px; "><strike><span>Giá:</span> <b><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?> </b></strike></td>
						</tr>
							<tr>
							<td><span style="color:#C7240D  "><b>Giảm còn:</b></span> <b style="color:#FF0509; font-size: 26px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?></b></td>
						</tr>
							<?php } else { ?>
							<tr>
							<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; }
								?></b></td>
				</tr>
					</table>
				</span>
			<a  style="color:#FFF708 ; font-size: 13px; position: absolute;top: 68%; left: 65%; padding: 2%;background-color: #068F38;" href="index.php?id=<?php echo $sp_qckm['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a>
		</div>
<!--		QUANG CAO KHUYEN MAI BOTTOM-->
	<div class="bottom_sp">
		<div class="btleft">
		<?php
		$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MSHH = 'HH000023'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
		$sp_qckm = mysqli_fetch_array($thucthi2);
		?>
		<img style="width:80%; position: absolute;" src="img/img_sanpham/<?php echo $sp_qckm['IMAGE']; ?>"/>
		<div id="hoversp" style="position: absolute; top:35%;background-color: #F4F4F4">
			<span style="display: flex;position: relative;color: #E20C0F;;">
				<b style="font-size: 20px;"><?php echo $sp_qckm['tenHH']; ?></b>
				</span>
				<span style="position: absolute;transform: translateY(18%);">
				<?php if($sp_qckm['giamgia']>0){ ?>
					<table>
							<tr>
								<td style="color: #353535; font-size: 18px; "><strike><span>Giá:</span> <b><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?> </b></strike></td>
							</tr>
								<tr>
								<td><span style="color:#C7240D  "><b>Giảm còn:</b></span> <b style="color:#FF0509; font-size: 26px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?></b></td>
							</tr>
								<?php } else { ?>
								<tr>
								<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; }
									?></b></td>
					</tr>
						</table>
					</span>
				<a  style="color:#FFF708;transform: translate(120%,280%);font-size: 13px; position: absolute; padding: 2%;background-color: #068F38;" href="index.php?id=<?php echo $sp_qckm['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a>
			</div>
		</div>
		<div class="btcenter">
		<?php
		$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MSHH = 'HH000022'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
		$sp_qckm = mysqli_fetch_array($thucthi2);
		?>
		<img style="width:100%; position: absolute;" src="img/img_sanpham/<?php echo $sp_qckm['IMAGE']; ?>"/>
		<div id="hoversp" style="position: absolute; top:35%;background-color: #F4F4F4">
			<span style="display: flex;position: relative;color: #E20C0F;;">
				<b style="font-size: 20px;"><?php echo $sp_qckm['tenHH']; ?></b>
				</span>
				<span style="position: absolute;transform: translateY(18%);">
				<?php if($sp_qckm['giamgia']>0){ ?>
					<table>
							<tr>
								<td style="color: #353535; font-size: 18px; "><strike><span>Giá:</span> <b><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?> </b></strike></td>
							</tr>
								<tr>
								<td><span style="color:#C7240D  "><b>Giảm còn:</b></span> <b style="color:#FF0509; font-size: 26px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?></b></td>
							</tr>
								<?php } else { ?>
								<tr>
								<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; }
									?></b></td>
					</tr>
						</table>
					</span>
				<a  style="color:#FFF708;transform: translate(120%,280%);font-size: 13px; position: absolute; padding: 2%;background-color: #068F38;" href="index.php?id=<?php echo $sp_qckm['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a>
			</div>
		</div>
<!--		SAN PHAM RINGT	-->
		<div class="btright">
			<?php
		$sq2 = "SELECT MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM hanghoa WHERE MSHH = 'HH000008'";
			$thucthi2 = mysqli_query($mysqli, $sq2);
		$sp_qckm = mysqli_fetch_array($thucthi2);
		?>
		<img style="width:80%; position: absolute;" src="img/img_sanpham/<?php echo $sp_qckm['IMAGE']; ?>"/>
		<div id="hoversp" style="position: absolute; top:35%;background-color: #F4F4F4">
			<span style="display: flex;position: relative;color: #E20C0F;;">
				<b style="font-size: 20px;"><?php echo $sp_qckm['tenHH']; ?></b>
				</span>
				<span style="position: absolute;transform: translateY(18%);">
				<?php if($sp_qckm['giamgia']>0){ ?>
					<table>
							<tr>
								<td style="color: #353535; font-size: 18px; "><strike><span>Giá:</span> <b><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?> </b></strike></td>
							</tr>
								<tr>
								<td><span style="color:#C7240D  "><b>Giảm còn:</b></span> <b style="color:#FF0509; font-size: 26px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; ?></b></td>
							</tr>
								<?php } else { ?>
								<tr>
								<td><span style="color:#C7240D  ">Giá:</span> <b style="color: #D14F17; font-size: 14px;"><?php echo number_format($sp_qckm['Gia']).' VNĐ'; }
									?></b></td>
					</tr>
						</table>
					</span>
				<a  style="color:#FFF708;transform: translate(120%,280%);font-size: 13px; position: absolute; padding: 2%;background-color: #068F38;" href="index.php?id=<?php echo $sp_qckm['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a>
			</div>
		</div>
		</div>
	</div>
	</div>
<?php include("xulymuahang.php");
	if(isset($_POST['themgiohang'])){
		TaoDonHang();
	}
?>