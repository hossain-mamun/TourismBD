
<?php 
foreach ($place_contents as $place_details) {
$place_description=$place_details->place_descript;
$place_id=$place_details->place_id;


?>	

		<div class="col-sm-6 col-md-3">
			<div class="row">

				<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0" >
					<h3 class="<?php echo $place_details->grid_color?> xsmallgrid"><?php echo $place_details->place_title?></h3>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0">
					<div class="rating ">
					<a href="<?php echo base_url(); ?><?php echo $place_details->mainImg?>" id="<?php echo $place_details->fancy?>" class="fancybox"><img src="<?php echo base_url(); ?><?php echo $place_details->mainImg?>" title="Click the mouse for better view" alt="<?php echo $place_details->Alt?>" class="img-responsive" id="<?php echo $place_details->Image_size?>"></a>
					
						<div id="<?php echo $place_details->sub_image_container?>" class="smImageStyle">
						<img src="<?php echo base_url(); ?><?php echo $place_details->subImg1?>" id="imgStyle" >	
						<img src="<?php echo base_url(); ?><?php echo $place_details->subImg2?>" id="imgStyle">	
						<img src="<?php echo base_url(); ?><?php echo $place_details->subImg3?>" id="imgStyle">	
						<img src="<?php echo base_url(); ?><?php echo $place_details->subImg4?>" id="imgStyle">	
						</div>
						<p>
						<span class="glyphicon glyphicon-star"title="Bad"></span>
						<span class="glyphicon glyphicon-star"title="Satisfactory"></span>
						<span class="glyphicon glyphicon-star"title="Good"></span>
						<span class="glyphicon glyphicon-star"title="Very Good"></span>
						<span class="glyphicon glyphicon-star"title="Excellent"></span>
	                    </p>
	                    </div>
	             <h4><button class="btn btn-danger" type="button"><i class="fa fa-eye fa-lg"></i>&nbsp<span class="badge"><?php echo $place_details->place_views;?></span></button></h4>
	                    <p class="textDesign"><?php echo substr($place_description,0,110) ;?>... <br/><a class="btn  btn-default btn-sm" href="<?php echo site_url()?>tourism_con/full_place/?place_id=<?php echo $place_id?>" role="button">More...</a></p>
					
				</div>
			</div>
		</div>
		
		<?php
		}?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<?php echo $this->pagination->create_links();?>
		</div>
	</div>
</div>



		
	 
        
      
	

	