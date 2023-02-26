<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messeges</title>
    <STYle>
        p{background-color:rgb(248, 245, 245);
        height: 3rem;
        border-radius: 20px;
        margin:.2rem 4rem;
        padding:.5rem 2rem;
        }
        button{margin-left: 25%;font-size:25px !important;background-color:rgb(111, 165, 245);width: 50%;height: 3rem;border:1px solid white;border-radius: 10px;}
        .date{font-size:12px;margin-left:-1rem;color:brown;padding-bottom:1rem}
    </STYle>
</head>
<body>
<br>
  <?php
  require_once("connection.php");
  $id=$_GET["user_id"];
  // echo $id;
  $cmd="select * from  questions where user_id=$id";
  $exe=mysqli_query($con,$cmd);
  while($row=mysqli_fetch_assoc($exe)){
    $name= $row["name"];
    $creatd_in= $row["creatd_in"];
    $email= $row["email"];
    $text= $row["Text"];
    echo "
  <P>
  <span class='date'>$creatd_in</span><br>

  $text
  </P>  
  ";
  }
  ?>
<a class='btn' href="customerMessages.php"><button>back</button></a>

</body>
</html>