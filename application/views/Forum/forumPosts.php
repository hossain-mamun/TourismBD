     <?php 

   foreach ($forum_details as $forum_post_details) {
   ?>
   <div class='container forumBG'>
    <div class="row">
 	 <div class="forumPosts col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-1 ">
 	   <h3><strong> <a href="#"> <?php echo $forum_post_details->topic_title?></a></strong></h3>
 	    Written By:<strong><?php echo $forum_post_details->user_name?></strong><br/>
 	    Written Time: <strong><?php echo $forum_post_details->written_time?></strong>
 	    <p><?php echo substr($forum_post_details->description,0,110) ;?></p>
 	 </div>
 	   <div class="col-xs-10 col-xs-offset-1 col-sm-2 col-sm-offset-0 forumComment">
 		 <div class="row">
 		  <div class="col-sm-12 forumCommentSub">
 			<i class="fa fa-comments fa-1x"> 10</i>
 		  </div>
 		  <div class="col-sm-12 forumCommentSub">
 		  	<i class="fa fa-eye fa-1x"> 30</i>
 		  </div>
 		 </div>
 	  </div>
 	</div>
 </div>
 <?php }?>