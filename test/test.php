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
    <form action="" class="shadow w-25 rounded-3 mt-4 p-3" method="POST">

    <div class="mt-2">
        <label for="">Name</label>
        <input  name="name" type="text" placeholder="name">
    </div>
    <div class="mt-2">
        <label for="" >Name</label>
        <input name="email" type="email" placeholder="name">
    </div>
    <div class="mt-2">
        <label for="">Name</label>
        <input  name="pass" type="text" placeholder="name">
    </div>

    <div>
        <button type="submit" name="sub">Sub</button>
    </div>
    </form>
    <?php 
    $name="";
    $email="";
    $pass="";
if(isset($_POST['sub']))
    {
       $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    }
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $name ?></td>
                <td><?= $email ?></td>
                <td><?= $pass ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>