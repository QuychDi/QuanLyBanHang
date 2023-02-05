<?php 
 function validate_mobile($mobile)
 {
     return preg_match('/^[0-9]{10}+$/', $mobile);
 }
    $name = $_POST['hoten_KH']; 
    $company_name = $_POST['tencongty'];
    $email = $_POST['email'];
    $cust_addr = $_POST['diachi_KH'];
    $phonenumber = $_POST['soDT'];
    $pass = $_POST['matkhau_KH'];
    $repass = $_POST['nhaplaimk_KH'];
    $pattern = '#^?[\d]3?-?[\d]2?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
    //THUC HIEN CAU TRUY VAN 
    include("../login/config.php");
    $user = "SELECT taikhoan.TENDANGNHAP FROM taikhoan 
    JOIN khachhang ON taikhoan.TENDANGNHAP = khachhang.SoDienThoai 
    WHERE taikhoan.TENDANGNHAP = '$phonenumber' ";
    if($pass == $repass && strlen($pass) == 8 && validate_mobile($phonenumber)== true ){
        $chck_user = mysqli_query($mysqli, $user);
        // KIEM TRA TAI KHOAN DA TON TAI HAY CHUA
        $num = $num = mysqli_num_rows($chck_user);
        if($num > 0){?>
           <script>
               alert("Tài khoản đã tồn tại.");
               window.location = "../dangky.php";
            </script>
        <?php }else{
            // insert customer into table customer
            $INSERT_CUSTOMER = "INSERT INTO KHACHHANG(HoTenKH, TenCongTy, SoDienThoai, Email)
            VALUES('$name','$company_name','$phonenumber','$email') ";
           
            // select max ID_CUSTOMER into table address customer table
            $id_customer = "SELECT MAX(MSKH) AS ID 
            FROM KHACHHANG";
            // INSERT INTO TABLE ACCOUNT
            $ACCOUNT = "INSERT INTO TAIKHOAN(TENDANGNHAP, Pass, repass)
            VALUES('$phonenumber','$pass','$repass')";
            mysqli_query($mysqli, $ACCOUNT);
            // INSSERT CUSTOMER
            $qr_customer = mysqli_query($mysqli, $INSERT_CUSTOMER);
            // SELECT MAX ID_CUS
            $qr_id = mysqli_query($mysqli, $id_customer);
            $ID_CUS = mysqli_fetch_array($qr_id);
            $ID = $ID_CUS['ID'];
            // INSERT INTO TABLE ADDRESS
            $CUS_ADDRESS = "INSERT INTO DIACHIKH(DiaChi, MSKH)
            VALUES('$cust_addr','".$ID_CUS['ID']."')";
            mysqli_query($mysqli, $CUS_ADDRESS);
            ?>
            <script>
                alert("Đăng ký thành công. Số ĐT là tài khoản đăng nhập của bạn.");
                window.location = "../dangnhap.php";
            </script>
            <?php

        }
 
     }elseif(strlen($pass) < 8 || strlen($pass) > 8){
        
    }elseif($pass !== $repass){?>
        <script>
             alert("Mat khau vua nhap khong tuong khop");
         window.location ="../dangky.php";
        </script>
    <?php }
    else{
        echo "So dien thoai vua nhap khong hop le";
    }
?>