<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

$connection = mysqli_connect ("localhost","root","","crud") or die ("connection failed");
$student_id = $_GET ['id'];
$sql = "SELECT * FROM student  WHERE sid = $student_id";
$result = mysqli_query ($connection , $sql) or die ("Query Unsuccessful");
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row ['sid'];?>"/>
          <input type="text" name="sname" value="<?php echo $row ['sname'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          $sqld = "SELECT * FROM studentclass";
          $resultd = mysqli_query ($connection , $sqld) or die ("Query Unsuccessful");
    if(mysqli_num_rows($resultd) > 0){
        echo ' <select name="sclass">';
        while($rowd = mysqli_fetch_assoc($resultd)){
          if($row['sclass']== $rowd['cid']){
            $select = "Selected";
          }else{
            $select = "";
          }
           echo  "<option {$select} value='{$rowd['cid']}'>{$rowd['cname']}</option>";
        }
        echo  "</select>";
    }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }
    }?>
</div>
</div>
</body>
</html>
