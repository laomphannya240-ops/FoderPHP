<?php 

?>
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
    <div class="container w-25 shadow rounded-3 p-3">
        <form action="" method="POST">
            <div class="mt-3"> 
            <label for="" class="form-label">Name</label>
            <input name="name" class="form-control" type="text" placeholder="Enter name">
        </div>
        <div class="mt-3"> 
            <label for="" class="form-label">Email</label>
            <input name="email" class="form-control" type="email" placeholder="Enter Email">
        </div>
        <div class="mt-3"> 
            <label for="" class="form-label">Password</label>
            <input name="password" class="form-control" type="password" placeholder="Enter Password">
        </div>

        <button name="sub" type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
        </form>
        
    </div>

<?php 
    $name="";
    $email="";
    $password="";
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}
?>

    <table class="table text-center mt-4">
        <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        if(isset($_POST['sub'])){   
        ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $email ?></td>
                <td><?= $password ?></td>
                <td>
                    <button class="btn btn-secondary">Edit</button>
                    <button class="btn btn-warning">Delete</button>
                    
                </td>
            </tr>
            <?php }?>
        </tbody>
        
    </table>
    
</body>
</html>
