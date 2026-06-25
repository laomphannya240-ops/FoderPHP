<?php
    include '15Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    
<div class="container mt-5">
    <div class="card shadow border-0 rounded-4 p-4">
        <!-- Header -->
        <div class="d-flex justify-content-end mb-4">
            <button class="btn btn-primary btn-lg rounded-3">
                <i class="bi bi-plus-lg"></i>
               <a class="text-white text-decoration-none" href="./16_Form.php">Add Student</a> 
            </button>
        </div>
        <!-- Table -->
        <div class="table-responsive">
         <table class="table align-middle">
                <thead>
                    <tr class="fw-bold text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php 
                require '15Connect.php';
                $select="SELECT *FROM tbl_class";
        $result=mysqli_query($connect,$select);
        while($r=mysqli_fetch_assoc($result)){
            echo "
             <tbody>
                    <tr class='text-center'>
                        <td>$r[id]</td>
                        <td>$r[name]</td>
                        <td>$r[gender]</td>
                        <td>$r[dob]</td>
                        <td>$r[created_at]</td>
                        <td>$r[update_at]</td>
                        <td>
                            <button  class='btn btn-outline-danger me-2'>
                            <a class='text-decoration-none' href='16_Delete.php?id= $r[id]'
                             onclick='return confirm(\"តើអ្នកចង់លុបសិស្សម្នាក់នេះចេញមែនទេ?\")'>
                             Delete</a>      
                            </button>

                            <button class='btn btn-outline-warning me-2' >
                                <a class='text-decoration-none' href='16_Edit.php?id= $r[id]'>
                             Edit
                             </a>  
                            </button>

                        </td>
                    </tr>
                </tbody>
            ";
        } 
                ?>
            </table>
        </div>
    </div>

</div>

</body>
</html>