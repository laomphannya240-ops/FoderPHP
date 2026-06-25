<?php 
   include '2_connect.php';
   session_start();
   global $connect;
   

   if(isset($_POST['btnlogin'])){
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];

    $select="SELECT * FROM tbl_user WHERE gmail='$gmail'";
    $execute=mysqli_query($connect,$select);
    $data=mysqli_fetch_assoc($execute);

    if($data){
        if(password_verify($password,$data['password'])){
            setcookie("role",$data['role'],time()+60,'/');
            if($data['role']==1){
                header('location:2_Dashboard.php');
                exit;
            }
            else if($data['role']==0){
                header('location:2_User.php');
                exit;
            }
             else{
        echo '<script>alert("Wrong password")</script>';

     }
        }  
    }
     else{
        echo '<script>alert("Don`t have accont")</script>';

     }
     
   }

?>
 