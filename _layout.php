<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="<?php echo $config->sitename?>">
  <meta name="description" content="<?php echo $config->description?>">
  <meta name="keyword" content="<?php echo $config->keyword?>">
  <title><?php echo $config->sitename;?></title>

  <link rel="shortcut icon" href="/vui16.ico" type="image/x-icon">
  <link rel="search" type="application/opensearchdescription+xml" title="<?php echo $config->sitename;?>" href="/util/opensearch">

  <link type="text/css" href="/themes/t10ui/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="/css/theme.css" rel="stylesheet">
  <link type="text/css" href="/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,300,600,400' rel='stylesheet' type='text/css'>
  <link type="text/css" href="/css/zocial.css" rel="stylesheet">
  <link type="text/css" href="/home/css<?php echo isset($_REQUEST['nocss']) ? '?cacheoff' : ''?>" rel="stylesheet">
  <link type="text/css" href="/css/home.css" rel="stylesheet">
  <link type="text/css" href="/css/player.css" rel="stylesheet">
  <!-- <?php echo $viewPage;?> -->
  <?php include "views/player/_header.php";?>
</head>
<body>
<div class="frame">
  <header class="navbar navbar-fixed-top" role="banner">
    <div class="navbar-header" style="width:100%">
      <a href="/" class="navbar-brand brand-adjust"><?php if($config->brand){?><img src="<?php echo $config->VideouiLogo;?>" height="<?php echo $config->Logoheight > 0 && $config->Logoheight!=null? $config->Logoheight : 80;?>" width="<?php echo $config->Logowidth > 0 && $config->Logowidth != null ? $config->Logowidth : 80;?>"><?php }else{?><?php echo $BRAND?><?php }?></a>
      <a href="javascript:void(0);" class="btn pull-right toggle-sidebar hidden-lg"><i class="fa fa-reorder"></i></a>
    </div>
  </header>
  <div class="sidebar">
    <div class="wrapper">
      <?php include isset($page["sidebar"]) ? $page["sidebar"] : "views/account/_sidebar.php"; ?>
    </div>
  </div>
  <div class="content">
    <div class="content-body">
      <?php if(!empty($pageinfo)){?>
        <div class="row">
          <?php include $page["cms"]; ?>
        </div>
      <?php } ?>
      <div class="row">  
        <?php include $page["page"];?>
      </div>
    </div>
  </div>
</div>

<?php include("/_scripts.php"); ?>
