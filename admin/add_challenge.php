<?php
require_once "connection.php";

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION['isLogin'])){
    if ($_SESSION['isLogin'] == 1)
     {
    //    header('Location:index.php');
    } 
}  else {
        header('Location:login.php');
    
    }
if (isset($_POST['save'])) {
    $type = $_POST['type'];
    $level = $_POST['level'];
    $algorithm_id = $_POST['algorithm_id'];
    // $answer_a = $_POST['answer_a'];
    // $answer_b = $_POST['answer_b'];
    // $answer_c = $_POST['answer_c'];
    // $correct_answer = $_POST['c_answer'];

   if($type=='1')
    {

  
      $q1 = $_POST['question1'];
        $q1 = filter_var($q1, FILTER_SANITIZE_STRING);
     $answer_a = $_POST['answer_a'];
     $answer_a = filter_var( $answer_a, FILTER_SANITIZE_STRING);
     $feedback_a = $_POST['feedback_a'];
     $feedback_a= filter_var($feedback_a, FILTER_SANITIZE_STRING);
     $answer_b = $_POST['answer_b'];
      $answer_b= filter_var( $answer_b, FILTER_SANITIZE_STRING);
     $feedback_b = $_POST['feedback_b'];
    $feedback_b= filter_var( $feedback_b, FILTER_SANITIZE_STRING);
     $answer_c = $_POST['answer_c'];
        $answer_c= filter_var(  $answer_c, FILTER_SANITIZE_STRING);
     $feedback_c = $_POST['feedback_c'];
        $feedback_c= filter_var( $feedback_c, FILTER_SANITIZE_STRING);
     $correct_answer = $_POST['c_answer'];
    $query = "INSERT INTO challenges(question,level, algorithm_id, type, answer_a,
     answer_b, answer_c, correct_answer, feedback_a, feedback_b, feedback_c)
     VALUES ('$q1','$level','$algorithm_id','$type','$answer_a','$answer_b','$answer_c',' $correct_answer','$feedback_a','$feedback_b','$feedback_c')";
  if ($con->query($query) === TRUE) {

    // $last_id = $conn->insert_id;
   
  
        echo 'sucsses ';
    
  }

}else if ($type=='3'){

// TrueAnswer
// echo $q;

$feedback_true = $_POST['feedback_true'];
 $feedback_true= filter_var( $feedback_true, FILTER_SANITIZE_STRING);
if(isset($_POST['answer_true_fals'])){

$answer = $_POST['answer_true_fals'];

}
$question = $_POST['question'];
$question= filter_var( $question, FILTER_SANITIZE_STRING);
     $feedback_false= $_POST['feedback_false'];
      $feedback_false= filter_var( $feedback_false, FILTER_SANITIZE_STRING);
     $query = "INSERT INTO challenges(question,level, algorithm_id, type, answer_true_false, feedbackTrue, feedbackFalse)
     VALUES ('$question','$level','$algorithm_id','$type','$answer','$feedback_true',' $feedback_false')";
  if ($con->query($query) === TRUE) {

    // $last_id = $conn->insert_id;
   
  
        echo 'sucsses new true or false ';
    
  }


}
else{
// write
// echo $q;

    $answer = $_POST['answer'];
 $answer=   filter_var($answer, FILTER_SANITIZE_STRING);
    $qq = $_POST['question'];
     $qq =   filter_var($qq , FILTER_SANITIZE_STRING);
     $feedback = $_POST['feedback'];
          $feedback =   filter_var($feedback , FILTER_SANITIZE_STRING);
     $key= $_POST['key'];
     $query = "INSERT INTO challenges(question,level, algorithm_id, type, key_w,correct_answer, feedback)
                              VALUES ('$qq','$level','$algorithm_id','$type','$key','$answer','$feedback')";

  if ($con->query($query) === TRUE) {

    // $last_id = $conn->insert_id;
   
  
        echo 'sucsses new Write';
    
  }


}
//  $query ="INSERT INTO challenges(question,level,feedback, algorithm_id, answer_a,answer_b,answer_c, correct_answer) VALUES ('$question','$level','feedback','$algorithm_id','$answer_a','$answer_b','$answer_c','$correct_answer')";


}

