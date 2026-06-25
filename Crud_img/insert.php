<?php 
    require 'connect.php';
    global $connect;
    if(isset($_POST['btnSave'])){
        $p_name=htmlspecialchars( $_POST['p_name']);
        $qty=htmlspecialchars($_POST['qty']);
        $price=htmlspecialchars($_POST['price']);
        $image=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $path='images/'.$image;
        move_uploaded_file($tmp_name,$path);

        // $image=$_FILES['image']['name'];
        // $tmp_name=$_FILES['image']['tmp_name'];
        // $path='images/'.$image;
        // move_uploaded_file($tmp_name,$path);

        $insert="INSERT INTO tbl_product (p_name,qty,price,image) VALUE ('$p_name','$qty','$price','$path')";
        $execute=mysqli_query($connect,$insert);

        if($execute){
            header('location: table.php');
        }
    }

?>