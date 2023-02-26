<style>
*{font-family: 'Poppins', sans-serif;}
    .Caesar{margin-top: 60px;}
    .body{background-color: rgb(161, 158, 158);margin:20px 100px 100px 100px;border-radius: 2%;}
    .intro{margin: 30px;font-size:18px}
    .algorithmImg{margin: 30px;margin-left: 35%;width: 35%;}
    .imgCaesar{margin: 30px;width: 27%;height:10rem}
    .Procedure{margin-left:2%}
    .topTitle{font-size:30px;font-weight:bold;margin:1%}
    .title{font-size:25px;font-weight:bold;color:#3f3752;margin:1%}
    .liText{font-size:18px;margin-left:3%;padding-right:30px ;margin-top:1%}
    .encDec{font-size:20px;margin-left:2% ;font-weight:bold}
    .algorthmImg{margin:3% 8%;height:100px;width:70% }

    </style>
   
     <?php
if (isset($_GET["type"])) {
    $type=$_GET["type"];
}else{
  $type="Caesar chipher";
}

    $cmdDes="select * from algorithm where id='23'";
    $exe=mysqli_query($con, $cmdDes);
    while ($row=mysqli_fetch_assoc($exe)) {
        $algorithmName=$row["algorithmName"];
        $algorithmDescription=$row["algorithmDescription"];
        $algorithmImg=$row["algorithmImg"];
        echo "
        <h1 class='Caesar'>$algorithmName</h1>
        <div class='body'><br>
            <h3 class='topTitle'>introduction</h3>
            <p class='intro'>$algorithmDescription</p>
            <img class='algorithmImg' src='img/$algorithmImg' alt=''>
        ";
    }
    echo "
    <div class='Procedure'>";
    echo "
    <h2 class='topTitle'>Procedure:</h2>
    <h5  class='encDec'>How to encrypt?</h5>
    ";
    $cmdEnc="select * from algorthimencrypt where algorthimID='23'";
    $exeEnc=mysqli_query($con, $cmdEnc);
    while ($rowEnc=mysqli_fetch_assoc($exeEnc)) {
        $algorthimencrypt=$rowEnc["algorthimEncrypt"];
       
        echo "
            <li  class='liText'>$algorthimencrypt</li>
         
        ";
    }
    echo "
    <h5 class='encDec'>How to decrypt?</h5>
    ";
    $cmdDec="select * from algortihmdecrypt where algorthimID='23'";
    $exeDec=mysqli_query($con, $cmdDec);
    while ($rowDec=mysqli_fetch_assoc($exeDec)) {
        $algortihmDecrypt=$rowDec["algortihmDecrypt"];
       
        echo "
            <li class='liText'>$algortihmDecrypt</li>
         
        ";
    }

    echo "
    <h5 class='title' >Advantages:</h5>
    ";
    $cmdAdvance="select * from algorthimAdvantages where algorthimID='23'";
    $exeAdvance=mysqli_query($con, $cmdAdvance);
    while ($rowAdvance=mysqli_fetch_assoc($exeAdvance)) {
        $algorthimAdvantages=$rowAdvance["algorthimAdvantages"];
       
        echo "
            <li class='liText'>$algorthimAdvantages</li>
         
        ";
    }

    
    echo "
    <h5 class='title'>Disadvantages:</h5>
    ";
    $cmdDisadvance="select * from algorthimDisadvantages where algorthimID='23'";
    $exeDisadvance=mysqli_query($con, $cmdDisadvance);
    while ($rowDisadvance=mysqli_fetch_assoc($exeDisadvance)) {
        $algorthimDisadvantages=$rowDisadvance["algorthimDisadvantages"];
       
        echo "
            <li class='liText'>$algorthimDisadvantages</li>
         
        ";
    }

    echo "
    <h5 class='topTitle'>Example:</h5>
    ";
    $cmdExample="select * from algortihmexample where algorthimID='23'";
    $exeExample=mysqli_query($con, $cmdExample);
    while ($rowExample=mysqli_fetch_assoc($exeExample)) {
        $algorithmText=$rowExample["algorithmText"];
        $algorithmSubText=$rowExample["algorithmSubText"];
        $algorthmImg=$rowExample["algorthmImg"];
        
       if($algorithmSubText==""){
        if($algorthmImg==""){
            echo "
            <p>$algorithmText</p>        ";
        }else{
            echo "
            <p>$algorithmText</p>
            <img class='algorthmImg' src='img/$algorthmImg' alt=''>
        ";
        }
     
       }else{

        if($algorthmImg==""){
            echo "
            <p>$algorithmText</p>   
            <ol>  <li class='liText'>$algorithmSubText</li></ol>
           ";
        }else{
            echo "
            <p>$algorithmText</p>
            <ol>  <li class='liText'>$algorithmSubText</li></ol>

            <img class='algorthmImg' src='img/$algorthmImg' alt=''>

        ";
        }

        
        }
    }

    echo"<br></div>";

    //     $cmdImg="select * from imgalgorthim where algorithmName='$type'";
    //     $exe=mysqli_query($con, $cmdImg);
    //     while ($row=mysqli_fetch_assoc($exe)) {
    //         $imgAlgorthimnName=$row["imgAlgorthimnName"];
    //         echo "
    //     <img class='imgCaesar' src='img/$imgAlgorthimnName' alt=''>";
    //     }
    // }
    
     ?>