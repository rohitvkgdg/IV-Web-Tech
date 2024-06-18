<?php
    //Example to create JSON with key value pairs
    $jObj = '{"College":"sdm","Code":"2sd","Place":"Dharwad"}';
    echo json_encode($jObj);
    echo "<br><br>";
    var_dump(json_decode($jObj));

    //Example to create JSON Associative array with key value pairs
    echo "<br><br>";
    $jObj = array("College"=>"sdm","Code"=>"2sd","Place"=>"Dharwad");
    echo json_encode($jObj);

// {
//     "College": "sdm",
//     "Code": "2sd",
//     "Place": "Dharwad"
// }

    //Example to create a job role using multi-dimensional array

    echo "<br><br>";
    $multiArr = array(
        'person' => array(
            "name" => "Rohit Kulkarni",
            "age" => "30",
            'address' => array(
                "city" => "Dharwad",
                "state" => "Karnataka",
                "country" => "India"
            )
        ),
        'company'=>array(
            "name"=>"SDM",
            "location"=>"Dharwad",
            'designation'=>"SDE II",
            'salary'=>"200K"
        )
    );
    echo json_encode($multiArr);
    echo "<br><br>";
    var_dump(json_decode(json_encode($multiArr)));
    echo "<br><br>";
    
    //Example to edit the values of JSON file
    $person = array(
        "name" => "Rohit Kulkarni",
        "age" => "30",
        'address' => array(
            "city" => "Dharwad",
            "state" => "Karnataka",
            "country" => "India"
        )
    );
    $person['age'] += 1;
    $person['address']['city'] = "Hubli";
    echo json_encode($person);
    echo "<br><br>";
    var_dump(json_decode(json_encode($person)));
    
?>