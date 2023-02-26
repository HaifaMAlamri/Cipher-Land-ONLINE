
<style>
    .Caesar {margin-left:3%;margin-top: 0%;}
    .btnBIA{margin-left:5%}
    .btnQuetion {margin-top: 20px;margin-left: 10%}
    .Quetion { width: 80%; margin-top: 20px; margin-bottom: 10px;}
    .sunClr { text-align: center;}
    .sunClr button {width: 90px;}
    .help {border-radius: 50%;margin-left: 60%;height: 45px;width: 45px;}
    .txtHelp {border-radius: 20%;margin-left: 85%;margin-top: -13px;z-index: 1;position: absolute;height: 190px;width: 150px;border: 2px solid rgb(66, 63, 63);}
    .txtHelp1 {border-radius: 20%;margin-left: 8%;margin-top: 8%;z-index: 1;position: absolute;height: 140px;width: 120px;border: 2px solid 2px solid rgb(66, 63, 63);}
    .btnHelp {border-radius: 20%;margin-left: 28%;margin-top: 105%;z-index: 1;position: absolute;height: 30px;width: 60px;}
    .submit {width: 100px !important}
    .next {width: 20% !important;height: 50px !important;margin-top: 3%}
    .Chiphertext {color: brown;margin-top: 30px;margin-left: -20px}
    .trueOrFalse {    margin-left: 7px;
    width: 20px;
    height: 20px;
    font-size: 11px;}
    span {font-size: 25px}
    .radio{width:20px;height:20px;margin-top:10px;margin-left:70px}
    .label{font-size:22px; }
    /* .feedbackTrue,.feedbackFalse{margin-left:10%}
    .feedbackFalse h5{color:red}
    .feedbackTrue h5{color:green} */
    /* .feedback h5{color} */
</style>


<div id='show'>
<?php
// mcq//////////////////////////////////////////////////////////////////////////
function mcq($row2){
    //radio
    $question = $row2['question'];
    $a = $row2['answer_a'];
    $b = $row2['answer_b'];
    $c = $row2['answer_c'];
    echo "
    <div id='show1'>  
  
        <div class='btnQuetion'>
          <button type='button' class='Quetion btn btn-primary'>Quetion</button>
      <div class='Quetion1'>
          <h4 class='Chiphertext'>Question:</h4>
          <h5>$question</h5>
          <div class=''>
<input class='radio' required type='radio' value='1' id='answerA' name='MCQ' id='answer'>
<label' class='label'>$a</label>
</div>
             <div class=''>
<input class='radio' required type='radio' value='2' id='answerB'  name='MCQ' id='answer'>
<label' class='label'>$b</label>
</div>
          <div class=''>
<input class='radio' required type='radio' value='3' id='answerC' name='MCQ' id='answer' >
<label' class='label'>$c</label>
</div>
      </div>
  </div>
  <form method='post'>
  <center>
  <button name='btnanswer' id='submit' type='button' class='submit btn btn-success'>Save</button>
  <button name='submit' id='clearMCQ' type='button' class='submit btn btn-danger'> Clear</button>
  </center>
  </form>
  <br>
  </div>
  <center>
  <form method='post'>
  </form>
  <button  name='next' id='next' class='next btn btn-info'>Next</button>
  </center><br>
";
}
// write//////////////////////////////////////////////////////////////////////////

function write($row2){
    $question = $row2['question'];
    $key = $row2['key_w'];
    echo "
    <div id='show2'>  
   
      <div class='btnQuetion'>
          <button type='button' class='Quetion btn btn-primary'>Quetion</button>
      <div class='Quetion1'>
          <h4 class='Chiphertext'>Quetion:</h4>
          <h5>$question</h5>
          <h4>Key:</h4>
          <h5>$key</h5> <br>
      </div>
  </div>
  <h4 class='container'>plaintext:</h4>
  <input id='answerWrite' name='answerWrite'  class='container form-control form-control' type='text' placeholder='Answer' aria-label='.form-control-lg example'>
  <br>
   <form method='POST'>         
  <center>
  <button name='submitWrte' id='submitWrte' type='button' class='submit btn btn-success'>Save</button>
  <button  id='clearWrite' type='button' class='submit btn btn-danger'> Clear</button>
  </center>
  </form>
  </div>

  <center>
  <form method='post'>
  <button type='button' id='next' name='next' class='next btn btn-info'>Next</button>
  </form>
  </center><br>
";
}

// true Or False//////////////////////////////////////////////////////////////////////////
function trueOrFalse($row2){
    $question = $row2['question'];

    echo "
    <div id='show3'>  
  
      <div class='btnQuetion'>
          <button type='button' class='Quetion btn btn-primary'>Quetion</button>
      <div class='Quetion1'>
          <h4 class='Chiphertext'>Question:</h4>
          <h5>$question</h5>
        <span>True</span>  <input class='trueOrFalse'  id='true' required name='trueOrFalse'   type='radio' value='true'>
        <span>False</span>  <input class='trueOrFalse' id='false' required name='trueOrFalse' type='radio' value='false'>
        </div></div>
        <form method='POST'>
  <center>
  <button name='submitTOF'  id='submitTOF' type='button' class='submit btn btn-success'>Save</button>
  <button name='submit' id='clearTOF' type='button' class='submit btn btn-danger'> Clear</button>
  </center>
  </form>

  <center>
  <form method='post'>
  </form>
  <button type='button' name='next' id='next' class='next btn btn-info'>Next</button>
  
  </center><br>
  <br>
  </div>
";
}
//   <h1 class='Caesar'>Caesar chipher</h1>
    // <div class='btnBIA'>
    // 
    //   <a href=index?level=1><button type='button' class='btn btn-secondary'>Beginner</button></a>  
    //     <button type='button' class='btn btn-secondary'>Intermediate</button>
    //     <button type='button' class='btn btn-secondary'>Advanced</button>
    //     <button type='button' class='help btn btn-secondary'>?</button>
    // 
    //     <div class='txtHelp'>
    //         <input type='text' class='txtHelp1'></input>
    //         <button type='submit' name='send' class='btnHelp btn btn-primary'>send</button>
    //     </div>
    // </div>

?>
</div>
