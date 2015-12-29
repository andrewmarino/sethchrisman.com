<?php snippet( 'header' ) ?>

<main class="main" role="main">

<section>
  <div class="container">
    <div class="post-index">
      <h3>Posts</h3>
      <ul class="posts">
        <?php foreach($page->children()->visible() as $article): ?>
          <li>
            <a href="<?php echo $article->url() ?>/"><?php echo $article->title()->html() ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="show-index">
      <h3>Performances</h3>
      <ul class="performance-list">
        <?php foreach($pages->find('performances')->performances()->toStructure()->flip() as $e): ?>
          <li>
            <span class="performance-date"><?php echo $e->date('m.d.y') ?></span>
            <span class="performance-location"><?php echo $e->location() ?></span>
            <span class="performance-lineup"><?php echo $e->roster() ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
</main>

<?php snippet( 'footer' ) ?>
