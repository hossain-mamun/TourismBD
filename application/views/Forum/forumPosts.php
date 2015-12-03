	      
      	<div class="row forumwell">
          <div class="col-sm-12 ">
           <div class="well well-lg">
             <h2>Post Gallery</h2>
           </div>
          </div>
         </div>
           
	   <div class='container forumBG'>

	     <?php 
	     foreach ($forum_details as $forum_post_details) {
	     ?>
	    <div class="row">
	 	 <div class="forumPosts col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-1 ">
	 	   <h3 autofocus='autofocus'><strong > <a href="<?php echo site_url()?>tourism_con/full_post_details/?post_id=<?php echo $forum_post_details->post_id?>"> <?php echo $forum_post_details->topic_title?></a></strong></h3>

	 	    Written By:<strong><?php echo $forum_post_details->user_name?></strong><br/>
	 	    Posted on <strong><?php echo $forum_post_details->written_time?></strong>
	 	    <p><?php echo substr($forum_post_details->description,0,105) ;?> ...</p>
	 	  </div>
	 	   <di v class="col-xs-10 col-xs-offset-1 col-sm-2 col-sm-offset-0 forumComment">
	             <div class="row">
	 	       <div class="col-sm-12 forumCommentSub">
	 	        <i class="fa fa-comments fa-1x"> 10</i>
	 	       </div>
	 	      <div class="col-sm-12 forumCommentSub">
	 	       <i class="fa fa-eye fa-1x"> <?php echo $forum_post_details->post_views?></i>
	 	      </div>
	 	     </div>
	 	    </div>
	    </div>
	 
	 <?php }?>
          <div class="col-sm-4 col-sm-offset-4">
           <?php echo $this->pagination->create_links();?>
	  </div>
 </div> 

