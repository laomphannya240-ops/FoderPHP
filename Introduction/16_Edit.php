
<?php 
require '15Connect.php';
    global $connect;

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select="SELECT * FROM tbl_class WHERE id=$id";
        $ex=mysqli_query($connect,$select);
        $row=mysqli_fetch_assoc($ex);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-light">

<div class="container mt-4">

    <!-- Back Button -->
    <a href="./16_table.php" class="btn btn-primary mb-4">
        <i class="bi bi-arrow-left"></i>
        Back to Table
    </a>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">

                <!-- Header -->
                <div class="card-header bg-white text-center border-0 pt-4">
                    <h1 class="fw-bold">Update Student</h1>
                </div>
                <!-- Body -->
                <div class="card-body p-4">

                    <form action="16_Update.php" method="POST">

                        <!-- Name -->
                        <div class="mb-4">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <label class="form-label fs-5">
                                Name
                            </label>

                            <input 
                            value="<?php echo $row['name'] ;?>"
                            name="name"
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Enter name"
                            >
                        </div>
                        <!-- Gender -->
                        <div class="mb-4">
                            <label class="form-label fs-5">
                                Gender f
                            </label>
                            <select  name="gender" class="form-select form-select-lg">
                                <option hidden>Select Gender</option>
                                <option value="Male" <?php echo $row['gender']=='Male'? 'selected' : '' ?> >Male</option>
                                <option value="Female" <?php echo $row['gender']== 'Female'? 'selected' : '' ?> >Female</option>
                            </select>
                        </div>

                        <!-- DOB -->
                        <div class="mb-4">
                            <label class="form-label fs-5">
                                DOB
                            </label>

                            <input 
                            value="<?= $row['dob']; ?>"
                            name="dob"
                                type="date"
                                class="form-control form-control-lg"
                            >
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button name="btnsub" class="btn btn-primary btn-lg rounded-3">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
