<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forum</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.min.css");?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheet.css");?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/fonts/font-awesome/css/font-awesome.min.css");?>">
   <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container-fluid forumHeaderPic">
	<div class="row">
		<div class="col-xs-12 ">
			<img src="<?php echo base_url("images/forum.png")?>" alt="Forum Pic" class="img-responsive">
		</div>
	</div>
</div>
<div class="container"><!-- Srating Nav -->
 <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <img class="navbar-brand " src="<?php echo base_url("images/forumbrand.jpg")?>">
    </div>
     <div class="navbar-collapse collapse" >
      <ul class=" nav navbar-nav forumDropdown">
      	<li class="dropdown"> <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">Jump to<b class="caret"></b></a>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="<?php echo site_url("tourism_con")?>">Home</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url("tourism_con/contact")?>">Contact</a></li>
          <li class="divider"></li>
          <?php 
          if (!$this->tourism_model->is_user_logged_in()){ ?>
         <li id="logIn"><a href="<?php echo site_url("tourism_con/login")?>">LogIn</a></li>
         <li class="divider"></li>
         <?php }?>
          
          <li><a href="<?php echo site_url("tourism_con/sitemap")?>">SiteMap</a></li>
        </ul>
       </li>
      </ul>
      <?php
      if($this->tourism_model->is_user_logged_in()){?>
        <ul class="nav navbar-nav navbar-right forumUserName">
       	 <li class="dropdown" id="loginName"> <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"><?php echo $this->session->userdata('current_user_name');?> <b class="caret"></b></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      	   <li><a href="#"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
      	   <li class="divider"></li>
      	   <li><a href="<?php echo site_url('tourism_con/forumSignout');?>"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
          </ul>
         </li>
       </ul>
       
       <?php }
        if(!$this->tourism_model->is_user_logged_in()){
       ?>
       <a class=" btn forumCustomButton navbar-right disabled" id="ForumOffline" href="#" role="button">Start New Topic</a>
       <?php }
        else{ ?>
        	<a class="btn forumCustomButton navbar-right"  href="" role="button">Start New Topic</a>
        <?php }

       ?>
        <form class="navbar-form navbar-right forumForm" role="search">
         <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Topics">
         </div>
        <button type="submit" class="btn btn-info">Search</button>
       </form>
       
      </div>
   </div>
  </nav>
    <?php 
   for ($i=0; $i <5 ; $i++) { 
   	
   
  ?>
 
   <div class='container forumBG'>
    <div class="row">
 	 <div class="forumPosts col-sm-8 col-sm-offset-1 ">
 	   <h3><strong>Cox's Bazar Accomadation Facility</strong></h3>
 	    Written By:<strong> Hossain Mamun</strong><br/>
 	    Written Time: <strong>25-11-2015</strong>
 	    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... 
 	    up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
 	 </div>
 	   <div class="col-sm-2 forumComment">
 		 <div class="row">
 		  <div class="col-sm-12 forumCommentSub">
 			<i class="fa fa-comments fa-2x"> 10</i>
 		  </div>
 		  <div class="col-sm-12 forumCommentSub">
 		  	<i class="fa fa-eye fa-2x"> 30</i>
 		  </div>
 		 </div>
 	  </div>
 	</div>
 </div>
 <?php }?>
 </div> 
 


<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>     
<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.min.js");?>"></script>
</body>
</html>