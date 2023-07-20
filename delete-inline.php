<?php

 $stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query ($connection , $sql) or die ("Query Unsuccessful");
header("Location: http://localhost/php-practise/php-project-1/student-information/main.php");
mysqli_close($connection);
?>