<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// $id= $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <link href="font/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
    <link href="font/fontawesome-free-6.2.1-web/css/brands.css" rel="stylesheet">
    <link href="font/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
   
<style>
    body{background-color: rgb(230, 232, 235)}
    .nav1{height: 100px;background-color: aqua;}
    .btn1{width: 94%;height:80px ;display: block;background-color: rgb(33, 38, 110);color: white;margin:20px 0px 0 10px;}
    .btn1:hover{display: block;background-color: rgb(30, 139, 202);color: white;}
    .cssDrawer{background-color: rgb(226, 229, 233);}
    .btnTogller{position: absolute;top: 20px;left: 90%;}
    .Tab{background-color: rgb(25, 16, 78);height: 70px;width: 700px;}
    .navTab{margin-top:3%;margin-left:12%}
    .btnTab{margin-right: 20px;background-color:rgb(25, 16, 78);border-radius: 10%;color: white;width: 150px;}
    .btnTab:hover{background-COLOR:  rgb(135, 147, 165); ;color:black}
    .activ{
        background-color: blue !important;
    }
    
  .activ:hover{background-color:red}
#feedbackA{margin-left: 50px;margin-bottom: 20px;}
#feedbackB{margin-left: 50px;margin-bottom: 20px;}
#feedbackC{margin-left: 50px;margin-bottom: 20px;}
</style>
    </head>
    <body>

<nav class="nav1 navbar  bg-primary ">
</nav>
<div class="navTab nav nav-tabs" id="nav-tab" role="tablist">
            <a href="index.php"><div class="btnTab home"><button class=" nav-link  btnTab" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">index</button></div></a>
            <div class="btnTab encription"><button class="  nav-link btnTab" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Encryption</button></div>
            <div class="btnTab challenge"><button class="  nav-link btnTab" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Challenge</button></div>
            <div class="btnTab Description"><button  class=" nav-link btnTab " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Description</button></div>
            <div class="btnTab video"><button class=" active nav-link btnTab" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Video</button></div>
          </div>
    <div id="encription">
        <?php require_once("encription.php");?>
    </div>
    <div id="challenge">
        <?php 
        require_once("connection.php");
        // $count= $_SESSION["count"];
        // $countMiddle= $_SESSION["countMiddle"];
        $rowcount = mysqli_num_rows(mysqli_query($con,"select * from middle"));
        $challangecount = mysqli_num_rows(mysqli_query($con,"select * from challenges"));

        if (isset($_SESSION['isLogin'])) {
            if ($_SESSION['isLogin'] == 1) {
                if ($rowcount == $challangecount) {
                    require_once("Result.php");
                } else {

                if(isset($_GET['level'])){
                $_SESSION['level']=$_GET['level'];
            
                }else{
                 $_SESSION['level']=1;
                }

           echo "
            <h1 class='Caesar'>Ceaser Cipher</h1>  
          <div class='btnBIA'>
     <a href='home.php?level=1'>    <button type='button' class='btn btn-secondary'>Beginner</button></a>
   <a href='home.php?level=2'>      <button type='button' class='btn btn-secondary'>Intermediate</button></a>
   <a href='home.php?level=3'>         <button type='button' class='btn btn-secondary'>Advanced</button></a>
        <button type='button' class='help btn btn-secondary'>?</button>
        <div class='txtHelp'>
            <input type='text' class='txtHelp1'></input>
            <button type='submit' name='send' class='btnHelp btn btn-primary'>send</button>
        </div>
    </div>";
                    require_once("challenge.php");
                }
            }
        }else{
        echo '<h2>  Please Login To Show Challenges</h2>';
        }
        ?>
    </div>
    <!-- //Description//////////////////////////////////////////// -->
    <div id="video">
        <?php require_once("video.php");?>
    </div>

    <div id="Description">
        <?php require_once("Description.php");?>
    </div>
    <!-- //videos//////////////////////////////////////////// -->
 
    </div>
    <script>
  $(document).ready(function(){
        //   $("#video").show();

        $("#home").hide();
        $("#challenge").hide();
        $("#encription").hide();
        $("#video").show();
        $("#Description").hide();
    $(".home").click(function(){
        $("#home").show();
        $("#challenge").hide();
        $("#encription").hide();
        $("#video").hide();
        $("#Description").hide();
    });
    $(".challenge").click(function(){
        $("#home").hide();
        $("#challenge").show();
        $("#encription").hide();
        $("#video").hide();
        $("#Description").hide();
    });
    $(".encription").click(function(){
        $("#home").hide();
        $("#challenge").hide();
        $("#encription").show();
        $("#video").hide();
        $("#Description").hide();
    });
    $(".video").click(function(){
        $("#home").hide();
        $("#challenge").hide();
        $("#encription").hide();
        $("#video").show();
        $("#Description").hide();
    });
    $(".Description").click(function(){
        $("#home").hide();
        $("#challenge").hide();
        $("#encription").hide();
        $("#video").hide();
        $("#Description").show();
    });
    $(".txtHelp").hide();
        $(".btnHelp").click(function(){
            var txtHelp=document.getElementById("txtHelp").value;
            // alert(xx);
            $.ajax({
                type: "POST",
                url: "challenge.php",
                data: {"text":txtHelp}
            });
        });
        $(".help").click(function() {
          var s=  $(".txtHelp").toggle();
// alert(s);
        });
           $(".btnclear").click(function() {
            document.getElementById('answer').value = '';
        });
});
    </script>
    </body>
    </html>