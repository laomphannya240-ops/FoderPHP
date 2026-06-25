<?php 
class Person{
    private $name;
    private $id;
    public function __construct()
    {
       $this->name="";
       $this->id=0;
    }
    public function SetName($name){
        $this->name=$name;
    }
    public function SetID($id){
        $this->id=$id;
    }
    public function GetName(){
        return $this->name;
    }
    public function GetID(){
        return $this->id;
    }
}
$p=new Person();
$p->SetID(1);
$p->SetName("Dip Sok");
echo $p->GetID();
echo $p->GetName();

?>