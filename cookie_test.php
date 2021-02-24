<?php
setcookie("my_cookie", "sample value", time() + 86400, "/");

?>

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
    //check if the cookie is set by checking if it is not set !isset()
    //and the value my_cookie is from above of at the top where we named our cookie
    if(!isset($_COOKIE["my_cookie"])){
        echo "Cookie Not Set<br>";
    } else {
        echo "Cookie Value: " . $_COOKIE["my_cookie"]. "<br>";
    }



?>
</body>
</html>