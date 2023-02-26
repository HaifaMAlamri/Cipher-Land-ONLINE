
<style>
        body{background-color: white;}
    
.next{height: 30px;width: 110%;margin-top: 80px;}
.brnencript{width: 70%;margin-top: 10px;height: 40px;}
.encriptionDecription{margin-top: 40px;}
.next{margin-left: 0;margin-top: 2%;height: 230% !important;width: 100%;}
.buttonencript{margin-top: 55PX;}
.EncDec{margin-top: 50px;}
.clear{margin-top: 30px;width: 140px;}
#shift{width:200px;margin-left:50%}
.col-lg-1{width:15%;height: 20px !important;margin-top:8%}
.btnHelp1{
 border-radius: 50% !important;
    width: 25%;
    font-weight: bold;
    font-size: 24px;
    height: 220% /* background-color:b */;
    padding-bottom: 40px;
    color:white;
    border:1px solid white;
    background-color:#70747c;
}
.textHelp1{
  border:1px solid #d7dada;
  border-radius:15px;
  position: absolute;
margin-left:70%;
margin-top:4.5%;
background-color:#e6f2f2;
padding:1%;
padding-right:3%
}.close{
  color:red;
  font-weight:bold;
  font-size:25px;
  cursor:pointer
}
</style>
<div class="textHelp1">
  <p class="close">X</p>
<ol>
  <li>Enter The Text To Encryption</li>
  <li>Enter any number as key</li>
  <li>Click on encrypt button  to encrypt the text</li>
  <li>Follow the same instruction to decrypt</li>
</ol>

</div>
<div class="encriptionDecription text-center">
    <div class="row">
        <div class="buttonencript col-lg-2">
            <button   type="button" class="brnencript btn btn-success btn-block ">Text</button>
          </div>
      <div class="col-lg-3">
        <h1  class="text">INPUT</h1>
        <textarea id="input" class="form-control form-control-lg"  height="500px;" rows="5"   cols="40" style="resize: none"></textarea>
      </div>
      <div class="col-lg-1">
        <img class="next" src="img/next.svg" alt="">  
    </div>
      <div class="col-lg-3">
        <h1 class="text">RESULT</h1>
        <textarea id="output" class="form-control form-control-lg"  height="500px;" rows="5"   cols="40" style="resize: none"></textarea>
      </div>
      <div class="col-lg-1">
        <button class=" btnHelp1">?</button>
      </div>



    </div>
    <div class="row mt-4"> 
     <div class="col-4"></div>
    <div class="col-1">
    <h1 class="text">Key:</h1>
    </div>
    <div class="col-1">
    <input type="number" id="shift" class="form-control form-control-lg" >
    </div>
     <div class="col-3"></div>
    </div>

   


  
    <div class="EncDec mb-10">
      <button id="encrypt" type="submit" class="btn btn-info ">Enycrypt</button>
        <button type="button" id="decrypt" class="btn btn-info ">Decrypt</button>
    </div>
    <button id="clear" type="button" class="clear btn btn-danger  ">Clear</button></div>
  </div>
  </div>



  <script>
function caesarCipher(str, num) {
  num = num % 26;
  var lowerCaseString = str.toLowerCase();
  var alphabet = 'abcdefghijklmnopqrstuvwxyz'.split('');
  var newString = '';
  
  for (var i = 0; i < lowerCaseString.length; i++) {
    var currentLetter = lowerCaseString[i];
    if (currentLetter === ' ') {
      newString += currentLetter;
      continue;
    }
    var currentIndex = alphabet.indexOf(currentLetter);
    var newIndex = currentIndex + num;
    if (newIndex > 25) newIndex = newIndex - 26;
    if (newIndex < 0) newIndex = 26 + newIndex;
    if (str[i] === str[i].toUpperCase()) {
      newString += alphabet[newIndex].toUpperCase();
    }
    else newString += alphabet[newIndex];
  };
  
  return newString;
}
function clear(){
  return " ";
}

$(document).ready(function(){
$(".textHelp1").hide();
  $(".btnHelp1").click(function(){
$(".textHelp1").toggle();
  });  $(".close").click(function(){
$(".textHelp1").hide();
  });
  $("#encrypt").click(function(){
    var str = $("#input").val();
    var num = $("#shift").val();
    var encrypted = caesarCipher(str, num);
    $("#output").val(encrypted);
  });
  
  $("#decrypt").click(function(){
    var str = $("#input").val();
    var num = $("#shift").val();
    var decrypted = caesarCipher(str, -num);
    $("#output").val(decrypted);
  });
  $("#clear").click(function(){
    document.getElementById('input').value = '';
    document.getElementById('output').value = '';
    document.getElementById('shift').value = '';

  });
});
</script>
</body>
</html>