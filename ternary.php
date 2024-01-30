<?php
$gender = isset($_GET['gender'])?$_GET['gender'] : '';
$hello = ($gender == "F")?"Hello Miss" : "Hello Mister";
echo $hello;


?>

 <!-- Form -->

<form method="get" action="">
     <label for="gender">Your gender</label>
    F:<input type="Radio" name="gender" value="F">
    M:<input type="Radio" name="gender" value="M">
     <input type="submit" name="submit" value="gender"> 
</form>