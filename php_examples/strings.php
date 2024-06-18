<?php
    $strClg = "SDM College of Eng";
    $leng = strlen($strClg);
    $strPos = strpos($strClg,"e");
    echo "Length of string is ".($leng-1)."<br><br>";
    echo "Position of e is ".$strPos."<br>";
?>