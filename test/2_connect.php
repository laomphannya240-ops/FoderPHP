<?php 
    // try{
    //      $connect=mysqli_connect('localhost','root','','crud');

    // }catch(Exception $e){
    //     echo $e->getMessage();
    // }
   
    // try{
    //     $connect=mysqli_connect('$localhost','$root','','crud');
    // }catch(Exception $e){
    //     echo $e->getMessage();
    // }

    try{
        $connect=mysqli_connect('localhost','root','','crud');
    }catch(Exception $e){
        echo $e->getMessage();
    }
   

    
?>