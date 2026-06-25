<?php 
    include '2_connect.php';
    global $connect;
    if(isset($_POST['btn-register'])){
        $name=$_POST['name'];
        $gmail=$_POST['gmail'];
        $password=$_POST['password'];

    //      $insert="INSERT INTO `tbl_user`(`name`,`gmail`,`password`)VALUES('$name','$gmail','$password')";
    // $ex=mysqli_query($connect,$insert);
    // if($ex){
    //     header('location: 2_Login.php');
    // }
    $sql="INSERT INTO `tbl_user`(`name`,`gmail`,`password`)VALUES('$name','$gmail','$password')";
    $ex=$connect->query($sql);
    if($ex){
        header('location: 2_Login.php');
    }
    }

   
?>