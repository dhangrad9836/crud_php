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
    //While loops
    $i = 0;
    while($i <10){  //joe says "so as long as i is less than 10
        echo ++$i . ', ';
    }
    
    echo '<br>';

    //for loops
    for($i = 0; $i < 10; $i++){
        if(($i % 2 ) == 0){ //print only odd numbers
            continue;
        }
        //break when the loop is 7
        if($i == 7) break;
        echo $i . ', ';
    }

    echo '<br>';

    //do while loop
    $i = 0;
    do { 
    echo "Do while loop: $i<br>";
    } while ($i > 0);

?>



</body>
</html>