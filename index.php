<?php
   session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cứu trợ lũ lụt</title>
    <link rel="stylesheet" href="view/css/style.css">
    
    <link href="view/nguoidung/asset/css/bootstrap.min.css" rel="stylesheet">   
    
    <!-- Font Awesome CSS -->
    <link href="view/nguoidung/css/font-awesome.min.css" rel="stylesheet">
    

    <link href="view/nguoidung/css/style.css" rel="stylesheet">
   
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Colors CSS -->
  
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="view/nguoidung/js/modernizr.custom.js"></script>
    <style>
        .login-list{
            /* position: absolute; */
            margin: 0 300px 0 0 !important;
            background: #000;
            width: 50px;
            min-height: auto;
            display: none ;

            /* border-style: groove; */
        }

        .button-login:hover .login-list li a{
            display: block !important;
            color: #000;
        }
    </style>
</head>
<body style="width:100%">
   <nav>
        <!--<div class="header1"> -->
        <div class="logo">
            <img src="view/nguoidung//images/dnlogo.png" alt="Logo Image">
        </div>
        <div class="hamburger" style="text-align: center;width:200px;">
            <h5 style="color: red;font-weight:bold;font-size:16px;">SỨ MỆNH ĐẶC BIỆT<br></h5>
            <h6>ỦNG HỘ LŨ LỤT</h6>
            
        </div>
        <ul class="nav-links" style="text-align: center;">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="view/gioithieu/gioithieu.php">Giới thiệu</a></li>
            <li><a href="view/tintuc/tintuc.php">Tin tức</a></li>
            <li><a href="#">Hoạt động </a></li>
            <?php  
                if (isset($_SESSION['name'])) {
                   ?> <li class="button-login" style="position: relative;">
                    <a class="login-button" href="view/nguoidung/nguoidung.php">
                        <?php 
                            echo $_SESSION['full_hoten'];
                        ?>
                    </a>
                        <ul class="login-list">
                            <li><a href="view/login/login.php">Đăng xuất</a></li>
                        </ul>
                   </li> 
                   <?php
                }
                else{
                    ?>
                        <li class="button-login"><a class="login-button" href="view/login/login.php">Sign In</a> </li>
                    <?php
                }
            ?>

            
        </ul>
            <div class="find" style="width:100%">
   
                <ul>
                    <li>Đà Nẵng - <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); $date = getdate(); echo $date['weekday'].", "; echo date('d/m/Y - H:i'); ?></li>
                </ul>
                <input class="search" type="text" placeholder="Search here">
                <a class="tk"><i class="fas fa-search-location"></i></a>
            </div>
    </nav> 


    <div class="container" style="width:100%">
    <img src="https://photo-cms-viettimes.zadn.vn/666x374/Uploaded/2022/qjrfn/2020_10_21/bao-quang-binh-8779.jpg" style="width:100%">
        <div class="container-all">
   
            <div class="container-top">
           
                <div class="container-top-left">
                    <img src="https://docs.portal.danang.gov.vn/images/images/Nam%202020/Thang%2010/hoi%20chu%20thap%20do%202.jpg" alt="">
                </div>
                <div class="container-top-right">
                    <h2 class="container-top-left-p">Câu chuyện cứu trợ</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia deserunt numquam adipisci unde quos fuga modi sed vero, mollitia perferendis illum voluptates in cum ab autem iusto architecto cumque nesciunt!</p>
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="container-bottom">
                <div class="container-bottom-left">
                    <ul>
                        <?php
                         $conn = new mysqli("localhost","root","","quanlylulut");
                         $sql = "SELECT tieuDe, d.tenDotCuuTro, noiDung, image, thoiGian, idBaiViet
                             FROM baiviet as b, dotcuutro as d
                             where b.idDotCuuTro = d.idDotCuuTro
                             LIMIT 3";
                        ?>
                        <?php 
                          $result = $conn->query($sql);
                          $count=0;
                            if ($result -> num_rows >  0) {
                        
                       while ($row = $result->fetch_assoc()) 
                       {
                            $count=$count+1;
                         ?>
                        <li>
                            
                            <img src="img/<?php echo $row['image'] ?>">
                            <h3><?php echo $row['tieuDe']?></h3>
                            <p><?php echo $row['noiDung']?></p>
                        </li>
                        <?php
                        }
                        }
                        ?>

                    </ul>
                </div>
                <div class="container-bottom-right">
                    <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kBoIOjqR1oA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kBoIOjqR1oA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" style="background: #66B7DA;">
        <div class="col1">
            <div>
                <br>
                <img id="logo-img" src="view/nguoidung//images/dnlogo.png" alt="logo" width="70" height="70" style="margin-left: 10%;"><br>
            </div>
        </div>
        <div class="col2" >
            <ul>
                <li><a href="view/ungho/danhsach_ungho.php"  style="text-decoration: none;color:black;">Đăng kí ủng hộ</a></li>
                <li><a href="view/hogiadinh/hogiadinh.php" style="text-decoration: none;color:black;">Danh sách nhận ủng hộ</a></li>
                <li><a href="view/gioithieu/gioithieu.php" style="text-decoration: none;color:black;">Giới Thiệu</a></li>
                <li><a href="view/tintuc/tintuc.php"  style="text-decoration: none;color:black;">Tin tức</a></li>
            </ul>
        </div>
        <div class="col3">
            <ul>
                <li><a  style="text-decoration: none;color:black;">Đại học sư phạm kĩ thuật Đà Nẵng</a></li>
                <li><a  style="text-decoration: none;color:black;">Địa chỉ: 48 Cao Thắng Hải Châu Đà Nẵng</a></li>
                <li><a  style="text-decoration: none;color:black;">Email: Dinhvuong98@gmail.com</a></li>
                <li><a  style="text-decoration: none;color:black;">SDT: 0763726790</a></li>
            </ul>
        </div>
        <div class="col4">
            <ul>
                <img src="view/nguoidung//images/dnlogo.png" alt="" width="120" height="120">


            </ul>
        </div>
        <div class="footer-top" >
            <div class="container2">
                <div class="row2">

                    <div class="col-lg-42 col-md-6 footer-info" style="background: #66B7DA;">
                        <p><b>Cứu trợ, nhịp cầu nối liền những trái tim</b></p>
                    </div>

                    <div class="col-lg-22 col-md-6 footer-links" style="background: #66B7DA;">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone" >Hotline: 0363907251</i></a></li>
                        
                        </ul>
                    </div>


                </div>
            </div>
        </div>
      
  </footer><!-- End Footer -->

</body>
<!-- <script src="view/js/slide.js"></script> -->

</html>