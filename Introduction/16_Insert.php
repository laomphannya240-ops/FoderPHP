<?php
    require '15Connect.php';
    global $connect;

    if(isset($_POST['btnsub'])){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];

        $insert="INSERT INTO tbl_class (name,gender,dob)VALUES('$name','$gender','$dob')";
        $execute=mysqli_query($connect,$insert);
        if($execute){
            echo '
            <script>window.location.href="16_table.php"</script>
            ';
        }else{
            echo 123;
        } 
        
    }
?>