<?php
function evenNumbers($start, $end, $stepping) {
    if ($start % 2 !== 0) {
        $start += 1;
    }
    while($start <= $end){       
        echo $start . ' ';
        $start+= $stepping;
    }
}   

evenNumbers(1, 20, 2);