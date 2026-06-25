<?php

require 'connect.php';
global $connect;

$name = $_POST['name'];
$position = $_POST['position'];
$salary = $_POST['salary'];
$file = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if(!is_dir('images')){
    mkdir('images',0777,true);
}

$path = 'images/'.time().'-'.$file;

move_uploaded_file($tmp_name,$path);


$insert = "
INSERT INTO tbl_employee(employee,position,salary,image)
VALUES('$name','$position','$salary','$path')
";


$ex = mysqli_query($connect,$insert);


if($ex){

    $id = mysqli_insert_id($connect);

    echo $id;

}else{

    echo "error";

}

?>