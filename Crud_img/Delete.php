<?php 
    require 'connect.php';
    global $connect;
session_start();
    if(isset($_GET['id'])){
        $id=$_GET['id'];

         $selece="SELECT image FROM tbl_product WHERE id=$id";
        $ex=$connect->query($selece);
        if(mysqli_num_rows($ex)>0){
            $row=mysqli_fetch_assoc($ex);
            $image=$row['image'];
            unlink($image);
            if(file_exists($image)){
                exit;
            }

        }

        $delete="DELETE FROM tbl_product WHERE id=$id";
       
        $execute=mysqli_query($connect,$delete);
        if($execute){
            
            header('location:table.php');
        }else {
        echo "Error deleting record: " .mysqli_error($connect);
    }
    }


?>