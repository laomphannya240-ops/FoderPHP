<?php  
     require '15Connect.php';
     global $connect;

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];

        $update="UPDATE tbl_class SET name='$name',gender='$gender',dob='$dob' WHERE id=$id";
        $execute=mysqli_query($connect,$update);

if($execute){
    header("Location: 16_table.php");
    exit();
}else{
    echo mysqli_error($connect);
}
    }

?>