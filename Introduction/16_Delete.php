<?php 
    require '15Connect.php';
    global $connect;

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $delete="DELETE FROM tbl_class WHERE id=$id";
        $execute=mysqli_query($connect,$delete);
        if($execute){
            echo 'Delete succesful';
            header('location:16_table.php');
            // <script>window.location.href="16_table.php"</script>
            exit;
        }
        else{
            echo 'Error'.mysqli_errno($connect);
        }
    }

    

?>