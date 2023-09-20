<?php
function evenNumbers($start, $end, $stepping) {
    do {
        if($start % 2 !== 0) {
        $start += 1;
        }      
        echo $start . ' ';
        $start+= $stepping;
    }
    while($start <= $end);
}

evenNumbers(1, 20, 2);