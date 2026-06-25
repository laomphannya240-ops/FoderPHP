<?php 
class Animal{
    public function Myfun(){
        echo "Hello Hierarchical","<br>";
    }
}
class Cat extends Animal{

}
class Dog extends Animal{

}
$p=new Cat();
$p->Myfun();
$p=new Dog();
$p->Myfun();
?>