<?php 
class Person{
    protected $id;
    protected $name;
    public function __construct($id,$name){
        $this->id=$id;
        $this->name=$name;
    }
    public function output(){
        echo $this->id;
        echo $this->name;
    }
}
class Sochea extends Person{
    private $gender;
   
    public function __construct($id, $name,$gender){
        parent::__construct($id,$name);
        $this->gender=$gender;
    }
    public function output(){
        parent::output();
        echo $this->gender;
    }
}
$sochea=new Sochea(1,"Jame Sok","Famale");
$sochea->output();
   
?>