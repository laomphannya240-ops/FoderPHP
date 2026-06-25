<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Hello Users</h1>
     <?php 
    // if(isset($_COOKIE['role'])){
    //     echo '<a href="2_Logout.php" class="mt-3 btn btn-primary w-10 ">Logout</a>';
    // }
    // else{
    //     echo ' <a href="2_Login.php" class="mt-3 btn btn-primary w-10 " name="btnlogin">Login</a>
    //     <a href="2_Register.php" class="mt-3 btn btn-warning w-10 " name="btnlogin">Register</a>';
    // }

    if(isset($_COOKIE['role'])){
        echo '<a href="2_Logout.php" class="mt-3 btn btn-primary w-10 ">Logout</a>';
    }
    else{
        echo ' <a href="2_Login.php" class="mt-3 btn btn-primary w-10 " name="btnlogin">Login</a>
        <a href="2_Register.php" class="mt-3 btn btn-warning w-10 " name="btnlogin">Register</a>';
    }
    ?>
</body>
</html>