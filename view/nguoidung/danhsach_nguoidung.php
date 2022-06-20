<?php 
   session_start(); 
        $db = mysqli_connect('localhost', 'root', '', 'quanlylulut');
        if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
    
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cứu trợ lũ lụt</title>
      <link rel="stylesheet" href="../css/capnhap.css">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <link rel="stylesheet" href="../../assets/css/styles.css">
      <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <link href="../nguoidung/asset/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome CSS -->
      <link href="../nguoidung/css/font-awesome.min.css" rel="stylesheet">
      <!-- Animate CSS -->
      <link href="../nguoidung/css/animate.css" rel="stylesheet">
      <!-- Owl-Carousel -->
      <link rel="stylesheet" href="../nguoidung/css/owl.carousel.css">
      <link rel="stylesheet" href="../nguoidung/css/owl.theme.css">
      <link rel="stylesheet" href="../nguoidung/css/owl.transitions.css">
      <!-- Custom CSS -->
      <link href="../nguoidung/css/style.css" rel="stylesheet">
      <link href="../nguoidung/css/responsive.css" rel="stylesheet">
      <!-- Colors CSS -->
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/green.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <!-- Colors CSS -->
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/green.css" title="green">
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/light-red.css" title="light-red">
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/blue.css" title="blue">
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/light-blue.css" title="light-blue">
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/yellow.css" title="yellow">
      <link rel="stylesheet" type="text/css" href="../nguoidung/css/color/light-green.css" title="light-green">
   </head>
   <body>
      <?php include('../header-footer/header.php') ?>
      <div class="main" style="background: rgb(219, 245, 245);padding-top:100px;">
         <div class="container" style="background: rgb(219, 245, 245);">
            
            <div class="row py-5" >
               <div class="col-lg-10 mx-auto"  >
                  <div class="card rounded shadow border-0"  >
                     <div class="card-body p-5 bg-white rounded" >
                        <h3 style="text-align: center;">Danh sách người ủng hộ</h3>
                        <div class="table-responsive">
                           <table id="example" style="width:100%" class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Giới Tính</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $conn = new mysqli("localhost","root","","quanlylulut");
                                    $sql = "SELECT * FROM nguoiungho
                                           where status = 1";
                                    $result = $conn->query($sql);
                                         $count=0;
                                    if ($result -> num_rows >  0) {
                                       
                                      while ($row = $result->fetch_assoc()) 
                                      {
                                           $count=$count+1;
                                        ?>
                                 <tr>
                                    <td><?php echo $count ?> </td>
                                    <td><?php echo $row['tenNguoiUngHo'] ?></td>
                                    <td>
                                        <?php if($row['gioiTinh'] ==1){
                                        echo "Nam";
                                    }else{
                                        echo "Nữ";
                                    }
                                     ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['ngaySinh'] ?></td>
                                    <td><?php echo $row['diaChi'] ?></td>
                                    
                                    
                                   
                                 </tr>
                                 <?php
                                    }
                                    }
                                    ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('../header-footer/footer.php') ?>
      <script src="../js/jquery-3.3.1.slim.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery.dataTables.min.js"></script>
      <script src="../js/dataTables.bootstrap4.min.js"></script>
      <script src="../js/app.js"></script>
   </body>
</html>