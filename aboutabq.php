<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=.7, minimum-scale=.7, maximum-scale=.7">
  <title>oneabq</title>
  <PHP><link rel="stylesheet" type="text/css" href="newsletter.css"><PHP>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="aboutabq.css?v=<?php echo time(); ?>">
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
      <li><font color="red"><a style=font-size:15px;>About</font></li>
      <li><a href="priorities.php" style=font-size:15px;>Initiatives</a></li>
      <li><a href="sponsorspage.php" style=font-size:15px;>Sponsors</a></li>
      <li><a href="outcomes.php" style=font-size:15px;>Outcomes</a></li>
      <a href="donate.php"><button class="buttonDonate">Donate</button></a>
      <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
    </ul>
  </div>
      </nav>
    </header>
  </div>
  <div class= "aboutVid">
    <video src="aboutVid.mp4" type="video/mp4" controls width="100%" poster="about-video-thumbnail.png"></video>
  </div>
  <div class="aboutABQ">
    <?php perch_content('splashImage'); ?>
  <div class="text">
    <?php perch_content('splashText'); ?>
  </div>
  </div>
  <div class="board">
    <h1><b>Board Of Directors</b></h1>
  <div class="charles container-fluid"> 
    <div class="row">
      <div class="col-md-4">
        <img src="charles-headshot.png" class="charlesPic">
      </div>
      <div class="col-md-8">
        <div class="info">
          <h5><b>CHARLES ASHLEY III</b></h5>
          <h5><em>President</em></h5>
        </div>
      <div class="pSpace">
        <p>
          Charles is President & Founder of Cultivating Coders, a New Mexico based<br>
          company that provides training and curriculum in web and mobile application<br>
          development to K-12 schools in tribal, rural and overlooked urban areas.<br>
          Charles is equal parts successful businessman and compassionate community<br>
          advocate. He is the type of person who can identify a better way to do<br>
          something and execute on it. For this reason, he’s hopeful that his passion for<br>
          educational opportunity, combined with his business acumen, can contribute<br>
          to the positive growth in Albuquerque.
        </p> 
      </div>
      </div>
    </div>
  </div>
  <div class="drew container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img src="drew-headshot.png" class="drewPic">
      </div>
      <div class="col-md-8">
        <h5><b>DREW DOLAN</b></h5>
        <h5><em>Vice President & Treasurer</em></h5>
      <div class="pSpace2">
        <p>
          Drew is a real estate investment and development professional with twenty<br>
          years of experience raising capital contributions, acquisitions, project design<br>
          and construction, and securing permanent financing from local and national<br>
          lending institutions. Drew manages investment structure, investor relations,<br>
          and debt/equity procurement for Titan Development Real Estate Fund I.<br>
          Drew has also championed a growing self-storage portfolio by establishing <br>
          a strategic relationship with Extra Space Storage. Through Drew’s broad<br>
          network of business and philanthropic relationships, he hopes to bring<br>
          together those who believe in maximizing Albuquerque’s potential.<br>
        </p>
      </div>
      </div>
    </div>
  </div>
  <div class="pilar container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img src="pilar-headshot.png" class="pilarPic">
      </div>
      <div class="col-md-8">
        <h5><b>PILAR WESTELL</b></h5>
        <h5><em>Secretary</em></h5>
      <div class="pSpace3">
        <p>
          Pilar, a proud native New Mexican, is passionate about her community. She has<br>
          had the deep pleasure for the last six years of owning and operating her own<br> 
          business, a prominent coffee shop with two locations in downtown<br>
          Albuquerque named Zendo. Pilar believes, from experience, that her<br> 
          community, her family, and her staff together create that unshakeable<br>
          structure. She looks forward to contributing to her community, this amazing<br>
          place she calls home, through her participation in COAF’s operation.<br>
        </p>
      </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="fill">
    <div><br><br><br><br><br><br></div>
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
          <pre>+1.505.633.6813</pre>
          stevefitzer@onealbuquerque.org<br>
          PO BOX 25125
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
