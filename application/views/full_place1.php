<?php
if ($result!=NULL) {
	foreach ($result as $value) {
		$latitude=$value->latitude;
		$longitude=$value->longitude;
	?>
<script type="text/javascript">
  function intimap(){
var mapOptions={
 center: {lat:<?php echo ($latitude);?>,lng:<?php echo ($longitude);?>},
 zoom: 12,
 mapTypeId: google.maps.MapTypeId.TERRAN
};
var map=new google.maps.Map(document.getElementById(<?php echo json_encode($value->map_name);?>),mapOptions);
var marker=new google.maps.Marker({
  position:{lat:<?php echo ($latitude);?>,lng:<?php echo ($longitude);?>},
  map: map,
  title:<?php echo json_encode($value->place_title);?>,
  animation:google.maps.Animation.BOUNCE
});
}
</script>

	<?php
	
	//$main_place_pic=$value->main_place_pic;
	$related_place_pic1=$value->related_place_pic1;
	$related_place_pic2=$value->related_place_pic2;
	$related_place_pic3=$value->related_place_pic3;
	$related_place_pic4=$value->related_place_pic4;
	$place_title=$value->place_title;
	?>

<div id="fb-root"></div>
<script src="<?php echo base_url(); ?>public/js/fbLikeShare.js"></script> 
 <div class="container ">
  <h2 class="fullplace"><?php echo $value->place_title;?></h2><?php if($this->tourism_model->is_user_logged_in()){?>
       
	<?php }?>
<div class="fb-like" data-href="https://www.tourism.com/tourism_con/full_place" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
	
	<div class="row">
	<div class="col-xs-12 col-md-6 col-md-push-6 " id="<?php echo $value->map_name?>">
		    <!-- Map -->
	</div>
	    <div class="col-xs-12 col-md-6 col-md-pull-6 textDesign">
			<h4><?php echo $value->place_descript;?></h4>
		</div>
		</div>
		<h3 class="fullplace">Tourist attractions near the Place</h3>
	<br/>
	<h4 class="fullplace">
	<?php echo $value->related_place_title1;?>
	</h4>
	<div class="row">
		
		<div class="col-xs-12 col-sm-4 col-sm-push-8  img-responsive">
			<?php 
		    if ($related_place_pic1!=null) {
		    	?>
			<a href="<?php echo base_url(); ?><?php echo $related_place_pic1?>" title="<?php echo $value->related_place_title1;?>" class="fancybox"><img src="<?php echo base_url(); ?><?php echo $related_place_pic1?>" title="<?php echo $value->related_place_title1;?>" id="related_place_pic_design"></a>
			<?php }

			?>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-pull-4 textDesign">
			<h5><?php echo $value->first_place;?></h5>
		</div>
	</div>
	<h4 class="fullplace"><?php echo $value->related_place_title2;?></h4>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-push-8  img-responsive">
			<?php 
		    if ($related_place_pic2!=null) {
		    	?>
			<a href="<?php echo base_url(); ?><?php echo $related_place_pic2?>" title="<?php echo $value->related_place_title2;?>" class="fancybox"><img src="<?php echo base_url(); ?><?php echo $related_place_pic2?>" title="<?php echo $value->related_place_title2;?>" id="related_place_pic_design"></a>
			<?php }

			?>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-pull-4 textDesign">
			<h5><?php echo $value->second_place;?></h5>
		</div>
	</div>
	<h4 class="fullplace"><?php echo $value->related_place_title3;?></h4>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-push-8  img-responsive">
			<?php 
		    if ($related_place_pic3!=null) {
		    	?>
			<a href="<?php echo base_url(); ?><?php echo $related_place_pic3?>" title="<?php echo $value->related_place_title3;?>" class="fancybox"><img src="<?php echo base_url(); ?><?php echo $related_place_pic3?>" title="<?php echo $value->related_place_title3;?>" id="related_place_pic_design"></a>
			<?php }

			?>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-pull-4 textDesign">
			<h5><?php echo $value->third_place;?></h5>
		</div>
	</div>
	<h4 class="fullplace"><?php echo $value->related_place_title4;?></h4>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-push-8  img-responsive">
			<?php 
		    if ($related_place_pic4!=null) {
		    	?>
   <a href="<?php echo base_url(); ?><?php echo $related_place_pic4?>" title="<?php echo $value->related_place_title4;?>" class="fancybox"><img src="<?php echo base_url(); ?><?php echo $related_place_pic4?>" title="<?php echo $value->related_place_title4;?>" id="related_place_pic_design"></a>
			<?php }?>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-pull-4 textDesign">
			<h5><?php echo $value->fourth_place;?></h5>
		</div>
	</div>
	<?php	
}
}
else{
	echo" No search results found!"."&nbsp";
	?>
	<a href="<?php echo site_url('tourism_con')?>">Back to Home</a>
	
	<?php
}

?>
</div>


