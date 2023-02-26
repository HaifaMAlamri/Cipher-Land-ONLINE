<?php
session_start();
require_once("connection.php");
$cmd="delete from middle where usersID=".$_SESSION['id']."";
mysqli_query($con,$cmd);
 $_SESSION['count_answer']=0;
header("Location:home.php");
?>
