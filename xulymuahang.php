
<?php
function timkiem(){
	include("login/config.php");
	$khsearch = $_POST['timkiem'];
	$ketqua = "SELECT  MSHH,Gia,IMAGE, QuyCach, tenHH, image, QuyCach * Gia as giamgia FROM HANGHOA WHERE TENHH LIKE '%".$khsearch."%' GROUP BY MSHH";
	$result = mysqli_query($mysqli, $ketqua);
if(mysqli_num_rows($result)>0 && !empty($khsearch)){ ?>
	<b style="padding-left: 1.5%;">Kết quả tìm kiếm trùng khớp với <b style="color: #06912E"><?php echo  $khsearch; ?></b></b>

				<ul>
				<?php
			while($kt2= mysqli_fetch_array($result)){
					?>
					<li>
						<table>
					<tr>
						<td><img style="width: 80%; margin-bottom: 10px;" src="img/img_sanpham/<?php echo $kt2['IMAGE']; ?>"</td></tr>
						<tr><td><b style="color:#F58312; font-size: 12px;"><?php echo $kt2['tenHH']; ?></b></td></tr>
							<?php if($kt2['giamgia']>0){ ?>
						<tr>
							<td style="color: #353535; font-size: 10px; "><strike ><span>Giá:</span> <b><?php echo $kt2['Gia']; ?> VNĐ</b></trike></td>
						</tr>
							<tr>
							<td style="color: #D14F17; font-size: 13px;"><span style="color:#C7240D  ">Giảm còn:</span> <b ><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php }else{ ?>
							<tr>
							<td style="color: #D14F17; font-size: 13px;"><span>Giá:</span> <b><?php echo number_format($kt2['Gia']).'VNĐ'; ?></b></td>
						</tr>
							<?php } ?>
							<tr><td style="width: 180px; height:40px;"><a style="color: #DC7A39; font-size: 13px" href="index.php?id=<?php echo $kt2['MSHH'];?>" name="xem" id="xemchitiet">XEM CHI TIẾT</a></td></tr>
							</table>
						</li>
					</a>
			<?php }?>
						</ul>
<?php }else{ ?>
	<b style="padding-left: 1.5%;">Không tìm thấy kết quả trùng khớp với <b style="color: #06912E"><?php echo $khsearch; ?></b></b>
<?php }
}
?>

