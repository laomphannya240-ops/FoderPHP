<?php 
    include '15Connect.php';
    // session_start();
    global $connect;
    
    if(isset($_POST['btnlogin'])){
        $gmail=$_POST['gmail'];
        $password=$_POST['password'];

        $select="SELECT * FROM `tbl_users` WHERE gmail='$gmail'";
        $execute=mysqli_query($connect,$select);
        $data=mysqli_fetch_assoc($execute);
        if($data){
            if(password_verify($password,$data['password'])){
                // $_SESSION['role']=$data['role'];
                 setcookie("role",$data['role'],time()+60,'/');
                if($data['role']==1){
                   header('location: 15Dashboard.php');
                   exit;
                }
                elseif($data['role']==0){
                    header('location: index.php');
                    exit;
                }
                else{
                    echo 'wrong password!!';
                }
            }
        }
        else{
                    echo 'error';
                }
    }
?>