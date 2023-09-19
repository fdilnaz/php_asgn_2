<?php
function evenNumbers($start, $end, $stepping) {
    while($start <= $end){
        if ($start % 2 === 0) {
            echo $start . ' ';
        }
        $start+= $stepping;
    }
}

evenNumbers(2, 20, 2);