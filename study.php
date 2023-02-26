<style>
    .Caesar{margin-top: 60px;}
    .btnVideios{width: 80%;height: 50px;;margin:10px 0 0 10%;}
    .vd{margin: 20px 0 0 20%;width: 66%;height: 300px;}
    .like,.unlike{width:3%}
</style>


<?php

$usersId=1;
$cmd="SELECT v.url, v.id,v.algorithm_id,f.FavuriteID, f.likeOrUnlike ,f.videoID,f.users_id
FROM videos  as v LEFT JOIN favorites as f ON v.id = f.videoID";
// $cmd="select * from videos";
$exe=mysqli_query($con,$cmd);
$count=1;
echo "<h1 class='Caesar'>Caesar chipher</h1>";
while($row=mysqli_fetch_assoc($exe)){
    $url=$row["url"];
    $id=$row["id"];
    $videoID=$row["videoID"];
    $likeOrUnlike=$row["likeOrUnlike"];
    $urlVedio=array("");
    array_push($urlVedio,$url);
    echo "
    <button  id='button$count' type='button' class='btnVideios btn btn-secondary'>videio$count</button>
<video class='vd'  id='vd'  controls  src='img/1.mp4'></video>";
// $like=$_POST["like"];
$cmd="update favorites set likeOrUnlike='$like'";
mysqli_query($con,$cmd);
if($likeOrUnlike=="like"){
    echo 
    "<img class='like' id='like$count' src='img/lover.png'>";}
else
{
 echo "
<img class='unlike' id='unlike' src='img/heart.png'>";   
    }
}

?>


<script>
  $(document).ready(function(){

    $(".like").click(function(){
        alert("dddddddd");
        $.ajax({
  type: "POST",
  url: "video.php",
  data:{"like":"like"}
    

    });  
    });  
    $(".unlike").click(function(){
        alert("dddddddd");
        $.ajax({
  type: "POST",
  url: "video.php",
  data:{"like":"unlike"}
    

    });  
});
        $(`.vd`).hide();
    $(".btnVideios").click(function(){
        $(this).siblings().toggle();        
  });
     
 });
    
</script>