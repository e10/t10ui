<?php 
    Global $vid,$BRAND;
    $vid=$vz->videoinfo;
    $col=sizeof($vz->videos)>1 ? "col-md-7 col-md-push-5" : "col-md-12";
    if($vid!=null){ 
?>
<div class="<?php echo $col;?> vz-tv" style="font-family: <?php echo $vz->font?>">
  <?php include "_cinema.php"; ?>
  <div class="col-md-12 vid-description">
    <div class="row">            
        <div class="col-sm-12">
            <?php if($config->title==true){ ?><h1 class="video-title"><?php echo $vid->title;?></h1><?php }?>
        </div>
        <?php if($config->longdesc==true){ ?><div class="col-md-12 desc"><?php echo $vid->description; ?></div><?php }?>
        <p class="col-sm-12 vid-category">
            <?php $resultstr = array();
            foreach ($vid->categories as $c => $cat) { $resultstr[] = $cat->name; }
            $result = implode(",",$resultstr);?> 
            <span><?php echo $result; ?></span>
        </p> 
        <div class="advertise">
            <?php if($config->showad==true){ if($config->leaderboard){?><div class="col-md-12"><?php echo $config->leaderboard; ?></div><?php }}?>
        </div>
        <div class="duration pull-left col-sm-3">
            <?php if($config->length){ echo $vid->live ? 'Live' : toTime($vid->duration); }?> <?php echo $vid->categories[0]->Name; ?>
        </div>
        <div class="pull-right col-sm-9 text-right">
            <a href="<?php echo $_SESSION['user']->Authenticated == true ?  '#feed-foot' : '/account/login?redirect='.urlencode($_SERVER['REQUEST_URI'])?>" <?php echo $_SESSION['user']->Authenticated == true ?  'data-toggle="collapse"' : ''?>><span><i class="fa fa-comment"></i> Comments <?php echo $vz->commentsizelabel;?></span></a>
            <!--<a id="tv-view" href="#"><span><i class="fa fa-desktop icons"></i> TV View</span></a>-->
            <?php foreach ($vid->sources as $i => $source) { $download = true; if(!$source->down){$download = false; break;} } if($config->download && $download){ ?>
                <a id="vidDownload" data-redirect="<?php echo !$_SESSION['user']->Authenticated ? $_SERVER['REQUEST_URI'] : '';?>" data-video="<?php echo $vid->sources[0]->id;?>"><span><i class="fa fa-download icons"></i> Download</span></a>
            <?php }?>  
            <?php if($config->share==true){ ?><a href="#share-box" data-toggle="collapse"><span><i class="fa fa-share-square icons"></i> Share</span></a>
            <a href="<?php echo $_SESSION['user']->Authenticated == true ?  '#email-box' : '/account/login?redirect='.urlencode($_SERVER['REQUEST_URI'])?>" <?php echo $_SESSION['user']->Authenticated == true ?  'data-toggle="collapse"' : ''?>><i class="fa fa-file icons"></i> Email</a><?php }?>
            <?php if($config->addtolist==true){ ?><?php if(isset($vz->user->ID)){ ?>
            <a href="<?php echo $_SESSION['user']->Authenticated == true ?  '#add-to-list' : '/account/login?redirect='.urlencode($_SERVER['REQUEST_URI'])?>" <?php echo $_SESSION['user']->Authenticated == true ?  'data-toggle="collapse"' : ''?>><span><i class="fa fa-plus-circle icons"></i> Add To</span></a>
            <?php }?><?php }?>
        </div>
    </div>
     <?php if(isset($vz->user->ID)){ ?>
    <div id="add-to-list" class="collapse row">
        <div class="col-sm-12">
            <div class="well-gray">
                <ul class="add-to-list list-unstyled"  data-video="<?php echo $vid->sources[0]->id;?>">
                 <?php foreach ($userplaylists as $c => $pl) {
                    include "_add_to_list.php";
                 }?>
                </ul>
            </div>
        </div>
        <div class="col-sm-12">
            <form role="form" class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPlaylist">Playlist Name</label>
                    <input type="text" maxlength="20" class="form-control col-lg-5 col-md-3 col-sm-6" id="exampleInputPlaylist" placeholder="Enter playlist name">
                </div>
                <div class="checkbox"><label><input type="checkbox"> Private</label></div>
                <button type="button" id="btn-create-playlist" data-video="<?php echo $vid->sources[0]->id;?>" data-loading-text="creating..." class="btn btn-default">Create Playlist</button>
            </form>
        </div>
    </div>
    <?php }?>

    <div id="share-box" class="collapse row text-right">
        <hr class="soften" />
        <ul class="social-share col-md-12 list-unstyled list-inline">
            <li><a class="socialite twitter-share" href="http://twitter.com/share" data-via="vidzapper" data-count="vertical" data-url="<?php echo 'http://'.$host.$_SERVER['REQUEST_URI'];?>" data-text="<?php echo $vid->Title;?>" rel="nofollow" target="_blank"><span>Share on Twitter</span> </a></li>
            <li><a class="socialite facebook-like facebook" data-href="<?php echo 'http://'.$host.$_SERVER['REQUEST_URI'];?>" href="<?php echo $path;?>" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span>Share on Facebook</span> </a></li>
            <li><a class="socialite googleplus-one" data-size="tall" data-href="<?php echo 'http://'.$host.$_SERVER['REQUEST_URI'];?>" href="<?php echo $path;?>" rel="nofollow" target="_blank"><span>Share on Google+</span> </a></li>
            <li><a class="socialite linkedin-share" data-url="<?php echo 'http://'.$host.$_SERVER['REQUEST_URI'];?>" href="<?php echo $path;?>" data-counter="top" rel="nofollow" target="_blank"><span>Share on LinkedIn</span> </a></li>
            <li><a class="socialite pinterest-pinit" title="http://pinterest.com/pin/create/button/?url=<?php echo urlencode($path);?>&media=<?php echo urlencode($video->Image."?h=100"); ?>&description=<?php echo urlencode($vid->Title);?>" href="<?php echo $path;?>" data-count-layout="vertical"><span>Pin It!</span></a></li>
        </ul>
    </div>
    <div id="email-box" class="collapse row col-md-12" action="_email.php">
        <div id="emailvalidation">
            <?php if($_SESSION['user']->Authenticated == true){ ?>   
                <hr class="soften"/>
                    <input name="subject" type="hidden" class="form-control" value="<?php echo $vid->title;?>" id="email-sub"/>
                    <div class="form-group"><input name="to" placeholder="email addresses..." type="text" class="form-control" id="email-to"/></div>
                    <div class="form-group"><textarea name="message" rows="6" cols="50" class="form-control" id="email-msg" placeholder="Your Message..."></textarea></div>
                    <button type="submit" data-loading-text="sending..." id="btn-send-mail" class="btn btn-warning" value="Submit" disabled="disabled"><i class="fa fa-send"></i> Send</button>
            <?php } ?>
        </div>
    </div>
    <div id="feed-foot" class="in"> 
        <?php include "_comment.php"; ?>
    </div>
  </div>
</div>
<?php if(sizeof($vz->videos)>1){?>
<div class="col-md-5 col-md-pull-7 video-list">
  <?php include "_videos.php"; ?>
</div>
<?php } 
    $vz->Scripts=array(
    "//imasdk.googleapis.com/js/sdkloader/ima3_debug.js",
    "/js/vz/vendors/knockout.js",
    "/js/vz/vendors/ko.mapping.js",
    "/js/vz/vendors/underscore.js",
    "/js/vz/vendors/moment.js",
    "/js/vz/vendors/jwplayer.js",
    "/js/vz/vendors/jwplayer.html5.js",
    "/js/vz/vendors/core.url.js",
    "/js/vz/core.js",
    "/js/vz/player.js",
    );
function custom_scripts(){
    global $vz,$config,$vid;
?>
<script type="text/javascript">
$(function(){ 
    var player=new Player({
        where:"#cinema",server:<?php echo json_encode($config->auth->server)?>,
        components:
        {
            screen: {
                uri:'?v={ID!}',
                title:'{TITLE!} - <?php echo $BRAND;?>',
                playlist:'.video-list .video-item',
                autostart:<?php echo json_encode($config->autostart)?>,
                skin:<?php echo json_encode($config->player->skin)?>,
                ads:function(){
                     return <?php echo json_encode($vz->ads->items)?>;
                },
                events:{
                    onComplete: function(e,player) { 
                      if($('.video-item').length)
                        {
                            player.pause(true);
                            var nextids=$('.video-item.active').next('.video-item').find('.video-meta').children('a:first-child').attr('href');
                            if($.type(nextids) === "undefined"){var nextids=$('.video-list:first .video-item').find('.video-meta').children('a:first-child').attr('href');} //For Last Video From Playlist
                            window.location = nextids;
                        }
                    }
                }
            },
            heart:{},
            binder:{
                mode:'rox',
                current:<?php echo json_encode($vz->index)?>,
                items:function(){ 
                    return <?php echo json_encode($vz->videos)?>;
                }
            },
        }
    });     
})
</script>
<?php }}else{?>
<div class="col-md-12 col-tv">
    <h1>This video is unavailable.</h1>
    <p>Sorry about that.</p>
</div>
<?php }?>