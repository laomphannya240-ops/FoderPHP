<?php 
class Person{
    private $id;
    private $name;

    public function __construct($id,$name){
        $this->id=$id;
        $this->name=$name;
    }
    public function show(){
        echo $this->id,'<br>';
        echo $this->name,'<br>';
    }

}
$p=new Person(1,"Jonh");
$p->show();

?>