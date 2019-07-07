<?php

include("dbconnect.php");

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AUST NEWS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/fr.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslideradd.css" media="screen" />
</head>
<body>
 <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="userinfo.php">Contact</a></li>
          <li><a href="address.html">Find Us</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
	 <div class="nfa">
	 
	 <div class="box">
  <div class="inner">
    <span>News & Announcements for AUSTian Community</span>
  </div>
  <div class="inner">
    <span>News & Announcements for AUSTian Community</span>
  </div>
</div>
	 
	
	
	 </div>
	 
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <div class="main_menu_area">
      <ul id="nav">
        <li><a href="#">Department</a>
          <ul>
            <li><a href="#">CSE</a></li>
            <li><a href="#">EEE</a></li>
            <li><a href="#">MPE</a> </li>
            
                <li><a href="#">CIVIL</a></li>
                <li><a href="#">TEX</a></li>
                <li><a href="#">IPE</a></li>
                <li><a href="#">BBA</a></li>
                <li><a href="#">ARCH</a></li>
              
           
          
          </ul>
        </li>
        <li><a href="#">Admission</a>
        
          <ul>
             <li><a href="#">Engineering / Architecture Programs</a>
              <ul>
                <li><a href="#">Undergraduate Programs</a></li>
                <li><a href="#">Graduate Programs</a></li>
          
              </ul>
            </li>
            <li><a href="#">BBA / MBA & EMBA Programs</a></li>
			<li><a href="#">Finantial Aid</a></li>
           
          </ul>
        </li>
        <li><a href="#">Campus</a></li>
        <li><a href="#">Students Corner</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">Faculty Corner</a></li>
        <li><a href="#">Notice </a></li>
       
      </ul>
    </div>
	
	<div class="body_wrapper">
  <div class="center">
   
   <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
         
          <li><img src="images/cu.jpg" alt="" title="CONTACT US"  /></li>
         
        </ul>
      </div>
    </div>
   
  
	
	<div id="page-wrap">
  



    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="Name">Name:</label>
            <input type="text" name="name" id="Name" />

            <label for="City">City:</label>
            <input type="text" name="city" id="City" />

            <label for="Email">Email:</label>
            <input type="text" name="email" id="Email" />

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>
  <?PHP
if (isset($_REQUEST['note'])){
	if($_REQUEST['note']=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
}}
?>
</div>

	
	</div>
	</div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
	 
	 
	 
	 
	 
	  <div class="bc">
	  
	  
	   <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="#">Campus news</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Tech</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Academy</a></li>
          <li><a href="#">entertainment</a></li>
          <li><a href="#">culture</a></li>
          <li><a href="#">Books</a></li>
          <li><a href="#">classifieds</a></li>
          <li><a href="#">blogs</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2018 AUST News Inc. All rights reserved | Design & Developed by MD Rayhan Jhony</p>
       
      </div>
    </div>
  </div>
	  
	  
	  
	  
	  
	 
	 </div>
	 
	 
   
   
   
   
	<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
	<script type="text/javascript" src="assets/js/js.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
	

</body>
</html>