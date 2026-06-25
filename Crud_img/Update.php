 
    // require 'connect.php';
    // global $connect;
    // if(isset($_POST['id'])){
    //     $id=$_POST['id'];
    //     $p_name=$_POST['p_name'];
    //     $qty=$_POST['qty'];
    //     $price=$_POST['price'];
    //     $image=$_POST['image'];

    //     $update="UPDATE FROM tbl_product SET p_name='$p_name',qty='$qty',price='$price',image='$image'";
    //     $result=$connect->query($update);

    //     if($result){
    //         header('location:table.php');
    //     }
    //     else{
    //         echo mysqli_errno($connect);
    //     }
    // }

    <?php
    require 'connect.php';
    global $connect;
    if(isset($_POST['btnUpdate'])){
        $id=$_POST['id'];
        $p_name=htmlspecialchars($_POST['p_name']);
        $qty=htmlspecialchars($_POST['qty']);
        $price=htmlspecialchars($_POST['price']);

        if($_FILES['image']['name']){
            $image=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $path='images/'.time().'-'.$image;
            move_uploaded_file($tmp_name,$path);
            $update="UPDATE tbl_product SET p_name='$p_name',qty='$qty',price='$price',image='$path' WHERE id=$id";

        }else{
            $update="UPDATE tbl_product SET p_name='$p_name',qty='$qty',price='$price' WHERE id=$id";
        }
        $execute=mysqli_query($connect,$update);
        if($execute){
            header('location: table.php');
        }
    }    
?> 