<?php 
include("../login/config.php");
$imgae = $_FILES['image']['name'];
$image_tmt = $_FILES['image']['tmp_name'];
$them_sanpham = "INSERT INTO MOTAHANGHOA(MaLoaiHangHoa, MSHH, motangan, motadai, image) VALUES('".$_POST['loaigiay']."','".$_POST['MAHANGHOA']."',''".$_POST['motangan'].",'".$_POST['motadai']."','$image')";
$query = mysqli_query($mysqli, $them_sanpham);
move_uploaded_file($image_tmt,'../../img/img_sanpham/'.$imgae);
?>