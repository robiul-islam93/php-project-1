<?php
$stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'] ;
 $stu_address = $_POST['saddress'] ;
 $stu_class = $_POST['sclass'] ;
 $stu_phone = $_POST['sphone'] ;


$connection = mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql = " UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
$result = mysqli_query($connection,$sql) or die ("unsuccesfully connection");
header("Location: http://localhost/php-practise/php-project-1/student-information/main.php");
mysqli_close($connection);


?>