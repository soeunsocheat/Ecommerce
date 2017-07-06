<?php
 if(isset($_POST['newnote'])){
  header('Location: index.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecommerce</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/full-slider.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" style="background-color: white; color: black"><b>Khmer Computer</b></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="MSI.php" style=> MSI </a></li>
          <li><a href="MacBook.php"> MacBook </a></li>
          <li><a href="DELL.php"> Dell </a></li>
          <li><a href="ASUS.php"> Asus </a></li>
        </ul>
        <form class="navbar-form navbar-left" action="search.php" method="post">
            <div class="input-group" style="width: 200px">
              <div style="float: left;">
                  <input type="text" class="form-control" name="search" placeholder="Search" style="width: 200px">
              </div>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <a href="search.php">
                  <i class="glyphicon glyphicon-search"></i>
                  </a>
                </button>
              </div>
            </div>  
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#contact">Contact</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li style="margin-right: 80px;margin-top: 0px">
              <a href="#" data-toggle="modal" data-target="#LogIn" data-whatever="@mdo">
                <img src="img\upload\user.png" class="img-circle person" width="30" height="30">
              </a>
            </li>
        </ul>
      </div>
    </nav>
     <!-- Comfirm E-mail -->
    <form enctype="multipart/form-data" name="registerForm" method="post" action="viewer.php">
      <div class="modal fade" id="LogIn" tabindex="-1" role="dialog" aria-labelledby="LogInLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background: gray">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h3 align="center" style="color: white">E-mail</h3>
            </div>
            <div align="center">
              <form><br>
                <div align="center">
                  <input type="text" name="mail"  placeholder="E-mail" style="width: 50%">
                </div><br>
                <div align="center">
                  <input type="password" name="password"  placeholder="Password" style="width: 50%">
                </div><br>
              </form>
            </div>
            <div class="modal-footer">
              <button name = "registerForm" type="submit" class="btn btn-primary" >Comfirm</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <br>
    <br>
    <header id="myCarousel" class="carousel slide" style="width: 100%; height: 125%">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <a href="MSI.php">
                  <div class="fill" style="background-image:url('img/msi/MSI.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>MSI</h2>
                  </div>
                </a>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <a href="MacBook.php">
                  <div class="fill" style="background-image:url('img/mac/MAC.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>MacBook</h2>
                  </div>
                </a>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <a href="DELL.php">
                  <div class="fill" style="background-image:url('img/dell/DELL.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>DELL</h2>
                  </div>
                </a>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <a href="ASUS.php">
                  <div class="fill" style="background-image:url('img/asus/ASUS.jpg');"></div>
                  <div class="carousel-caption">
                      <h2>ASUS</h2>
                  </div>
                </a>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

                     <!-- About -->
        <div id="about" class="container-fluid text-center" style="padding: 60px 50px">
            <h2>About Us</h2>
            <h4>The students make this webesite</h4><br><br>
            <div class="row">
              <div class="col-sm-3">
                <p class="text-center"><strong>SOEUN Socheat</strong></p><br>
                <a href="#demo" data-toggle="collapse">
                  <img src="img\us\Socheat.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo" class="collapse">
                  <br><p>Member Maker</p>
                  <p>ID : e20130717</p>
                </div>
              </div>
              <div class="col-sm-3">
                <p class="text-center"><strong>SON Chanmuney</strong></p><br>
                <a href="#demo2" data-toggle="collapse">
                  <img src="img\us\muney.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo2" class="collapse">
                  <br><p>Member Maker</p>
                  <p>ID : e20130737</p>
                </div>
              </div>
              <div class="col-sm-3">
                <p class="text-center"><strong>VUN bunvath</strong></p><br>
                <a href="#demo3" data-toggle="collapse">
                  <img src="img\us\bunvath.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo3" class="collapse">
                  <br><p>Member Maker</p>
                  <p>ID : e20130911</p>
                </div>
              </div>
              <div class="col-sm-3">
                <p class="text-center"><strong>SOUM Som On</strong></p><br>
                <a href="#demo4" data-toggle="collapse">
                  <img src="img\us\Somon.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo4" class="collapse">
                  <br><p>Member Maker</p>
                  <p>ID : e20130757</p>
                </div>
              </div>
            </div>
        </div>
        <br>
        <!-- Services -->
        <div id="services" class="container-fluid text-center" style="padding: 60px 50px; background-color: gray">
          <h2>SERVICES</h2>
          <h4>What we offer</h4>
          <br>
          <div class="row slideanim">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-off logo-small"></span>
              <h4>POWER</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-heart logo-small"></span>
              <h4>LOVE</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-lock logo-small"></span>
              <h4>JOB DONE</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
          </div>
          <br><br>
          <div class="row slideanim">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-leaf logo-small"></span>
              <h4>GREEN</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-certificate logo-small"></span>
              <h4>CERTIFIED</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-wrench logo-small"></span>
              <h4 style="color:#303030;">HARD WORK</h4>
              <p>Lorem ipsum dolor sit amet..</p>
            </div>
          </div>
        </div>
        <br>
                <!-- Contact -->
        <div id="contact" class="container-fluid" style="padding: 60px 50px">
          <h2 class="text-center">CONTACT</h2>
          <div class="row">
            <div class="col-sm-5">
              <p>Contact us and we'll get back to you within 24 hours.</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
              <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
              <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
            <div class="col-sm-7 slideanim">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- Add Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31270.029650425986!2d104.88003706151555!3d11.569505918141743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951725d8c4835%3A0x2047e2df9364f385!2sKhan+Tuol+Kouk%2C+Phnom+Penh!5e0!3m2!1sen!2skh!4v1487873187870" width="80%" height="500" frameborder="0" style="border:0; margin-left: 10%" allowfullscreen></iframe>
    <br> 
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <p>&copy; I4 GIC 2017</p>
            </div>
        </div>
    </footer>

    </div>
    <!-- Script to Activate the Carousel -->
     <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
    <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src = "js/masonry.js"> </script>
</body>
</html>