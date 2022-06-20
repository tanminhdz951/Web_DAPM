<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'quanlylulut');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<?php
if (isset($_GET['id'])  && $_GET['id'] > 0)
{

$id = $_GET['id'];
$sql = "SELECT * FROM nguoiungho WHERE idNguoiUngHo=$id";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result);

}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DAPM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="admin/ckeditor/ckeditor.js"></script>
</head>

<body>
   
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/SanJ.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i>
                                <span>dashboard</span></a>
                                
                            </li>
                            
                            <li >
                                <a href="users.php" aria-expanded="true"><i class="ti-user"></i>
                                <span>Manage Users</span></a>
                            </li>

                            <li >
                                <a href="client.php" aria-expanded="true"><i class="ti-user"></i>
                                <span>Manage Supporter</span></a>
                            </li>
                            
                            <li >
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                <span>Item Records</span></a>
                               
                            </li>
                            <li >
                                <a href="#" aria-expanded="true"><i class="fa fa-rss"></i>
                                    <span>Blog</span>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="blogs_view.php" aria-expanded="true">
                                            <span>Add Blog</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" aria-expanded="true">
                                            <span>List Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->


        
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    <div class="col-md-6 col-sm-4 clearfix">
                        
                    </div>
                </div>
            </div>
            
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Manage Client</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                               <a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div>
            
    
<body>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-7">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Edit Client</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
        
            <form method="POST" action="updateClient.php" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $row['idNguoiUngHo'] ?>"/>
                <div class="form-group">
                        <label>Tên tài khoản</label>
                        <input type="text" required="required" name="tenTK" class="form-control" placeholder="Tên khách hàng" value="<?php echo $row['tenTaiKhoan'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" required="required" name="tenKH" class="form-control" placeholder="Tên khách hàng"value="<?php echo $row['tenNguoiUngHo'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" required="required" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" required="required" name="sodienthoai" class="form-control" placeholder="Số điện thoại" value="<?php echo $row['soDT'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Giới Tính</label>
                        <select name="gioitinh" class="form-control select">
                            <option value="1" 
                            <?php 
                                if($row['gioiTinh'] ==1){
                                    echo 'selected="selected"';
                                }
                                ?>
                            >
                                Nam
                            </option>
                            <option value="0" 
                                <?php 
                                if($row['gioiTinh'] ==1){
                                    echo 'selected="selected"';
                                }
                                ?>
                            >
                                    Nữ
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" required="required" name="diachi" class="form-control" placeholder="Địa chỉ" value="<?php echo $row['diaChi'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Đơn vị</label>
                        <input type="text" required="required" name="donvi" class="form-control" placeholder="Đơn vị" value="<?php echo $row['donVi'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="text" required="required" name="ngaysinh" class="form-control" placeholder="Ngày sinh" value="<?php echo $row['ngaySinh'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Trạng thái</label>
                        <input type="text" required="required" name="trangthai" class="form-control" placeholder="Trạng thái" value="<?php echo $row['trangThai'] ?>">
                    </div>
                    
                    <button type="submit" name="update" class="btn btn-primary">Cập Nhập</button>
                </div>
            </form>
        </div>
    </section>
</div>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>



</html>