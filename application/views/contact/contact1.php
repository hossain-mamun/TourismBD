        
<script type="text/javascript">
  function intimap(){
var mapOptions={
  center: {lat: 23.762185, lng: 90.434462},
  zoom: 12,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  maxZoom:13,
  minZoom:9,
  disableDefaultUI:false,
  panControl:true,
  panControlOptions: {
  position: google.maps.ControlPosition.BOTTOM_LEFT
  }
};
var map=new google.maps.Map(document.getElementById('map'),mapOptions);
var marker=new google.maps.Marker({
  position:{lat: 23.762185, lng: 90.434462},
  map: map,
  title:'Our Exact Location',
  animation:google.maps.Animation.BOUNCE
});
}
</script>
  
          <div class="container">
           <div class="row">
            <div class="col-sm-12 ">
            <div class="well well-lg contwell">
               <h3>We'd like to hear from you! </h3>

               <p>Say Hello!Don't be shy</p>
             </div>
             </div>
           </div>
           </div>
             
 <div class="container">
 <h4 class="location">OUR LOCATION</h4>
  <hr/>       
<div class="col-sm-12" id="map">
</div>
<hr/>
</div>
<?php 
if(validation_errors()){ ?>
<div class="row">
<div class="col-sm-5 col-sm-offset-6 ">
<div class="alert">
<?php echo validation_errors();?>
</div>
</div>
</div>
<?php
}
elseif (isset($error)) { ?>
<div class="row">
<div class="col-sm-5 col-sm-offset-6 ">
<div class="alert"> 
<?php echo $error;?>
</div>
</div>
</div>
<?php
}


if (isset($success)) { ?>
<div class="row">
<div class="col-sm-5 col-sm-offset-6 ">
<div class="success"> 
<?php echo $success;?>
</div>
</div>
</div>
<?php
}

?>
      <div class="container">
      <div class="row contpage">
      <div class="col-sm-5 col-md-4 col-md-offset-1 col-sm-offset-1 address">
        <h3> Mailing Address</h3>
        <hr/>
        <small>House#25,Road#2,Block#E,Banasree,Khilgaon,
        Dhaka.</small>
        <h5><i class="fa fa-phone"></i>&nbsp +8801676680626 </h5>
        <h5><i class="fa fa-phone"></i>&nbsp +8801716340278 </h5>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
          <form action="<?php echo site_url("tourism_con/contact_validation");?>" method="post" id="form1">
            <div class="form-group">
              <label for="Name"><i class="fa fa-asterisk fa-1x"></i>Name &nbsp;<span id="user_feedback"></span></label>
                <div class="input-group"><span class="input-group-addon"><span class="glyphicon 
                  glyphicon-user"></span></span>  
                  <input type="text" class="form-control" name="name" id="Name" placeholder="Enter Your Name" />
              </div> 
          </div>
          <div class="form-group">
           <label for="email"><i class="fa fa-asterisk fa-1x"></i>Email Address</label>
            <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email"/>
            </div>
          </div>
          <div class="form-group">
           <label for="message"><i class="fa fa-asterisk fa-1x"></i>Your Message&nbsp;&nbsp;<span id="user_feedback_characters"></span></label>
            <textarea class="form-control" rows="7" name='message' id="user_message" placeholder="Write Your Message..."></textarea>
          </div>
          
          <div class="form-group ">
          
           <input type="submit" class="btn btn-info btn-lg pull-right" value="Send" name="submit" />
          </div>  
        </form>
      </div>
</div>
</div>





                  