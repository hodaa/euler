<?php
$sum=0;
for($i=1;$i<1000;$i++){
    
    if(is_int($i/3)||is_int($i/5)){
        $sum +=$i;
    }
}
echo $sum;