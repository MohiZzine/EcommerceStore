<?php session_start();
  require 'includes/dbh.inc.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the backstore page where we can see who is registered on our website.">
    <meta name="author" content="Mohammad Ali Zahir">
    <title>The Krusty Patty</title>
    <!-- (adding bootstrap CDN)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>  <!-- Navigation bar-->
    <nav class="site-header sticky-top py-1 border rounded">
      <div class="container d-flex justify-content-between">
        <a class="py-2" href="index.php">Home</a> 
        <a class="py-2" href="p13-aboutus.php">About us</a> 
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p6-signup.php">Sign up</a>
      </div>
    </nav>
      <div class="sidebar">
        <a class="active" href="index.php">Home</a>
        <li style="list-style-type: none"><a href="p9-user.php">User List</a></li>
        <a href="p7-productlist.php" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.php" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.php"> Orders</a></li>
 </ul>
      </div>
 <h1 class="Krusty-text1" style="margin-top: 50px">Edit your profile</h1>
      <br>
      <br>
      <br>
<div class="content">
<form action="" method="post">
      <div class="container-text">
      <p style="font-size: 1.5vw;"><strong>Your ID: &nbsp; </strong> <input type="text" name ="id" placeholder="Please enter your ID"></p>

      <p style="font-size: 1.5vw;"><strong>Your name: &nbsp; </strong> <input type="text" name ="name" placeholder="Your name"></p>
      <p style="font-size: 1.5vw;"><strong>Your email: &nbsp; </strong> <input type="email" name ="email" placeholder="Your email"></p>
      
      <br>
      <br>
      <p style="font-size: 1.5vw;">To change settings for your profile, please put answers for the following the security questions</p>
      <br>
      <br>
      <p style="font-size: 1.5vw;"><strong>Question: What is your mother's maiden name?</strong></p>
      <p style="font-size: 1.5vw;"><strong>Answer: &nbsp;</strong> <input type ="text" placeholder="Answer"></p>
      <br>
       <p style="font-size: 1.5vw;"><strong>Question: What was the city you were born in?</strong></p>
       <p style="font-size: 1.5vw;"><strong>Answer: &nbsp;</strong> <input type ="text" placeholder="Answer"></p>
      <br>
      <p style="font-size: 1.5vw;"><strong>Question: What was a nickname you had as a child?</strong></p>
      <p style="font-size: 1.5vw;"><strong>Answer: &nbsp;</strong> <input type ="text" placeholder="Answer"></p>
      <br>
    </div>
  </div>
      <a href="p10-editprofile.php"><button style="margin-left: 230px" name="update" class="btn btn-info" role="sumbit">Save Changes</button></a></form>
      <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md"> 
          <small style="margin-left:auto" class="d-block mb-3 text-muted">&copy; 2020-2021 </br> Soen 287</small>
        </div>
        <div class="col-6 col-md">
          <h5>Team</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Matthew Pan</a></li>
            <li><a class="text-muted">Ribelle El Ayoubi</a></li>
            <li><a class="text-muted">Mohammad Ali Zahir</a></li>
            <li><a class="text-muted">Maya McRae</a></li>
            <li><a class="text-muted">Lea Lakkis</a></li>
            <li><a class="text-muted">Mira Aji</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Locations (Coming soon)</a></li>
            <li><a class="text-muted">Privacy</a></li>
            <li><a class="text-muted">Terms</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Coming Soon</a></li>
            <li><a class="text-muted" href="#top">Jump to top of page</a></li>
          </ul>
        </div>
      </div>
    </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>

<?php 

$db = mysqli_select_db($conn,'rykppv8n7h82a40v');




if(isset($_POST['update'])){



$id = $_POST['id'];
$fname = $_POST['name'];
$emailUser = $_POST['email'];

  $query ="UPDATE users SET first_nameUsers = '$fname', emailUsers = '$emailUser' WHERE idUsers = '$id'";
  $query_run = mysqli_query($conn, $query);




  if($query_run){

    echo '<script type= "text/javascript"> alert("Data Updated") </script>';


  }

  else

  echo '<script type= "text/javascript"> alert("Data not updated") </script>';


}



?>