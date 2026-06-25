<?php 
$host="localhost";
$username="root";
$password="";
$db="crud";

$connect=new mysqli($host,$username,$password,$db);
if($connect->connect_error){
    die ("Error conection!!".$connect->connect_error);
}

$name="";
$age="";
$address="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    echo $name;

    if($name=="" || $age==""|| $address==""){
        echo '
        <script>
        alert("place all input")
        </script>
        ';
    }

    $sql="INSERT INTO `user` (name,age,address)VALUES('$name','$age','$address')";
    $result=$connect->query($sql);
    if(!$result){
        die("Error Add ");
    }
header('location: ./1crud.php');
exit;
};

    

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
   <form action="" class="mt-4 m-auto p-2 shadow rounded-3 w-25" method="POST">
    <div class="mt-3 text-center">
        Add
    </div>
    <div class="mt-3">
        <label class="form-label" for="Enter name">Enter name</label>
        <input class="form-control" type="text" placeholder="Enter name" name="name">
    </div>
    <div class="mt-3">
        <label class="form-label" for="Enter name">Enter Age</label>
        <input class="form-control" type="text" placeholder="Enter Age" name="age">
    </div>
    <div class="mt-3">
        <label class="form-label" for="Enter name">Enter address</label>
        <input class="form-control" type="text" placeholder="Enter address" name="address">
    </div>
    <button class="mt-3 btn btn-primary w-100 ">Add</button>
   </form>
</body>
</html>