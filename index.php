<!-- Including the database to the php file and session function as well-->
<?php
   session_start();
   include 'connection.php';
   $page='home';

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
  <link rel="stylesheet" href="css/new.css">


  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700">
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Title -->
  <title>Home</title>
</head>

<body>



  <!-- Navigation bar -->
  <header id="Head">
    <div class="container-fluid" style="height:580px;">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php"><img src="images/icon.png" width="18%" height="30%" alt="Icon">News4U</a>

        <!-- Toggler button -->
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
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="fa fa-user fa-sm"> </span> <?php echo $_SESSION['login_user'] ?>
                 </a>
                 <div class="dropdown-menu" style="background-color:#f8efd4; font-size: 80%;" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="publish.php"><span class="fa fa-upload fa-sm"></span> Publish</a>
                    <a class="dropdown-item" href="update.php"><span class="fa fa-edit fa-sm"></span> Update</a>

                    <hr>
                  <a class="dropdown-item" href="logout.php"><span class="fa fa-sign-out-alt fa-sm"></span> LogOut</a>

             </div>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="about.php"><span class="fa fa-info fa-sm"> About</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-sm"></span> Contact Us</a>
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
              <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php"><span class="fa fa-info fa-sm"></span> About</a>
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


     <!-- Heading during session -->
     <!-- Use of grids of bootstrap  -->
      <?php
      if(isset($_SESSION['login_user']))
      {

       ?>
      <div class="row">
         <div class="col-lg-6">
             <h1>Welcome to the world of news</h1>
             <hr>
         </div>

       <!-- Heading without session -->
<?php
 }
 else {
?>
        <div class="row">
           <div class="col-lg-6">
             <h1>Welcome to the world of news</h1>
             <hr>

             <a href="login.php" class="btn btn-lg btn-light">LogIn</a>
             <a href="registration.php" class="btn btn-lg btn-dark">Register Here!</a>
           </div>
<?php
 }
?>


           <div class="col-lg-6">
                <h2>Spread awareness about your surrounding and make people enlighten with there locality.</h2>
           </div>

        </div>
      </div>
    </div>
</header>




