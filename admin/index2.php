<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION['isLogin'])){
    if ($_SESSION['isLogin'] == 1 && $_SESSION['type']=='admin')
     {
       header('Location:index.php');
    } 
}  else {
        header('Location:login.php');
    
    }

?>
<html>
<head>
<style>
 .banner{ width: 100%; height: 50vh; background-image: linear-gradient(rgba(234, 241, 241, 0.863),rgba(255, 255, 255, 0.836)),url(background.png.png); background-size: cover; background-position: center; } 
 .log{ width: 86%; margin: auto; padding: 20px 0; display: flex; align-items: center; justify-content: space-between; } 
 .logocaesar { position: absolute; width: -50%; top:10% ;    left: 36%; } 
 .log ul li { list-style: none; display: inline-block; margin: 0 20px; position: relative; } 
 .log ul li a{ text-decoration: none; color:rgb(9, 9, 9); text-align: uppercase; }
  a{ text-decoration: none; color:rgb(9, 9, 9); text-align: uppercase; }
  .log ul li::after{ content: ''; height:3px; width: 0% ; background: #1999cc; position: absolute; left:0; bottom:-10px; transition: 0.5s; } 
  .log ul li:hover::after{ width: 100%; } .content{ width: 99%; position: absolute; top:30% ; transform: translateY(50%); text-align: center; color:#1999cc }
   .button { width: 200px; padding: 15px 10px; text-align: center ; margin:20px 10px; border-radius: 25px; font-weight: bold; border: 2px solid #1999cc; background: transparent ; color: rgb(11, 11, 11); cursor: pointer; position: relative; overflow: hidden; }
    .span{ background: #1999cc; height: 100%; width: 0%; border-radius: 25px; position: absolute; left: 0; bottom:0; z-index: -1; transition: 0.5s; } 
    .button:hover .span{ width: 100%; } 
    .button:hover { border: none; }
    </style>
    </head>
    <body>
    <div class="banner" >
        <div class="log">
            <img src="..\img\logo.png" class="logocaesar">
        </div>
        <div class="content">
            <h1>WELCOME TO CAESAR</h1>
            <a href="addDecrypt.php" class="button">Add how Decrypt<span class="span"></span></a>
            <a href="addAdvantage.php" class="button">Add advantage<span class="span"></span></a>
            <a href="addDisadvantages.php" class="button">Add disadvantages<span class="span"></span></a>
            <a href="addEncrypt.php" class="button">Add how ncrypt<span class="span"></span></a>
            <a href="addImagExam.php" class="button">Add ImagExam<span class="span"></span></a>
           
        </div>

    </div>
    </body>
</html>