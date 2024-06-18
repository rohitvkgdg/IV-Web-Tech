<?php
    $stdname = $_POST["Name"];
    $usn = $_POST["ddl_usn"];
    $div = $_POST["rddivision"];
    $course = $_POST["chkcourse"];
    $date = $_POST["regdate"];

if (isset($_POST["btnsubmit"])) {
    echo $stdname;
    echo "<br/>";
    echo $usn;
    echo "<br/>";
    echo $div;
    echo "<br/>";
    echo $course;
    echo "<br/>";
    echo $date;
    echo "<br/>";
} else {
    echo "Please enter missing value";
}