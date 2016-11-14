<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>WESC - Water & Electricity Saving Consultants</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <header>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/WESC_Logo.png" alt="Company Logo">
                </div>
                <div class="col-md-6"></div>
            </div>
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">WESC Energy</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="index.html">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="carwash.html">Carwash Machines</a></li>
                      <li><a href="recycling.html">Water Recycling</a></li>
                      <li><a href="cleaning_oil_seperators.html">Cleaning of Oil Seperators</a></li> 
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact Us</a></li> 
                </ul>
              </div>
            </nav>
        </header>
        
        
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-3 col-sm-3">
                        <!--<div id="map" style="width:100%;height:400px"></div>
                        <script>
                        function myMap() {
                          var mapCanvas = document.getElementById("map");
                          var mapOptions = {
                            center: new google.maps.LatLng(-33.75, 19), 
                            zoom: 12
                          }
                          var map = new google.maps.Map(mapCanvas, mapOptions);
                        }
                        </script>

                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCE4TfvI_VhMaJ-l-25e97s_mLbxJ-pczI&callback=myMap"></script>
                        -->
                    </div>
                    <div class="col-xs-9 col-sm-9">
                        <p><b>Phone Number</b>:<br> 076 880 2512</p>
                        <p><b>Email</b>:<br> wescenergy@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        
        <?php
            if($_GET){
                if (isset($_GET['error'])) {
                    echo  ' <div class="row">
                                <div class="col-md-4 col-md-push-4">
                                    <div class="alert alert-danger fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        '.$_GET['error'].'
                                    </div>
                                </div>
                            </div>';
                } else if (isset($_GET['success'])) {
                    echo  ' <div class="row">
                                <div class="col-md-4 col-md-push-4">
                                    <div class="alert alert-success fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        '.$_GET['success'].'
                                    </div>
                                </div>
                            </div>';
                }
            } else {
                echo '<br><br><br>';
            }
        ?>
        
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <div class="row">
                  <form action="contact-form.php" name="contact" method="post">
                      <div class="form-group">
                        <label for="name">Full Name*:</label>
                        <input required type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="number">Contact Number:</label>
                        <input type="text" class="form-control" id="number" name="number">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address*:</label>
                        <input required type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="message">Message*:</label>
                          <textarea required cols="5" rows="7" class="form-control" id="message" name="message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-overwrite">Submit</button>
                    </form> 
                </div>
            </div>
            <div class="col-xs-4"></div>
        </div>
        
        <br><br><br>
        
        <footer>
            <div class="row footer-row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6">
                    <p class="footer-text">&copy 2000-2016 WESC - Water & Electricity Saving Consultants <br> All rights Reserved.  <br> </p>
                </div>
                <div class="col-xs-3"></div>
            </div>
        </footer>
    </body>
</html>
