<?php snippet( 'header' ) ?>

<main class="main" role="main">

  <section class="performances">
    <div class="container">

      <h2>Upcoming Performances</h2>

      <?php if($events->count()) : ?>
      <ul class="performance-list">
        <?php foreach($events as $e) : ?>
        <li class="date">
          <span class="performance-date"><?php echo $e->date('m.d.y') ?></span>
          <span class="performance-location"><?php echo $e->location() ?></span>
          <span class="performance-lineup"><?php echo $e->roster() ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php else : ?>
        <?php echo $pages->find('performances')->booking_text()->kirbytext() ?>
      <?php endif; ?>
    </div>
  </section>

  <?php foreach(page( 'archive' )->children()->visible()->limit(1) as $post): ?>
    <section class="featured-post">
      <div class="post-content">

        <header class="post-header">
          <h3><a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a></h3>
          <span class="meta-data"><?php echo $post->date("M d, Y") ?></span>
        </header>

        <?php echo $post->text()->kirbytext() ?>

        <footer class="post-footer">
          <a class="archive-btn" href="archive/">Older Posts</a>
        </footer>
      </div>
    </section>
    <?php endforeach ?>

  </main>

<?php snippet( 'footer' ) ?>
