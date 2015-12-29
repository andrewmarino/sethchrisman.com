<?php snippet( 'header' ) ?>

  <main class="main" role="main">

    <section class="single-post">

    <div class="post-content">

      <header class="post-header">
        <h1><?php echo $page->title()->html() ?></h1>
        <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('M d, Y') ?></time>
      </header>
      <?php echo $page->text()->kirbytext() ?>

      <footer class="post-footer">
		      <a class="archive-btn" href="/archive/">View More Posts</a>
	    </footer>
    </div>

  </section>

  </main>

<?php snippet( 'footer' ) ?>
