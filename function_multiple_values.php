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

    //passing unknown number of values as a parameter
    //you will use ... 
    function getSum(...$nums){
        $sum = 0;
        foreach($nums as $num){
            $sum += $num;
        }
        return $sum;
    }
    printf("Sum = %d<br>", getSum(1,2,3,4));

    //returning multiples in an array
    function doMath($x, $y){
        return array(
            $x + $y,
            $x - $y
        );
    }
    list($sum, $difference) = doMath(5,4);
    echo "Sum = $sum<br>";
    echo "Difference = $difference<br>";


?>
</body>
</html>