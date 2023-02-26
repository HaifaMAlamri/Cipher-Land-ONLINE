
<!DOCTYPE html>
<html>

<head>
    <title>Chipher <i class="fas fa-landmark    "></i></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <style>
        .main {
            background-color: white;
            /* border-top: 10px solid rgb(4, 73, 138); */
            /* border-bottom: 10px solid rgb(4, 73, 138); */
            width: 400px;
            overflow: hidden;
            text-align: center;
            border:#000000;
            border-radius: 10px;
            margin: auto;
            margin-top: 40px;
            padding: 45px;
            padding-bottom: -20px;
            padding-right: 80px;
            box-shadow: 1px 1px 108.8px 1px rgb(99, 108, 138);
            border-radius: 15px;
        }
        
        Body {
            background-image: url(image//design.png);
            position: relative;
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
            color: rgb(4, 73, 138);
        }
        
        img {
            position: relative;
            padding: 0%;
            margin-top: -30px;
        }
        
        .btn {
            position: relative;
            border: 0;
            margin-top:20px;
            color:white;
background-color:blue;
            border-radius: 100px;
            width: 240px;
            height: 49px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            top: 79%;
            transition: 0.3s;
            cursor: pointer;
        }
        
        .btn:hover {
            /* background-image: url(button.jpg); */
            /* color: white; */
        }
        
        .form {
            position: relative;
            border: 0;
            outline-color: #0b4b8b;
            box-shadow: none;
            display: block;
            border-bottom: 1px solid rgb(4, 73, 138);
            width: 100%;
            height: 30px;
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            font-weight: 500;
            padding-left: 25px;
            transition: all 0.3s ease;
            padding-bottom: -20px;
            margin-bottom: auto;
        }
        
        .chk {
            position: relative;
            margin-left: -75%;
            margin-top: 10px;
            font-size: 13px;
        }
        
        a {
            text-decoration: none;
            line-height: 20px;
            color: #708090;
        }
        
        a:hover {
            color: powderblue;
        }
        
        .active {
            color: #fff;
            background: #26e0d0;
            border-radius: 4px;
        }
        
        .icon {
            position: absolute;
            margin-top: -13px;
            margin-left: 2px;
            transform: translateY(-50%);
            color: #708090;
        }
    </style>
</head>

<body >
  <?php 
// session_start();
require_once "connection.php";
    if(isset($_POST["submit"]))
    {
        $fname=$_POST["Fname"];
        $lname=$_POST["Lname"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $name = $fname . $lname;
        $pass = sha1($password);
        $query="insert into users(name,password,email,type)values('$name','$pass','$email','user')";
       if(mysqli_query($con,$query)){
                    $_SESSION['email']=$email;
                    $_SESSION['name']=$name;
                    $_SESSION['isLogin']=1;
                    $_SESSION['type']='user';
                    header('Location:home.php');
    
       }

       
    
    }
?>
    <form method="post" action="register.php">
        <div class="main">
            <!-- <img src="image//logo.png" width="260" height="130"> -->
            <p style="color: #000000; font-family: 'Courier New', Courier, monospace; font-size: 20px; margin-top: -10px; margin-bottom: 10px;"><b>Sign Up</b></p>
            <br>
            <h2 style="margin-top: 20px;"> </h2>
            <input class="form" name="name" type="Fname" placeholder="First Name " size="40"  required>
            <div class="icon"><i class="fas fa-user"></i></div>
            <br>
             <input class="form" name="Lname" type="text" placeholder="Last Name " size="40"  required>
            <div class="icon"><i class="fas fa-user"></i></div>
            <br>
                 <input class="form" name="email" type="email" placeholder="Email " required>
            <div class="icon"><i class="fas fa-mail-bulk"></i></div>
            <br>
            <input class="form" id="pass" name="password" placeholder="Password" type="password" size="40" required>
            <div class="icon"><i class="fas fa-lock"></i></div>
    <span id="pass-valid-label" style="display: block;color: red"></span>
            <br>
              <!-- <input class="form" name="confirm_password" placeholder="Confirm  Password" type="password" size="40" required> -->
            <!-- <div class="icon"><i class="fas fa-lock"></i></div> -->
  <input class="btn" id="bb" type="submit" value="Sign Up"  name="submit">
  
  <p>Alreday a user ? <a href ="login.php"> Log in  </a> </P>

    </div>
  </form>

<script>

document.getElementById("pass").addEventListener("change", function () {
    var password = this.value;
    var result = validatePassword(password);
    var label = document.getElementById("pass-valid-label");
    if (result == true) {
        label.innerText = '';
    } else {
        label.innerText = result;
    }
});
function validatePassword(password) {
    if (typeof password != "string") {
      password = "" + password;
    }
    if (password.length < 8 ||password.length>18) {
document.getElementById("bb").disabled = true;  
      return 'Password length must be 8 chars and not longer 18';
    }
    if (password.search(/[0-9]/) === -1) {
document.getElementById("bb").disabled = true;  
      return 'At least 1 numeric value';
    }
    if (password.search(/[a-z]/) === -1) {
document.getElementById("bb").disabled = true;  
      return 'At least 1 small letter value [a-z]';
    }
    if (password.search(/[A-Z]/) === -1) {
document.getElementById("bb").disabled = true;  
      return 'At least 1 upper letter value [A-Z]';
    }
    if (password.search(/[`~!@#\$%\^&\*\(\)\-_\{\}\=\+'"\>\.\,\?<\/\|\\\:;\]\[]/) === -1) {
document.getElementById("bb").disabled = true;  
      return 'At least 1 special chars [~!@#$%^&*()_+{}":?><...]';
        
    }
    else {
    document.getElementById("bb").disabled = false; 
    }
    return true;
}
</script>
</body>
</html>