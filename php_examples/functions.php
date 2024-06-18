<?php
    // Helloworldfun();

    function Helloworldfun(){
        echo "This is from Hello World function";
    }

    // Addition
    $n1 = 100;
    $n2 = 20;
    addNum($n1,$n2);

    function addNum($x,$y){
        echo "Addition of two numbers is ".($x+$y)."<br><br>";
    }

    // String length 
    $str = "SDM College of Eng";
    $leng = stringLength($str);
    echo "Length of given string is ".($leng-1);
    function stringLength($str){
        return strlen($str);
    }