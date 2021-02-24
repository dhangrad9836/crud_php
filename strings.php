<?php
$rand_str = "        Random String       ";
printf("Length : %d<br>", strlen($rand_str));
printf("Length : %d<br>", strlen((ltrim($rand_str))));
printf("Length : %d<br>", strlen((rtrim($rand_str))));
//trims all the whitespace of the string
$rand_str = trim($rand_str);
printf("Upper : %s<br>", strtoupper(($rand_str)));
printf("Lower : %s<br>", strtolower(($rand_str)));
printf("Upper : %s<br>", ucfirst(($rand_str)));
//prints the fist 6 characters of the string
printf("1st 6 : %s<br>", substr($rand_str, 0, 6));



?>