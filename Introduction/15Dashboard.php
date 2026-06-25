<?php 
    // session_start();
    // if(!isset($_SESSION['role'])){
    //     header('location:15_Login.php');
    //     exit;
    // }
    // if($_SESSION['role']!=1){
    //     header('location:index.php');
    //     exit;
    // }
    
    
    if(!isset($_COOKIE['role'])){
        header('location:15_Login.php');
        exit;
    }
    if($_COOKIE['role']!=1){
        header('location:index.php');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Dashboard</h1>
</body>
</html>