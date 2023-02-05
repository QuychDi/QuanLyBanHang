<?php
/* CAP NHAT HANG HOA */
function update_hanghoa(){
include("../../login/config.php");
$image = $_FILES['avatar']['name'];
$image_tmt = $_FILES['avatar']['tmp_name'];
$update = "UPDATE HANGHOA SET TENHH = '".$_POST['tensanpham']."', QUYCACH = '".$_POST['giamgia']."', GIA = '".$_POST['dongia']."', SOLUONGHANG = '".$_POST['soluong']."', MALOAIHANG = '".$_POST['loaigiay']."',GHICHU = '".$_POST['motangan']."', IMAGE = '$image' WHERE MSHH = '".$_GET['sua_hh']."' ";
			if(mysqli_query($mysqli, $update )==true){
			move_uploaded_file($image_tmt,'../../img/img_sanpham/'.$image);
			?>
<script>
alert("Cập nhật thành công.");
window.location = "main.php";
</script>
<?php 
			}else{?>
		<script>
			alert("Cập nhật không thành công.");
			window.location="main.php";
		</script>		
			<?php }
};
function themhanghoa(){
	include("../../login/config.php");
$check_mahh = "SELECT MSHH FROM HANGHOA WHERE MSHH = '".$_POST['MAHANGHOA']."'";
$thucthi_Checkmahh = mysqli_query($mysqli, $check_mahh);

if(mysqli_num_rows($thucthi_Checkmahh) > 0){?>
<script>
alert("Sản phẩm đã tồn tại.");
</script>
<?php }else{
$image = $_FILES['avatar']['name'];
$image_tmt = $_FILES['avatar']['tmp_name'];
$them_hanghoa = "INSERT INTO HANGHOA(MSHH, TENHH, QUYCACH, GIA, SOLUONGHANG, MALOAIHANG, GHICHU, IMAGE) VALUES('".$_POST['MAHANGHOA']."', '".$_POST['tensanpham']."','".$_POST['giamgia']."','".$_POST['dongia']."','".$_POST['soluong']."','".$_POST['loaigiay']."','".$_POST['motangan']."','$image')";
	mysqli_query($mysqli,$them_hanghoa);
	move_uploaded_file($image_tmt,'../../img/img_sanpham/'.$image);
	?>
<script>
alert("Thêm sản phẩm thành công. ");
	window.location = "main.php";
</script>
<?php 
}
}
/*THEM BAIVIET*/
function quanlybaiviet(){
	include("../../login/config.php");
	$now = getdate();
	$them_baiviet = "INSERT INTO BaiViet(MSNV,TieuDe, motangan, src, ngaytao) VALUES('".$_COOKIE['MSNV']."', '".$_POST['tieude']."','".$_POST['mota']."','".$_POST['src_baiviet']."','$now[hours]')";
		mysqli_query($mysqli, $them_baiviet);
		?>
<script>
	alert("Thêm bài viết thành công.");
	window.location = "main.php?quanly=quanlybaiviet";
</script>
<?php 
}
/*CAP NHAT BAI VIET */
function capnhatbaiviet(){
	include("../../login/config.php");
	$now = getdate();
	$update = "UPDATE BAIVIET SET MSNV = '".$_COOKIE['MSNV']."',TieuDe = '".$_POST['tieude']."',motangan = '".$_POST['mota']."', src = '".$_POST['src_baiviet']."',ngaytao = '$now[hours]'  WHERE ID_BAIVIET = '".$_GET['sua_baiviet']."'";
	mysqli_query($mysqli, $update); ?>
<script>
	alert("Cập nhật bài viết thành công.");
	window.location = "main.php?quanly=quanlybaiviet";
</script>
<?php 
}

function xulydonhang(){
	include("../../login/config.php");
	if(isset($_GET['duyet_dh'])){
	$DUYET_DH = "UPDATE DATHANG SET MSNV = '".$_COOKIE['MSNV']."' WHERE SODONDH = '".$_GET['duyet_dh']."'";
		mysqli_query($mysqli, $DUYET_DH);
	}elseif(isset($_GET['huy_dh'])){
		$HUY_DH = "DELETE FROM DATHANG WHERE SODONDH = '".$_GET['huy_dh']."'";
		mysqli_query($mysqli, $HUY_DH);
	}else{
		echo "";
	}
}

