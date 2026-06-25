<?php 
    $host="";
    $username="root";
    $password="";
    $db="db_school";

    $connect=new mysqli($host,$username,$password,$db);
    if($connect->connect_error){
        die("Error connect".$connect->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center mt-3">Form Student</h1>
<button class="btn btn-warning mt-5 ms-4">Add</button>
    <table class="table text-center mt-1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>

         <?php
        $sql="SELECT * FROM `tbl_student`";
        $result=$connect->query($sql);
        if(!$result){
            die("Error sql");
        }
        while($row=$result->fetch_assoc()){
             echo "
                <tr>
                <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[age]</td>
            <td>$row[gender]</td>
            <td>
                <button class='btn btn-secondary'>Edit</button>
                <button class='btn btn-primary'>Delete</button>
            </td>
        </tr>
                ";
        }





         

         
        //     $sql="SELECT * FROM tbl_student";
        //     $result=$connect->query($sql);
        //     if(!$result){
        //         die("Error Sql");
        //     }

        //     while($row=$result->fetch_assoc()){
        //         echo "
        //         <tr>
        //         <td>$row[id]</td>
        //     <td>$row[name]</td>
        //     <td>$row[age]</td>
        //     <td>$row[gender]</td>
        //     <td>
        //         <button class='btn btn-secondary'>Edit</button>
        //         <button class='btn btn-primary'>Delete</button>
        //     </td>
        // </tr>
        //         ";
        //     }
         
         ?>
        
    

         <!-- <tr>
            <td>Phanya</td>
            <td>12</td>
            <td>PP</td>
            <td>
                <button class="btn btn-secondary">Edit</button>
                <button class="btn btn-primary">Delete</button>
            </td>
        </tr> -->

    </table>
</body>
</html>