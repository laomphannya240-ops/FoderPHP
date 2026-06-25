<?php 
class Grandfather{
    public function myfun(){
        echo"hello father and son";
    }
}
class Father extends Grandfather{

}

class Son extends Father{

}
$fun= new Son();
$fun->myfun();

?>