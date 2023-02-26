<?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>

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
    <span>
    
    <button  id='button$count' type='button' class='btnVideios btn btn-secondary'>video$count</button>";
    
       if (isset($_SESSION['isLogin'])) {

        if ($_SESSION['isLogin'] == 1) {
            if ($likeOrUnlike == "like") {
                echo "
  
    <a href='unlike.php?id=$id&users_id=$usersId'><span><img class='like' id='like$count' src='img/lover.png'></a>
  ";
            } else {
                echo "
  <a href='like.php?id=$id&users_id=$usersId'><img class='unlike' id='unlike' src='img/heart.png'></a>";

            }
        }
    }
echo"<iframe class='vd'  id='video'  controls  src='$url'></iframe></span>";
 
    $count++;
}



?>


<script>
  $(document).ready(function(){

        $(`.vd`).hide();
    $(".btnVideios").click(function(){
        // var vd= document.getElementById("video");
        var src= $("#video").src;
        if($("#video").is(":hidden")){
            $("#video").src=""; 
        }else{
            $("#video").src=""; 
        }
        $(this).siblings().toggle();
        // $(this)  .toggle();
        
  });

      
 });
    
</script>