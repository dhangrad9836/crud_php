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
function double($x){
    return $x * $x;
}

$list = [1,2,3,4];
$dbl_list = array_map('double', $list);
print_r($dbl_list);

echo "<br>";

//reduce an array
function mult($x, $y){
    return $x *= $y;
}

$list = [1,2,3,4];
$prod = array_reduce($list, 'mult', 1); //name of variable, name of function, default first value
print_r($prod);                         //note if you change the default first value to 2 it doubles


echo "<br>";

//filter through an array ie: checking for even nums
function isEven($x){
    return ($x % 2) == 0;
}
$list = [1,2,3,4,5,6];

$even_list = array_filter($list, 'isEven'); //first is name of variable if list and second is name of funciton
print_r($even_list)

?>

</body>
</html>