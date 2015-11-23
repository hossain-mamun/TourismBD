<?php


?>
<div class="container ">
<div class="row ">
 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4  login">
 <div class="loginDiv">

 <h3><i class="fa fa-user fa-2x fa-fw"></i><br/>Account Login</h3>
</div>
 <h4>Enter your login details</h4>

 <?php
if (validation_errors()) {?>
<div class="loginAndSignupAlert"> 
<?php echo validation_errors();?>
</div>
<?php  
}
elseif (isset($error)) {?>
 <div class="loginAndSignupAlert"> 
<?php echo $error;?>
</div>
<?php
}
?>

 <div class="row">
  <div class="col-sm-12">
  	<form action="<?php echo site_url('tourism_con/login_validation');?>" method="post" id="form1">
     <div class="form-group">
     	<label for="email">Email Address:</label>
     	<div class="input-group"><span class="input-group-addon"><i class="fa fa-at"></i></span>
         <input type="email" class="form-control fontstyle" name="email" id="email" placeholder="Enter Your Email" autofocus/>
       </div>
     </div>
      <div class="form-group">
     	<label for="password">Password:</label>
     	<div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
         <input type="password" class="form-control fontstyle1" name="password" id="password" placeholder="Enter Your Password"/>
       </div>
     </div>
     <div class="form-group ">
    <input type="submit" class="button btn col-xs-offset-1 col-sm-offset-2" id="button" value="Sign in" name="submit" />
   </div>  
  	</form>
  </div>
  </div>
  
  <div class="join">
  	<strong>New user?&nbsp;<a href="<?php echo site_url('tourism_con/create_account');?>">Join now</a></strong>
  </div>
 </div>
</div>
</div>
