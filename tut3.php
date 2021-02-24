<?php

//#2 connect to the database

//connect to db and query the database
require('db_connect.php');
$query_students = 'SELECT * FROM students ORDER BY student_id';

//use prepared statements to execute our queries
//use prepare to prepare the sql query from above
$student_statement = $db->prepare($query_students);
//now execute the prepared statement from above
$student_statement->execute();
//now we must fetch the data and put it inside an array using fetch() or fetchAll()
$students = $student_statement->fetchAll();
//now we must close the query from the databast so we can create other queries from the database
$student_statement->closeCursor();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<!-- #1 create the html -->
<body>
    <h3>Student List</h3>
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Phone</th>
    <th>BD</th>
    <th>Sex</th>
    <th>Entered</th>
    <th>Lunch</th>
    </tr>

    <!--Part 3 to get an array form the Db and fetch the information 
    inside a foreach statement-->
    <?php foreach($students as $student) : ?>
        <tr>
        <!--print out individual column data -->
        <td><?php echo $student['student_id']; ?></td>
        <td><?php echo $student['first_name']. ' ' . $student['last_name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['street']; ?></td>
        <td><?php echo $student['city']; ?></td>
        <td><?php echo $student['state']; ?></td>
        <td><?php echo $student['zip']; ?></td>
        <td><?php echo $student['phone']; ?></td>
        <td><?php echo $student['birth_date']; ?></td>
        <td><?php echo $student['sex']; ?></td>
        <td><?php echo $student['date_entered']; ?></td>
        <td><?php echo $student['lunch_cost']; ?></td>
        </tr>   

    <!--end of foreach loop -->    
    <?php endforeach; ?>
    </table>

    <h3>Insert Students</h3>
    <form action="add_student.php" method="post" id="add_student_form">
        <label>First Name : </label>
        <input type="text" name="first_name"><br>
        <label>Last Name : </label>
        <input type="text" name="last_name"><br>
        <label>Email : </label>
        <input type="text" name="email"><br>
        <label>Street : </label>
        <input type="text" name="street"><br>
        <label>City : </label>
        <input type="text" name="city"><br>
        <label>State : </label>
        <input type="text" name="state"><br>
        <label>Zip : </label>
        <input type="text" name="zip"><br>
        <label>Phone : </label>
        <input type="text" name="phone"><br>
        <label>Birth Date : </label>
        <input type="text" name="birthdate"><br>
        <label>Sex : </label>
        <input type="text" name="sex"><br>
        <label>Lunch Cost : </label>
        <input type="text" name="lunch"><br>
        <input type="submit" value="Add Student"><br>
    </form>

</body>
</html>









