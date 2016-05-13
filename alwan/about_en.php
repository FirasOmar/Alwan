
<html>
<head>
<title>alwan</title>
<link rel="stylesheet" type="text/css" href="css/ltr.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid main_container" style="padding:0px; direction:ltr;" id="home">
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
    <li class = "section ">
        <h4 class = "title">About</h4>
        <h5>All you need to know</h5>
       
        <ul>
            <li>Connecting has never been more fun, safe, or awesome. Alwan shows you the people you want to see and lets you connect by a mutual opt in by swiping right. Alwan eliminates that level of awkwardness after a connection is made, and sets the stage for how the convos begin</li>
            <li>The woman always makes the first move, and if she doesn't say something to a new connection within 24 hours, that connection disappears forever!</li>
            <li>For same sex connections, or friendship, either person has 24 hours to make the first move, or that connection will disappear!</li>
            <li>Feel like 24 hours just isn't enough time? No problem. We let you extend one connection for an additional 24 hours each day</li>
            
        </ul>
       
</div>
</body>
</html>