<?php
     if(isset($_SESSION['login_user'])){
?>

<!-- Features of the Website-->

<section id="features">
  <div class="container">
    <div class="row">
      <div class="feature-box col-lg-4">
        <i class="icon fa fa-check-circle fa-4x" aria-hidden="true"></i>
        <h3 class="feature-title">Get Updated</h3>
        <p>Surrounding matters a lot. </p>
      </div>
      <div class="feature-box col-lg-4">
        <i class="icon fa fa-globe fa-4x" aria-hidden="true"></i>
        <h3 class="feature-title">Share! Everything You know</h3>
        <p>Local-International news all are here!!</p>
      </div>
      <div class="feature-box col-lg-4">
        <i class="icon fa fa-headphones fa-4x" aria-hidden="true"></i>

        <h3 class="feature-title">Listen News</h3>
        <p>Listen to every news just press PLAY button and enjoy the positive vibes.</p>
      </div>
    </div>
  </div>
</section>


<!-- Carousel -->
  <div class="caro">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="text-align:center;">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
     <div class="carousel-inner">


        <div class="carousel-item active">
             <img class="d-block w-100" style="height:550px;" src="https://www.indesignlive.sg/wp-content/uploads/2018/11/Minimalism_Olafur-Eliasson_Room-for-one-colour.jpg"
               alt="First slide">
             <div class="carousel-caption d-block d-md-block" style="backdrop-filter:blur(10px); background-color:rgba(255,255,255,0.3); border-radius: 30px;">
                   <h3>Minimum words and easy to understand</h3>
             </div>
        </div>


        <div class="carousel-item">
           <img class="d-block w-100" style="height:550px;" src="https://a.espncdn.com/photo/2017/0302/r182700_2_1296x864_3-2.jpg" alt="Second slide">
           <div class="carousel-caption d-block d-md-block" style="backdrop-filter:blur(10px); background-color:rgba(255,255,255,0.3); border-radius: 30px;">
                 <h3>Positive News!!</h3>
                 <p>Every news and updates here are positive and we try our best that you learn a thing or two here.</p>
           </div>
       </div>


        <div class="carousel-item">
           <img class="d-block w-100" style="height:550px;" src="https://www.soundguys.com/wp-content/uploads/2018/09/kids-headphones-subway.jpg" alt="Third slide">
           <div class="carousel-caption d-block d-md-block" style="backdrop-filter:blur(10px); background-color:rgba(255,255,255,0.3); border-radius: 30px;">
              <h3>Spread positivity!!</h3>
              <p>Learn about latest tech. and latest things happening around the globe in terms of Development.</p>
           </div>
       </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- News Of the day -->
<section id="news">
<div class="container">
  <h2 class="section-heading">News of the Day!!</h2>
  <p>Simple and understandable for childrens.</p>

  <div class="row">
    <div class=" news-column col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Oxford COVID Vaccine</h3>
        </div>
        <div class="card-body">
          <img src="images/virus.jpg" style="height: 200px; max-width:80%; padding-bottom:5%;"alt="Vaccine">
          <p>Team of scientists at Oxford Vaccine Group (Department of Paediatrics) and Oxford University’s Jenner Institute working
            on the discovery of a safe, effective and accessible vaccine against coronavirus have come out with the trial results
            that the world was waiting for.</p>
        </div>
      </div>
    </div>

    <div class="news-column col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Largest Urban Rooftop Farm- Paris</h3>
        </div>
        <div class="card-body">
          <img src="images/farm.jpg" style="height: 200px; max-width:80%; padding-bottom:5%;"alt="Farm">
          <p>Getting fresh produce into the heart of a major city used to be done by a  polluting trucks—now it’s a matter of
            bringing it down from the roof. It uses vertical growing techniques
             to create fruits and vegetables right in the center of Paris without the use of pesticides, refrigerated trucks,
             chemical fertilizer.</p>


        </div>
      </div>
    </div>

    <div class="news-column col-lg-6 ">
      <div class="card">
        <div class="card-header">
          <h3>Eliminate Plastic</h3>
        </div>
        <div class="card-body">
          <img src="images/plastic.jpg" style="height: 250px; max-width:90%; padding-bottom:2%;"alt="Plastic">
          <p>Inspired by countless nights spent studying in school, an eco-conscious college grad has come up with an ingenious replacement for the
            single-use plastics used to package instant ramen noodles. Holly Grounds, who
            studied product design at Ravensbourne University London, is responsible for developing an edible, spiced packaging film for instant noodles. </p>
        </div>
      </div>
    </div>

    <div class="news-column col-lg-6 ">
      <div class="card">
        <div class="card-header">
          <h3>Giant Floating Balloons</h3>
        </div>
        <div class="card-body">
          <img src="images/balloon.jpg" style="height: 280px; max-width:90%; padding-bottom:2%;"alt="Balloon">
          <p>Some of the most remote parts of Kenya will be showered with internet connectivity thanks to a fleet of giant balloons deployed by Google.
            The tech company’s Loon Project will be using large airborne balloons that are in constant motion to broadcast mobile
            internet at download speeds of up to 18.9 mbps.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

<?php
  }
?>





<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

          <!-- Links -->
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./contactus.php">Contact Us</a></li>
                    <br>

                    <li><a href="#">Back to Top</a></li>
                </ul>
            </div>

            <!-- Address -->
            <div class="col-7 col-sm-5">
                <h5>Our Address</h5>
                <address>
            <i class="fa fa-map-marker-alt fa-lg"></i>:  121, Adarsh Colony Road<br>
                                                          Hanuman Nagar, Patna<br>
                                                          Bihar<br>
              <i class="fa fa-phone fa-lg"></i>: +9193 0496 1248<br>
              <i class="fa fa-fax fa-lg"></i>: +9195 3436 0333<br>
              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:news4u@gmail.com">news4u@gmail.com</a>
           </address>
            </div>

            <!-- Social media Links -->
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

       <!-- Copyright -->
       <div class="row justify-content-center">
            <div class="col-auto" style="text-align:center">
                <p>© Copyright Reserved with News4U 2020</p>
            </div>
       </div>
    </div>
</footer>





  <!-- JavascriptTags  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
