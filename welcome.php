<?php
   include('session.php');
?>
 



 <!DOCTYPE html>
<html lang="en">
<head>
   <title>Clean  Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
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
    background-color: #f4511e;
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
    color: #f4511e !important;
    background-color: #fff !important;
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
      <a ><img style="border-radius:50%; width:10%;height:.5%" src="R (5).jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
         <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="logout.php">Log Out</a></li>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Company </h1> 
  <p>We specialize in CleanUp</p> 
  <form>
    <div class="input-group">
       <div class="input-group-btn">
        <button type="button"  onclick="fun()"  class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

 <div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company  </h2><br>
      <h4>WHO ARE WE !!!! </h4>
      <p> Nzamk is a cleaning company that specializes in comprehensive cleaning services, as well as sterilization. Of course, this is done with the best modern devices. And also the latest equipment. We also have the best cleaning cadres. Where we carry out cleaning operations, knowing that this is done at the highest quality levels. We also have a team of workers trained by experts in the field professionally. We also have maids at the highest level of cleanliness, honesty and competence to do all types of cleaning. Whether cleaning facilities, as well as cleaning the facades of glass companies, as well as chimneys and others.</p>
     </div>
    <div class="col-sm-4">
      <span> <img style="border-radius:50%; width:100%" src="OIP.jpg"></span>
    </div>
  </div>
</div>
 

 <div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-trash logo-small"></span>
      <h4>POST-FINISH CLEANING</h4>
      <p>important steps. After completing the finishing process</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo-small"></span>
      <h4>CLEANING THE INNER AND OUTER GLASS</h4>
      <p>The best techniques for cleaning the exterior glass of buildings</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>SOFA AND MATTRESS CLEANING  </h4>
      <p>Professionals cleaning sofas as well as mattresses with the latest methods</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Keep the carpet clean</h4>
      <p>It is one of the most important steps. After completing the finishing process</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>REMOVING SEDIMENTS, AND STERILIZING</h4>
      <p>The best techniques for cleaning the exterior glass</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">CLEANING SWIMMING POOL CLEANING</h4>
      <p>Professionals cleaning SWIMMING POOL  with the latest methods</p>
    </div>
  </div>
</div>

 

 <div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose The Offer You Want</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2 style="color:white">POST-FINISH CLEANING</h2>
        </div>
        <div class="panel-body">
        It is one of the most important steps. After completing the finishing process. It is to do the cleaning It is to do the cleaning It is to do the  in order to remove the remnants of the construction process stuck 
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">   Order</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 style="color:white">CLEANING THE INNER AND OUTER GLASS</h3>
        </div>
        <div class="panel-body">
        The best techniques for cleaning the exterior glass of buildings as well as shops in the best modern ways and at the best prices best modern ways  can you find in the market and at the best prices .
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">  Order</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2 style="color:white">SOFA AND MATTRESS CLEANING</h2>
        </div>
        <div class="panel-body">
        Professionals cleaning sofas as well as mattresses with the latest methods and new methods, for example steam, as well as the best competitive prices in the United Arab Emirates.
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">  Order</button>
        </div>

        
      </div>      
    </div>    
 
  </div>
</div>


 <div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Nzamk.Net</p>
      <p><span class="glyphicon glyphicon-phone"></span> +20 01068138815</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Nzamk@gmail.com</p>
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

   
<script>
$(document).ready(function(){
   $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
     if (this.hash !== "") {
       event.preventDefault();

       var hash = this.hash;

        $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
         window.location.hash = hash;
      });
    }  
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

<script>  
            function fun() {  
  
  
               alert ("  Welcome <?php echo $login_session; ?>  thank you for subscribe ");  
            }  
      </script> 
 

</body>
</html>





