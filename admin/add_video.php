<?php
require_once("connection.php");


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
    $url = $_POST['url'];
//   if (isset($_POST['algo'])) {
//     $algo = $_POST['algo'];
//   }
//   else{
    $algo = 1;
//   }

 

    $query =mysqli_query($con, "INSERT INTO videos (url,algorithm_id) VALUES ('$url', '$algo')");
    if ($query) {
        echo 'sucsses ';
    }
}
?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
<style> body { display: flex; flex-direction: column; justify-content: space-between; background: linear-gradient(to right, #1b3374, #8f4fe8); } .serv { display: flex; justify-content: center; align-items: center; margin-top: 30px; margin-bottom: 140px; height: 100vh; padding: 40px; } .serv .container { max-width: 700px; width: 100%; background-color: #fff; padding: 25px 30px; border-radius: 5px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); } .serv .container .title { font-size: 25px; font-weight: 500; position: relative; } .serv .container .title::before { content: ""; position: absolute; left: 0; bottom: 0; height: 3px; width: 30px; border-radius: 5px; background: linear-gradient(135deg, #71b7e6, #9b59b6); } .serv .content form .user-details { display: flex; flex-wrap: wrap; justify-content: space-between; margin: 20px 0 12px 0; } .serv form .user-details .input-box { margin-bottom: 15px; width: calc(100% / 2 - 20px); } .serv form .input-box span.details { display: block; font-weight: 500; margin-bottom: 5px; } .user-details .input-box input { height: 45px; width: 100%; outline: none; font-size: 16px; border-radius: 5px; padding-left: 15px; border: 1px solid #ccc; border-bottom-width: 2px; transition: all 0.3s ease; } .user-details .input-box input:focus, .user-details .input-box input:valid { border-color: #9b59b6; } form .gender-details .gender-title { font-size: 20px; font-weight: 500; } form .category { display: flex; width: 80%; margin: 14px 0; justify-content: space-between; } form .category label { display: flex; align-items: center; cursor: pointer; } form .category label .dot { height: 18px; width: 18px; border-radius: 50%; margin-right: 10px; background: #d9d9d9; border: 5px solid transparent; transition: all 0.3s ease; } #dot-1:checked ~ .category label .one, #dot-2:checked ~ .category label .two, #dot-3:checked ~ .category label .three { background: #9b59b6; border-color: #d9d9d9; } form input[type="radio"] { display: none; } form .button { height: 45px; margin: 35px 0; } form .button input { height: 100%; width: 100%; border-radius: 5px; border: none; color: #fff; font-size: 18px; font-weight: 500; letter-spacing: 1px; cursor: pointer; transition: all 0.3s ease; background: linear-gradient(135deg, #71b7e6, #9b59b6); } form .button input:hover { /* transform: scale(0.99); */ background: linear-gradient(-135deg, #71b7e6, #9b59b6); } @media (max-width: 584px) { .container { max-width: 100%; } form .user-details .input-box { margin-bottom: 15px; width: 100%; } form .category { width: 100%; } .content form .user-details { max-height: 300px; overflow-y: scroll; } .user-details::-webkit-scrollbar { width: 5px; } } @media (max-width: 459px) { .container .content .category { flex-direction: column; } }</style>
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

    <!-- slider stylesheet --><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" /><link rel="stylesheet" href="fonts/icomoon/style.css" /><link rel="stylesheet" href="css/owl.carousel.min.css" /><!-- bootstrap core css --><link rel="stylesheet" type="text/css" href="css/bootstrap.css" /><!-- fonts style --><link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet" /><!-- arabic --><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" /><!-- icon --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /><!-- Custom styles for this template --><link href="css/style.css" rel="stylesheet" /><!-- responsive style --><link href="css/responsive.css" rel="stylesheet" />
  </head>
  <body class="sub_page" dir="ltr">
    <!-- قسم ثابت خاص بال  Header -->
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                  <span> chipher land</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
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
        <div class="title"> add new video</div>
        <div class="content">
          <form  method="post"  enctype="multipart/form-data">
            <div class="user-details">
              <div class="input-box inline">
                <span class="details">url</span>
                <input type="text" placeholder="url" required name="url" />
              </div>
          
              <div class="input-box">
            

              </div>
             
            </div>

            <div class="button">
              <input type="submit" value="save"  name="save"/>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
