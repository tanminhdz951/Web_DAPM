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
      <link rel="stylesheet" href="../css/style.css">
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
            
            <?php 
               if(isset($_SESSION['name'])){
                   if($_SESSION['level'] == 2){
                        ?>
             <div class="container-top">
               <h3> Cập nhập nhân khẩu</h3>
            </div>
                <div class="container-input">
                <form action="addhogiadinh.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Họ và tên chủ hộ</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="tenchuho" placeholder="Họ tên chủ hộ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Số điện thoại</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="soDT" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Số nhân khẩu</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="sonhankhau" placeholder="Số nhân khẩu">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="country">Xã</label>
                        </div>
                        <div class="col-75">
                            <select id="country" name="idxa">
                            <?php 
                                $conn = new mysqli("localhost","root","","quanlylulut");
                                $sql = "SELECT * FROM xa";
                                $result = $conn->query($sql);
                                        $count=0;
                                if ($result -> num_rows >  0) {
                                    
                                    while ($r = $result->fetch_assoc()) 
                                    {
                                    ?>
                            <option value="<?php echo $r['idXa'] ?>"><?php echo $r['tenXa'] ?></option>
                            <?php
                                }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="country">Thuộc đợi phân bổ</label>
                        </div>
                        <div class="col-75">
                            <select id="country" name="iPB">
                            <?php 
                                $sql = "SELECT * FROM chitietphanbo";
                                $result = $conn->query($sql);
                                        $count=0;
                                if ($result -> num_rows >  0) {
                                    
                                    while ($r = $result->fetch_assoc()) 
                                    {
                                    ?>
                            <option value="<?php echo $r['iPB'] ?>"><?php echo $r['iPB'] ?></option>
                            <?php
                                }
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Hoàn cảnh</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="hoancanh" placeholder="Viết gì đó..." style="height:50px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div style="float: right; width:100%;">
                            <input type="submit" value="Thêm gia đình" name="addhogiadinh" >
                        </div>
                    </div>
                </form>
                </div>
            <?php
               }
               }
               
               ?>
            <div class="row py-5" >
               <div class="col-lg-10 mx-auto"  >
                  <div class="card rounded shadow border-0"  >
                     <div class="card-body p-5 bg-white rounded" >
                        <h3 style="text-align: center;"> Danh sách Hộ gia đình cần ủng hộ</h3>
                        <div class="table-responsive">
                           <table id="example" style="width:100%" class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Số nhân khẩu</th>
                                    <th>Địa chỉ</th>
                                    <th>Địa chỉ nhận hàng</th>
                                    <th>Hoàn cảnh</th>
                                    <?php 
                                        if(isset($_SESSION['name'])){
                                            if($_SESSION['level'] == 2){
                                                    ?>
                                    <th>Action</th>
                                    <?php
                                        }
                                    }
                                    ?>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $conn = new mysqli("localhost","root","","quanlylulut");
                                    $sql = "SELECT * FROM hogiadinh, xa,chitietphanbo, dotphanbo
                                    WHERE hogiadinh.idXa = xa.idXa  
                                           and chitietphanbo.iPB = hogiadinh.iPB
                                           and chitietphanbo.idDotPhanBo = dotphanbo.idDotPhanBo
                                           and hogiadinh.status = 1";
                                    $result = $conn->query($sql);
                                         $count=0;
                                    if ($result -> num_rows >  0) {
                                       
                                      while ($row = $result->fetch_assoc()) 
                                      {
                                           $count=$count+1;
                                        ?>
                                 <tr>
                                    <td><?php echo $count ?> </td>
                                    <td><?php echo $row['tenChuHo'] ?></td>
                                    <td><?php echo $row['soNhanKhau'] ?></td>
                                    <td><?php echo $row['tenXa'] ?></td>
                                    <td><?php echo $row['noiPhanBo'] ?></td>
                                    <td><?php echo $row['hoanCanh'] ?></td>
                                    <?php 
                                        if(isset($_SESSION['name'])){
                                            if($_SESSION['level'] == 2){
                                                    ?>
                                    <td>
                                       <a href="edithogiadinh.php?id=<?php echo $row['idHoGiaDinh']?>" class="btn-btn">EDIT</a>
                                       <a href="deletehogiadinh.php?id=<?php echo $row['idHoGiaDinh'] ?>" class="btn-btn">DELETE</a>
                                    </td>
                                    <?php
                                        }
                                    }
                                    ?>
                                   
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