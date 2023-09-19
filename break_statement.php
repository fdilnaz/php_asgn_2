<?php

function fibonacci() {
    $start = 0;
    $end = 1;

    for ($i = 1; $i <= 15; $i++) {
        echo $start . ' ';
        $next = $start + $end;
        $start = $end;
        $end = $next;

        if($end > 100){
            break;
        }
    }
}

fibonacci();
