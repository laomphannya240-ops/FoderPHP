<?php 
echo'=======Function=======','<br>';
echo '1.non return function','<br>';
echo '1.1 non return function non parameter','<br>';
function show(){
    echo 'hello';
}
show();

echo '<br>';
echo '<br>';

echo '1.2 non return function have parameter','<br>';
function text($txt){
    echo $txt;
}
text('hello bro');

echo '<br>';
echo '<br>';

echo '2.have return function','<br>';
echo '2.1 have return function non parameter','<br>';
function sum(){
    $a=10;
    $b=20;
    return $a+$b;
}
echo sum();
echo '<br>';
echo '<br>';
echo '2.2 have return function have parameter','<br>';
function sum2($a,$b){
    return $a+$b;
}
$c=sum2(10,20);
echo 'c =',$c,'<br>';
echo 'Sum = ', $c+90;

?>