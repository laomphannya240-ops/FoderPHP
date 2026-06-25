<?php 
try {
    $connect=mysqli_connect('localhost','root','','db_school');
} catch (Exception $p) {
    //throw $th;
    echo $p->getMessage();
}


?>