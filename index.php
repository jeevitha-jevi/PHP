<html>
<head>
  <title>FixNix.co</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
 body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
   .navbar {
      margin-bottom: 0;
      background-color: black;
      z-index: 9999;
      border: 0;
      font-size: 14px !important;
      /*line-height: 1.42857143 !important;*/
      letter-spacing: 1px;
      border-radius: 0;
      /*font-family: Montserrat, sans-serif;*/
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
  #myNavbar
  {
    margin-top: 10px; 
  }
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    background-color: #f1f1f1;
    min-width: 350px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  #button1
  {
    border-radius:50%;
  margin-left: 50px;
  }
  #section3
{
  border: 2px solid black;
  background-color:#FAF8F7  ;
  }
  .button1{
display: block;
width: 200px;
height: 30px;
background: white;
text-align: center;
border-radius: 5px;
color: black;
font-weight: bold;
border:2px solid black;
margin-left:80px;
margin-top: 20px;
text-decoration: none;
}
.button1:hover{
  background-color:black;
  color:white;
  text-decoration: none;
}
  
.field {
  display: flex;
  flex-flow: column-reverse;
  margin-bottom: 1em;
}
label, input {
  transition: all 0.2s;
  touch-action: manipulation;
}
input {
  font-size: 1.5em;
  border: 0;
  border-bottom: 1px solid #ccc;
  font-family: inherit;
  -webkit-appearance: none;
  border-radius: 0;
  padding: 0;
  cursor: text;
  width:300px;
  margin: 0px;
}
input:focus {
  outline: 0;
  border-bottom: 1px solid #192781;
}

label {
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
input:placeholder-shown + label {
  cursor: text;
  max-width: 66.66%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  transform-origin: left bottom;
  transform: translate(0, 2.125rem) scale(1.5);
}
::-webkit-input-placeholder {
  opacity: 0;
  transition: inherit;
}
input:focus::-webkit-input-placeholder {
  opacity: 1;
}
input:not(:placeholder-shown) + label,
input:focus + label {
  transform: translate(0, 0) scale(1);
  cursor: pointer;
}
.fa {
  padding: 8px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 10px 10px;
  border-radius: 50px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <img src="fixnix1.jpeg" style="height:80px; width:90px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://fixnix.co/">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="fix.png" alt="Los Angeles" style="width:100%;height:70%">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="org.jpg" alt="Chicago" style="width:100%; height:70%;">
        <div class="carousel-caption">
         
        </div>
      </div>
    
      <div class="item">
        <img src="fixnix3.jpg" alt="New York" style="width:100%; height:70%;">
        <div class="carousel-caption">
          
        </div>
      </div>
   <div class="item">
        <img src="fixnix4.jpg" alt="New York" style="width:100%; height:70%;">
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>

<div class="container" style="background-color:black;">
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style=" margin-left:60px;">

 <img src="search.jpg" style="width:100%;height:20%;">
 <div class="details"><h4 style="color:white;"><strong>PREDECTIVE ANALYSIS</strong></h4>
  <p>FixNix Risk Analytics is an intelligent decision support platform by leveraging Machine-Learning algorithms.</p>
  <button type="text" class="btn btn-danger" id="button1"><a href="https://fixnix.co/zenanalytics/">know more</a></button>
  </div>
</div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style=" margin-left:60px;">

 <img src="risk.jpg" style="width:100%;height:20%;">
 <div class="details"><h4 style="color:white;"><strong>REGULATORY RISK DATA LAKE</strong></h4>
  <p> A data lake is a centralized repository that allows you to store all your structured and unstructured data.</p>
<button type="text" class="btn btn-danger" id="button1"><a href="https://fixnix.co/regulatoryriskdatalake/">know more</a></button>
  </div>
  </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style=" margin-left:60px;">

 <img src="whistle.jpg" style="width:100%;height:20%;">
 <div class="details"><h4 style="color:white;"><strong>BLOCKCHAIN-POWERED WHISTLE BLOWER</strong></h4>
  <p> A data lake is a centralized repository that allows you to store all your structured and unstructured data.</p>
<button type="text" class="btn btn-danger" id="button1"><a href="https://fixnix.co/blockchain-powered-whistle-blower/">know more</a></button>
  </div>
  </div>
</div>
</div>
<br><br>
<div id="section3">
  <h2 style="color:red; text-align:center;"><strong>SOLUTIONS</strong></h2><hr>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="aviation.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/aviations-2/" class="button1">AVIATION</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="technology.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/technology/" class="button1">TECHNOLOGY</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="bank.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/banking/" class="button1">BANKING</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="manufacturing.gif" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/manufacturing/" class="button1">MANUFACTURING</a>
    </div>
  </div><br>
  <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="healthcare.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/healthcare/" class="button1">HEALTHCARE</a>
    </div>

     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="retail.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/retail/" class="button1">RETAIL</a>
    </div>
   
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="doller.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/financial/" class="button1">FINANCIAL SERVICE</a>
    </div>
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="legal.jpg" style="width:250px; height:150px; margin-left:50px;"><br>
<a href="https://fixnix.co/legal/" class="button1">LEGAL</a><br>
    </div>
  </div>
  </div><br>

  <div>
  <form action="">
    <div class="row">
       <div class="col-md-4">
  <div class="field" style="margin-left:30px;">
    <input type="text" name="fullname" id="fullname" placeholder="Enter name">
    <label for="fullname" style="color:black;">Name*</label>
  </div>
</div>
<div class="col-md-4">
  <div class="field" style="margin-left:30px;">
    <input type="text" name="email" id="email" placeholder="Enter email">
    <label for="email" style="color:black;">email*</label>
  </div>
</div>
<div class="col-md-4">
  <div class="field" style="margin-left:30px;">
    <input type="text" name="organization" id="organization" placeholder="Enter organization">
    <label for="organization" style="color:black;">organization*</label>
  </div>
</div>
</div>
 <div class="row">
       <div class="col-md-4">
  <div class="field" style="margin-left:30px;">
    <input type="number" name="contact" id="contact number" placeholder="Enter number">
    <label for="contact" style="color:black;">contact number*</label>
  </div>
</div>
 <div class="col-md-4">
  <div class="field" style="margin-left:30px;">
    <input type="text" name="fullname" id="fullname" placeholder="Type..........">
    <label for="fullname" style="color:black;">message*</label>
  </div>
</div>
</div>
</form>
  <div class="row">
    <a href="" class="button1" style="cursor:pointer;margin-left:40%;">submit</a>
  </div>
  </div><br>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4"  style="background-color:black;">

    <!-- Footer Links>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 mt-md-3 mt-6">

          <!-- Content -->
          
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-3 mb-3" style="margin-left:50px;">

            <!-- Links -->
            <h5 class="text-uppercase" style="color:red;">fixnix canada</h5>

            <ul class="list-unstyled">
              <li>
                <p>VentureLab, 3600 Steeles Ave. E., Markham</p>
                   <p>Ontario L3R 9Z7.</p>
              </li>
            </ul>
            <h5 class="text-uppercase">fixnix USA</h5>
            <P>340 S Lemon Ave, #6493,Walnut, California 91789.</P>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-3 mb-3"  style="margin-left:50px;">

            <!-- Links -->
            <h5 class="text-uppercase" style="color:red;">FixNix India</h5>

            <ul class="list-unstyled">
              <li>
                <P>Papani Apartments, 62nd St,Indira Colony</P>
                  <P>Ashok Nagar, Chennai 600 083.</P>
              </li>
              <li>
            </ul>
            <h5 class="text-uppercase" style="color:red;">FixNix Singapore</h5>

            <ul class="list-unstyled">
              <li>
                <p>3 Cuff Road, #02-03, Singapore 209714.</P></li>
            </ul>

          </div>
          <div class="col-md-3 mb-md-3 mb-3"  style="margin-left:50px;">

            <!-- Links -->
            <h5 class="text-uppercase" style="color:red;">FixNix UAE</h5>
            <ul class="list-unstyled">
              <li>
                <p>DIFC AUTHORITY, The Gate, Level 14,
                   <p>DIFC P.O. Box 74777, Dubai.</p>
              </li>
            </ul>
            <h5 class="text-uppercase"style="color:red;" >FixNix HongKong</h5>
            <P>16-B Luna Court, Kimberly Road,
              Tsim Sha Tsui, Kowloon.</P>
          </div>
           <div class="col-md-3 mb-md-3 mb-3"  style="margin-left:50px;">

            <h2 style="color:red;">CONTACT US</h2> 
            <span class="glyphicon glyphicon-phone-alt"></span> +1 (647) 825 2925 <br><br>
             <span class="glyphicon glyphicon-envelope"></span> sales@FixNix.co, 
support@FixNix.co,
info@FixNix.co
          </div>
          <div class="col-md-3 mb-md-3 mb-3"  style="margin-left:50px;">

            <h2 style="color:red;"></h2> 
            <a href="https://www.facebook.com/shanmugavel" class="fa fa-facebook"></a>
            <a href="https://twitter.com/sshanmugavel" class="fa fa-twitter"></a>
            <a href="https://fixnix.co" class="fa fa-google"></a>
            <a href="https://www.linkedin.com/in/shanmugavels/s" class="fa fa-linkedin"></a>
          </div>


    </div>
  </div>
</div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-4">© 2018 Copyright:
      <a href="">FixNix.co</a>

    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>
</html>





