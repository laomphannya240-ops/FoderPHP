<?php 
// session_start();
// session_destroy();
setcookie("role","",time()-60,"/");
header('location:index.php');
exit;

?>