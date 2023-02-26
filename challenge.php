<?php
include 'function_db.php';
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
error_reporting(E_ERROR | E_PARSE);
// 1 mcq
// 2 write
// 3 true or false
require_once 'connection.php';
require_once 'functions.php';
require_once 'question_functions.php';
require_once 'function_db.php';

?>
<?php
function fun($con)
{
$level=1;
if(isset($_SESSION['level'])){
  $level=$_SESSION['level'];

}else{
$level=1;
}

        $rowcount = mysqli_num_rows(mysqli_query($con,'select * from middle  where usersID='.$_SESSION['id'].''));
             $user_id = $_SESSION['id'];
            $cmd2="SELECT * FROM challenges WHERE level = $level ORDER BY RAND() LIMIT 1";
            $exe2 = mysqli_query($con, $cmd2);
            if(mysqli_num_rows($exe2) == 0){
                fun($con);
            }
while ($row2 = mysqli_fetch_assoc($exe2)) {
    $Challenges_ID = $row2['id'];
    $question = $row2['question'];
    $feedbackA = $row2['feedback_a'];
    $feedbackB = $row2['feedback_b'];
    $feedbackC = $row2['feedback_c'];
    $feedbackWriteTrue = $row2['feedbackWriteTrue'];
    $feedbackWriteFalse = $row2['feedbackWriteFalse'];
    $feedbackTrue = $row2['feedbackTrue'];
    $feedbackFalse = $row2['feedbackFalse'];
    $key = $row2['key_w'];
    $correct_answer = $row2['correct_answer'];

    if ($row2['type'] == 1) {
        mcq($row2);
        echo " <div id='feedbackA'>
                   <h3>Feedback:</h3>
                   <h5>$feedbackA</h5>
                   </div> 
                   <div id='feedbackB'>
                   <h3>Feedback:</h3>
                   <h5>$feedbackB </h5>
                   </div> 
                   <div id='feedbackC'>
                   <h3>Feedback:</h3>
                   <h5>$feedbackC </h5> </div> ";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["btnanswer"])) {
        $answer = $_POST['answer'];
    }
    if (strcmp($answer, $correct_answer)) {
            addDataToMiddle($con, $user_id, 1, $Challenges_ID, 1);
              
    }
                //
    else {
      
                                    addDataToMiddle($con, $user_id, 1, $Challenges_ID, 0);

    }
}
    } elseif ($row2['type'] == 2) {
        write($row2);
        

                  
        // check if server request method post

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST["btnanswer"])) {
                $answerWrite = $_POST['answerWrite'];
            }
            if (strcmp($answerWrite, $correct_answer)) {
                addDataToMiddle($con, $user_id, 1, $Challenges_ID, 1, $answerWrite);
               
            } else {
                addDataToMiddle($con, $user_id, 1, $Challenges_ID, 0, $answerWrite);
              
            }
        }
    } elseif ($row2['type'] == 3) {
        trueOrFalse($row2);
        echo "
                   <div id='feedbackTrue'> <h3>Feedback:</h3> <h5>$feedbackTrue </h5> </div> <div id='feedbackFalse'>
                   <h3>Feedback:</h3>
                   <h5>$feedbackFalse </h5>
                   </div> 
                   ";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $trueOrFalse = $_POST['trueOrFalse'];
            if (strcmp($trueOrFalse, $correct_answer)) {
                            addDataToMiddle($con, $user_id, 1, $Challenges_ID,1, $trueOrFalse);
                
            } else {
                                        addDataToMiddle($con, $user_id, 1, $Challenges_ID, 0, $trueOrFalse);
              
            }
        }
    // }
}
        break;
    }
}


fun($con);


$Text=$_POST["text"];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if($Text!=""){
 $text= real_escape_string($Text);

    $cmdInsertHelp="insert into questions(Text ,email,name,user_id) values('$text','$email','$name','$id')";
    mysqli_query($con, $cmdInsertHelp);
}
// }



?>

<script>
    $(document).ready(function() {
        $(".next").click(function() {
            function refresh(){
        $(".next").remove();        
        $("#feedbackA").hide();
        $("#feedbackB").hide();
        $("#feedbackC").hide();
        $("#feedbackWrite").hide();
        $("#feedbackTrue").hide();
        $("#feedbackFalse").hide();
    $.ajax({
        type: "GET",
        url: "challenge.php",
        success:function(n){
                  $("#show1").html(n).val();
                  $("#show2").html(n).val();
                  $("#show3").html(n).val();
                }
            });
    }
    refresh();
        });
        $("#feedbackA").hide();
        $("#feedbackB").hide();
        $("#feedbackC").hide();
        $("#feedbackWrite").hide();
        $("#feedbackTrue").hide();
        $("#feedbackFalse").hide();
        $("#submit").click(function() {
            const button = document.getElementById('submitTOF');
        var answer = document.querySelector("input[name='MCQ']:checked").value;
            if(answer==1){
                $("#feedbackA").hide();
                $("#feedbackB").hide();
                $("#feedbackC").hide();
                $("#feedbackA").show(200);
            }
            if(answer==2){
                $("#feedbackA").hide();
                $("#feedbackB").hide();
                $("#feedbackC").hide();
                $("#feedbackB").show(200);
            }
            if(answer==3){
                $("#feedbackA").hide();
                $("#feedbackB").hide();
                $("#feedbackC").hide();
                $("#feedbackC").show(200);
            }
        });
$("#submitWrte").click(function(){
    const button = document.getElementById('submitTOF');
    var answerWrite=$("#answerWrite").val();
     $("#feedbackWrite").show();
   // alert(answerWrite);
 $.ajax({

                type: "POST",
                url: "challenge.php",
                data: {"answerWrite": answerWrite}
            });});
    $("#submitTOF").click(function(){
        const button = document.getElementById('submitTOF');
         var trueOrFalse = document.querySelector("input[name='trueOrFalse']:checked").value;
         if(trueOrFalse=="false"){
            $("#feedbackTrue").hide();
            $("#feedbackFalse").hide(); 
            $("#feedbackFalse").show();
         }
         else if(trueOrFalse=="true"){
            $("#feedbackTrue").hide();
            $("#feedbackFalse").hide();
            $("#feedbackTrue").show();
         }
     $.ajax({
                type: "POST",
                url: "challenge.php",
                data: {"trueOrFalse": trueOrFalse}
            });
         });
     });
       
        


     $("#clearWrite").click(function(){document.getElementById('answerWrite').value = '';});
     $("#clearTOF").click(function(){document.getElementById('false').checked = false;});
     $("#clearTOF").click(function(){document.getElementById('true').checked = false;});
     
     $("#clearMCQ").click(function(){document.getElementById('answerA').checked = false;});
     $("#clearMCQ").click(function(){document.getElementById('answerB').checked = false;});
     $("#clearMCQ").click(function(){document.getElementById('answerC').checked = false;});
    
</script>
