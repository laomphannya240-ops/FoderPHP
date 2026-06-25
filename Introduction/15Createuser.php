<?php 
     include '15Connect.php';
     global $connect;
     if(isset($_POST['btn-register'])){
        $name=$_POST['name'];
        $gmail=$_POST['gmail'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

        $insert="INSERT INTO `tbl_users` (name,gmail,password)VALUES ('$name','$gmail','$password')";
        $ex=mysqli_query($connect,$insert);
        if($ex){
            header('location: 15_Login.php');
        }
     }
     

?>