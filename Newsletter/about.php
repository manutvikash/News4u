
<!-- Including the database to the php file and session function as well-->
<?php
session_start();
include 'connection.php';
$page='about';
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
  <link rel="stylesheet" href="css/about.css">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700">
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Title -->
  <title>About us</title>
</head>

<body>



  <!-- Navigation bar -->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img src="images/icon.png" width="18%" height="25%" alt="Icon">News4U</a>
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
                    <a class="dropdown-item <?php if($page=='update'){echo 'active';}?>" href="update.php"><span class="fa fa-edit fa-sm"></span> Update</a>
                    <hr>
                    <a class="dropdown-item" href="logout.php"><span class="fa fa-sign-out-alt fa-sm"></span> LogOut</a>

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


  <!-- Aboutus -->
  <section id="aboutus">
    <div class="container-fluid">
      <div class="aboutus">
        <h2 class="aboutus-title">About Us</h2>
        <p class="aboutus-text">We are aiming to start a positive news and media company for kids. Just imagine how does a 10 year old kid would look at the world if he is seeing news tv channels 24x7 with his family everyday.
           There are riots, pandemic, encounters, suicides and youtube is filled with objectionable content so a question arises do our kids really need to see all this? Yes,
           they do need to understand the concept of poverty, depression and pandemic but we don't need to bombard them with all the negative news and Indian parents also don't have an option these channels,
           newspapers and twitter are the only source for their updates and news.
       </p>

        <p>So we want to solve this problem, in simple words: We want to build a positive platform for kids to learn new things and see that this world is not bad at all, good things happen everyday here.
           Most kids can hardly read so we have also attached listen news feature with each article and speed of the audio can also be changed.
        </p>


      </div>
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
                      <li><a href="#">About</a></li>
                      <li><a href="./contactus.php">Contact Us</a></li>
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




  <!-- JavascriptTags-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

</html>
