<!-- Including the database to the php file -->
<?php
include "connection.php";
// Start of the session from here.
session_start();
 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- For mobile view -->
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <!-- Bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="css/styles.css">


  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700">
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Title -->
  <title>LogIn</title>
</head>

<body>

  <!-- Navigation bar -->
  <header id="Head">
    <div class="container-fluid">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/icon.png" width="18%" height="30%" alt="Icon">News4U</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="index.php"><span class="fa fa-home fa-sm"></span> Home</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="about.php"><span class="fa fa-info fa-sm"> About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-sm"></span> Contact Us</a>
            </li>

          </ul>
        </div>
      </nav>


      <!-- login -->
      <!-- Use of Cards and Form -->
      <div class="row">
        <div class="card bg-dark mx-auto">
          <div class="card-header">
            <img src="images/user.png" style="position:relative;width: 20%;"alt="User">
            <h2 class="create">LogIn</h2>
          </div>
          <div class="card-body">
            <form class="" action="login.php" method="post">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" class="form-control" placeholder="User name" type="text">
              </div>
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password" class="form-control" placeholder="Password" type="password">
              </div>

              <input type="submit" class="btn btn-primary btn-block" name="submit" value="LogIn">

              <p>Don't Have an account?<a href="Registration.php">Register here!</a> </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  </section>

<footer style="padding:2%; padding-bottom: 0; background-color: #78c9cb;">
  <div class="text-center">
      <a class="footer-link" href="https://www.linkedin.com/in/vikash-singh-a19158187/"><i class="fab fa-linkedin fa-2x"></i></a>
      <a class="footer-link" href="https://github.com/manutvikash"><i class="git fab fa-github fa-2x"></i></a>
      <a class="footer-link" href="https://www.facebook.com/" ><i class="facebook fab fa-facebook fa-2x"></i></a>
      <a class="footer-link" href="https://www.instagram.com/manut_vikash_50/"><i class="insta fab fa-instagram fa-2x"></i></a>
      <a class="footer-link" href="mailto:manutdrick@gmail.com"><span class="fa fa-2x fa-envelope"></span></a>
  </div>
  <div class="row justify-content-center">
       <div class="col-auto" style="color:black;">
           <p>© Copyright Reserved with News4U 2020</p>
       </div>
  </div>
</footer>


  <!-- JavascriptTags  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<!-- PHP -->
<?php
if (isset($_POST['submit'])) {
$name=$_POST['username'];
$pass=$_POST['password'];


$query="SELECT * from `registration` where `username`='$name' ";


$table=mysqli_query($connect,$query);

if(mysqli_num_rows($table)>0){
  $row=mysqli_fetch_array($table);
  $hash=$row["password"];
  if(password_verify($pass,$hash)==1)
  //Use of password verify

  {
    // SESSION variables are declared
     $_SESSION['login_password']=$_POST["password"];
     $_SESSION['login_email']=$row["email"];
     $_SESSION['login_phone']=$row["phone"];
     $_SESSION['login_address']=$row["address"];
     $_SESSION['login_user']=$row["username"];

?>
         <script type="text/javascript">
         alert("Login Successful..")
             window.location="index.php"
         </script>

<?php
  }
  else{
?>
         <script type="text/javascript">
              alert("Username and Password doesn't match");
         </script>

<?php
  }
}

}
?>



</body>

</html>
