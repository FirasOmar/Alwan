
<html>
<head>
<title>alwan</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid main_container" style="padding:0px;" id="home">

<div class="col-md-12 background">
<?php 
//$lang=$_GET['lang'];
if(!isset($_GET['lang'])){
	header("location:index.php?lang=english&page=index.php&page2=index.php");
	include_once('header.php');
}
elseif(isset($_GET['lang']) && !isset($_GET['page']) ){
	$index_lang=$_GET['lang'];
	header("location:index.php?lang='<?php ".$_GET['lang']."?>'&page=index.php&page2=index.php");
	include_once('header_ar.php');
}
if($_GET['lang']=="english" || !isset($_GET['lang'])){
	include_once('header.php');
}else{
	include_once('header_ar.php');
}
?>
<!--<nav class="navbar navbar-default col-md-12">
  <div class="container-fluid">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobileMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button> 
	 <span><img src="http://localhost:88/alwan/alwan-mail/alwan_logo.png" id="logo_img"> </span>
    </div>
	<div class="visible-lg visible-md hidden-sm hidden-xs" id="myNavbar">
    <ul class="nav navbar-nav navbar-right" id="myNavbar">
      <li><form action="about.php" method="get"><input type="submit" value="ABOUT" name="about"></form></li>
	  <li><form action="support.php" method="get"><input type="submit" value="SUPPORT" name="support"></form></li>
      <li><form action="press.php" method="get"><input type="submit" value="PRESS" name="press"></form></li>
      <li><form action="blog.php" method="get"><input type="submit" value="BLOG" name="blog"></form></li> 
      <li><form action="terms.php" method="get"><input type="submit" value="TERMS" name="terms"></form></li> 
	  <li><form action="privacy.php" method="get"><input type="submit" value="PRIVACY" name="privacy"></form></li>
      <li><form action="faq.php" method="get"><input type="submit" value="FAQ" name="faq"></form></li> 
      <li><form action="english.php" method="get"><input type="submit" value="Engilsh" name="english"></form></li>
	  <!--<li><div>
	  <i class="glyphicon glyphicon-chevron-up"></i><br>
	  <i class="glyphicon glyphicon-chevron-down"></i>
	  </div></li> 
    </ul>
	</div>
	<div class="hidden-lg hidden-md collapse" id = "mobileMenu">
	    <ul class="nav navbar-nav navbar-right" id="myNavbar">
      <li><form action="about.php" method="get"><a href="#">ABOUT</a></form></li>
	  <li><form action="support.php" method="get"><a href="#">SUPPORT</a></form></li>
      <li><form action="press.php" method="get"><a href="#">PRESS</a></form></li>
      <li><form action="blog.php" method="get"><a href="#">BLOG</a></form></li> 
      <li><form action="terms.php" method="get"><a href="#">TERMS</a></form></li> 
	  <li><form action="policy.php" method="get"><a href="#">PRIVACY</a></form></li>
      <li><form action="faq.php" method="get"><a href="#">FAQ</a></form></li> 
      <li><form action="english.php" method="get"><a href="#">Engilsh </a></form></li>
    </ul>
	</div>
  </div>
</nav>-->
<div class="col-md-6 visible-lg visible-md hidden-sm hidden-xs  mobile">
<img src="http://localhost:88/alwan/alwan-mail/iphone_design.png" id="iphone_design">
</div>
<!-- *************** -->
<div class="hidden-lg hidden-md visible-sm visible-xs   mobile">
<img src="http://localhost:88/alwan/alwan-mail/iphone_design.png" id="iphone_design2">
</div>
<!-- *************** -->
<div class="col-md-6 visible-lg visible-md hidden-sm hidden-xs find_crush">
<div id="alwan_find" class="col-md-12 col-sm-12 col-xs-12">
<img src="http://localhost:88/alwan/alwan-mail/Alwan1.png" id="alwan_pic">
<h1 id="find-your-crush">Find your Crush</h1>
<img src="http://localhost:88/alwan/alwan-mail/iphoneapp_icon.png" id="app-store_img" >
</div>
<div id="img_icons" class="col-md-12">
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/twitter_icon.png" id="twitter_img" class="icons icon1"></a>
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/instagram_icon.png" id="instagram_img" class="icons icon1"></a>
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/Facebook_icon.png" id="facebook_img" class="icons icon1"></a>
</div>
</div>
<!-- ************************************* -->
<div class="hidden-lg hidden-md visible-sm visible-xs ">
<div id="alwan_find" class="col-md-12 col-sm-12 col-xs-12">
<img style="width:85%;margin-left:10%;" src="http://localhost:88/alwan/alwan-mail/Alwan1.png">
<h1 id="find-your-crush" style="margin-left:14%;
    padding:0px;font-size:26px;">Find your Crush</h1>
<img  style="margin-left: 15%;" src="http://localhost:88/alwan/alwan-mail/iphoneapp_icon.png">
</div>
<div id="img_icons" class="col-sm-12"style="margin-left:13%;">
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/twitter_icon.png" id="twitter_img" class="icons icon1"></a>
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/instagram_icon.png" id="instagram_img" class="icons icon1"></a>
<a href="https://www.youtube.com/" target="_blank">
<img src="http://localhost:88/alwan/alwan-mail/Facebook_icon.png" id="facebook_img" class="icons icon1"></a>
</div>
</div>
<!-- ************************************* -->
</div>
</div>
</body>
</html>