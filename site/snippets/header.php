<!doctype html>
<html class="no-js" lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <script src="https://use.typekit.net/nkm7afe.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body class="body page-id--<?php echo $page->id() ?> page-slug--<?php echo $page->slug() ?> page-template--<?php echo $page->template() ?>">

  <header class="site-header">
    <div class="container">
      <h1 class="site-title"><a href="/"><?php echo $site->title() ?></a></h1>

      <?php
      // main menu items
      $items = $pages->visible();

      // only show the menu if items are available
      if($items->count()):

      ?>
      <nav role="navigation">
        <ul class="site-nav">
          <?php foreach($items as $item): ?>
          <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>/"><?php echo $item->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      </nav>
      <?php endif ?>

    </div>
  </header>
