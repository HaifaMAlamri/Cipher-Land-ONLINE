<?php

echo "
<h1 class='Caesar'>Ceaser Cipher</h1>  
<div class='btnBIA'>
<a href='home.php?level=1'>    <button type='button' class='btn btn-secondary'>Beginner</button></a>
<a href='home.php?level=2'>      <button type='button' class='btn btn-secondary'>Intermediate</button></a>
<a href='home.php?level=3'>         <button type='button' class='btn btn-secondary'>Advanced</button></a>
<button type='button' class='help btn btn-secondary'>?</button>
<div class='txtHelp'>
<input type='text' class='txtHelp1'></input>
<button type='submit' name='send' class='btnHelp btn btn-primary'>send</button>
</div>
</div>";
        require_once("challenge.php");
?>