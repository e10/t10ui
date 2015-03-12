<ul class="nav nav-list">
	<li><a href="/"><i class="fa fa-home"></i>Home</a></li>
	<li class="<?php echo $_SERVER['REQUEST_URI'] == "/account/setting" ? "active" : "";?>"><a href="/account/setting"><i class="fa fa-list-alt"></i>Profile</a></li>
	<li class="<?php echo $_SERVER['REQUEST_URI'] == "/account/change_password" ? "active" : "";?>"><a href="/account/change_password"><i class="fa fa-exchange"></i>Change Password</a></li>
	<?php if($config->addtolist==true){ ?><li  class="<?php echo $_SERVER['REQUEST_URI'] == "/account/videomanager" ? "active" : "";?>"><a href="/account/videomanager"><i class="fa fa-file-video-o"></i>Video Manager</a></li><?php }?>
</ul>