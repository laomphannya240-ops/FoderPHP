<?php

$host="localhost";
$username="root";
$password="";
$db="crud";

$connect=new mysqli($host,$username,$password,$db);
if($connect->connect_error){
    die ("Error conection!!".$connect->connect_error);
}
if(isset($_GET['id'])){
    $id=$_GET['id'];

   $sql="DELETE FROM user WHERE id=$id";
   $delete=mysqli_query($connect,$sql);
}
header('location:./1crud.php');
exit;

?>


