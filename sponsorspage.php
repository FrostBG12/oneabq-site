<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=.7, minimum-scale=.7, maximum-scale=.7">
  <title>oneabq sponsors</title>
  <PHP><link rel="stylesheet" type="text/css" href="sponsorspage.css"><PHP>
  <link rel="stylesheet" href="sponsorspage.css?v=<?php echo time(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="navBar">
    <header>
      <nav> 
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
            <div class="oneabqlogo">
              <a href="oneabqhome.php"><img src="abqhoriz.png" class="logo"></a>
            </div>
                <div class="menu">
                  <ul>
                    <li><a href="aboutabq.php" style=font-size:15px;>About</a></li>
                    <li><a href="priorities.php" style=font-size:15px;>Initiatives</a></li>
                    <li class="activeNav"><a href="sponsorspage.php"style=font-size:15px><font color="red";>Sponsors</font></a></li>
                    <li><a href="outcomes.php" style=font-size:15px>Outcomes</a></li>
                    <a href="donate.php"><button class="buttonDonate">Donate</button></a>
                    <li><a href="contactpage.php" style=font-size:15px>Contact</a></li>
                  </ul>
                </div>
        </nav>
    </header>
  </div>
  <div class="sponsorSplash">
    <?php perch_content('splashHeading') class="sponsHead"; ?>
    <?php perch_content('splashText') class="splashText"; ?>
  </div>
  <div class="sponsorLogos">
                   <center>
                    <perch:content class="logo" type="image" label="Logo1">
                    <perch:content class="logo" type="image" label="Logo2">
                    <perch:content class="logo" type="image" label="Logo3">
                    <perch:content class="logo" type="image" label="Logo4">
                      
                
                    <perch:content class="logo" type="image" label="Logo5">
                    <perch:content class="logo" type="image" label="Logo6">
                    <perch:content class="logo" type="image" label="Logo7">
                    <perch:content class="logo" type="image" label="Logo8">
              
                    <perch:content class="logo" type="image" label="Logo9">
                    <perch:content class="logo" type="image" label="Logo10">
                    <perch:content class="logo" type="image" label="Logo11">
                    <perch:content class="logo" type="image" label="Logo12">
                  
                
                    <perch:content class="logo" type="image" label="Logo13">
                    <perch:content class="logo" type="image" label="Logo14">
                    <perch:content class="logo" type="image" label="Logo15">
                    <perch:content class="logo" type="image" label="Logo16">
                 
                  </center> 

                  
                </div>

              
                <div class="footer">

<div style="border-left: solid black; height: 81.5%; margin-left: -10px;">


<div class="row">
<div class="col-md-4">

<div class="contactUs">

<p><b>CONTACT US</b></p>
</div>
<div class="contactUs2">
<p style="line-height:1.2"><b>Steve Fitzer, Development Director<br></b>
+1.505.633.6813<br>
stevefitzer@onealbuquerque.org<br>
PO BOX 25125<br>
Albuquerque NM 87125-5125</p>
</div>
</div>

<div class="col-md-4 , footerLogo" >
<img src="abqhoriz2.png" class="footerLogo"> 
</div>
<div class="col-md-4 , links">
<a href="oneabqhome.php"><p><b>Home</b></p></a>
<a href="aboutabq.php"><p><b>About</b></p>
<a href="priorities.php"><p><b>Initiatives</b></p></a>
<a href="sponsorspage.php"><p><b>Sponsors</b></p></a>
<a href="outcomes.php"><p><b>Outcomes</b></p></a>
<a href="donate.php"><p><b>Donate</b></p></a>
<a href="contactpage.php"><p><b>Contact</b></p></a>
</div>
</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 , rights">
<p>2019 City of Albuquerque Foundation| All Rights Reserved | The offical website for the One Albuquerque Fund</p>
</div> 
<div class="col-md-2"></div>
</div>
</div>

<script src="oneabq.js"></script>
  </body>
  </html>

