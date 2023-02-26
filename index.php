<?php  
session_start();
?>
<style>
 .banner{ width: 100%; height: 100vh; background-image: linear-gradient(rgba(234, 241, 241, 0.863),rgba(255, 255, 255, 0.836)),url(background.png.png); background-size: cover; background-position: center; } 
 .log{ width: 65%; margin: auto;margin-left:25%; padding: 35px 0;overflow: none;scroll-behavior: none;  display: flex; text-align: center;align-items: center; justify-content: space-between; } 
 .logocaesar { position: absolute; width: -50%; top:30% ;    left: 36%; } 
 .log ul li { list-style: none; display: inline-block; margin: 0 20px; position: relative; } 
 .log ul li a{ text-decoration: none; color:rgb(9, 9, 9); text-align: uppercase; }
  .log ul li::after{ content: ''; height:3px; width: 0% ; background: #1999cc; position: absolute; left:0; bottom:-10px; transition: 0.5s; } 
  .log ul li:hover::after{ width: 100%; } .content{ width: 100%; position: absolute; top:50% ; transform: translateY(50%); text-align: center; color:#1999cc }
   .button { width: 200px; padding: 15px 0; text-align: center ; margin:20px 10px; border-radius: 25px; font-weight: bold; border: 2px solid #1999cc; background: transparent ; color: rgb(11, 11, 11); cursor: pointer; position: relative; overflow: hidden; }
    .span{ background: #1999cc; height: 100%; width: 0%; border-radius: 25px; position: absolute; left: 0; bottom:0; z-index: -1; transition: 0.5s; } 
    .button:hover .span{ width: 100%; } 
    .button:hover { border: none; }</style>
    <div class="banner" >
        <div class="log">
            <img src="img\logo.png" class="logocaesar">
            <ul>
            <?php 
            if(isset($_SESSION['isLogin'])){
            echo '   <li><a href="logout.php">Log out </a></li>';
            } else{
            echo '  <li><a href="login.php">Log in </a></li>
                <li><a href="register.php">sign in </a></li>';
            }
             ?>
               
            </ul>
        </div>
        <?php
        $caesarChipher="Caesar chipher";
        echo "
        <div class='content'>
<a href='home.php' >  <button class='button' type='button'><span class='span'></span>Caesar Cipher</button></a>
  <button class='button' type='button'><span class='span'></span>RSA</button>
</div>
        ";
        ?>
   

    </div>
