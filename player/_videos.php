<?php if($config->showad==true){ if($config->mpu){ ?><div class="advertise" id="companion-ad-300-250"><?php echo $config->mpu; ?></div><?php }}?>

  <?php
   foreach ($vz->videos as $i => $video) {
      $lnk="?v=".$video->mediaid;
      if(isset($_REQUEST['page'])) {
         $lnk = "?v=".$video->mediaid."&page=".$_REQUEST['page'];
      }
      if(!$video->hide){
  ?>
    <?php if($config->grid==2){?>
        <div class="grid video-item <?php echo $video->mediaid==$vz->video?"active":"";?>" data-video="<?php echo $video->mediaid;?>">  
          <div class="video-meta">
            <a href="<?php echo $lnk;?>">
              <div class="col-md-6 col-xs-6 card-view <?php echo $video->mediaid==$vz->video?"active":"";?>">
                <div class="video-thumb " style="background-image:url('<?php echo $video->image; ?>?h=100');background-size:103% 112%;">
                  <?php if($config->length){?><div class="video-duration"><?php echo $vid->live ? 'Live' : toTime($video->duration); ?></div><?php }?>
                  <div class="title"><?php echo $video->title; ?></div>
                </div>
              </div>
            </a> 
          </div>
        </div>
      <?php }else if($config->grid==3){?>
        <div class="grid video-item <?php echo $video->mediaid==$vz->video?"active":"";?>" data-video="<?php echo $video->mediaid;?>">  
          <div class="video-meta">
            <a href="<?php echo $lnk;?>">
              <div class=" col-md-4 col-xs-4 card-view <?php echo $video->mediaid==$vz->video?"active":"";?>">
                <div class="video-thumb" style="background-image:url('<?php echo $video->image; ?>?h=100');background-size:103% 112%;">
                  <?php if($config->length){?><div class="video-duration"><?php echo $vid->live ? 'Live' : toTime($video->duration); ?></div><?php }?>
                  <div class="title"><?php echo $video->title; ?></div>
                </div>
              </div>
            </a> 
          </div>
        </div>  
      <?php }else{?>
        <div class="row video-item <?php echo $video->mediaid==$vz->video?"active":"";?>" data-video="<?php echo $video->mediaid;?>">  
          <?php if($config->thumb){?>       
            <a href="<?php echo $lnk;?>">
              <div class="video-thumb col-md-5 col-xs-4" style="background-image:url('<?php echo $video->image; ?>?h=100');background-size:103% 112%;">
                <?php if($config->length){?><div class="video-duration"><?php echo $vid->live ? 'Live' : toTime($video->duration); ?></div><?php }?>
              </div>
            </a>    
            <div class="video-meta col-md-7 col-xs-8">
              <?php }else{?>
              <div class="video-meta col-md-12 col-xs-12">
                <?php }?>  
                  <a href="<?php echo $lnk;?>">
                    <div class="heading"><?php echo $video->title; ?></div>
                  </a>
                <?php if($config->shortdesc){ ?><div class="description"><?php echo $video->description; ?></div><?php }?>
                <?php if($config->value){ ?>
                  <div class="time-place">
                      <i class="fa fa-eye"></i> <?php echo $video->views; ?> | <?php echo time2str($video->created);?>
                  </div>
                <?php }?>
                <?php foreach ($video->categories as $c => $cat) {?>
                    <a href="/player/category/<?php echo $cat->id; ?>" class="category category-<?php echo $cat->name; ?>">
                      <?php echo $cat->name; ?>
                    </a>
                <?php }?>
              <!-- <?php if($config->value){ if($video->price > 0 && $video->price != null){ ?>
                <a <?php echo $_SESSION['user']->Authenticated ?  '' : 'href=/account/login?redirect='.urlencode($_SERVER['REQUEST_URI'])?> class="btn btn-primary <?php echo $_SESSION['user']->Authenticated ? 'purchase' : '';?>" data-id="<?php echo $video->mediaid;?>" data-price="<?php echo $video->price;?>"><i class="fa fa-<?php echo $video->clientcurrency === null ? 'dollar' : strtolower($video->clientcurrency);?>"></i> <?php echo $video->price;?> <i class="fa fa-shopping-cart"></i></a>
              <?php }}?> -->
              </div>
          </div> 
      <?php }?>
<?php }} ?>

<?php 
pagination($vz->videos,$_REQUEST['page'],$config->PlaylistItems,$videos_count);

?>