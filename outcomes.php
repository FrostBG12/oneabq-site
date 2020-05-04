<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=.7, minimum-scale=.7, maximum-scale=.7">
  <title>oneabq sponsors</title>  
  <PHP><link rel="stylesheet" type="text/css" href="outcomes.css."><PHP>
  <link rel="stylesheet" href="outcomes.css?v=<?php echo time(); ?>">
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
                        <li class="activeNav"><a href="sponsorspage.php"style=font-size:15px>Sponsors</a></li>
                        <li class="activeNav"><a href="outcomespage.php"style=font-size:15px><font color="red";>Outcomes</font></a></li>
                        <li><a href="contactpage.php" style=font-size:15px>Contact</a></li>
                        <a href="donate.php"><button class="buttonDonate">Donate</button></a>
                       
                        
                     </ul>
                    </div>
                  </nav>
                </header>
              </div>
            </div>

              <div class="outcomeSplash" style="background-image:url(<perch:content type="image">);">
                <?php perch_content('splashHeading') class="outcomeHead"; ?>
              <?php perch_content('splashText') class="splashtext2"; ?>
        
            </div>

            <div class ="outcomes container-fluid">
             
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                    <div class="houseIcon">
                  
                    <?php perch_content('firstOutcomeIcon') class="icons"; ?>
                    </div>

                      <?php perch_content('firstOutcomeHeading'); ?>
                    
                      <?php perch_content('firstOutcomeText'); ?>
                    
                    </div>
                  
                    <div class="col-md-5"> 
                      <div class="workIcon">
                      <?php perch_content('secondOutcomeIcon'); ?>
                    </div>
                    <?php perch_content('secondOutcomeHeading'); ?>
                    
                    <?php perch_content('secondOutcomeText'); ?>
              
                    </div>
                    
              
             
                <div class="outcomes container-fluid">
              
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                  <?php perch_content('thirdOutcomeIcon') class="icons" height="80px" width="80px"; ?>
                
                    <?php perch_content('thirdOutcomeHeading'); ?>
                    <?php perch_content('thirdOutcomeText'); ?>
                    
                  </div>
                  
              
                  <div class="col-md-5">
                    <div class="policeIcon">
                  <?php perch_content('fourthOutcomeIcon) height="80px" width="80px" class="icons"; ?>
                </div>
                  <?php perch_content('fourthOutcomeHeading'); ?>
                      <?php perch_content('fourthOutcomeText'); ?>
                          </div>
                    </div>
                  </div>
                  
                           </div>
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
<a href="oneabqhome.php"><p><b>Home</b></p></a>
<p><b>About</b></p>
<a href="priorities.php"><p><b>Initiatives</b></p></a>
<a href="sponsorspage.php"><p><b>Sponsors</b></p></a>
<a href=""><p><b>Outcomes</b></p></a>
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
