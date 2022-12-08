<?php
    function add($a,$b){
        return $a + $b;
    }
    function molti($a,$b){
        return $a - $b;
    }
    function division($a,$b){
        return $a / $b;
    }
    function mod($a,$b){
        return $a % $b;
    }
    function sub($a,$b){
        return $a % $b;
    }

    $total = add(10,5);
    print("<h1>$total</h1>");
    $total = molti(10,5);
    print("<h1>$total</h1>");
    $total = division(10,5);
    print("<h1>$total</h1>");
    $total = mod(10,5);
    print("<h1>$total</h1>");
    $total = sub(10,5);
    print("<h1>$total</h1>");

?>