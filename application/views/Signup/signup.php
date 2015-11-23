<div class="container">
<div class="row ">
 <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 signup">
 <div class="signupDiv"><h3><i class="fa fa-users fa-2x fa-fw"></i><br/><a href="<?php echo site_url('tourism_con/create_account')?>">Create Account</a></h3></div>

 <h4>Your personal details</h4>
 <hr/>
 <?php
if (validation_errors()) {?>
<div class="loginAndSignupAlert"> 
<?php echo validation_errors();?>
</div>
<?php  
}
elseif (isset($success)) {?>
<div class="signupSuccess"> 
<?php echo $success;?>
</div>
<h4><a href="<?php echo site_url()?>tourism_con/login/" role="button">Now login</a></h4>
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
  	<form action="<?php echo site_url('tourism_con/signup_validation')?>" method="post" id="form2">
    <div class="form-group">
      <label for="name">Full Name:</label>
      <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control fontstyle" name="fullname" id="name" placeholder="Enter Your Name" autofocus="autofocus"/>
       </div>
     </div>
     <div class="form-group">
     	<label for="email"><i class="fa fa-asterisk"></i>Email Address:</label>
     	<div class="input-group"><span class="input-group-addon"><i class="fa fa-at"></i></span>
         <input type="email" class="form-control fontstyle" name="email" id="email" placeholder="Enter Your Email"/>
       </div>
     </div>
      <div class="form-group">
     	<label for="password"><i class="fa fa-asterisk"></i>Password:</label>
     	<div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
         <input type="password" class="form-control fontstyle1" name="password" id="password" placeholder="Enter Your Password"/>
       </div>
     </div>
     <div class="form-group">
      <label for="cpassword"><i class="fa fa-asterisk"></i>Confirm Password:</label>
      <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
         <input type="password" class="form-control fontstyle1" name="cpassword" id="cpassword" placeholder="Re Enter Your Password"/>
       </div>
     </div>
  	<div class="form-group ">
    <input type="submit" class="button btn col-xs-offset-1 col-sm-offset-2" id="button" value="Continue" name="submit" />
   </div> 
  </form>
  </div>
  </div>
  
 </div>
</div>
</div>
