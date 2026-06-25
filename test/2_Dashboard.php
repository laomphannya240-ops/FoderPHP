<?php
session_start();
if(isset($_COOKIE['role'])){
    header('location:2_Login.php');
    exit;
}
if($_COOKIE['role']!=1){
    header('location:2_User.php');
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
    <h1>Hlelo Dashboad</h1>
</body>
</html>