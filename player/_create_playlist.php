		<div class="add-to-list">
			<?php foreach ($userplaylists as $c => $pl) { include "_add_to_list.php"; }?>
		</div>


		<div class="myChannel">
			<?php if(e_isfile("themes/$config->theme/player/_playlist_sidebar.php")){
				include "themes/$config->theme/player/_playlist_sidebar.php";
			}else{ include "views/player/_playlist_sidebar.php"; } ?>
		</div>

