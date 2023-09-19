<?php
function evenNumbers($start, $end, $stepping) {
    do{
        if ($start % 2 === 0) {
            echo $start . ' ';
        }
        $start+= $stepping;
    }
    while($start <= $end);
}

evenNumbers(2, 20, 2);