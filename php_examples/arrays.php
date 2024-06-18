<?php
$arr_num = [111, 222, 333];
echo "Array elements are: <br>";
for ($i = 0; $i < count($arr_num); $i++) {
    echo $arr_num[$i] . "</br>";
}
echo "<br><br>";
echo "Array elements using for-each: <br>";
foreach ($arr_num as $arrele) {
    echo $arrele . "<br>";
}

echo "<br><br>";
print_r($arr_num);

echo "<br><br>";
echo "Associative arrays in PHP: <br>";
$assoc_arr = ["collegeName" => "SDMCET", "collegeCode" => "2SD", "Address" => "Dharwad"];
print_r($assoc_arr);

echo "<br><br>";
echo "<br>Accessing elements of associative array: <br>";
foreach ($assoc_arr as $k => $v) {
    echo $k . " : " . $v . "<br>";
}
echo "<br>Accessing elements of associative array using array key: <br>";
echo $assoc_arr["collegeName"] . "<br>";

echo "<br><br>";
echo "Multidimensional arrays in PHP: <br>";
$multidim_arr = array(array(11, 22, 33), array('s', 'd', 'm'), array("Rohit", "Vishwa"));
echo $multidim_arr[1][1]."<br><br>";
print_r($multidim_arr);
echo "<br><br>";
for ($row = 0; $row < count($multidim_arr); $row++) {
    for ($col = 0; $col < count($multidim_arr); $col++) {
        echo $multidim_arr[$row][$col] . "<br>";
    }
}

echo "<br><br>";
echo "Builtin functions in arrays:<br>";
print_r(array_keys($assoc_arr));
echo "<br><br>";
echo "Reversing the array:<br>";
print_r(array_reverse($assoc_arr));