<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    form{margin-top:5%}
    button{width:50%;margin:2% 25%}
    .top{
        width: 50%;
        margin-top: 5%;
        font-size:20px;
        text-align:center;
    }label{
        float:left !important;
    }
</style>
</head>
<body>
    

<form class="container" autocomplete="on" method="POST"  enctype ="multipart/form-data" >


<center>

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
        <label for="formFile" class="form-label">Title</label>
        <input class="form-control" name="title" type="text" id="formFile">
      </div>
      <div class="mb-3 top">
      <label for="formFile" class="form-label">Sub title</label>
        <input class="form-control" name="subTitle" type="text" id="formFile">
      </div>
      
      <div class="mb-3 top"> 
<label for="formFile" class="form-label">Image example</label>   
<input required class='form-control' type="file" name="newImgExam" id="">
</div>
      </center>


    <button class="btn btn-primary" name="Add" type="submit">Add</button>

</form>
<?php

if(isset($_POST["Add"])){
    $algorithmName=$_POST["algorithmName"];
    $newImgExam=$_FILES['newImgExam']['name'];
    $tmpnewImgExam=$_FILES['newImgExam']['tmp_name'];
    $folder="../img/";
    move_uploaded_file($tmpnewImgExam,$folder.$newImgExam);
    

   $title=$_POST["title"];
   $id2=$_POST["id"];


   $subTitle=$_POST["subTitle"];

    $cmd="insert into algortihmexample(algorthmImg,algorithmText,algorithmSubText,algorthimID)
    values('$newImgExam','$title','$subTitle','$id2')";
    mysqli_query($con,$cmd);
}
?></body>
</html>