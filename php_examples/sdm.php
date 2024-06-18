<?php
    $filename = file_get_contents("sdm.json");
    $decodeObj = json_decode($filename,true);
    foreach ($decodeObj["SDMLib"] as $books){
        echo $books['Title']."<br><br>";
    }
?>