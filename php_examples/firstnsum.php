<?php
    $n = $_POST["num"];
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        $sum += $i;
    }
    echo "Sum of first $n natural numbers is $sum <br><br>";
    echo "<button><a href=\"../firstnsum.html\">Back</button>";
?>