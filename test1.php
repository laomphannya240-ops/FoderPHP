 <?php 
// class Student{
//     private $name;
//     private $id;
//     public function __construct(){
//         $this->name="";
//         $this->id=0;
//     }
//     public function setName($name){
//         $this->name=$name;
//     }
//     public function setId($id){
//         $this->id=$id;
//     }
//     public function getName(){
//         return $this->name;
//     }
//     public function getId(){
//         return $this->id;
//     }
    
// }
// $p=new Student();
// $p->setName("Phannya");
// $p->setId(120);
// echo $p->getName();
// echo $p->getId();

class Student{
    private $name;
    private $id;

    public function __construct($name,$id){
        $this->name=$name;
        $this->id=$id;
    }
    public function Show(){
        echo $this->name;
        echo $this->id;
    } 
}
$p=new Student("ya",12);
$p->Show();

echo "<br>";
echo "single Inheritance","<br>";
class Students{
    public function Show(){
        echo "Hello Student";
    }
}
class Name extends Students{
    public function chil(){
echo "hello class Name";
    }
    

};
$obj=new Name();
$obj->Show();
echo "<br>";
$obj->chil();

?> 

<?php 
echo "2. Multilevel Inheritance","<br>";
class Father{
    public function first(){
        echo 'Hello father',"<br>";
    }
}
class Mather extends Father{
    public function secound(){
        echo "Hello Mather","<br>";
    }
}
class Son extends Mather{
    public function third(){
        echo 'Hello Son',"<br>";
    }
}
echo "<br>";

$obj=new Son();
$obj->first();
$obj->secound();
$obj->third();
?>

<?php 
echo '3. Hierarchical Inheritance',"<br>";
class Home{
    public function A(){
        echo 'Hello A in Class Home',"<br>";
    }
}
class Car extends Home{
    public function B(){
        echo "Hello class Car in Home","<br>";
    }
}
class Bike extends Home{
    public function C(){
        echo 111,"<br>";
    }
}
$car=new Car();
$car->A();
$car->B();

$bike=new Bike();
$bike->A();
$bike->C();
?>

<?php 
echo "III. Polymorphism","<br>";
class Meh{
    protected $name;
    protected $id;
    public function __construct($name,$id){
        $this->name=$name;
        $this->id=$id;
    }
    public function Output(){
        echo $this->name ,"<br>";
        echo $this->id;
    }
}
class Kon extends Meh{
    protected $gender;
    public function __construct($name,$id,$gender){
        parent::__construct($name,$id);
        $this->gender=$gender;
    }
    public function NewOutput(){
        parent::Output();
        echo $this->gender;
        
    }  
}
$p=new Kon("-Name",123,"Male");
$p->NewOutput();
echo "<br>";
?>
<?php 
echo "VI. Polymorphism","<br>";
class Yaa{
    protected $name;
    protected $id;

    public function __construct($name,$id){
        $this->name=$name;
        $this->id=$id;
    }
    public function FuncName(){
        echo $this->name;
        echo $this->id;
    } 
}
class Ya extends Yaa{
    private $gender;
    public function __construct($name, $id,$gender)
    {
        parent::__construct($name, $id);
        $this->gender=$gender;
    }
    public function FuncName(){
         parent::FuncName();
         echo $this->gender;

    }
}
$p=new Ya("Phannya",1375,"Male");
$p->FuncName();
?>