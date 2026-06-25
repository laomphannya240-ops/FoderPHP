<?php 
$data = [
    [
        'id' => 1,
        'name' => "Phannya",
        'gender' => "Male",
        'age' => 18
    ],
    [
        'id' => 2,
        'name' => "Dara",
        'gender' => "Male",
        'age' => 20
    ],
    [
        'id' => 3,
        'name' => "Sokha",
        'gender' => "Female",
        'age' => 19
    ],
    [
        'id' => 4,
        'name' => "Rina",
        'gender' => "Female",
        'age' => 21
    ],
    [
        'id' => 5,
        'name' => "Vanna",
        'gender' => "Male",
        'age' => 22
    ],
    [
        'id' => 6,
        'name' => "Lina",
        'gender' => "Female",
        'age' => 18
    ],
    [
        'id' => 7,
        'name' => "Sopheak",
        'gender' => "Male",
        'age' => 23
    ],
    [
        'id' => 8,
        'name' => "Mony",
        'gender' => "Female",
        'age' => 20
    ],
    [
        'id' => 9,
        'name' => "Kosal",
        'gender' => "Male",
        'age' => 24
    ],
    [
        'id' => 10,
        'name' => "Nita",
        'gender' => "Female",
        'age' => 19
    ]
];
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
    <div class="container p-4 mt-4 shadow rounded-4">
        <table class="table table-hover text-center">
            <thead class="table-dark">
<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
            </thead>
     <tbody>
    <?php 

foreach($data as $b){
    echo '
     <tr>
            <td>'.$b['id'].'</td>
            <td>'.$b['name'].'</td>
            <td>'.$b['gender'].'</td>
            <td>'.$b['age'].'</td>
            <td>
            <button class="btn btn-outline-danger">Delete</button>
            <button class="btn btn-outline-warning">Edit</button>
            </td>
        </tr>
        ';
}  ?>
</tbody>  
 </table>
    </div>
</body>
</html>