<?php
 abstract class Animal{
    abstract public function sound();
 }
 class Dog extends Animal{
    public function sound(){
        echo 'woof ekekekek';
    }
 }
 $d=new Dog();
 $d->sound();
?>