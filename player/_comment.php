<div class="feed-foot">
    <div class="feed-comments">
    <?php if($vz->user->Authenticated==true){?>
            <div class="comment">
                <div class="row">
                    <div class="col-md-1">
                        <img src="/themes/ltv/images/person.jpg" style="width: 40px; height: 35px;">
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            <div class="col-md-12"><textarea class="form-control comment-text" rows="4" name="comment" placeholder="Join the Conversation..." required></textarea>
                            <button class="btn-block btn btn-primary" data-video="<?php echo $vid->sources[0]->id;?>" id="add-comment"><i class="fa fa-comment"></i> Add Comment</button></div>
                        </div>
                    </div>
                </div>
            </div>
                 <?php } ?>

                  <?php if(sizeof($vz->comments)>0){
                            include "_comment_item.php";
                    }else{ ?>
                        <div class="comment">
                            <div class="comment-content">be the first one to comment.</div>
                        </div>
                    <?php }?>           
    </div>  
</div>
