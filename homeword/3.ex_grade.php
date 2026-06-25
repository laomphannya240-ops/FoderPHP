<?php 
   $s1=75;
   $s2=90;
   $s3=100;
   $s4=89;
   $s5=98;
   
   $total=$s1+$s2+$s3+$s4+$s5;
   $average=$total/5;
    $grade="";
   
    if($average>=90 && $average<=100){
        $grade='A';
    }
    else if($average>=80 && $average<89){
        $grade='B';
    }
    else if($average>=70 && $average<79){
        $grade='C';
    }
    else if($average>=60 && $average<69){
        $grade='D';
    }
    else if($average>=50 && $average<59){
        $grade='E';
    }
     else{
        $grade='F';
    }
     echo 'Score1 = ',$s1,'<br>';
    echo 'Score2 = ',$s2,'<br>';
    echo 'Score3 = ',$s3,'<br>';
    echo 'Score4 = ',$s4,'<br>';
    echo 'Score5 = ',$s5,'<br>';
    echo 'Total = ',$total,'<br>';
    echo 'avg = ',$average,'<br>';
    echo 'Grade = ',$grade;
    
?>