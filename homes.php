<!DOCTYPE html>
<html lang="en">
<head>
  <title>HobbyHub-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #fff;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #cd5c5c;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #000000;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
	  background-image: url('wallx.jpg');
      color: #f543er;
      padding: 245px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 90px 50px;
	  background-color: #fff;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .bg-DarkSlateGray {
      background-color: #a9a9a9
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #000000;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #fff !important;
      background-color: #cd5c5c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">HobbyHub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">CATEGORIES</a></li>
        <li><a href="#portfolio">TERMS OF SERVICE</a></li>
		<li><a href="login.php">SIGNIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1><font color="white" face="Cooper Black"><big>HOBBY HUB</big></font></h1> 
  <p><font face="verdana"><b>A stream of passionate people</b></p>
<p>writers, explorers, knowledge seekers,thought exposures.</font></p>  
  <form action="homes.php" method="post" enctype="multipart/form-data">
      <div class="input-group-btn">
        <button type="button" name="reg" class="btn btn-danger"onclick="window.location.href='register.php';"><center>SignUp now!</center></button>
      </div>
  </form>
 </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About HobbyHub</h2><br>
      <h4>HobbyHub is an open community of passionate people—writers, explorers, knowledge seekers, thought exposures. Interacting and informing. Sharing words, pictures and videos. Asking questions. Finding answers. It’s a rich and rewarding experience with a unique set of tools and resources to help Hubbers find and build an audience, easily create articles.</h4><br>
      <p><font color="DarkSlateGray">At HobbyHub, you’ll always discover an interesting take on what you were looking for. No matter how simple it seemed when you started your search. A Hub is so much more than an answer (though it might be that), so much more than an article (though it often starts there) -- it’s a rich and vibrant experience. And every Hub is original. From how to grill a steak to the top 100 songs of the ‘80s, our Hubs are full of engaging perspectives and inspired people.</font></p>
    </div>
    <div class="col-sm-4">
     <img src="images.jpg" style="width:288px;height:388px;">
	</div>
  </div>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center bg-grey">
  <h2>CATEGORIES</h2>
  <h4>One Stream.. All networks..</h4><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="newsfeed.png" style="width:190px;height:140px;">
      <p><font color="Black"><b>GENERAL</b></p>
      <p><font color="DarkSlateGray">start a CONVERSATION <br>something YOU know about..</font></p>
    </div>
    <div class="col-sm-4">
	  <img src="writing.jpg" style="width:190px;height:140px;">
      <p><font color="Black"><b>LITERATURE</b></p>
      <p><font color="DarkSlateGray">PUT FORWARD your words..<br>go through others..</font></p>
    </div>
    <div class="col-sm-4">
      <img src="paint.jpg" style="width:190px;height:140px;">
      <p><font color="Black"><b>ARTS</b></p>
      <p><font color="DarkSlateGray">fill up your WORLD OF COLOURS..<br> or look up RAINBOW SKY.. </font></p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="cooking.jpg" style="width:190px;height:140px;">
      <p><font color="Black"><b>COOKING</b></p>
      <p><font color="DarkSlateGray">walk someone through your RECIPE.. <br> or try SOMETHING NEW for dinner..</font></p>
    </div>
    <div class="col-sm-4">
      <img src="travel.jpg" style="width:190px;height:140px;">
      <p><font color="Black"><b>TRAVEL</b></p>
      <p><font color="DarkSlateGray">Bring someone along in your travels with a guide..<br> or take a VIRTUAL TRIP..</font></p>
    </div>
    <div class="col-sm-4">
      <img src="entertain.jpg" style="width:190px;height:140px;">
      <p><font color="Black"><b>ENTERTAINMENT</b></p>
      <p><font color="DarkSlateGray">Find out HOW TO..<br>or show YOU KNOW how..</font></p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid bg-DarkSlateGray">
  <h2><center>TERMS OF SERVICE</center></h2><br>
  <div class="row slideanim">
       <table><tr>
	   <td><img src="regis.jpg" style="width:150px;height:150px;"></td>
	   <td><h4>To Use Our Services, You:</h4>
          <ul>
		  <li>May need to register with us to access and use our services.
          <li>Must not initiate or participate in any activities on our services that are illegal, harmful, or interfere with anyone's use of our services
		  </ul></td>
        </tr></table>
        <table><tr>
		<td><h4>If You Post Content On a Service, You:</h4>
           <ul>
           <li>May post content that you create or have been given permission to post by the owner, is legal, and doesn't violate the TOS
           <li>Are responsible for content that you post to our services and assume all risks of posting personal information online
           <li>Continue to own the content but grant a license to use and distribute your content
		   </ul></td>
		<td><img src="post.jpg" style="width:150px;height:150px;"></td></tr>
		</table>
	 </div><br>
  
  <h2><center>World of innovation... popular sayings..</center></h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Literature is a textually transmitted disease,<br> normally contracted in childhood"<br><span style="font-style:normal;">Jane Yolen, Touch Magic: Fantasy, Faerie & Folklore in the Literature of Childhood</span></h4>
      </div>
      <div class="item">
        <h4>"Don't only practice your art, but force your way into its secrets;<br> art deserves that, for it and knowledge can raise man to the Divine"<br><span style="font-style:normal;">Ludwig van Beethoven<span></h4>
      </div>
      <div class="item">
        <h4>"All children are artists. The problem is how to remain an artist once he grows up. "<br><span style="font-style:normal;">Plado Picasso</span></h4>
      </div>
	  <div class="item">
        <h4>"I sometimes think the chef end of cooking is not the real end of cooking. Cooking is all about homes and gardens"<br><span style="font-style:normal;">Della Smith</span></h4>
      </div>  
	</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
