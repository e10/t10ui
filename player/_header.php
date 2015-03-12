<?php $vid=$vz->videoinfo;
$path = "http://".$_SERVER['SERVER_NAME'] .  $_SERVER['REQUEST_URI'];
if(isset($vz->videoinfo)){
	$img=strpos($vid->image,'http')>-1 ? $vid->image : 'http://images.vidzapper.com/'.$vid->image.'?h=114&w=155';
	?>
<!-- Open Graph tags -->
<meta property="og:title" content="<?php echo urlencode($vid->title);?>" />
<meta property="og:description" content="<?php echo urlencode($vid->description);?>" />
<meta property="og:type" content="video" />
<meta property="og:url" content="<?php echo $path;?>"/>
<meta property="og:image" content="<?php echo $img;?>"/>
<!-- Video player specific OG tags -->
<meta property="og:video" content="http://release.vzconsole.com/live/content/swf/vzplayer.swf?file=<?php echo $vid->URL;?>&skin=http://vzconsole.com/release/content/look/lulu/lulu.xml&autostart=1" />
<meta property="og:video:secure_url" content="https://release.vzconsole.com/live/content/swf/vzplayer.swf?file=<?php echo $vid->URL;?>&skin=https://vzconsole.com/release/content/look/lulu/lulu.xml&autostart=1" />
<meta property="og:video:type" content="application/x-shockwave-flash">
<meta property="og:video:width" content="398">
<meta property="og:video:height" content="224">
<meta property="og:site_name" content="Video Ui">
<?php }?>