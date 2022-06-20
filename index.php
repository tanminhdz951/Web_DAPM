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
        /* ul.nav-lg */
        #login-dx {
            position: absolute;
            display: none !important;
            width: 170px;
            height: 50px;
            z-index: 10;
            background: #FFFFFF;
            min-height: auto;
            color: red;
        }
        #login-dx a{
            color: #808080;
        }
        #login-dx a:hover{
            color: #000;
        }

        #button-login:hover #login-dx {
            display: block !important;
        }

        .navbar-list {
            position: absolute;
            background: #FFFFFF;
            width: 250px;
            height: auto;
            color: #000 !important;
            min-height: auto;
            display: none !important;
            z-index: 10;
            box-shadow: #808080;
            /* border-style: groove; */
        }

        .navbar-item:hover .navbar-list {
            display: block !important;

        }

        .navbar-item>a:hover {
            color: #000;
        }

        .navbar-item .navbar-list li a {
            color: #C0C0C0;
        }

        .navbar-item .navbar-list li a:hover {
            color: #000;
        }

        .navbar-item .navbar-list b {
            color: #808080;
            margin-bottom: 5px;
            font-size: 18px;
            /* margin-left: 5px; */

        }

        .sub-item a {
            color: #DDDDDD !important;
        }

        .sub-item a:hover {
            color: #000 !important;
        }
    </style>
</head>

<body>
    <nav>
        <!--<div class="header1"> -->
        <div class="logo">
            <img src="view/nguoidung/images/dnlogo.png" alt="Logo Image">
        </div>
        <div class="hamburger" style="text-align: center;width:auto;">
            <h5 style="color: red;font-weight:bold;font-size:16px;">SỨ MỆNH ĐẶC BIỆT<br></h5>
            <h6>ỦNG HỘ LŨ LỤT</h6>

        </div>
        <ul id="nav-lg" class="nav-links">
            <li class="navbar-item"><a href="index.php">Trang chủ</a></li>
            <li class="navbar-item"><a href="view/gioithieu/gioithieu.php">Giới thiệu</a></li>
            <li class="navbar-item"><a href="view/tintuc/tintuc.php">Tin tức</a></li>
            <li class="navbar-item"><a href="#">Hoạt động </a>
            <ul class="navbar-list" style="width:350px;margin-left:-50%;">
                    <!-- <div class="navbar-ds" style="display: flex;"> -->
                    <table>
                        <tr>
                            <th class="sub-item"><a href="view/ungho/danhsach_ungho.php">Đăng kí ủng hộ</a></th> 
                        </tr>
                        <tr>
                            <th class="sub-item"><a href="view/hogiadinh/hogiadinh.php">Danh sách cần cứu trợ</a></th>                         
                        </tr>
                        <tr>
                            <th class="sub-item"><a href="view/nguoidung/danhsach_nguoidung.php">Danh sách người ủng hộ</a></th>   
                        </tr>
                    </table>

                    <!-- </div> -->
                </ul>
            </li>
            <?php
            if (isset($_SESSION['name'])) {
            ?> 
            <li id="button-login" style="position: relative;">
                    <a class="login-button" href="view/nguoidung/nguoidung.php">
                        <?php
                        echo $_SESSION['full_hoten'];
                        ?>
                    </a>
                    
                    <ul id="login-dx" style="height:auto">
                        <table style="margin-top: 5px;">
                            <tr>
                                <th><a href="view/nguoidung/nguoidung.php">Tài khoản</a></th>
                            </tr>
                            <tr>
                                <th><a href="view/nguoidung/lichsuungho.php">Lịch sử ủng hộ</a></th>
                            </tr>
                            <tr>
                                <th><a href="view/login/login.php">Quên mật khẩu</a></th>
                            </tr>
                            <tr>
                                <th><a href="view/login/logout.php">Đăng xuất</a></th>
                            </tr>
                        </table>
                    </ul> 
                    
                </li>
            <?php
            } else {
            ?>
                <li class="button-login"><a class="login-button" href="view/login/login.php">Sign In</a> </li>
            <?php
            }
            ?>


        </ul>
        <div class="find" style="width:100%">
   
            <ul style="width:100%">
                <li style="width:auto;margin-left:50%;float:right;">Đà Nẵng - <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); $date = getdate(); echo $date['weekday'].", "; echo date('d/m/Y - H:i'); ?></li>
            </ul>
            <input class="search" type="text" placeholder="Search here" style="width:30%">
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
                <img src="view/nguoidung//images/dnlogo.png" alt="" width="120" height="120" style="margin-left: 40%;">


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