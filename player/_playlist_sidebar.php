<?php $act=startsWith(strtolower($_SERVER["REQUEST_URI"]),"/player/watch")?"active":"";?>
<ul class="nav nav-list">
<li><a href="<?php echo $vz->user->setting;?>"><i class="fa <?php echo isset($_SESSION["user"]) || $config->guest ? 'fa-user'  : 'fa-sign-in';?>"></i><?php echo isset($_SESSION["user"]) || $config->guest ? "Welcome, ".$vz->user->FullName  : "Login / Register";?></a></li>
<?php if($config->search==true){ ?><li><div class="form-group"><input type="search" name="q" id="q" class="form-control" placeholder="Search"><button class="btn btn-primary col-lg-12 col-xs-12" id="btn-search" style="margin-top:5px"><i class="fa fa-search"></i>  Search</button></div></li><?php }?>  
<!--<li><a href="/player/popular"><i class="fa fa-film"></i>Popular</a></li>-->
<li class="nav-seperator <?php echo $act;?>"><a href="/player/watch"><i class="fa fa-film"></i>Latest</a></li>
<?php if(isset($_SESSION['user'])){ if($config->list){ if(isset($userplaylists)){?>
<li class="nav-header nav-my-channels"><span>My Channels</span></li>
<?php foreach ($userplaylists as $c => $pl) {
  include "views/player/_sidebar_links.php";
}?>
<!--SEPARATE-->
<?php }}}?>
<?php if($config->playlist==true){ ?>
<li id="public-playlist" class="nav-header nav-channels"><span>Channels</span></li>
<?php if(isset($vz->Playlists)){
for($i=0;$i<count($vz->Playlists);$i++){
$playlistLink=$ROOT."player/playlist/".$vz->Playlists[$i]->ID;;
$act=$vz->Playlists[$i]->ID==$vz->playlist?"active":"";?>
<li class="<?php echo $act;?>"><a data-id="<?php echo $vz->Playlists[$i]->ID;?>" href="<?php echo $playlistLink?>"><i class="fa fa-film"></i> <?php echo $vz->Playlists[$i]->Name;?></a></li>
<?php }?>
<!--SEPARATE-->
<?php }}?>
<?php if($config->other==true){ ?>
<li class="nav-header nav-other"><span>Other</span></li>
	<?php foreach ($navs as $info => $p) { $slg=$p->Slug[0]=='/'?$p->Slug:'/'.$p->Slug;?>
    	<li><a href="<?php echo $slg;?>"><i class="fa <?php echo $p->Icon == null ? 'fa-file-o' : $p->Icon;?>"></i><?php echo $p->Title;?></a></li>
	<?php }?>
<?php }?>
<?php if(isset($_SESSION['user'])){?>
<!--<li><a href="/admin/settings"><i class="fa fa-cog"></i> Admin</a></li>-->
<li class="nav-seperator"><a href="/account/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
<?php }?>
</ul>