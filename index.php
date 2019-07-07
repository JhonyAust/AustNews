<?php 
  session_start(); 

 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
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
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
          <li><a href="login.php">Login</a></li>
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
          <li><img src="images/1.jpg" alt="" title="AUST PLAZA" /></li>
          <li><img src="images/2.jpg" alt="" title="BEAUTIFUL SIDE VIEW OF AUST" /></li>
          <li><img src="images/3.jpg" alt="" title="AUST RAINY REDEX " /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
           
         <h2 class="title">latest  articles</h2>
 
 
           
	  
           
    <div class="content">  


<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newsl'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='imgs_div'>";
		 
		 echo "<a href='".$row['url']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
					echo "<div id='img_div'>";
					
         
		  echo "</div>";
		  
    }
  ?>
  </div>
          </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">popular </h2>
             <div class="content">  


<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newslb%'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='imgs_div'>";
		 
		 echo "<a href='".$row['url']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
					echo "<div id='img_div'>";
					
         
		  echo "</div>";
		  
    }
  ?>
  </div>
            
          </div>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> </div>
          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">tech news</h2>
            <a class="more" href="#">more</a>
            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
              <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
            </div>
          </div>
        </div>
        <div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title">tech news</h2>
            
			
			
			  <div class="content">  


<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newsr'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='img_div'>";
		 
		 echo "<a href='".$row['url']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
				
		  
    }
  ?>
			
			
			
			</div>
			
			
            <a class="popular_more" href="#">more</a> </div>
			
          <div class="single_right_coloum">
            <h2 class="title">Sports</h2>
			
			
			
			
			<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newsrb'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='img_div'>";
		 
		 echo "<a href='".$row['url']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
				
		  
    }
  ?>
			
			
			
			
			
             <a class="popular_more" href="#">more</a> </div>
			 
			 
			 
			 
			 
			 
			   <div class="single_right_coloum">
            <h2 class="title">Education</h2>
			
			
			
			
			<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newsrb2'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='img_div'>";
		 
		 echo "<a href='".$row['url']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
				
		  
    }
  ?>
			
			
			
			
			
             <a class="popular_more" href="#">more</a> </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			    <div class="single_right_coloum">
            <h2 class="title">Download</h2>
			
			
			
			
			<?php
 $db = mysqli_connect("localhost", "root", "", "photos");
 $sql = "SELECT * FROM images WHERE category LIKE 'Newsrb3'";
   $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
      
      	echo "<img src='images/".$row['image']."' >";
		
		
      	
		
        echo "<div class='img_div'>";
		 
		 echo "<a href='".$row['image']."'>".$row['sub']."</a>";
		 
		 
		  echo "<p>".$row['text']."</p>";
		  
     				echo "</div>";
					
					
				
		  
    }
  ?>
			
			
			
			
			
             <a class="popular_more" href="#">more</a> </div>
			 
			 
			 
			 
			 
			 
			 
          </div>
        </div>
      </div>
      
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
    </div>
   
   </div>
     </div>
	 
	 
  <div class="container">
  
  
  
  

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
	   
	  
	  
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
			
			
			
			
			
			
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	
	
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
	
	
	
	
	   <br />
  <h2 align="center"><a href="#">Post a Comment</a></h2>
  <br />
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
    	
    <?php endif ?>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

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
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
