<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Add Encrypt</title>
    <style>
          .top{
        width: 50%;
        margin-top: 5%;
        font-size:20px;
        text-align:center;
    }button{
        width:80%;
        margin-top:5%;
        margin-bottom:4%;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php require_once("algorthimName.php");?>

<center>
    <form  method="post">
<div class="mb-3 top">
<?php
 require_once("../connection.php");

        $cmdSelect="select * from algorithm";
        $exe=mysqli_query($con,$cmdSelect);
        while($row=mysqli_fetch_assoc($exe)){
            $algorithmName=$row["algorithmName"];
            $id=$row["id"];
         
        }   echo "
        <center>
        <select name='id' class='top form-control'>
        <option value='$id' >$algorithmName</option>
        </select>
        </center>
        ";
    ?>
        <label for="formFile" class="form-label"> Encrypt</label>
        <input class="form-control" name="algorthimEncrypt" type="text" id="formFile">
        <button name="send" type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
      </center>
<?php

if(isset($_POST["send"])){
   $algorthimEncrypt=$_POST["algorthimEncrypt"];
   $id2=$_POST["id"];

    $cmdAdv="insert into algorthimEncrypt(algorthimEncrypt,algorthimID)values('$algorthimEncrypt','$id2')";
    mysqli_query($con,$cmdAdv);
}?>