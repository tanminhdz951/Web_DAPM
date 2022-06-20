<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cứu trợ lũ lụt</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="../nguoidung/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="../nguoidung/css/font-awesome.min.css" rel="stylesheet">


    <link href="../nguoidung/css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Colors CSS -->

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="../nguoidung/js/modernizr.custom.js"></script>

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
            <img src="../nguoidung/images/dnlogo.png" alt="Logo Image">
        </div>
        <div class="hamburger" style="text-align: center;width:auto;">
            <h5 style="color: red;font-weight:bold;font-size:16px;">SỨ MỆNH ĐẶC BIỆT<br></h5>
            <h6>ỦNG HỘ LŨ LỤT</h6>

        </div>
        <ul id="nav-lg" class="nav-links">
            <li class="navbar-item"><a href="../../index.php">Trang chủ</a></li>
            <li class="navbar-item"><a href="../gioithieu/gioithieu.php">Giới thiệu</a></li>
            <li class="navbar-item"><a href="../tintuc/tintuc.php">Tin tức</a></li>
            <li class="navbar-item"><a href="">Hoạt động </a>
                <ul class="navbar-list" style="width:350px;margin-left:-50%;">
                    <!-- <div class="navbar-ds" style="display: flex;"> -->
                    <table>
                        <tr>
                            <th class="sub-item"><a href="../ungho/danhsach_ungho.php">Đăng kí ủng hộ</a></th> 
                        </tr>
                        <tr>
                            <th class="sub-item"><a href="../hogiadinh/hogiadinh.php">Danh sách cần cứu trợ</a></th>                         
                        </tr>
                        <tr>
                            <th class="sub-item"><a href="../nguoidung/danhsach_nguoidung.php">Danh sách người ủng hộ</a></th>   
                        </tr>
                    </table>

                    <!-- </div> -->
                </ul>
            </li>
            <?php
            if (isset($_SESSION['name'])) {
            ?> 
            <li id="button-login" style="position: relative;">
                   
                        <?php
                        echo $_SESSION['full_hoten'];
                        ?>
                    </a>
                    
                    <ul id="login-dx" style="height: auto;">
                        <table style="margin-top: 5px;">
                            <tr>
                                <th><a href="../nguoidung/nguoidung.php">Tài khoản</a></th>
                            </tr>
                            <tr>
                                <th><a href="../nguoidung/lichsuungho.php">Lịch sử ủng hộ</a></th>
                            </tr>
                            <tr>
                                <th><a href="../login/logout.php">Quên mật khẩu</a></th>
                            </tr>
                            <tr>
                                <th><a href="../login/logout.php">Đăng xuất</a></th>
                            </tr>
                        </table>
                    </ul> 
                    
                </li>
            <?php
            } else {
            ?>
               <li class="button-login"><a class="login-button" href="../login/login.php" >Sign In</a> </li>
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
</body>
</html>