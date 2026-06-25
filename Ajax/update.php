<?php 

require 'connect.php';
global $connect;
    $id = $_POST['id'];
    $name = $_POST['name'];
$position = $_POST['position'];
$salary = $_POST['salary'];

if($_FILES['file']['name']){
   $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='images/'.time().'-'.$file;
    move_uploaded_file($tmp_name,$path);

    $update="UPDATE tbl_employee SET employee='$name', position='$position', salary='$salary', image='$path' WHERE id='$id'";
}else{
    $update="UPDATE tbl_employee SET employee='$name', position='$position', salary='$salary' WHERE id='$id'";
}
$rs=$connect->query($update);
if($rs){
    echo 'success';
}
?>