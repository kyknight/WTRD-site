<!-- contact form php -->
<?php

if ($_POST['submit']) {

  if (!$_POST['name']) {
    $error="<br/>- Please enter your name";
  }
  if (!$_POST['email']) {
    $error.="<br/>- Please enter your email";
  }
    if (!$_POST['subject']){
        $error.="<br/>- Please select a subject";
    }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter a message";
  }
  
  if ($error) {
    $result='<div class="alert alert-danger" role="alert"><i class="fa fa-times" aria-hidden="true"></i><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
  } else {
    mail("westtxrollerderby@gmail.com", "Contact message", "Name: ".$_POST['name']."
    Email: ".$_POST['name']."
    Message: ".$_POST['message']);
    
    {
    $result='<div class="alert alert-success" role="alert"><i class="fa fa-check" aria-hidden="true"></i>Thank you, We\'ll be in touch shortly</div>';
    }
  }


}

?>



<!DOCTYPE html>
<html>
<head>
  <title>WTRD</title>

  <meta charset="UTF-8"/>
  <!-- Viewport width set to device width for mobile. -->
    <link rel="stylesheet" href="./css/style.css" text="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css">

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Antic|Baloo Da|Bungee' rel='stylesheet' text='text/css'>

          <!-- browser icon -->
  <link rel="shortcut icon" href="./images/sugarSkull_favicon.png" type="image/x-icon" />

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img class="navLogo" src="http://i.imgur.com/P1q1lpy.png" title="source: imgur.com" /> West Texas Roller Derby</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="#top">About</a>
        <a class="nav-item nav-link" href="#schedule">Schedule</a>
        <a class="nav-item nav-link" href="#practice">Practices</a>
        <a class="nav-item nav-link" href="#ticket">Tickets</a>
        <a class="nav-item nav-link" href="#contact">Contact</a>
      </div>
    </div>
  </nav>

