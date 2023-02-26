<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> -->
<style>
       button{margin-left: 25% !important;margin-bottom:2rem ;font-size:25px;background-color:rgb(111, 165, 245) !important;width: 50%;height: 3rem;border:1px solid white;border-radius: 10px;}

</style>
</head>
<body>
  <ul role="list" class="w-full p-6 divide-y divide-slate-200">
  <?php
  require_once("connection.php");

  $cmd="select DISTINCT q.user_id ,q.name,q.email,Text from users as u ,questions as q where u.id=q.user_id and q.Text!='' ";
  $exe=mysqli_query($con,$cmd);
  while($row=mysqli_fetch_assoc($exe)){
    $name=$row["name"];
    $email=$row["email"];
    $user_id=$row["user_id"];
    echo "
    <li class='flex py-4 first:pt-0 last:pb-0'>
    <img class=' h-13 w-14 rounded-full' src='profile.png' alt='' />
    <div class='ml-3 overflow-hidden'>
    <a href='messeges.php?user_id=$user_id'><p class='text-lg font-medium text-slate-900'>$name</p></a>

  <a href='mailto:$email'><p class='text-sm text-slate-500 truncate'>$email</p></a>
  </div>
</li>
    ";
  }
  ?>
      
      <!-- {#each people as person} -->
      <!-- Remove top/bottom padding when first/last child -->
      
      <!-- {/each} -->
    </ul>
    <hr>
    <br>
    <a href="index.php"><button>back</button></a>
</body>
</html>