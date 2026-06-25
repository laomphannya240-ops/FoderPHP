<?php 

try{
    $connect=mysqli_connect('localhost','root','','db_school',3306);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>