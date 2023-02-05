<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Thống Kê</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            /* CSS LICH */
           
            /*  */
            .thongke_content{
                position: relative;
                width: 100%;
                height: 500px;
                
            }
            .thongke_content .left{
                width: 50%;
                /* height: 400px; */
                float: left;

            }
            .thongke_content .left .thongkedoanhthu select{
                transition: 5s ease;
                border: 1px solid #616162;
                width: 10%;
                height: 25px;
                margin-bottom: 2%;
            }
            .thongke_content .left .thongkedoanhthu option{
                border-radius: none;
            }
            .thongke_content .left .thongkedoanhthu{
                width: 100%;
                margin-bottom: 3%;
                /* height: 200px; */
            }
            .thongke_content .left .thongkedoanhthu b span#ketqua{
                color: red;
                font-size: 20px;
            }
            h4{
                color: #0370FF;
                margin-bottom: 2%;
           
            }
            .thongke_content .left .thongkesanpham{
                /* position: relative; */
                width: 100%;
                margin-top: 2%;
                /* height: 200px; */
               
            }
            .thongke_content .left .thongkesanpham ul{
              
                margin: 0;
                padding: 0;

            }
            .thongke_content .left .thongkesanpham ul li{
                /* position: relative; */
                background-color:#F82C14;
                list-style: none;
                padding-left: 10px;
                margin-bottom: 0.8%;
                
            }
            .thongke_content .left .thongkesanpham ul li:hover{
                background-color: #FB7D42;
                transition: 0.5s ease;
            }
            .thongke_content .left .thongkesanpham ul li span{
                margin-left: 5px;
                color: black;
                /* position: absolute; */
                transform: translateX(20px);
            }
            .thongke_content .left .thongkesanpham #xemchitiet{
                position: absolute;
                width: 50%;
                height: 20vh;
               background-color: white;
                transform: translate(50%,-100%);
                box-shadow: 0px 0px 5px 4px #888888;
                /* opacity: 0; */
            }
            
            .thongke_content .left .thongkesanpham #xemchitiet.active{
                position: absolute;
                width: 50%;
                height: 20vh;
        
                transform: translate(50%,-100%);
                opacity: 1;
            }
           
            .thongke_content .left .thongkesanpham #xemchitiet .chitiet_left{
                width: 40%;
                position: absolute;
                height: 20vh;
 
            }
            .thongke_content .left .thongkesanpham #xemchitiet .chitiet_right{
                width: 60%;
                padding: 5%;
                height: 20vh;
                float: left;
      
            }
           .thongke_content .right{
               width: 50%;
               height: 400px;
               float: left;

       
           }
           .thongke_content .right .thongkekhac table#kh_vip{
                border-collapse:collapse;
           }
           .thongke_content .right .thongkekhac table#kh_vip th, table#kh_vip td{ 
                border: 1px solid black;
               text-align: center;
               padding: 5px;
           }
           .thongke_content .right .thongkekhac table#kh_vip th{
                background-color: #434343;
                color: #FFFFFF;
           }
           input#btn_thongke{
               padding: 0.7%;
           }
           .thongke_content  .ringht .thongkekhac table#kh_vip td#hang1{
            background-color:#D4CDCB;
        }
        </style>
    </head>
    <?php if(isset($_COOKIE['MSNV'])){ ?>
    <body>
        <div class="thongke_content">
            <div class="left">
                <div class="thongkedoanhthu">
                    <?php 
                           $year = "SELECT YEAR(NGAYGH) AS NAMGH FROM DATHANG WHERE MSNV IS NOT NULL GROUP BY YEAR(NGAYGH)";
                           $yr_qr_1 = mysqli_query($mysqli, $year);
                           $yr_qr_2 = mysqli_query($mysqli, $year);
                    ?>
                    <h4>THỐNG KÊ DOANH THU</h4>
                    <form action="" method="POST">
                    <span>Từ 
                        <select name="year_star">
                            <?php while($nu_star = mysqli_fetch_array($yr_qr_1)){ ?>
                            <option  value="<?php echo $nu_star['NAMGH']; ?>"><?php echo $nu_star['NAMGH']; ?></option>
                            <?php } ?>
                        </select> 
                    </span>
                    <span>Đến
                        <select name="year_end">
                        <?php while($nu_r = mysqli_fetch_array($yr_qr_2)){ ?>
                            <option  value="<?php echo $nu_r['NAMGH']; ?>"><?php echo $nu_r['NAMGH']; ?></option>
                            <?php } ?>
                        </select>
                    </span>
                    <input id="btn_thongke" type="submit" name="thongke" value="THỐNG KÊ"/>
                    <form>
                    <br>
                    <span>
                        <?php
                         // include("../../login/config.php"); 
                     
                            include("modules_xuly.php");
                            if(isset($_POST['thongke'])){
                                thongkedoanhthu();
                    
                            } ?>
                    </span>
                </div>
                <div class="thongke_khohang">
                    <h4>SÓ LƯỢNG TỒN KHO TỪNG LOẠI HÀNG</h4>
                    <?php thongke_loaihang(); ?>
                </div>
                <div class="thongkesanpham">
                    <h4>SẢN PHẨM ĐƯỢC MUA NHIỀU NHẤT</h4>
                        <?php   
                        // include("modules_xuly.php");
                        thongkekhohang();
                        ?>
                    
                    
                        <?php if(isset($_GET['mshh'])){ ?>
                            <div id="xemchitiet"> 
                                 <?php   xemthongkechitiet(); ?>
                            </div>
                        <?php }
                        ?>
                </div>
                
            </div>
            <div class="right">
                <div class="thongkekhac">
                   <h4>KHÁCH HÀNH VIP</h4>
                   <h6>Khách hàng có trên 10 số đơn hàng</h6>
                   <?php khachhang_vip(); ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<meta charset="utf-8">
	<script type="text/javascript" language="javascript">
		function xemthongke(){
			// var blur = document.getElementById("xemthongke");
			// blur.classList.toggle('active');
			var popup = document.getElementById("xemchitiet");
			popup.classList.toggle('active');
		}
	</script>
    </body>
    <?php } ?>
</html>



