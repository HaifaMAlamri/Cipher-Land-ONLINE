<?php 
require_once("connection.php");
if(isset($_POST['reset'])){

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$newpass=rand(100000,999999);
$pass=sha1($newpass);
$userEmail = $_POST["email"];

//  update password user in table users
 $cmd2=" UPDATE users SET password = '$pass' WHERE email = '$userEmail'";
            $exe2 = mysqli_query($con, $cmd2);
// while ($row2 = mysqli_fetch_assoc($exe2)) {
if($exe2){
$to = $userEmail;

$subject = 'Reset your password ';

$message = '<p>  </p>';
$message .= '<p>Here is your password new  password:  </br>';
$message .= ''.$newpass.'</p>';
mail($to, $subject, $message);

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Forgot password</title>
<style>
    .nav1{height: 100px;background-color: aqua;}
div{margin-top: 10%;
width: 40rem !important;
/* border: 1px solid white; */
box-shadow:1px 1px 20px 5px rgb(236, 235, 235);
background-color:rgb(250, 248, 248)
}input{
    margin-top: 5%;
}button{
    margin-top: 5%;
    width: 80%;
    margin-bottom: 2%;
}
</style>
</head>
<body>
    
<!-- <nav class="nav1 navbar  bg-primary ">
</nav> -->
<form action="Reset_password.php" method="post">
<center>
    <div class="container pt-5">
        <input class="form-control form-control-lg" type="text" placeholder="Enter email" aria-label=".form-control-lg example" name="email">
        <!-- <input class="form-control form-control-lg" type="text" placeholder="Enter your Name" aria-label=".form-control-lg example"> -->
        <input  type="submit" class="btn btn-success mb-5 col-2" name="reset" value="Send"/>
    </div>
</center>
</form>
</body>
</html>