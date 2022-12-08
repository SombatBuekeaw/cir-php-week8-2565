<?php 
    //1. call By Value
    function hello($message){
        return $message ;
    }
    $hi = hello("Hi! Mr.Mark Zuckerberg");
    print($hi);
    
    //2. call By reference
    function welcome($message){
        return $message ;

    }
    print("<hr />");

    $str = "Hello! Mr.Jeff Bezzo";
    $welcome = welcome($str);
    print($welcome);

    function crack($a = 15, $b = 1, $c = 5){
        return $total = $a + $b + $c;
    }
    print("<hr />");

    $a = 20;
    $b = 40;
    $c = 30;

    $sum = crack();
    $sum2 = crack(2,10,5);
    $sum3 = crack($a,$b,$c);
    print($sum);
    print("<hr />");
    print($sum2);
    print("<hr />");
    print($sum3);

?>
