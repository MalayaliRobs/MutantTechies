<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/pic360.css">
        <script type="text/javascript" language="JavaScript" src="js/jquery-1.4.4.js"></script>
        <script type="text/javascript" language="JavaScript" src="js/pic360-1.0.0.js"></script>
    </head><body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="60" alt="Brand" src="..\..\..\..\Users\Robin Thomas\Documents\pingendo\logo\logo2.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Search</a>
                        </li>
                        <li>
                            <a href="#">Compare</a>
                        </li>
                        <li>
                            <a href="#">Custom Build</a>
                        </li>
                        <li>
                            <a href="#">360</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Heading</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
            <?php
            include "connect.php";
            $id=$_GET['PID'];
            $sql="select * from car360 where id=$id";
            $sqlco=mysqli_query($con,$sql); 
            $row=mysqli_fetch_assoc($sqlco);
            ?>
            
                <div class="PIC360">
                    <ul>
                    <?php for ($x = 1; $x <= 36; $x++) { ?>
                        <li>
                            <img width="700" height="525" src='images/<?php echo $row["image"] ?> (<?php echo $x; ?>).jpg'>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
       <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Heading</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Specs:</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="lead media-list">
              <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="icons\engine (1).svg" height="64" width="64"></a>
                <div class="media-body">
                  <h3 class="media-heading">
                    <u>POWER</u>
                  </h3>
                  <p>123</p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="icons\settings (1).svg" height="64" width="64"></a>
                <div class="media-body">
                  <h3 class="media-heading">
                    <u>TRANSMISSION</u>
                  </h3>
                  <p>125</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="media-list">
              <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="icons\oil (1).svg" height="64" width="64"></a>
                <div class="media-body">
                  <h3 class="media-heading">
                    <u>MILEAGE</u>
                  </h3>
                  <p class="lead">652</p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="icons\car-seat (1).svg" height="64" width="64"></a>
                <div class="media-body">
                  <h3 class="media-heading">
                    <u>SEATING CAPACITY</u>
                  </h3>
                  <p class="lead">487</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1>Overview</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Footer header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    

</body></html>