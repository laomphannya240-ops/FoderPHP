<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
   <div class="mt-4 m-auto p-4 shadow rounded-3 w-25">
    <div class="mt-3 text-center fw-bold">
        Register
    </div>
    <form  action="2_Createuser.php"  method="POST">
    <div class="mt-3">
        <label class="form-label" for="Enter name">Enter name</label>
        <input class="form-control" type="text" placeholder="Enter name" name="name">
    </div>
     <div class="mt-3">
        <label class="form-label" for="Enter name">Enter Email</label>
        <input class="form-control" type="text" placeholder="Enter Email" name="gmail">
    </div>
    <div class="mt-3">
        <label class="form-label" for="Enter name">Enter Password</label>
        <input class="form-control" type="text" placeholder="Enter password" name="password">
    </div>
   
    <button name="btn-register" class="mt-3 btn btn-primary w-100 " type="submit">Register</button>
     <div  class="mt-2 text-center">
    <span>Already have accounts?</span>    
    <a href="2_Login.php">Login</a>
</div>
</form>
</div>
</body>
</html>