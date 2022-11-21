<?php 
    // 1---index array------------------
    $names=["Sajid","Shohan","Jihan","Siam"];
    // using html pre tag
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    // using foreach loop
    foreach($names as $value){
        echo $value."<br><br>";
    };
    // using index number
    echo $names[0]."<br>";
    echo $names[1]."<br>";
    echo $names[2]."<br>";
    echo $names[3]."<br>";

    // 2 -----associative array---------------
    $runs=["Tamim"=>56,"Sakib"=>67,"Riyad"=>34,"Liton"=>69,"Taskin"=>29];
    // using html pre tag
    echo "<pre>";
    print_r($runs);
    echo "</pre>";
    // using foreach loop
    foreach($runs as $run){
        echo $run."<br><br>";
    }
    // using array key
    echo $runs["Tamim"]."<br>";
    echo $runs["Sakib"]."<br>";
    echo $runs["Riyad"]."<br>";
    echo $runs["Liton"]."<br>";
    echo $runs["Taskin"]."<br>";

    //3-------- multidimentinal array----------
    $info=[
        ["Sajid",28,"Dhaka"],
        ["Shohan",26,"Sherpur"],
        ["Jihan",23,"Mymensingh"],
        ["Siam",20,"Gazipur"]
    ];
   // using html pre tag
        echo "<pre>";
        print_r($info);
        echo "</pre>";
    // using for loop
    for($row=0;$row<3;$row++){
        echo "<h3>$row</h3>";

        echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$info[$row][$col]."</li>";
    }
    echo "</ul>";
    }

    // --------------------------------------------
    $month=[
        "jan"=>"January",
        "feb"=>"February",
        "mar"=>"March",
        "apr"=>"April",
        "may"=>"May",
        "jun"=>"June",
        "jul"=>"July",
        "aug"=>"August",
        "sep"=>"September",
        "oct"=>"October",
        "nov"=>"November",
        "dec"=>"December"
    ];
    echo "<pre>";
    print_r($month);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php array</title>
</head>
<body>
    <select>
        <option value="">Select Month</option>
        <?php
            foreach($month as $value){
               echo "<option>$value<option>";
            }
        ?>
    </select>
</body>
</html>