<!-- slideshow of action shots? -->
      <ul class="slideshow" id="wayUp">
          <li></li><!-- Brady -->
          <li></li><!-- Ally -->
          <li></li><!-- Real deal photography-->
          <li></li><!-- Real deal photography-->
          <li></li>
        </ul>

  <div class="clear"></div>

    <div class="container">
      <div id="top" class="row col col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 no-gutters">
        <!-- Humble Statement of how WTRD is more awesome than puppies serving you mimosas in tiny suits... -->
              <h3>Mission</h3>
                    <p>“...To provide athletic opportunities for women and recreational entertainment for the community while perpetuating the popularity of women’s flat track roller derby and the integrity of the league.”</p>
              

              <h3>WTRD</h3>
                    <p>The West Texas Roller Derby league began in 2007, known then as the West Texas Roller Dollz. WTRD officially changed their name in 2017. In the same year, WTRD began the process of becoming a non-profit organization.</p>
                    
                    <p>WTRD is a charity and community focused sports organization, which is skater owned and operated. WTRD is comprised of a diverse group of strong-minded, strong-spirited and strongly skilled women who love the sport of flat track roller derby and are determined to see it take a permanent hold in Lubbock. Our vision is to deliver a powerful and positive image to the South Plains Community.</p>


                      <!-- Google calander linked to westexasrollerderby@gmail.com -->
              <h3>Schedule</h3>
                  <div id="schedule" class="row col col-12">
                        <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23993399&amp;src=westtxrollerderby%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FChicago" style="border:solid 1px #777" width="100%" height="400" frameborder="0" scrolling="no" border-radius="10px"></iframe>
                  </div>

              <article><em>*Schedule is subject to change.</em></article>
                      <!-- Body End -->
      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="row col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 no-gutters">
        
                      		<!-- Ticket widget.... say that ten times fast -->
        <h4 id="ticket" class="col-sm-12">Tickets</h4>
            <div style="font-family:Helvetica, arial; display: inline-block; text-align: center;">
              	<a href="https://westtexasrollerderby.ticketleap.com/" style="background-color:#5f049f;font-size:15px;border-radius: 3px;-moz-border-radius:3px;-webkit-border-radius:3px;box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.15);display: inline-block;margin:0;text-align:center;text-decoration:none;font-weight:bold;color:#ffffff!important;letter-spacing: .07em;padding:18px 27px;font-family: arial,sans-serif !important;" target="_top">BUY TICKETS NOW</a><br/>
             	<div style="font-family:Helvetica, arial;font-style:italic;letter-spacing: 0.05em;font-size: 12px;margin-top:12px;color:rgba(0, 0, 0, 0.5);">
              		<a href="https://www.ticketleap.com/info/sell-tickets-online?rc=rad2o39" style="color:rgba(0,0,0,0.5);font-style:italic;">Sell tickets online</a> with Ticketleap
              	</div>
            </div>

        <!-- Practice location and times. Should also be on the calendar. -->
            <h4 id="practice" class="col-sm-12">Practices</h4>
                  <p>WTRD practices are held at <a href="https://goo.gl/maps/4uStVHJiJtz" target="_blank" title="Fiesta!">The Fiesta Event Center</a> at 1902 E 4th St, Lubbock, TX 79403.</p>
                  <p>Practices are every Thursday from 6:30pm till 9:00pm.</p>
                  <p>New skater (freshmeat) practices are Thursdays from 6:30pm till 7:00pm.</p>

                    <!-- Active fundraisers -->
            <h4 class="col-sm-12">Fundraisers</h4>
                  <h5><a href="https://www.yankeecandlefundraising.com/store.htm" target="_blank" title="Yankee Candles">Yankee Candles<i class="fa fa-registered" aria-hidden="true"></i></a></h5>
                  <p>WTRD's group # (999965331)</p>
            <br/><hr>

                    <!-- Link to sponsorship form  and sponsors.....-->
            
            <h4 class="col-sm-12">Sponsorship</h4>
                  <h5>Current Sponsors</h5>
                      <ul class="list-unstyled" style="text-indent: 3%;" align='center'>
                        <li><a href="https://www.facebook.com/Fiesta-Center-1098655813499575/" target="_blank"><img src="http://i.imgur.com/vbm0GbP.jpg" alt="Fiesta Center Logo" title="Fiesta Center"></a></li><br>
                        <li><a href="https://pitapitusa.com/" target="_blank"><img src="http://i.imgur.com/GOaP5GM.png" alt="Pita Pit Logo" title="Pita Pit"></a></li><br>
                        <li>Greencrete Construction, LLC</li>
                      </ul>

                    <h5>Do you want to sponsor WTRD and get your company's (or your name) out there? Follow these steps:</h5>
                  <ul>
                        <li>Download the <a href="./Wtrd2017Spons.pdf" target="_blank" title="Be awesome!">sponsorship form</a> and fill it out.</li>
                        <li>Contact WTRD with the form below.</li>
                  </ul>
      </div>
    </div>
    <div class="newLine"></div>
    
              <!-- CONTACT FORM -->
    <section id="contact">
      <div class="container row col col-lg-8 col-md-10">
        
          <h1>Contact Us Today!</h1>
          <?php echo $result;?>
          <!--<p>Send a messge via the form below.</p>-->

          <form action="?" method="post" role="form">
                              <!-- Sender's Name -->
                <div class="form-group row col col-12 col-sm-6 col-md-6 col-lg-6 no-gutters" id ="name">
                  <label for="name">Name</label>
                  <input class="form-control" name="name" type="text" placeholder="Jerry Hill" id="name" value="<?php echo $_POST['name']; ?>" required>
                </div>
                        <!-- Email address -->
                <div class="form-group row col col-12 col-sm-6 col-md-6 col-lg-6 no-gutters has-error" id="email">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control input-group" name='email' id="email" placeholder="leo.seltzer@rollerderby.com" value="<?php echo $_POST['email']; ?>" required>
                </div>

                <div class="newLine"></div>
                        <!-- Subject -->
                <div class="form-group row col col-5 col-sm-4 col-md-3 col-lg-4 no-gutters">
                  <label for="subject">Subject</label>
                  <select class="form-control row" name="subject" id="subject">
                    <option selected>Choose...</option>
                    <option value="1">General</option>
                    <option value="2">New Skater</option>
                    <option value="3">Sponsorship</option>
                  </select>
                </div>
                        <!-- Message -->
                <div class="form-group row col col-12 col-sm-12 col-md-12 col-lg-12 no-gutters" id="message">
                  <label for="message">Your Message</label>
                  <textarea class="form-control" name="message" id="message" rows="12" placeholder="Inquiry?" required><?php echo $_POST['message']; ?></textarea>
                </div>

                <div class="g-recaptcha" data-sitekey="6Lf93CIUAAAAAMPgvPgq3Mb4QfE9UD4ZZQahYdGU">	
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4 no-gutters" style="float:left;">
                    <input type="submit" name="submit" class="btn btn-warning" value="Send">
                  </div>
                </div>
          </form>
        
      </div>
    </section>

      
</body>




<footer>
    <div class='row col col-12' id="contact"> 
        <!-- Contact Information -->    
              <div class="col col-12" align="center">

                    <!-- facebook, snapchat, instagram, help -->
                <!-- Facebook -->
                <a href="https://www.facebook.com/WestTexasRollerDerbyOfficial/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/westtexasrollerderby/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                <!--Twitter -->
                <a href="https://twitter.com/wtrd" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
          </div>

          <div class="col col-12" id="credit">
                <p>This site is coded and maintained by <a href="https://kyknight.github.io/" target="_blank">PhoeWorks</a>.</p>
          </div>

          <div class="scroll-top"><a class="button scrollable" href="#wayUp"><i class="fa fa-arrow-circle-o-up fa-3x"></i></a>
          </div>

    </div>
</footer>
  
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <!-- script for reCAPTCHA -->
  	<script src='https://www.google.com/recaptcha/api.js?hs=en'></script>


</html>