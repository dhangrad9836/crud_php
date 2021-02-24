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

function addNumbers($num_1=0, $num_2=0){
    return $num_1 + $num_2;
}

printf("5 + 4 = %d<br>", addNumbers(5,4));

//changeMe function that pass by value //will print 5
function changeMe($change){
    $change = 10;
}
$change = 5;
changeMe($change);
echo "Change : $change<br>";

//pass by reference using ampersand &
//this will print 10
function changeMe2(&$change){
    $change = 10;
}
$change = 5;
changeMe2($change);
echo "Change : $change<br>";
?>

</body>
</html>