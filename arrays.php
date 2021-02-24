<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $friends = array('Joy', 'Willow', 'Ivy');
    echo 'Wife: ' . $friends[0] . '<br>';
    $friends[3] = 'Steve';
    foreach($friends as $f) {
        printf("Friend : %s<br>", $f);
    }

    $me_info = array('Name' => 'Derek', 
                    'Street' => '123 Main');
    foreach($me_info as $k => $v){
        printf("%s : %s<br>", $k, $v);
    }

    //combining 2 arrays
    $friends2 = array('Doug');
    $friends = $friends + $friends2;

    //sorting arrays
    sort($friends);
    rsort($friends);
    arsort($me_info);
    krsort($me_info);
    
    //multidimensional array
    $customers = array(array('Derek', '123 Main'),
                        array('Sally', '122 Main'));
        for($row = 0; $row < 2; $row++){
            for($col = 0; $col < 2; $col++){
                echo $customers[$row][$col]. ', ';
            }
        }
echo '<br>';

//turn a string into an array using explode function
$let_str = "A B C D";
$let_arr = explode(' ', $let_str); //now it is in an array format
foreach($let_arr as $l) {
    printf("Letter: %s<br>", $l);
}

//now turn an array into a string using implode function
$let_str_2 = implode(' ', $let_arr);
echo "String : $let_str_2<br>";

//check if a key exists using array_key_exists('Name of key', $variable)
printf("Check if Key exists in array : %d<br>",
array_key_exists('Name', $me_info));

//check if value exists in an array using in_array()
printf("Check if value exists in array : %d<br>",
array_key_exists('Joy', $friends));



?>  
</body>
</html>