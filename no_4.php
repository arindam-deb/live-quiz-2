<?php

function fibonacci() {
    $previous = 0;
    $current = 1;
    $next=1;

    for ($i = 0; $i < 10; $i++) {
        echo $previous . "  ";
        $next = $previous + $current;
        $previous = $current;
        $current = $next;
    }

}

fibonacci();