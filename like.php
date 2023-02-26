<?php
$con=mysqli_connect("localhost","root","","algo2");
// require_once("connection.php");
$videosId=$_GET["id"];
$users_id=$_GET["users_id"];
 $query="select * from favorites";
$exeq=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($exeq)){
$num1=mysqli_num_rows($exeq);
}
echo $num1;
$query="select * from videos";
$exeq=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($exeq)){
$num2=mysqli_num_rows($exeq);
}
echo $num2;
if($num1<$num2){
    $cmd="insert into favorites(likeOrUnlike,videoID ,users_id)values('like','$videosId' ,'$users_id')";
    mysqli_query($con,$cmd);
}else{
    $cmd="update favorites set likeOrUnlike='like' where videoID='$videosId' and users_id='$users_id'";
mysqli_query($con,$cmd);
}
header("Location:home1.php");
?>