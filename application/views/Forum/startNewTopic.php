  
  <div class='container forumBG'>
     <div class="row forumStartNewTopicwell">
	<div class="col-sm-12 ">
	   <div class="well well-lg">
	     <h2>Share Your Experiance</h2>
	    </div>
	</div>
     </div>
    <div class="row ForumTopicBG">
      <?php
       if (validation_errors()) {?>
       <div class="loginAndSignupAlert"> 
      <?php echo validation_errors();?>
      </div>
      <?php }
       elseif (isset($error)) {?>
           <div class="loginAndSignupAlert">
           <?php echo $error;?>
           </div>
      <?php     
       }
      ?>
     <form action="<?php echo site_url('tourism_con/forum_post_validation');?>" method="post">
 	  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 ForumInputDesign">
 	    <div class="form-group ">
             <input type="text" class="form-control" name="topic_title" id="Topic" placeholder="Enter Topic Title" required/>
            </div> 
         </div>
 	 <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 forumPlaceDropdown ">
          <div class="form-group">
           <select class="form-control" id="catg" name="place_select">
            <option value="">Tourist Place</option>
             <?php
              foreach ($place_name as $place_selection) {
             ?>
            <option value="<?php echo $place_selection->place_title;?>"><?php echo set_select('place_select', '<?php echo $place_selection->place_title;?>'); ?><?php echo $place_selection->place_title;?></option>
            <?php }?>
            <option value="">Others</option>
          </select>
         </div>
        </div>
     <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 forumPlaceDropdown ">
      <div class="form-group">
        <select class="form-control" id="catg1" name="sub_place_select">
          <option value="">Related Place</option>
           <?php
             foreach ($place_name as $sub_place_selection) {
           ?>
           <?php if ($sub_place_selection->related_place_title1!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title1;?>">
           <?php echo set_select('sub_place_select', '<?php echo $sub_place_selection->related_place_title1;?>'); ?>
          <?php echo $sub_place_selection->related_place_title1;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title2!=null) {?>
          <option value="<?php echo $sub_place_selection->related_place_title2;?>">
          <?php echo set_select('sub_place_select', '<?php echo $sub_place_selection->related_place_title2;?>'); ?>
          <?php echo $sub_place_selection->related_place_title2;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title3!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title3;?>">
           <?php echo set_select('sub_place_select', '<?php echo $sub_place_selection->related_place_title3;?>'); ?>
          <?php echo $sub_place_selection->related_place_title3;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title4!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title4;?>">
           <?php echo set_select('sub_place_select', '<?php echo $sub_place_selection->related_place_title4;?>'); ?>
          <?php echo $sub_place_selection->related_place_title4;?>
          </option>
          <?php  }?>
          <?php }?>
          <option value="others"><?php echo set_select('sub_place_select', 'others'); ?>Others</option>
        </select>
      </div>
    </div>
       <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 ForumDescriptDesign">
 	 <textarea class="form-control" rows="7" name='post' id="#" placeholder="Write Your Post" required></textarea> 
 	   <button type="reset" class="btn btn-warning">Reset</button>
 	   <button type="submit" class="btn btn-primary">Post</button>
      </div>
 	 </form>	 
 	  </div>
 	</div>
