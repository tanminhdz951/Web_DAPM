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
    <link rel="stylesheet" href="../css/style.css">
    
    <link href="..//nguoidung/asset/css/bootstrap.min.css" rel="stylesheet">   
    
    <!-- Font Awesome CSS -->
    <link href="../nguoidung/css/font-awesome.min.css" rel="stylesheet">
    

    <link href="../nguoidung/css/style.css" rel="stylesheet">
   
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Colors CSS -->
  
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="../nguoidung/js/modernizr.custom.js"></script>

</head>

<body style="width: 100%;">
<?php include('../header-footer/header.php') ?>


    <div class="container" style="width:100%">
   
        <div class="container-all" style="margin-top: 150px;">
            <div>
                <ul>
             <?php
                    $conn = new mysqli("localhost","root","","quanlylulut");
                    $sql = "SELECT tieuDe, d.tenDotCuuTro, noiDung, image, thoiGian, idBaiViet, b.idDotCuuTro
                        FROM baiviet as b, dotcuutro as d
                        where b.idDotCuuTro = d.idDotCuuTro
                        group by b.idDotCuuTro";
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
                <a href="dangky_ungho.php?id=<?php echo $row['idDotCuuTro'] ?>" style="text-decoration: none;">
                <div style="display: flex;padding:20px;">
                    <img src="../../img/<?php echo $row['image'] ?>" style="width:400px;height:300px;border-radius:5px;" >
                    <div style="display: block;padding:0px 20px">
                        <h3 style="color: blue;font-weight:bold;"><?php echo $row['tieuDe']?></h3>
                        <p style="color: gray;"><?php echo $row['noiDung']?></p>
                    </div>
                
                </div>
                </a>
                </li>
                <?php
                        }
                        }
                        ?>
            
            </div>
          
           
        </div>
    </div>

    <?php include('../header-footer/footer.php') ?>
</body>
<!-- <script src="view/js/slide.js"></script> -->

</html>