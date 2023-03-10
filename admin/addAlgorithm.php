<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add description</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
    #inputImg{
        margin-top: 2rem;
    }.top{
        width: 50%;
        margin-top: 5%;
        font-size:20px
    }button{
        width:100%;
        margin-top:5%;
        margin-bottom:4%;
    }
</style>
</head>
<body>
<form  autocomplete="on" method="POST"  enctype ="multipart/form-data" >
    <div class="top container">
            <div class=" mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Algorithm name</label>
        <input type="text" name="algorithmName" class="form-control" >
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"> Algorithm description</label>
        <textarea class="form-control" name="algorithmDescription" rows="6"></textarea>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">How to encrypt?</label>
        <input class="form-control" name="algorthimEncrypt" type="text" id="formFile">
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">How to decrypt?</label>
        <input class="form-control" name="algorthimDecrypt" type="text" id="formFile">
      </div>

      
      <div class="mb-3">
        <label for="formFile" class="form-label">Advantages</label>
        <input class="form-control" name="algorthimAdvantages" type="text" id="formFile">
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Disadvantages</label>
        <input class="form-control" name="algorthimDisadvantages" type="text" id="formFile">
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Image description</label>
        <input class="form-control" name="algorithmImg" type="file" id="formFile">
      </div>

      <label for="formFile" class="form-label">Number of image example</label>
      <!-- var addAfterMaritalStatus = document.getElementsByClassName("numberOfImg"); -->
      <input id="" name='numberOfImg' class="numberOfImg form-control" type="number" aria-label="default input example">
    <div id="numberOfImg">

</div>

<button name="send" type="submit" class="btn btn-primary">Send</button>
    </div>
    </form>

    <?php
    require_once("../connection.php");

if(isset($_POST["send"])){
    $numberOfImg=$_POST["numberOfImg"];
    $algorithmImg=$_FILES['algorithmImg']['name'];
    $tmpalgorithmImg=$_FILES['algorithmImg']['tmp_name'];
    $folder="../img/";
    move_uploaded_file($tmpalgorithmImg,$folder.$algorithmImg);
    
    $imgExam=[" "];
    $tmpimgExam=[" "];
    $imgExam1=[" "];
    
    for($i=1;$i<=$numberOfImg;$i++){
        array_push($imgExam,$_FILES["imgExam$i"]['name']);
        array_push($tmpimgExam,$_FILES["imgExam$i"]['tmp_name']);
        move_uploaded_file($tmpimgExam[$i],$folder.$imgExam[$i]);
    }
    
    $algorithmName=$_POST["algorithmName"];
    $algorithmDescription=$_POST["algorithmDescription"];
    $cmd="insert into algorithm(algorithmName,algorithmDescription,algorithmImg)
    values('$algorithmName','$algorithmDescription','$algorithmImg')";
    mysqli_query($con,$cmd);

  

    $algorthimEncrypt=$_POST["algorthimEncrypt"];
    $algorthimDecrypt=$_POST["algorthimDecrypt"];
    $algorthimAdvantages=$_POST["algorthimAdvantages"];
    $algorthimDisadvantages=$_POST["algorthimDisadvantages"];

    $cmdEnc="insert into algorthimencrypt(algorthimEncrypt,algorthimID)values('$algorthimEncrypt','23')";
    mysqli_query($con,$cmdEnc);

    $cmdDec="insert into algortihmdecrypt(algorthimDecrypt,algorthimID)values('$algorthimDecrypt','23')";
    mysqli_query($con,$cmdDec);

    $cmdAdv="insert into algorthimAdvantages(algorthimAdvantages,algorthimID)values('$algorthimAdvantages','23')";
    mysqli_query($con,$cmdAdv);

    $cmdDisadv="insert into algorthimdisadvantages(algorthimDisadvantages,algorthimID)values('$algorthimDisadvantages','23')";
    mysqli_query($con,$cmdDisadv);

    for($i=1;$i<=$numberOfImg;$i++){
        $cmdInsImg="insert into algortihmexample(algorthmImg,algorthimID)values('$imgExam[$i]','23')";
        mysqli_query($con,$cmdInsImg);
    
        }
}
    ?>
    <script>

        
$(document).ready(function(){
// alert("ffffffffffff");





    $(".numberOfImg").change(function () {
        var numberOfImg =  $(".numberOfImg").val();
        $("#numberOfImg").empty();
        for (var countChildern = 1; countChildern <= numberOfImg; countChildern++) {

                        var inputImg = document.createElement("input");
                        inputImg.setAttribute("type", "file");
                        inputImg.setAttribute("id", `inputImg`);
                        inputImg.setAttribute("name", `imgExam${countChildern}`);
                        // inputName.setAttribute("placeholder", ` ??????????`);
                        var addAfterMaritalStatus = document.getElementById("numberOfImg");
                        addAfterMaritalStatus.appendChild(inputImg);
        }     
    });
    });
       
    </script>
    </body>

</html>