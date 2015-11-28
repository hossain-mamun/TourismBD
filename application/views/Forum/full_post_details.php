<div class='container forumBG'>
 <?php 
 foreach ($full_post_results as $post_results) {
 ?>
 <div class="row ">
  <div class="forum_full_Posts col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-1">
   <h2><strong ><?php echo $post_results->topic_title?></strong></h2>
    Written By:<strong><?php echo $post_results->user_name?></strong><br/>
    <hr/>
	 <p><?php echo $post_results->description ;?></p>
	 <div class="row forum_full_Posts_bottom">
	 	<div class=" col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-1">
	 	  <a href="#"><i class="fa fa-thumbs-o-up fa-lg">&nbsp;&nbsp;6</i></a><a href="#"><i class="fa fa-thumbs-o-down fa-lg">&nbsp;&nbsp;3</i></a><i class="fa fa-clock-o fa-lg"></i>&nbsp;&nbsp;<small>Posted on: <?php echo $post_results->written_time?></small> 
       </div>
      </div> 
       </div>
       </div>
       <?php } ?>
       
         <?php 
         foreach ($all_comments as $comments_results) {
         ?>
       <div class="row">
        <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-1 commentPublished">
        	<strong><?php echo $comments_results->comment_post_by?></strong>:&nbsp;<small><?php echo $comments_results->comment?></small>
        </div>
       </div>
       <?php }
	    if ($this->tourism_model->is_user_logged_in()){ ?>
	    
       <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0"id="comment">
         <form action="<?php echo site_url('tourism_con/comment_insert');?>/?post_id=<?php echo $post_results->post_id?>" method="post">
  	      <textarea class="form-control" rows="4" name='comment' id="#" placeholder="Write a comment.."autofocus='autofocus'required></textarea>
  	      <input type="submit" class="btn btn-primary" value="publish">
         </form>	 
       </div>
      
	  <?php } ?>

</div>


 
 

