<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Student{
        public $name;
        public $id;
        public $gender;

        public function __construct($name,$id,$gender)
        {
           $this->name=$name;
           $this->id=$id;
           $this->gender=$gender;
        }
        // public function Show(){
        //     echo "Name : ",$this->name ,"<br>";
        //     echo "ID : ", $this->id,"<br>";
        //     echo "Gender : ", $this->gender,"<br>";
        // }
    }
    $p=new Student("Phannya",12,"Male");
    echo $p->name ,"<br>";
    echo $p->id;
   
    ?>
</body>
</html>