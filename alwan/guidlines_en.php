
<html>
<head>
<title>alwan</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="css/ltr.css" >
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid main_container" style="padding:0px;direction:ltr;" id="home">
<div class = "header" >
<?php 
$lang=$_GET['lang'];
if($lang=="english"){
	include_once('header.php');
}elseif($lang=="arabic"){
		include_once('header_ar.php');
}
?>
</div>
<ul>
    <li class = "section">
        <h4 class = "title">Alwan Guidelines</h4>
   <p>These Guidelines and our Terms and Conditions are designed to ensure every user can enjoy Alwan safely and responsibly.</p>
   <h5>Upload only your own photos and videos</h5>
   <p>We take copyrights very seriously. If you don't own the rights to a photo or video, please don't post it, as it's against our rules and may get you blocked from Alwan.</p>
   <h5>Respect all users</h5>
   <p>We're a very diverse community. This means you should respect other people's beliefs, interests and property while on Alwan. You should behave the same way on Alwan as you would in real life.</p>
   <h5>Send original messages to other users</h5>
   <p>Don't copy and paste! Read profiles, see what they're into and send an appropriate, relevant message. Honestly, almost anything is better than sending 'Hey sexy' to every connection!</p>
   <h5>Have fun</h5>
   <p>Enjoy your time on Alwan. Chat with people, send photos, make friends and arrange to meet up. Whatever you do, have fun doing it!</p>
   <h5>Don't pretend you're someone you're not</h5>
   <p>We hope you'll meet people in real life through Alwan, so we ask that you use your real name, photo and info in your profile. Don't pretend to be someone else.</p>
   <h5>No pornographic material</h5>
   <p>Alwan strictly prohibits the uploading of any pornographic material. Don't try it!</p>
   <h5>Don't do anything illegal on our site</h5>
   <p>We don't look kindly on illegal activity on Alwan, so you'll certainly be banned from the site, and may be reported to the authorities.</p>
   <h5>No spam</h5>
   <p>Alwan isn't for selling things. If you try to use it as a marketplace you'll be banned.</p>
   <h5>No photos of your kids</h5>
   <p>While you're welcome to let other users know you have kids, in chat or your profile, it's against Alwan rules to post pictures of kids.
If you don't follow these guidelines, you'll receive a warning. If you ignore this warning, you risk losing your account. These guidelines are designed to make Alwan a friendly and safe place for all our users.
</p>
</div>
</body>
</html>