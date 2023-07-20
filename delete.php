<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

    include 'config.php';
    $stu_id = $_POST['sid'];

    
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query ($connection , $sql) or die ("Query Unsuccessful");
header("Location: http://localhost/php-practise/php-project-1/student-information/main.php");
mysqli_close($connection);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
