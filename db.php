
<?php
global $con;
$con=mysqli_connect("localhost","root","") or die(mysqli_error($con));
$db=mysqli_select_db($con,"huemic") or die(mysqli_error($con));
?>