<li><a href="#" id="add-to-lists" data-playlist="<?php echo $pl->ID;?>" data-slug="<?php echo $pl->Slug;?>">
<?php if($pl->IsPublic=="true"){ ?><i class="fa fa-globe"></i><?php }else{ ?><i class="fa fa-lock"></i><?php }?> <?php echo $pl->Name; ?> <span></span></a>
    <small><?php echo time2str($pl->Created); ?></small>
    <?php if($c > 0){ ?><a href="#"><i class="pull-right fa fa-trash-o" id="removeList" data-playlist="<?php echo $pl->ID;?>"></i></a><?php }?>
</li>