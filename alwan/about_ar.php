
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
    <li class = "section ">
        <h4 class = "title">حول الوان</h4>
        <h5>نحن نغيير قواعد اللعبة</h5>
       
        <ul>
            <li>التواصل لم يكن أبدا أكثر متعة دون الوان، فهي آمنة، ورائعة. الوان يظهر لك الناس الذين تريد أن تراهم وتمكنك من الاتصال عن طريق سحب الشاشة لليمين الوان يقوم بتقليص الاشخاص الذين لا تود رؤيتهم. ويلغي هذا المستوى من الاحراج بعد اتصال مصنوع، ويمهد الطريق لكيفية بدأ حوار مع الشخص الأخر </li>
            <li>المرأة دائما تعمل هذه الخطوة الأولى، فهي تحدد اذا كانت تريد بدأ الحوار معك واذا لم تقم الفتاة ببدأ الحوار خلال 24 ساعة بعد قبولك في قائمتها، يختفي هذا الشخص إلى الأبد</li>
            <li>
للاتصالات من نفس الجنس، أو الصداقة، إما شخص لديه 24 ساعة لاتخاذ الخطوة الاولى، أو هذا الشخص سوف يختفي!
</li>
            <li>تشعر بان 24 ساعات ليست ما يكفي من الوقت؟ ليس هناك أى مشكلة. تركنا لك الاختيار بتمديد اتصال واحد لمدة 24 ساعة إضافية كل يوم</li>
            
        </ul>
       
</div>
</body>
</html>