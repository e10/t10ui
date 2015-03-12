<div id="comment-count" style="display:none"><span><i class="fa fa-comment"></i> Comments (<?php echo $vz->comment_count;?>)</span></div>
<?php foreach ($vz->comments as $i => $comment) {
  $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $comment->Email ) ) ) . "?s=40";?>
    <div class="media">
      <a class="pull-left" href="#">
       <img class="media-object" src="<?php echo $grav_url;?>" style="width: 64px; height: 64px;">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $comment->Name;?></h4>
        <?php echo $comment->Message;?><br />
        <small class="muted"><?php echo time2str($comment->DatePostedUTC);?></small>
      </div>
    </div>
<?php }?>