<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/bootstrap.min.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheet.css");?>">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
 <div class="row logo">
 <div class="col-xs-6 col-sm-3 ">
 	<img src="<?php echo base_url("public/images/bd.jpg")?>" alt="Logo" class="img-responsive">
 </div>
	<div class="col-xs-6  col-sm-6 col-sm-offset-3 search">
		<form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
	</div>
</div>
</div>
<div class="container">
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
      <a class="navbar-brand" href="#">Tourism</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse collapse" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">SiteMap</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">LogIn</a></li>
      </ul>

      </div>
      </div>
      </nav>
      </div>
      

	<div class="container">
    <div class="footer">
    <div class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand ">&copy; Hossain Mamun <?php echo date("Y"); ?></div> </div>
   <!--nav-collapse --> 
  </div>
</div>
   </div>   <!--+++++++++++++++++++++++++-->
 </div>
 
  


<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>     
<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.min.js");?>"></script>

</body>
</html>