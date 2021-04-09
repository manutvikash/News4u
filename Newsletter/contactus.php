<!-- Including the database to the php file and session function as well-->
<?php
   include 'connection.php';
   session_start();
   $page='contact';
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
    <link rel="stylesheet" href="css/contact.css">


    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- Title -->
    <title>Contact</title>
  </head>
  <body>


<!-- Navigation bar ------------------------------------->
<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img src="images/icon.png" width="18%" height="30%" alt="Icon">News4U</a>

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Navigation Bar when user is login -->
<?php
    if(isset($_SESSION['login_user']))
    {
?>
         <div class="collapse navbar-collapse" id="menu">
           <ul class="navbar-nav ml-auto">

             <li class="nav-item">
               <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"><span class="fa fa-home fa-sm"></span> Home</a>
             </li>

            <!-- Dropdown -->
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <span class="fa fa-user fa-sm"></span> <?php echo $_SESSION['login_user'] ?>
                 </a>
               <div class="dropdown-menu" style="background-color:#f8efd4; font-size: 80%;" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item <?php if($page=='publish'){echo 'active';}?>" href="publish.php"><span class="fa fa-upload fa-sm"></span> Publish</a>
                   <a class="dropdown-item" href="update.php"><span class="fa fa-edit fa-sm"></span> Update</a>
                   <hr>
                   <a class="dropdown-item " href="logout.php"><span class="fa fa-sign-out-alt fa-sm"></span> LogOut</a>
              </div>
            </li>

            <li class="nav-item">
               <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php"><span class="fa fa-info fa-sm"> About</a>
            </li>

            <li class="nav-item">
               <a class="nav-link <?php if($page=='contact'){echo 'active';}?>" href="contactus.php"><span class="fa fa-address-card fa-sm"></span> Contact Us</a>
            </li>


           </ul>
         </div>

<!-- Without the login -->
<?php
  }
   else {
?>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"><span class="fa fa-home fa-sm"></span> Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php"><span class="fa fa-info fa-sm"> About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link <?php if($page=='contact'){echo 'active';}?>" href="contactus.php"><span class="fa fa-address-card fa-sm"></span> Contact Us</a>
              </li>

            </ul>

        </div>
<?php
}
?>

  </nav>
</header>


<!--- Contact-us Form ------------------------------>
<section  id="contact">
    <div class="container-fluid">
        <h1>Get In Touch!</h1>


<!-- With login -->
<?php if(isset($_SESSION['login_user']))
{
?>

    <form class="" action="contactus.php" method="post">

        <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-user text-info"></i> </span>
            </div>
            <input name="username" class="form-control" placeholder="User name" type="text" value="<?php echo $_SESSION['login_user'] ?>" required>
        </div>


        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope text-info"></i> </span>
            </div>
            <input name="email" class="form-control" placeholder="Email address" type="email" value="<?php echo $_SESSION['login_email'] ?>" required>
        </div>


       <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone text-info"></i> </span>
            </div>
            <input name="phone" class="form-control" placeholder="Phone-Number" type="tel"  pattern="[0-9]{10}" required value="<?php echo $_SESSION['login_phone']?>">
       </div>


       <div class="form-group input-group">
           <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-comment text-info"></i> </span>
           </div>
           <textarea name="message" rows="2" cols="25" placeholder="  Message"></textarea>
       </div>

       <input type="submit" class="btn btn-primary btn-block" name="submit" value="Send Message">
    </form>


<!-- Without login -->
<?php
}
else{
       ?>
       <form class="" action="contactus.php" method="post">


         <div class="form-group input-group">
           <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fa fa-user text-info"></i> </span>
           </div>
           <input name="username" class="form-control" placeholder="User name" type="text">
         </div>


         <div class="form-group input-group">
           <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fa fa-envelope text-info"></i> </span>
           </div>
           <input name="email" class="form-control" placeholder="Email address" type="email">
         </div>


         <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-phone text-info"></i> </span>
              </div>
              <input name="phone" class="form-control" placeholder="Phone-Number" type="tel"  pattern="[0-9]{10}" required>
         </div>


         <div class="form-group input-group">
           <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fa fa-comment text-info"></i> </span>
           </div>
           <textarea name="message" rows="2" cols="25" placeholder="  Message"></textarea>
         </div>
        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Send Message">
       </form>

     <?php
       }
      ?>
  </div>
</section>

<hr>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5">
                <h5>Our Address</h5>
                <address>
              <i class="fa fa-map-marker-alt fa-lg"></i>: 121, Adarsh Colony Road<br>
              Hanuman Nagar, Patna<br>
              Bihar<br>
              <i class="fa fa-phone fa-lg"></i>: +9193 0496 1248<br>
              <i class="fa fa-fax fa-lg"></i>: +9195 3436 0333<br>
              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:news4u@gmail.com">news4u@gmail.com</a>
           </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center">
                    <a class="footer-link" href="https://www.linkedin.com/in/vikash-singh-a19158187/"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a class="footer-link" href="https://github.com/manutvikash"><i class="git fab fa-github fa-2x"></i></a>
                    <a class="footer-link" href="https://www.facebook.com/" ><i class="facebook fab fa-facebook fa-2x"></i></a>
                    <a class="footer-link" href="https://www.instagram.com/manut_vikash_50/"><i class="insta fab fa-instagram fa-2x"></i></a>
                    <a class="footer-link" href="mailto:manutdrick@gmail.com"><span class="fa fa-2x fa-envelope"></span></a>
                </div>
            </div>
       </div>
       <hr>
       <div class="row justify-content-center">
            <div class="col-auto">
                <p>© Copyright Reserved with News4U 2020</p>
            </div>
       </div>
    </div>
</footer>



<!-- JavascriptTags -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- PHP -->
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $query=mysqli_query($connect,"INSERT INTO `contact` (`username`, `email`, `message`) VALUES ('$name', '$email', '$message')");
  if($query)
  {
?>

<script type="text/javascript">
  alert("Message has been send!");
</script>

<?php
}
else{
?>

<script type="text/javascript">
  alert("Error sending the message");
</script>

<?php
  }
}
?>





  </body>
</html>
