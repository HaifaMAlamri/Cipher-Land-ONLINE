<?php 
session_start();
require_once "connection.php";
    if(isset($_POST["btn_login"]))
    {
        $email=$_POST["name"];
        $password=$_POST["password"];
        $pass = sha1($password);
        $query="select * from users where email='$email' and password='$pass'  ";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
                if ($row["type"]=="admin")
                {
                    $_SESSION['email']=$row["email"];
                    $_SESSION['isLogin']=1;
                    $_SESSION['id']=$row["id"];
                    $_SESSION['type']='admin';
                    header('Location:index.php');  
                }
            }
        }
        else
        { 
            // header("Location: login.php");   
            //  echo '<script>alert('.$message.'");
			//  </script>';
              echo '<script>alert("Email Or Password Does Not Match");
			 </script>';
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cipher Land</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<style> .main { background-color: white; /* border-top: 10px solid rgb(4, 73, 138); */ /* border-bottom: 10px solid rgb(4, 73, 138); */ width: 400px; overflow: hidden; text-align: center; margin: auto; margin-top: 40px; padding: 45px; padding-bottom: -20px; padding-right: 80px; box-shadow: 1px 1px 108.8px 1px rgb(99, 108, 138); border-radius: 15px; } Body { background-image: url(image//design.png); position: relative; background-size: cover; font-family: 'Times New Roman', Times, serif; color: rgb(4, 73, 138); } img { position: relative; padding: 0%; margin-top: -30px; } .btn { position: relative; margin-top:20px; border: 0; color: rgb(4, 73, 138); border-radius: 100px; width: 340px; height: 49px; font-size: 20px; font-family: 'Times New Roman', Times, serif; top: 79%; transition: 0.3s; cursor: pointer; } .btn:hover { /* background-image: url(button.jpg); */ color: white; background-color: blue; /* backgroud-color:blue; */ } .form { position: relative; border: 0; outline-color: #0b4b8b; box-shadow: none; display: block; border-bottom: 1px solid rgb(4, 73, 138); width: 100%; height: 30px; font-family: 'Times New Roman', Times, serif; font-size: medium; font-weight: 500; padding-left: 25px; transition: all 0.3s ease; padding-bottom: -20px; margin-bottom: auto; } .chk { position: relative; margin-left: -75%; margin-top: 10px; font-size: 13px; } a { text-decoration: none; line-height: 20px;color: #708090;} a:hover {color: powderblue;} .active {color: #fff; background: #26e0d0; border-radius: 4px; } .icon {position: absolute;margin-top: -13px;margin-left: 2px;transform: translateY(-50%);color: #708090 }</style>

</head>

<body >
    <form  method="post">
        <div class="main">
            <!-- <img src="image//logo.png" width="260" height="130"> -->
            <p style="color: #000000; font-family: 'Courier New', Courier, monospace; font-size: medium; margin-top: -10px; margin-bottom: 10px;"><b>Cipher Land</b></p>
            <br>

            <h2 style="margin-top: 20px;">LOGIN ADMIN</h2>



            <input class="form" name="name" type="name" placeholder="Email " size="40"  required>
            <div class="icon"><i class="fas fa-mail-bulk"></i></div>
            <br>
            <input class="form" name="password" placeholder="Password" type="password" size="40" required>
            <div class="icon"><i class="fas fa-lock"></i></div>
    
  <input class="btn" type="submit" value="Login"  name="btn_login">
  
  <!-- <p>Forgot your password ?<a href ="Reset_password.php"> Yes  </a> </P>

  <p> New user <a href ="register.php">  Register </a> </P>  -->
    </div>
  </form>

  <?php

  if(isset($_POST["btn_login"])){
    $cmdShow="select * from users";
    $exe=mysqli_query($con,$cmdShow);
  
    $username=$_POST['name'];
    $password=$_POST['password'];

    while($row=mysqli_fetch_assoc($exe)){
      $loginUsername=$row['name'];
      $loginPassword=$row['password'];
      $loginID=$row['id'];

  
//       if($loginUsername!=""&&$loginUsername==$username&&$loginPassword==$password){
//                     $_SESSION['id']=$row["id"];
// 
//             header("Location: index.php");
//   
//       }
    //   else{echo "ffffffffff";}
    }}
  ?>
</body>
</html>