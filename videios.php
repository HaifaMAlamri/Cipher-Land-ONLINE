<style>
    .Caesar{margin-top: 60px;}
    .btnVideios{width: 80%;height: 50px;;margin:10px 0 0 10%;}
    #video1,#video2,#video3,#video4{margin: 20px 0 0 20%;width: 66%;height: 300px;}
</style>


<?php


require_once("connection.php");
$cmd="select url from videos";
$exe=mysqli_query($conn,$cmd);
$count=1;
echo "<h1 class='Caesar'>Caesar chipher</h1>";
while($row=mysqli_fetch_assoc($exe)){
    $url=$row["url"];
    $urlVedio=array("");
    array_push($urlVedio,$url);

    echo "
    <button  id='button$count' type='button' class='btnVideios btn btn-secondary'>videio$count</button>
<video   id='video$count'   controls  src='img/1.mp4'></video>

    ";
    $count++;
}
$len=count($urlVedio);
?>


<script>
  $(document).ready(function(){
    var count="<?php echo $len;?>";
    // alert(count);

    for(var i=1;i<=count;i++){
        $(`#video${i}`).hide();
 
}

    



            //         $(`#button${j}`).click(function(){
            //                 alert(j);
            //         $(`#video${j}`).toggle();
            //     });
            //     }
            

   
        var vd= document.getElementById("video1");
        var src= vd.src;
    $("#button1").click(function(){

     
        $("#video1").toggle();
        $("#video2").hide();
        $("#video3").hide();
        $("#video4").hide();
    });
    $("#button2").click(function(){

        if($("#video1").is(":hidden")){
            vd.src=src; 


        }else{
         vd.src=""; 

            // vd.src=src; 
        }

        $("#video1").hide();
        $("#video2").toggle();
        $("#video3").hide();
        $("#video4").hide();
     
    }); 
    $("#button3").click(function(){
        $("#video1").hide();
        $("#video2").hide();
        $("#video3").toggle();
        $("#video4").hide();
    });
     $("#button4").click(function(){
        $("#video1").hide();
        $("#video2").hide();
        $("#video3").hide();
        $("#video4").toggle();
    });
  });
  
</script>