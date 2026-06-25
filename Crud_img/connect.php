<?php 
try{
    $connect=mysqli_connect('localhost','root','','db_school');
}catch(Exception $p){
    echo $p->getMessage();
}

    
   

?>