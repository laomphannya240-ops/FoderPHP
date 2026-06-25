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
    <form action="" class="shadow rounded w-25 m-auto mt-3 p-4 " method="POST">
    <div class="mt-2" >
        <label  class="form-label" for="">Name</label>
        <input name="name" class="form-control" type="text" placeholder="Enter name">
    </div>
     <div class="mt-2">
        <label  class="form-label" for="">Emain</label>
        <input name="email" class="form-control" type="email" placeholder="Enter Emain">
    </div>
     <div class="mt-2">
        <label  class="form-label" for="">Password</label>
        <input name="password" class="form-control" type="password" placeholder="Enter Password">
    </div>
    <div>
        <button type="submit" name="sub" class="btn btn-primary w-100 mt-4">Submit</button>
    </div>
    </form>


<?php 
class User{
    public $name;
    public $email;
    public $password;

    public function __construct($name,$email,$password){
        $this->name=$name;
         $this->email=$email;
         $this->password=$password;

    }
};
?>
    <?php 
    $name="";
    $email="";
    $password="";

    if(isset($_POST['sub'])){
        $user=new User(
    $_POST['name'],
    $_POST['email'],
    $_POST['password'],
        );
   
    }
    ?>

    <table class="table text-center mt-4">
        
    <thead>
        <tr>
            <th>N<sup>0</sup></th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <?php 
           $i=1;
           ?>
            <td><?= $i++ ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->password ?></td>
            <td>
                <button class="btn btn-outline-primary">Edit</button>
                <button class="btn btn-outline-warning">Delete</button>
            </td>
        </tr>
    </tbody>
    </table>
</body>
</html>