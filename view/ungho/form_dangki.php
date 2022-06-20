<?php
// initializing variables
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'quanlylulut');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
   

// Add item
if (isset($_POST['addungho'])) {
  // receive all input values from the form
  $_SESSION['tennguoiungho']=mysqli_real_escape_string($db, $row2['name']);
  $_SESSION['idsotcuutro']=mysqli_real_escape_string($db, $_POST['idotcuutro']);
  $_SESSION['ghichu']=mysqli_real_escape_string($db, $_POST['ghichu']);
  $_SESSION['hinhthuc']=mysqli_real_escape_string($db, $_POST['hinhthuc']);
  $_SESSION['sodienthoai']=mysqli_real_escape_string($db, $_POST['sodienthoai']);
  $_SESSION['diachi']=mysqli_real_escape_string($db, $_POST['diachi']);

        $conn = new mysqli("localhost","root","","quanlylulut");

        $sql1 = "SELECT * from hangcuutro";
        $result1 = $conn->query($sql1);
        $a = $result1 -> num_rows ;


     for($i =1; $i <=$a; $i++){
        $sl = $_POST['soluong'.$i] ;
        $soluong=mysqli_real_escape_string($db,$sl);
        $_SESSION['soluong'.$i] = $soluong;
        echo  $_SESSION['soluong'.$i];
     }
    }

?>