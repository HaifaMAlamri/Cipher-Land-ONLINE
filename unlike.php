<?php
$con=mysqli_connect("localhost","root","","algo2");
// require_once("connection.php");
$videosId=$_GET["id"];
$users_id=$_GET["users_id"];
echo $videosId."<br>".$users_id;
$cmd="update favorites set likeOrUnlike='unlike' where videoID='$videosId' and users_id='$users_id'";
// mysqli_query($cmd,$con);
mysqli_query($con,$cmd);
header("Location:home1.php");
?>