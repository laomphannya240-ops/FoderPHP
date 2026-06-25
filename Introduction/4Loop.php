<?php
echo "=========for loop=========","<br>";
for($i=0;$i<10;$i++){
    echo $i;
}
echo "<br>";
echo "<br>";

echo "=========while loop=========","<br>";
$i=10;
while($i>0){
    echo $i;
    $i-=3;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo"=========do while loop=========","<br>";
$i=10;
do{
    echo $i;
    $i-=4;
}while($i<=-6);








?>