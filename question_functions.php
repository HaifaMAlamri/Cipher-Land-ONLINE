<?php
ini_set('memory_limit', '1024M'); // or you could use 1G
set_time_limit(500); // 

function getRandomQuestion($level,$con){
    $sql = "SELECT * FROM challenges WHERE level = $level ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row2 = mysqli_fetch_assoc($result);
    if(checkIfuserAnswer($row2['id'],$con)){
        return getRandomQuestion($level,$con);
    }
    else{
        return $row2;
    }

    // return $row2;
}
function checkIfuserAnswer($question_id,$con){
    $user_id = $_SESSION['id'];
    $count = mysqli_num_rows(mysqli_query($con,"SELECT * FROM middle WHERE usersID = $user_id AND ChallengesID = $question_id"));
    if($count > 0){
        return true;
    }
   else{
       return false;
   }
}
function getCountQuestioninLevel($level,$con){
  $count=  mysqli_num_rows(mysqli_query($con,"select * from challenges where level=$level"));
    return $count;
}

?>