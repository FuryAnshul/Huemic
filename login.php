<?php
session_start();
include("db.php");

$email = $_SESSION['email'];
$otp = $_POST['user_otp'];
$sql = "Select * from users where user_email='$email' and user_otp='$otp'";
$rs = mysqli_query($con, $sql) or die(mysqli_error($con));

if (mysqli_num_rows($rs) > 0) {
    $sql = "update users set user_otp='' where user_email='$email'";
    $rs = mysqli_query($con, $sql) or die(mysqli_error($con));
    header("location:Huemic.html?msg=Welcome User:" . $email . "Login Success!!");

} else {
    header("location:sign.php?msg=OTP is Invalid Plz try Again!!");
}
?>