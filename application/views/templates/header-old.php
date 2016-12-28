<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodeIgniter Tutorial</title>
  <link rel="shortcut icon" href="/favicon.ico">
  <link href="<?php echo asset_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo asset_url(); ?>css/animate.min.css" rel="stylesheet">
  <link href="<?php echo asset_url(); ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo asset_url(); ?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo asset_url(); ?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo asset_url(); ?>css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo asset_url(); ?>css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/main.css" media="screen" title="no title">
</head>
<body>
  <!-- Navigation bar -->
  <div class="main-nav navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1 style="margin:0;">
          <a class="brand" href="index.html" alt="Servcorp">
            <img class="img-responsive" src="<?php echo asset_url(); ?>img/logo.png" alt="logo">
          </a>
        </h1>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="scroll active"><a href="#home">ホーム</a></li>
          <li class="scroll"><a href="#services">レンタルオフィスの特徴</a></li>
          <li class="scroll"><a href="/test/codeigniter/location/all">拠点一覧</a></li>
          <li class="scroll"><a href="#about-company">会社概要</a></li>
          <li class="scroll"><a href="#contact">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/Navigation bar -->
  <div class="container">
    <div class="col-xs-12">
      <h1 id="page-title"><?php echo $title; ?></h1>
    </div>
  </div>
