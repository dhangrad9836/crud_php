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

    date_default_timezone_set('America/New_York');
    echo "Date : " . date('I F m-d-Y g:i:s A') . "<br>";

    $important_date = mktime(0, 0, 0, 12, 21, 1974);
    echo "Important Date: " . date('I F m-d-Y g:i:s A',
    $important_date) . "<br>";


?>

</body>
</html>