?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <link href="font/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
    <link href="font/fontawesome-free-6.2.1-web/css/brands.css" rel="stylesheet">
    <link href="font/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
   
    <style>
      body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
       /* background: linear-gradient(to right, #1b3374, #8f4fe8); */
      }#True{
        margin-bottom:10px;
      }
      #Answers{
        margin-bottom:10px;
        margin-top:20px;
        padding-bottom:10px
      }
      #question{
        height:40px;
        padding-top:10px
      }
      .serv {
          display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    margin-bottom: 140px;
      }
      .serv .container {
          max-width: 700px;
    width: 50%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgb(0 0 0 / 15%);
    /* align-items: center; */
    /* display: table-footer-group; */
    padding: 0 13%;
      }
      .serv .container .title {
        
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }#Feedback{margin-top:5px}
    
      .serv .content form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
      }
      .serv form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
      }
      .serv form .input-box span.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
      }
  
      .user-details .input-box input:focus,
      .user-details .input-box input:valid {
        border-color: #9b59b6;
      }
      form .gender-details .gender-title {
        font-size: 20px;
        font-weight: 500;
      }
      form .category {
        display: flex;
        width: 80%;
        margin: 14px 0;
        justify-content: space-between;
      }
      form .category label {
        display: flex;
        align-items: center;
        cursor: pointer;
      }
      form .category label .dot {
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
      }
      #dot-1:checked ~ .category label .one,
      #dot-2:checked ~ .category label .two,
      #dot-3:checked ~ .category label .three {
        background: #9b59b6;
        border-color: #d9d9d9;
      }
      /* form input[type="radio"] {
        display: none;
      } */
      form .button {
        
        height: 45px;
        margin: 35px 10px;
      }
      form .button input {
        margin-top:30px;
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background-color:blue;
        /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
      }

      form .button input:hover {
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #71b7e6, #9b59b6);
      }
      .full{
      width:100%;}
      @media (max-width: 584px) {
        .container {
          max-width: 100%;
        }
        form .user-details .input-box {
          margin-bottom: 15px;
          width: 100%;
        }
        form .category {
          width: 100%;
        }
        .content form .user-details {
          max-height: 300px;
          overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar {
          width: 5px;
        }
      }
      @media (max-width: 459px) {
        .container .content .category {
          flex-direction: column;
        }
      }
    </style>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> </title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap"
      rel="stylesheet"
    />
    <!-- arabic -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>
  <body class="sub_page" dir="ltr">

    <div class="hero_area">
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                  <span> Cipher Land</span>
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                 
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <section class="serv">
      <div class="container">
        <div class="title"> Add New Challange</div>
        <div class="content">
          <form  method="post" action="add_challenge.php" enctype="multipart/form-data">
            <div class="">
              <div class="input-box inline">
                <select class ="full" name="type">
                  <option value="1">MCQ</option>
                  <option value="2">Write</option>
                  <option value="3">TRUE OR FALSE</option>
                  
                </select>
                <span class="details">Algorithm</span>
               <select class ="full" name="algorithm_id">
              <option value="1">Ceaser</option>
             
              </select>
              
              </div>

              <div id="MCQ">
              <div class="input-box ">
                <span class=" details" >Question</span>
                <input type="text" class="form-control form-control-sm" placeholder="Question"  name="question1"  class="full" />
                <div id="Question"></div>
              </div>
              <div id="QuestionType"> 

                <div class="input-box inline">
                <span class="details" >Answer a</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="answer a"  name="answer_a" class="full" />
              </div>

              <div class="input-box inline">
                <span class="details" >Feedback a</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback a"  name="feedback_a" class="full" />
              </div>

               <div class="input-box inline">
                <span class="details">Answer b</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="answer b"  name="answer_b"  class="full"/>
              </div>
              
              <div class="input-box inline">
                <span class="details" >Feedback b</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback b"  name="feedback_b" class="full" />
              </div>

               <div class="input-box inline">
                <span class="details" >Answer c</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="answer c"  name="answer_c" class="full" />
              </div>
              
              <div class="input-box inline">
                <span class="details" >Feedback c</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback c"  name="feedback_c" class="full" />
              </div>

               <div class="input-box inline">
                <span class="details">Correct Answer</span>
               <select  class ="full" name="c_answer">
              <option  value="1">A</option>
              <option value="2">B</option>
              <option value="3">C</option>
              </select>
              </div>
             </div>
              </div>
              <!-- end section mcq -->

<!-- start section write  -->
  <div id="WRITE">
  <div class="input-box ">
                <span class=" details" >Question</span>
                <input type="text" class="form-control form-control-sm" placeholder="Question"  name="question"  class="full" />
                <div id="Question"></div>
              </div>
              <div id="QuestionType"> 

                <div class="input-box inline">
                <span class="details" >Key </span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Key"  name="key" class="full" />
              </div>

              <div class="input-box inline">
                <span class="details" >Answer</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Answer"  name="answer" class="full" />
              </div>

              
              
              <div class="input-box inline">
                <span class="details" >Feedback </span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback"  name="feedback" class="full" />
              </div>

             </div>
              </div>
<!-- end section write -->


<!-- start section true or false -->
 <div id="TRUEORFALSE">
  <div class="input-box ">
                <span class=" details" >Question</span>
                <input type="text" class="form-control form-control-sm" placeholder="Question"  name="question"  class="full" />
                <div id="Question"></div>
              </div>
              <div id=""> 
                <div class='form-check'>
  <input class='form-check-input' type='radio' value='1' id='flexCheckChecked' name='answer_true_fals'>
  <label class='form-check-label' for='flexCheckChecked'>
  True
  </label>
</div>
  <input class='form-check-input' type='radio' value='0' id='flexCheckChecked' name='answer_true_fals'>
  <label class='form-check-label' for='flexCheckChecked'>
  False
  </label>
</div>

              <div class="input-box inline">
                <span class="details" >Feedback True</span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback True"  name="feedback_true" class="full" />
              </div>

              <div class="input-box inline">
                <span class="details" >Feedback False </span>
                <!--  -->
                <input type="text" class="form-control form-control-sm" placeholder="Feedback False"  name="feedback_false" class="full" />
              </div>

             </div>
              </div>
             



<!-- end section true or false -->


              <div class="input-box inline">
                <span class="details">Level</span>
               <select class ="full" name="level">
              <option value="1">A</option>
              <option value="2">B</option>
              <option value="3">C</option>
              </select>
              </div>
              
             
            <!-- </div> -->

            <div style="height:50px;width:20px"></div>
            <div class="button">
              <input type="submit" value="Save"  name="save"/>
            </div>
          </form>
        </div>
      </div>
    </section>

 
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      $(document).ready(function(){
         $("#TRUEORFALSE").hide(1000);
              $("#WRITE").hide(1000);
        // alert($(".full").val());
        $(".full").change(function(){
          var questionType=$(".full").val();
            if(questionType=="2"){

              $("#MCQ").hide(1000);
                $("#TRUEORFALSE").hide(1000);
              $("#WRITE").show(1000);

              

            }else if(questionType=="3"){
              $("#MCQ").hide(1000);
              $("#WRITE").hide(1000);
              $("#TRUEORFALSE").show(1000);            

                      }else if(questionType=="1"){
                        $("#MCQ").show(1000);
                            $("#WRITE").hide(1000);
                       $("#TRUEORFALSE").hide(1000);
                  
                        }


        });
      });

    </script>
  </body>
</html>
