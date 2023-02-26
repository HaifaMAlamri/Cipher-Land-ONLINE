
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<script src="sweetalert-master\docs\assets\sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master\docs\assets\sweetalert/sweetalert.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
    .Quiz{margin:7% 15%;font-size:50px;color:brown}
    .result{text-align:center;font-size:45px}
    .AVG{font-weight:bold;font-size:20px}
    .count{font-size:20px}
</style>
</head>
<body>
<h1 CLASS="Quiz">Quiz</h1>
<center>
<h1 CLASS ="result">result :</h1>

<?php
require_once("connection.php");

$countCorrect = mysqli_num_rows(mysqli_query($con,"select * from middle where degree=1 and usersId=".$_SESSION["id"].""));
// $countCorrect=mysqli_num_rows($exe);

echo "<span class='count'>$countCorrect OF </span>";


$sum="SELECT degree FROM `middle`";
$exe=mysqli_query($con,$sum);

while($row=mysqli_fetch_assoc($exe)){
    $count=mysqli_num_rows($exe);
   

}
 echo "<span class='count'>$count</span>";




$sum="SELECT AVG(degree) FROM `middle`";
$exe=mysqli_query($con,$sum);
while($row=mysqli_fetch_assoc($exe)){
    $AVG=$row["AVG(degree)"]*100;
    $count=mysqli_num_rows($exe);
    echo "<P class='AVG'>$AVG %</P>";

    
}
if($AVG<=50){
    echo "
    <div class='container alert  alert-danger ' role='alert'>
<h3>Oooooh ! You are fail </h3></div>
    ";
}else{
    echo "
    <div class='container alert alert-success ' role='alert'>
    Congratulations, you succeeded</div>
    ";
}
echo '
<a href="deleteAllAnswer.php"  class="btn btn-success btn-lg">Return to the main menu  </a>

';
?>
</center>


</body>
</html>