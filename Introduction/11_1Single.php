<?php 
class Fruit{
    public function Say(){
        echo"Hello Mango";
    }
}
class Mango extends Fruit{

}
$obj = new Mango();
$obj->say();
?>