<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <PHP><link rel="stylesheet" type="text/css" href="priorities.css"><PHP>
  <link rel="stylesheet" href="priorities.css?v=<?php echo time(); ?>">
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
              <li class="activeNav"><a href="priorities.php" style=font-size:15px;><font color="red";>Initiatives</font></a></li>
              <li><a href="sponsorspage.php" style=font-size:15px;>Sponsors</a></li>
              <li><a href="outcomes.php" style=font-size:15px;>Outcomes</a></li>
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
              <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>

              

           </ul>
          </div>
        </nav>
      </header>
    </div>
    <div class="splashPage" style="background-image:url(<perch:content type="image">)">
    <?php perch_content('splashHeading') class="heading"; ?>
<?php perch_content('splashText') class="text"; ?>
    </div>
    <div class="campaign">
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="police-icon.png" class="policeIcon">
                <?php perch_content('slide1Heading') class="heading2"; ?>
                <?php perch_content('slide1Text') class="text2"; ?>
            </div>
          
            <div class="mySlides">
                <img src="school-icon.png" class="school-icon">
                <?php perch_content('slide2Heading') class="heading2"; ?>
                <?php perch_content('slide2Text') class="text2"; ?>
                
            </div>
          
            <div class="mySlides">
                <img src="work-icon.png" class="work-icon">
                <?php perch_content('slide3Heading') class="heading2"; ?>
                <?php perch_content('slide3Text') class="text2"; ?>
            </div>

            <div class="mySlides">
                <img src="handhouse-icon.png" class="handhouse-icon">
                <?php perch_content('slide4Heading') class="heading2"; ?>
                <?php perch_content('slide4Text') class="text2"; ?>
             </div>
          
            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          
          <!-- Dots/bullets/indicators -->
          <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>
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
<a href="oneabqhome.html"><p><b>Home</b></p></a>
<p><b>About</b></p>
<a href="priorities.php"><p><b>Initiatives</b></p></a>
<a href="contactpage.php"><p><b>Sponsors</b></p></a>
<a href="contactpage.php"><p><b>Outcomes</b></p></a>
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
