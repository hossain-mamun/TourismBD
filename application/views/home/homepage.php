<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?php if (isset($homepage)) {
   echo $homepage;}
    elseif (isset($title)) {
    	echo $title;
    }
     elseif (isset($contact)) {
    	echo $contact;
    }
    elseif (isset($login_title)) {
    	echo $login_title;
    }
    elseif (isset($signup_title)) {
    	echo $signup_title;
    }
    
    ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.min.css");?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/animate.min.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheet.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/fancyBox/source/jquery.fancybox.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/fonts/font-awesome/css/font-awesome.min.css");?>">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Rokkitt:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <script type="text/javascript">
    
        function validateForm(){
        var search= document.getElementById('searchBox').value;
          if (search=='') {
            
          	return false;
          }
          else
          {
          	return true;
          }
	 }
    </script>
</head>
<body>
<div class="websiteCoverPic">
<div class="container">
 <div class="row logo">
 <div class="col-xs-8 col-sm-4 col-md-3">
 	<img src="<?php echo base_url("images/bd1.jpg")?>" alt="Logo" class="img-responsive">
 </div>
	<div class="col-xs-10  col-sm-8 col-md-offset-1 ">
		<form action="<?php echo site_url("tourism_con/search")?>" method="get" class="navbar-form navbar-right search" role="search" onsubmit="return validateForm();">
        <div class="form-group">
          <input type="text" name="search" class="form-control empty" id="searchBox" placeholder="&#xF002;">
        </div>
        <input type="submit" class="btn btn-info" value="search">
      </form>
      <marquee behavior="scroll" class="marquee" scrolldelay='5' scrollamount='2'><p> Most of the pictures are collected from different websites.If you have problem with any particular image so let us know we will remove the image.</p></marquee>
	</div>
</div>
</div>
<div class="container"><!-- Srating Nav -->
<nav class="navbar navbar-default nbg" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url("tourism_con")?>">Tourism</a>
    </div>

    
    <div class="navbar-collapse collapse" >
      <ul class="nav navbar-nav navbar-right">
        <li  id="home"><a href="<?php echo site_url("tourism_con")?>">Home <span class="sr-only">(current)</span></a></li>
        <li id="sitemap"><a href="<?php echo site_url("tourism_con/sitemap")?>">SiteMap</a></li>
        <li id="contactUs"><a href="<?php echo site_url("tourism_con/contact")?>">Contact Us</a></li>
        <?php if (!$this->tourism_model->is_user_logged_in()){?>
        	
        
        <li id="logIn"><a href="<?php echo site_url("tourism_con/login")?>">LogIn</a></li>
        <?php
        }
        ?>
        <?php
         if($this->tourism_model->is_user_logged_in()){?>
         <li class="dropdown" id="loginName"> <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"><?php echo $this->session->userdata('current_user_name');?> <b class="caret"></b></a>
          	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          	  <li><a href="#"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
          	  <li class="divider"></li>
          	  <li><a href="<?php echo site_url('tourism_con/signout');?>"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
              
           </ul>
         </li>
         <?php
         }
        ?>
      </ul>

      </div>
      </div>
      </nav>
      </div><!-- Ending Nav -->
      <!-- Now Strating the Master page concept-->

      <?php 
         if (isset($carousel)) {?>
         	<div class="container" id="carouShowHide">
         	 <div class="row">
         	  <div class="col-xs-12 col-sm-12 ">
         		<?php $this->load->view($carousel); ?>
         	</div>
         	</div>
         	</div>
          
         	<?php
         }
       if (isset($home1)) { ?>
       <div class="container">
	     <div class="row">
	     <?php
           $this->load->view('home/'.$home1);
           ?>
           </div>
           </div>
           <?php
          }

          elseif (isset($sitemap)) {
          	$this->load->view('sitemap/'.$sitemap);
          }
          
          elseif (isset($contact1)) {
           $this->load->view('contact/'.$contact1);
          }
          elseif (isset($login)) {
          	$this->load->view('Login/'.$login);
          }
          elseif (isset($signup)) {
          	$this->load->view('Signup/'.$signup);
          }
          
      ?>
<!-- Ending the master page concept -->
	
  <div class="container"> <!-- Now the footer starting -->
   <div class="navbar footerBg" role="navigation">
    <div class="container">
     <div class="row">
      <div class="col-sm-6 col-sm-push-8 ">
         <h4 id="socialLink">Around the Web</h4>
          <ul class="list-inline">
            <li id="facebook">
             <a href="https://www.facebook.com/mamunh2" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook fa-lg"></i></a>
            </li>
            <li id="twitter">
             <a href="https://twitter.com/?lang=en" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter fa-lg"></i></a>
            </li>
            <li id="googleplus">
             <a href="https://plus.google.com/" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus fa-lg"></i></a>
            </li>
            <li id="linkedin">
             <a href="https://www.linkedin.com/hp/?dnr=PseeG1ajiq6LU9HDPM9pz1S4ziCfVckKBXW2" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin fa-lg"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-sm-pull-6"> 
        <h4 class="footer">&copy; Hossain Mamun <?php echo date("Y"); ?></h4>
      </div>
      </div>
  </div>
   </div>   <!--+++++++++++++++++++++++++-->
 </div>
</div>
 <script async defer
      src="https://maps.googleapis.com/maps/api/js?&callback=intimap">
    </script>
<script src="<?php echo base_url("public/js/map.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/custom.js?");?>"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>     
<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.min.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/fancyBox/lib/jquery-1.10.1.min.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/fancyBox/lib/jquery.mousewheel-3.0.6");?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/fancyBox/source/jquery.fancybox.pack.js");?>"></script>



</body>
</html>

         	