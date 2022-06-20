<?php 
session_start(); 
     $db = mysqli_connect('localhost', 'root', '', 'quanlylulut');
     if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

    $idDotCuuTro = $_GET['id'];

    $sql = "SELECT tieuDe, d.tenDotCuuTro, noiDung, image, thoiGian, idBaiViet, b.idDotCuuTro
              FROM baiviet as b, dotcuutro as d
              where b.idDotCuuTro = d.idDotCuuTro
              and b.idDotCuuTro = $idDotCuuTro
              group by b.idDotCuuTro";

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);


      $conn = new mysqli("localhost","root","","quanlylulut");
      $sql1 = "SELECT * from hangcuutro";
      $result1 = $conn->query($sql1);

     
      $a = $result1 -> num_rows ;

      if(isset( $_SESSION['name'])){
      $user = $_SESSION['name'];
      $sql2 = "SELECT * from nguoiungho where tenTaiKhoan = '$user'";
      $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2);
      }



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

 

 
</head>

<body style="background-color: #c3e8f8;;" >

<?php include('../header-footer/header.php') ?>



  <main id="main" style="padding: 20px;">
    
      <div class="container" style="margin-top: 100px;">
        <div style="text-align: center;">
          <h2>Đăng ký ủng hộ</h2>
        </div>
      </div>
  

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" >

        <div class="row gy-4" style="display: flex;">

        <div class="contai" style="width:50%">
        <div class="than" style="margin: 0px; height:auto ">
            <div class="inf" style="margin: 0px; font-size:14px;">
           
                <ul>
                    <li>Họ và tên </li>
                    <li>Số lượng hàng </li>
                    <?php 
                      for($i =1; $i < $a; $i++){
                        ?>
                           <li> </li> <br>
                        <?php
                      }
                    ?> 
                    <li>Số điện thoại </li>
                    <li>Địa chỉ </li>
                    <li>Hình thức </li>
                    <li>Ghi chú </li>
                    
                </ul>
            </div>
           
           
            <div class="nhap" style="font-size:14px;">
            <form action="
                <?php if(isset($_SESSION['name'])){
                           echo "dangky.php";
                            }
                            else{
                              echo "form_dangki.php";
                            }
                        ?>"
              method="POST">
                <ul >
                    <li><input class="dien" type="text" name="idotcuutro" value="<?php echo $idDotCuuTro ?>" style="display:none;"/>
                    <li><input style="text-align: left;" class="dien" type="text" name="name" value="<?php
                    if(isset($_SESSION['name'])){
                    echo $_SESSION['full_hoten'];
                    }
                    ?>"/>
                    <br></li>
                    
                    <?php 
                    $i = 0;
                          while ($row1 = $result1->fetch_assoc()) 
                          {
                            $i++;
                            ?>
                            <li >
                              <div style="display:flex ;">
                              <input class="dien" type="number" name="<?php
                                  echo 'soluong'.$i;
                              ?>" style="width:45%"><br>
                              <select class="dien" type="text" name="<?php
                                  echo 'idhang'.$i;
                              ?>" style="width:50%; margin-left:5%"> 
                                <option value="<?php echo $row1['idHangCuuTro'] ?>"><?php  echo $row1['tenHangCuuTro']; echo' '; echo $row1['donViTinh']; ?>
                              </option>
                                </select>
                                <br>
                              </div>
                            </li>
                            <?php
                          }
                            ?> 
                    <li><input class="dien" type="text" name="sodienthoai" value="<?php
                      if(isset($_SESSION['name'])){
                        echo $row2['soDT'];
                      }
                    ?>
                    "/>
                    <br></li>
                    <li><input class="dien" type="text" name="diachi" value="<?php
                      if(isset($_SESSION['name'])){
                        echo $row2['diaChi'];
                      }
                    ?>
                    "/>
                    <br></li>
                    <li><input class="dien" type="text" name="hinhthuc" />
                    <br></li>
                    <li><textarea class="dien" type="text" name="ghichu"></textarea>
                      <br></li>
                </ul>
               
            </div>
            <div class="luu">
                <input class="nut" type="submit" value="Lưu thay đổi" name="addungho" >
            </div>   
            </form>
        </div>
        
    </div>

          <div class="col-lg-4" style="width:50%">
            <div class="portfolio-info">
              <img src="../../img/<?php echo $row['image'] ?>" alt="hình đại diện" style="width:400px; height:200px;">
            </div>
            <div class="portfolio-description">
              <h3><?php echo $row['tieuDe'] ?></h3>
              <p>
              <?php echo $row['noiDung'] ?>
              </p>
            </div>
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('../header-footer/footer.php') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>