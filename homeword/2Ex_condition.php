<?php 
    $code=11;
    $name="Coca cola";
    $qty=2;
    $price=350;
    $total=$qty*$price;
    $pay=$total-($total*10/100);
     
    echo 'Name = ',$name,'<br>';
    echo 'Code = ',$code,'<br>';
    echo 'qty = ',$qty,'<br>';
    echo 'price = ',$price,'<br>';
    if($total>1 && $total<10){
        echo 'Total = ',$total,'<br>';
        echo 'Discount = 10%','<br>';
         $pay=$total-($total*10/100);
        echo 'Total Discount = ',$pay;
    }
     else if($total>11 && $total<20){
        echo 'Total = ',$total,'<br>';
        echo 'Discount = 20%','<br>';
        
        $pay=$total-($total*20/100);
        echo 'Total Discount = ',$pay;
    }
    else if($total>21 && $total<30){
        echo 'Total = ',$total,'<br>';
        echo 'Discount = 30%','<br>';
        
        $pay=$total-($total*30/100);
        echo 'Total Discount = ',$pay;
    }
     else if($total>31 && $total<40){
         echo 'Total = ',$total,'<br>';
        echo 'Discount 40%','<br>';
        $pay=$total-($total*40/100);
        echo 'Total Discount = ',$pay;
    }
     else if($total>41 && $total<50){
        echo 'Total = ',$total,'<br>';
        echo 'Discount = 50%','<br>';
        $pay=$total-($total*50/100);
        echo 'Total Discount = ',$pay;
    }
     else if($total>51 && $total<60){
        echo 'Total = ',$total,'<br>';
        echo 'Discount = 60%','<br>';
        $pay=$total-($total*60/100);
        echo 'Total Discount = ',$pay;
    }
    else{
        echo 'Total = ',$total,'<br>';
         echo 'Discount = 70%','<br>';
        $pay=$total-($total*70/100);
        echo 'Total Discount = ',$pay;
    }
?>