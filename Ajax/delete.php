<?php 
require 'connect.php';
global $connect;

    $id=$_POST['id'];

    $delete="DELETE FROM tbl_employee WHERE id=$id";
    $rs=$connect->query($delete);
    if($rs){
        echo 'success';
    }

?>