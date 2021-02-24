<?php
$student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);

//validate the student_id coming in when we enter it in the form
if($student_id == null){
    $err_msg = "All Values Not Entered<br>";
    //include the db_error.php file here
    include('db_error.php');
} else {
    //if all passes above include the database file here
    require_once('db_connect.php');
    //add the delete query here
    $query = 'DELETE FROM students WHERE student_id = :student_id;';
    //now add prepared statemetn
    $stm = $db->prepare($query);
    //now add the bindValue statement to bind the :student_id to the $student_id
    $stm->bindValue(':student_id', $student_id);
    //execute 
    $execute_success = $stm->execute();
    //close the cursor
    $stm->closeCursor();
    //check to make sure the cursor was closed
    if(!$execute_success){
        print_r($stm->errorInfo()[2]);
    }
}
//now require the database after closing from above in order to run another query below
require_once('db_connect.php');
$query_students = 'SELECT * FROM students ORDER BY student_id';
$student_statement = $db->prepare($query_students);
$student_statement->execute();
$students = $student_statement->fetchAll();
$student_statement->closeCursor();



?>

<!DOCTYPE HTML>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>PHP Tutorial</title>
     <link rel="stylesheet" type="text/css" href="main.css" />
   </head>
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
       <!-- Get an array from the DB query and cycle
       through each row of data -->
       <?php foreach($students as $student) : ?>
         <tr>
           <!-- Print out individual column data -->
           <td><?php echo $student['student_id']; ?></td>
           <td><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
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
       <!-- Mark the end of the foreach loop -->
       <?php endforeach; ?>
     </table>
     <h3>Delete Student</h3>
     <form action="delete_student.php" method="post"
       id="delete_student_form">
       <label>Student ID : </label>
       <input type="text" name="student_id"><br>
       <input type="submit" value="Delete Student">    
     </form>
   </body>
 </html>