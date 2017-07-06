<!DOCTYPE html>
<html>
<head>
	<title>ASUS</title>
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
          <a class="navbar-brand" href="index.php"><b>Khmer Computer</b></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="MSI.php"> MSI </a></li>
          <li><a href="MacBook.php"> MacBook </a></li>
          <li><a href="DELL.php"> Dell </a></li>
          <li><a href="ASUS.php" style="background-color: white; color: black"> Asus </a></li>
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
      <div class="modal fade" id="LogIn" tabindex="-1" role="dialog" aria-labelledby="SingUpLabel" aria-hidden="true">
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
            <div class="item">
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
            <div class="item active">
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
 	  <br> 
   	<hr>
    <div class="container">
     <?php
    require_once ("confi.php");
    $sql = "select * from eco where TYPE = 'Asus'";
    $result = $conn->query($sql);
      while ($row = $result->fetch_object()){
          ?>
            <div class="col-md-4" align="center">
              <h1 style="background-color: black; color: white"><?=$row->NAME ?></h1>
              <a href="#" data-toggle="modal" data-target="#<?=$row->ID?>" data-whatever="@mdo">
                <img height="300" width="300" src="img\<?=$row->IMAGE ?>">
              </a>
              <h3 style="background-color: black; color: white">Price : <?=$row->Prince?>$</h3><br><hr>
            </div>
            <form enctype="multipart/form-data" name="registerForm" method="post" action="payment.php">
              <div class="modal fade" id="<?=$row->ID ?>" tabindex="-1" role="dialog" aria-labelledby="LogInLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 700px; height: 550px">
                    <div class="modal-header" style="background: gray">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 align="center" style="color: white"><?=$row->NAME ?></h3>
                    </div>
                    <div>
                        <form><br>
                          <div class="col-md-6">
                            <img height="300" width="300" src="img\<?=$row->IMAGE ?>">
                            <h3 align="center">Price : <?=$row->Prince?>$</h3>
                          </div>
                          <div class="col-md-6">
                            <?php echo $row->DESCRIPTION?>
                          </div><br>
                      </form>
                    </div>
                    <div class="modal-footer" style="margin-top: 350px">
                      <button id="hello" name = "submit" type="submit" class="btn btn-primary" value='<?=$row->ID ?>'>Buy</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          <?php
      }
    ?>
    </div>
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