function xoa_baiviet(){
	include("../../login/config.php");
		$DELETE = "DELETE FROM BAIVIET WHERE ID_BAIVIET = '".$_GET['xoa_baiviet']."'";
		mysqli_query($mysqli, $DELETE);
	?>
<script>
alert ("Xóa bài viết thành công");
	window.location ="main.php?quanly=quanlybaiviet";
</script>
<?php
	}
/* TIM KIEM DON HANG*/
function timkiemdonhang(){
			include("../../login/config.php");
			$truyvan_timkiem = "SELECT dathang.SoDonDH, dathang.MSKH, chitietdathang.SoLuong, chitietdathang.GiaDatHang,chitietdathang.MSHH, chitietdathang.GiamGia, hanghoa.TenHH, khachhang.HoTenKH, khachhang.SoDienThoai, dathang.MSNV FROM dathang, chitietdathang, hanghoa, khachhang WHERE dathang.SoDonDH = chitietdathang.SoDonDH AND chitietdathang.MSHH = hanghoa.MSHH AND dathang.MSKH = khachhang.MSKH AND DATHANG.SODONDH = '".$_POST['timkiem_sodondh']."'";
			$kq_timkiem = mysqli_query($mysqli, $truyvan_timkiem);
			if(mysqli_num_rows($kq_timkiem)> 0){ ?>
<div id="thongtinkh" style="margin-top: 20px;">
	<table id="thogntin_kh">	<?php 
	$TTKH = "SELECT dathang.SoDonDH ,khachhang.HoTenKH, khachhang.SoDienThoai, diachikh.DiaChi FROM khachhang JOIN diachikh ON khachhang.MSKH = diachikh.MSKH JOIN dathang ON khachhang.MSKH = dathang.MSKH WHERE dathang.SoDonDH = '".$_POST['timkiem_sodondh']."'";
	$kq_ttkh = mysqli_query($mysqli, $TTKH);
	while($row_kh = mysqli_fetch_array($kq_ttkh)){
		?>
	<tr>
		<td><b>Số ĐH: </b></td><td style="color: #0B66CC;"><b><?php echo $row_kh['SoDonDH']; ?></b></td><td><b>Khách hàng: </b></td><td style="color: #0B66CC;"><b><?php echo $row_kh['HoTenKH']; ?></b></td><td><b>Số ĐT</b></td><td style="color: #0B66CC;"><b><?php echo $row_kh['SoDienThoai']; ?></b></td>
		</tr>
		<tr>
			<td><b>Địa chỉ: </b></td><td colspan="2" style="color: #0B66CC;"><b><?php echo $row_kh['DiaChi']; ?></b></td>
		</tr>
	<?php
	}
	?>
	</table>
</div>
				<table id="chitietdonhang">
		<tr>
			<th>Mã Số KH</th>
			<th>Số Đơn ĐH</th>
			<th>Mã Số HH</th>
			<th>Số Lượng</th>
			<th>Đơn Giá</th>
			<th>Giảm Giá</th>
			<th>Số Điện Thoại</th>
			<th>Trạng Thái</th>
		</tr>
			<?php	while($kq = mysqli_fetch_array($kq_timkiem)){
					?>
			<tr>
				<td style="width: 10%;"><?php echo $kq['MSKH']; ?></td>
			<td  style="width: 10%;"><?php echo $kq['SoDonDH']; ?></td>
				<td  style="width: 10%;"><?php echo $kq['MSHH']; ?></td>
			<td style="width: 8%;"><?php echo  $kq['SoLuong']; ?></td>
			<td style="width: 14%;"><?php echo number_format($kq['GiaDatHang']); ?></td>
			<td style="width: 14%;"><?php echo number_format($kq['GiamGia']); ?></td>
			<td style="width: 18%;"><?php echo $kq['SoDienThoai']; ?></td>
			<td style="width: 18%;">
			<?php if($kq['MSNV'] > 1){ ?>
			<form action="" method="GET">
		<a><b style="color:#009323;">ĐÃ DUYỆT</b></a> | <a href="main.php?quanly=quanlydonhang&huy_dh=<?php echo $kq['SoDonDH'];?>" style="color:#000000;"><b style="color: #BC0E11;">HỦY</b></a><?php } else { ?><a href="main.php?quanly=quanlydonhang&duyet=<?php echo $kq['SoDonDH'];?>"><b style="color:#175DF1;">DUYỆT</b><?php } ?></a>
				</form>
		</td>
		</tr>
			<?php
				} ?>
			</table>
					<?php
			}else{
				?>
<script>
	alert("Mã đơn hàng vừa nhập không tồn tại");
	window.location = "main.php?quanly=quanlydonhang";
</script>
<?php
			}
	
};
function ketquatimkiemNV(){
		include("../../login/config.php");
			$DT ="SELECT NHANVIEN.HoTenNV, NHANVIEN.DiaChi, NHANVIEN.SoDT, TAIKHOAN.Pass FROM NHANVIEN JOIN TAIKHOAN ON NHANVIEN.SoDT = TAIKHOAN.TENDANGNHAP WHERE SoDT = '".$_POST['btntimkiem']."'";
			$result_dt = mysqli_query($mysqli, $DT);
			if(isset($_POST['gui_timkiem'])){
				if(mysqli_num_rows($result_dt)>0){
				?> <table style="border-collapse:collapse; border=1px; ;margin-top: 20px;"name="ketquatimkiem">
		<?php while($timkiem = mysqli_fetch_array($result_dt)){?>
					<tr><th>Họ và Tên</th><th>Địa Chỉ</th><th>Số Điện Thoại</th><th>CẬP NHẬT</th></tr>
					<tr>
						<td style="	color: #3D3D3D;"><?php echo $timkiem['HoTenNV']; ?></td>
						<td style="	color: #3D3D3D;" ><?php echo $timkiem['DiaChi']; ?></td>
						<td style="	color: #3D3D3D;" ><?php echo $timkiem['SoDT']; ?></td>
				
						<td><a style="color: #3D3D3D;"  href="main.php?quanly=quanlynhanvien&xoa_nv = <?php echo $timkiem['SoDT']; ?>">XÓA</a></td>

					</tr>
						<?php }
						?>
					</table>
					<?php } else{?>
			<p style="color: #F3161A; text-align: center; margin-top: 20px;"><?php echo ("Số điện thoại không tồn tại...");?><img style="width:30px" src="../images/em37.gif"/></p>
					
		<?php }
			}
};
// ---------------------------- TAO QUANG <CAO--------------->
function taoquangcao_sp(){
		include("../../login/config.php");
		$kiemtraslqc = "SELECT count(MSHH) AS SL FROM HANGHOA WHERE QUANGCAO ='1'";
		$qr_ktra = mysqli_query($mysqli, $kiemtraslqc);
		$num_kt = mysqli_fetch_array($qr_ktra);
		
		$spqc = $_POST['chck_qc'];
		if(count($spqc)>5){
			?>
				<script>
					alert("Vui lòng chọn dưới 6 sản phẩm quảng cáo");
					window.location = "main.php";
				</script>
			<?php
		}else{
			if($num_kt['SL'] < 5){
				for($i=0; $i<count($spqc); $i++){
					$update_hh = $spqc[$i];
					$update = "UPDATE HANGHOA SET QUANGCAO = 1 where MSHH = '$update_hh'";
					mysqli_query($mysqli, $update);
				}?>
					<script>
						alert("Tạo thành công");
						window.location = "main.php";
					</script>
		<?php	}
			else{ ?>
		
				<script>
					alert("Da du do luong hien quang cao");
					window.location = "main.php";
				</script>
			<?php
			}	
		}
};
function xoa_quangcao(){
	include("../../login/config.php");
	$DELETE_qc = "UPDATE HANGHOA SET QUANGCAO = NULL WHERE MSHH = '".$_GET['xoa_qc']."' ";
	mysqli_query($mysqli, $DELETE_qc);?>
	<script>
		alert("Xóa thành công");
		window.location = "main.php";
	</script>
<?php };
function thongkedoanhthu(){
	include("../../login/config.php");
	// $GIA = "SELECT GIADATHANGNG AS GIA_GOC, GIAMGIA AS GIAM_GIA 
	// FROM CHITIETDATHANG JOIN DATHANG 
	// ON chitietdathang.SoDonDH = dathang.SoDonDH 
	// AND dathang.MSNV IS NOT NULL";
	// $qr_gia = mysqli_query($mysqli, $GIA);
	// while($kq_gia = mysqli_fetch_array($qr_gia)){
		
	// 		echo sum($kq_gia['GIAGOC']);
	// 	}
	// }
	$thongke_post = "SELECT SUM(GIADATHANG) AS TONG FROM chitietdathang 
	JOIN dathang ON chitietdathang.SoDonDH = dathang.SoDonDH 
	AND dathang.MSNV IS NOT NULL AND YEAR(NGAYGH) BETWEEN '".$_POST['year_star']."' AND '".$_POST['year_end']."'";
	$qr_thongke = mysqli_query($mysqli, $thongke_post);
	$ketqua = mysqli_fetch_array($qr_thongke);

	echo "<b>Kết quả: <span id="."'ketqua'" .">" .number_format($ketqua['TONG']). ' VNĐ' ."</span></b>";
};
function thongkekhohang(){
	include("../../login/config.php");
	$count_hh = "SELECT COUNT(chitietdathang.MSHH) as sl, chitietdathang.MSHH
				FROM chitietdathang JOIN dathang ON chitietdathang.SoDonDH = dathang.SoDonDH 
				AND dathang.MSNV IS NOT NULL GROUP BY MSHH";
	$qr_cnt_hh = mysqli_query($mysqli, $count_hh);
	$num_row = mysqli_num_rows($qr_cnt_hh);
	?>
	<ul id="thongke_sanpham">
	<?php
		while($r=mysqli_fetch_Array($qr_cnt_hh)){ 
		?>
			<a href="main.php?quanly=thongke&&mshh=<?php echo $r['MSHH']; ?>">
				<li id="xemthongke"  style="height: 2vh; display: flex;justify-content: center;width:<?php echo $r['sl'];?>%">
					<span  id="masohh" style="font-size: 12px;"><?php echo $r['MSHH']?></span>
				</li>
			</a>
		<?php }?>
	</ul>
<?php
};
function xemthongkechitiet(){
	include("../../login/config.php");  
	$hanghoa= "SELECT HANGHOA.IMAGE,COUNT(chitietdathang.MSHH) as sl ,HANGHOA.TENHH, HANGHOA.SOLUONGHANG, HANGHOA.MSHH 
	FROM HANGHOA JOIN CHITIETDATHANG ON HANGHOA.MSHH = CHITIETDATHANG.MSHH 
	JOIN DATHANG ON CHITIETDATHANG.SODONDH = DATHANG.SODONDH 
	WHERE CHITIETDATHANG.MSHH = '".$_GET['mshh']."' AND dathang.MSNV IS NOT NULL GROUP BY MSHH;";
	$queryhh = mysqli_query($mysqli, $hanghoa);
	$hang = mysqli_fetch_Array($queryhh);
	?>
	<a style="position: absolute; z-index: 1" id="click_close" href="main.php?quanly=thongke" class="active" href="#" ><ion-icon name="close-circle-sharp"></ion-icon></a>
                        <div class="chitiet_left">
							<img style="width: 50%; margin-top: 5%;display: flex; margin-left: 20%;" 
							src="../../img/img_sanpham/<?php echo $hang['IMAGE']; ?>" >
						</div>
                        <div class="chitiet_right">
							<h3><?php echo $hang['TENHH']; ?></h3>
							<b>MSHH: <?php echo $hang['MSHH']; ?></b><br>
							<b>Số đơn đã bán: <?php echo $hang['sl']; ?></b>
						</div>
                 
<?php };
function khachhang_vip(){
	include("../../login/config.php"); 
	$khachhang ="SELECT khachhang.MSKH, khachhang.HoTenKH, khachhang.TenCongTy, khachhang.SoDienThoai, khachhang.Email, 
	COUNT(dathang.SoDonDH) as SoDon FROM khachhang JOIN dathang on khachhang.MSKH = dathang.MSKH
	AND dathang.MSNV IS NOT NULL GROUP BY MSKH HAVING SoDon >10";
	$query_kh = mysqli_query($mysqli, $khachhang);
	?>
	<table id="kh_vip">
		<tr>
			<th>MSKH</th>
			<th>Họ & Tên</th>
			<th>Số Điện Thoại</th>
			<th>Email</th>
			<th>Công Ty</th>
			<th>Số Đơn</th>
		</tr>
	<?php while($kh_vip=mysqli_fetch_array($query_kh)){ ?>
		<!-- <tr style="background-color:#D4CDCB;">
			<td><?php echo $kh_vip['MSKH']; ?></td>
			<td><?php echo $kh_vip['HoTenKH']; ?></td>
			<td><?php echo $kh_vip['SoDienThoai']; ?></td>
			<td><?php echo $kh_vip['Email']; ?></td>
			<td><?php echo $kh_vip['TenCongTy']; ?></td>
			<td><?php echo $kh_vip['SoDon']; ?></td>
		</tr> -->
		<tr>
			<td><?php echo $kh_vip['MSKH']; ?></td>
			<td><?php echo $kh_vip['HoTenKH']; ?></td>
			<td><?php echo $kh_vip['SoDienThoai']; ?></td>
			<td><?php echo $kh_vip['Email']; ?></td>
			<td><?php echo $kh_vip['TenCongTy']; ?></td>
			<td><?php echo $kh_vip['SoDon']; ?></td>
		</tr>
	<?php	} ?>
	</table>
<?php };
function thongke_loaihang(){
	include("../../login/config.php");
	$count_hh = "SELECT MALOAIHANG, SUM(SOLUONGHANG) AS sl, count(SOLUONGHANG) as sl_hang
	FROM HANGHOA GROUP BY MALOAIHANG";
	$qr_cnt_hh = mysqli_query($mysqli, $count_hh);
	$num_row = mysqli_num_rows($qr_cnt_hh);
	
	?>
	<ul id="thongke_sanpham">
	<?php
		while($r=mysqli_fetch_Array($qr_cnt_hh)){
			$ma = ''; 
			switch($r['MALOAIHANG']){
				case 1:
					$ma = 'APPLE';
					break;
				case 2:
					$ma = 'DELL';
					break;
				case 3:
					$ma = 'HP';
					break;
				case 4:
					$ma = 'ASUS';
					break;
				default:
					$ma = '';
			}
			// if($r['MALOAIHANG'] =='1'){
			// 	$ma = 'APPLE';
			// }
		?>
				<li id="xemthongke" style="height: 2vh; display: flex;justify-content: center;
				width:<?php echo $r['sl']/80;?>%; background-color:#FB4009; margin-bottom: 2px;">
					<span  id="masohh" style="font-size: 12px;"><?php echo $ma; ?></span>	
				</li>
		<?php } ?>
	</ul>
<?php
}
function themNV(){
	function validate_mobile($mobile)
 {
     return preg_match('/^[0-9]{10}+$/', $mobile);
 }
	include("../../login/config.php");
	$name_Employee = $_POST['tenNV'];
	$address_Employee = $_POST['diachiNV'];
	$phonenumber_Emlp = $_POST['soDT'];
	$pass = $_POST['pass'];
	$pattern = '#^?[\d]3?-?[\d]2?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
	if(strlen($pass) == 8 && validate_mobile($phonenumber_Emlp) == true){
		//truy van tai khoan
		$TAIKHOAN_EMP = "SELECT TAIKHOAN.TENDANGNHAP 
		FROM TAIKHOAN JOIN NHANVIEN ON TAIKHOAN.TENDANGNHAP = NHANVIEN.SODT
		WHERE TAIKHOAN.TENDANGNHAP = '$phonenumber_Emlp'";
		$chck_tk = mysqli_query($mysqli, $TAIKHOAN_EMP);
		if(mysqli_num_rows($chck_tk)>0){?>
			<script>
				alert("Tài khoản đã tồn tại.");
				window.location("main.php?quanly=quanlynhanvien")
			</script>
		<?php }else{
			$them_nhanvien = "INSERT INTO NhanVien(HoTenNV,DiaChi,SoDT) 
				VALUES('".$_POST['tenNV']."','".$_POST['diachiNV']."','".$_POST['soDT']."')";
				$ID_RE = "SELECT MAX(MSNV) AS ID FROM NHANVIEN";
				$qr_id = mysqli_query($mysqli, $ID_RE);
				$ID = mysqli_fetch_array($qr_id);			
				$them_taikhoan ="INSERT INTO TAIKHOAN(TENDANGNHAP,PASS) 
				VALUES('".$_POST['soDT']."','".($_POST['pass'])."')";
							$re1 = mysqli_query($mysqli, $them_taikhoan); 
							$re2 = mysqli_query($mysqli, $them_nhanvien);
							?>
						<script>
							alert("Thêm nhân viên thành công.");
							window.location("main.php?quanly=quanlynhanvien");
						</script>
	<?php	}
	}elseif(strlen($pass)<8 || strlen($pass) > 8 ){?>
			<script>
				alert("Độ dài mật khẩu phải bằng 8 ký tự.");
				window.location("main.php?quanly=quanlynhanvien");

			</script>
	<?php }else{ ?>
			<script>
				alert("Số điện thoại nhập vào không hợp lệ.");
				window.location("main.php?quanly=quanlynhanvien");
			<script>
			<img src=",,,," style="width: 100px; height: 100px" />
	<?php }
				
}
	?>

