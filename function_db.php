<?php
// SESSION_START();
function addDataToMiddle($con,$user_id,$status,$Challenges_ID,$degree,$correct=''){
    $cmdIns = "INSERT INTO middle(usersID, statues, ChallengesID, degree, correct)
     VALUES ('$user_id', '$status', '$Challenges_ID', '$degree','$correct')";
    mysqli_query($con, $cmdIns);
//    return  mysqli_query($con, $cmdIns);
    //  mysqli_error($con);
      $_SESSION['count_answer'] = mysqli_num_rows(mysqli_query($con,'select * from middle  where usersID='.$_SESSION['id'].''));
      header("location:home.php");
    header("refresh:0; url =localhost:82/algo8");


}

function real_escape_string($string){
    global $con;
    return mysqli_real_escape_string($con,$string);
}

?>