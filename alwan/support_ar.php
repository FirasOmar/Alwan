
<html>
<head>
<title>alwan</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css" >
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid main_container" style="padding:0px;" id="home">
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
        <h4 class = "title">الدعم</h4>
   <p>لديك فكرة في خاطرك ؟ ماذا عن فكرة عظيمة؟ لديك شكوك وتساؤلات ؟ لا توجد مشكلة، نحن هنا لذلك!</p>
   <p>لأي دعم متعلقة ب أسئلة / تعليقات / ردود افعال، يرجى مراسلتنا عبر البريد الإلكتروني <a href="#">feedback@getalwan.com</a></p>

</div>
</body>
</html>