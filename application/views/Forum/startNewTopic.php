  <div class='container forumBG'>
    <div class="row ForumTopicBG">
     <form action="#" method="post">
 	  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 ForumInputDesign">
 	    <div class="form-group ">
          <input type="text" class="form-control" name="name" id="Name" placeholder="Enter Topic Title"/>
         </div> 
      </div>
 	 <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 forumPlaceDropdown ">
      <div class="form-group">
        <select class="form-control" id="catg" name="categories">
          <option value="">Tourist Place</option>
          <?php
             foreach ($place_name as $place_selection) {
           ?>
          <option value="<?php echo $place_selection->place_title;?>"><?php echo $place_selection->place_title;?></option>
          <?php }?>
          <option value="">Others</option>
        </select>
      </div>
    </div>
     <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 forumPlaceDropdown ">
      <div class="form-group">
        <select class="form-control" id="catg1" name="subCategories">
          <option value="">Related Place</option>
           <?php
             foreach ($place_name as $sub_place_selection) {
           ?>
           <?php if ($sub_place_selection->related_place_title1!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title1;?>">
          <?php echo $sub_place_selection->related_place_title1;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title2!=null) {?>
          <option value="<?php echo $sub_place_selection->related_place_title2;?>">
          <?php echo $sub_place_selection->related_place_title2;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title3!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title3;?>">
          <?php echo $sub_place_selection->related_place_title3;?>
          </option>
          <?php  }?>
          <?php if ($sub_place_selection->related_place_title4!=null) {?>
           <option value="<?php echo $sub_place_selection->related_place_title4;?>">
          <?php echo $sub_place_selection->related_place_title4;?>
          </option>
          <?php  }?>
          <?php }?>
          <option value="">Others</option>
        </select>
      </div>
    </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 ForumDescriptDesign">
 	   <textarea class="form-control" rows="7" name='post' id="#" placeholder="Write Your Post"></textarea> 
 	   <button type="submit" class="btn btn-primary">Post</button>
      </div>
 	 </form>	 
 	  </div>
 	</div>