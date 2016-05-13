<nav class="navbar navbar-default col-md-12">
  <div class="container-fluid">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobileMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button> 
	 <span><form action="index.php" method="get" style="margin:6px;"><input type="image" id="submit_btn" src="images/logo.png"style="border:none;outline:none;float:left;width: 69%;"></form></span>
    </div>
	<div class="visible-lg visible-md hidden-sm hidden-xs" id="myNavbar" style="padding: 20px">
    <ul class="nav navbar-nav navbar-right" id="myNavbar" >
      <li><form action="about_ar.php" method="get">
	  <input type="submit" value="حول" name="about">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="about_en.php" name="page2">
	  <input type="hidden" value="about_ar.php" name="page">
	  </form></li>
	  <li><form action="support_ar.php" method="get">
	  <input type="submit" value="الدعم" name="support">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="support_en.php" name="page2">
	  <input type="hidden" value="support_ar.php" name="page">
	  </form></li> 
      <li><form action="terms_ar.php" method="get">
	  <input type="submit" value="شروط" name="terms">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="terms_en.php" name="page2">
	  <input type="hidden" value="terms_ar.php" name="page">
	  </form></li> 
	  <li><form action="privacy_content.php" method="get">
	  <input type="submit" value="الخصوصيه" name="privacy">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="privacy_content_en.php" name="page2">
	  <input type="hidden" value="privacy_content.php" name="page">
	  </form></li>
      <li><form action="guidlines_ar.php" method="get">
	  <input type="submit" value="توجيهات" name="guidlines">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="guidlines_en.php" name="page2">
	  <input type="hidden" value="guidlines_ar.php" name="page">
	  </form></li> 
      <li><form action="language.php" method="get">
	  <input type="submit" value="english" name="english">
	  <input type="hidden" value="english" name="lang_flag">
	  <input type="hidden" value="<?php echo $_GET['page']; ?>" name="page">
	  <input type="hidden" value="<?php echo $_GET['page2']; ?>" name="page2">
	  </form></li>
	  <!--<li><div>
	  <i class="glyphicon glyphicon-chevron-up"></i><br>
	  <i class="glyphicon glyphicon-chevron-down"></i>
	  </div></li> -->
    </ul>
	</div>
	<div class="hidden-lg hidden-md collapse" id = "mobileMenu">
	    <ul class="nav navbar-nav navbar-right" id="myNavbar">
            <li><form action="about_ar.php" method="get">
	  <input type="submit" value="حول" name="about">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="about_en.php" name="page">
	  </form></li>
	  <li><form action="support_ar.php" method="get">
	  <input type="submit" value="الدعم" name="support">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="support_en.php" name="page">
	  </form></li> 
      <li><form action="terms_ar.php" method="get">
	  <input type="submit" value="شروط" name="terms">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="terms_en.php" name="page">
	  </form></li> 
	  <li><form action="privacy_content.php" method="get">
	  <input type="submit" value="الخصوصيه" name="privacy">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="privacy_content.php" name="page">
	  </form></li>
      <li><form action="guidlines_ar.php" method="get">
	  <input type="submit" value="توجيهات" name="guidlines">
	  <input type="hidden" value="arabic" name="lang">
	  <input type="hidden" value="guidlines_en.php" name="page">
	  </form></li> 
      <li><form action="language.php" method="get">
	  <input type="submit" value="english" name="english">
	  <input type="hidden" value="english" name="lang_flag">
	  <input type="hidden" value="<?php echo $_GET['page']; ?>" name="page">
	  <input type="hidden" value="<?php echo $_GET['page']; ?>" name="page2">
	  </form></li>
    </ul>
	</div>
  </div>
</nav>