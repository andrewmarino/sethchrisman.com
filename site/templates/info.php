<?php snippet( 'header' ) ?>

  <main class="main" role="main">

    <?php $img = $page->main_img()->toFile(); ?>

    <picture class="biography-masthead">
      <!--[if IE 9]><video style="display: none;"><![endif]-->
      <source srcset="<?php echo $img->resize(1400, null, 75)->url() ?>" media="(min-width: 1400px)">
      <source srcset="<?php echo $img->resize(1000, null, 75)->url() ?>" media="(min-width: 1000px)">
      <source srcset="<?php echo $img->resize(640, null, 75)->url() ?>" media="(min-width: 640px)">
      <source srcset="<?php echo $img->resize(1000, null, 75)->url() ?>">
      <!--[if IE 9]></video><![endif]-->
      <img srcset="<?php echo $img->url() ?>" alt="Seth Chrisman’s bio photograph">

      <?php if(!$page->main_img_cred()->empty()) : ?>
        <span class="photo-credit"><?php echo $page->main_img_cred()->kirbytext() ?> </span>
      <?php endif; ?>
    </picture>

    <section class="biography-content">
      <div class="container">
        <?php echo $page->bio()->kirbytext() ?>
      </div>
    </section>

    <section class="discography">
      <div class="container">

        <?php foreach($projects as $project) : ?>

          <?php $releases = $project->releases()->toStructure(); ?>

          <div class="project-category">
            <h3><?php echo $project->title()->kirbytext() ?></h3>
            <ul>
              <?php foreach($releases as $release) : ?>
                <li><a href="<?php echo $release->url() ?>"><?php echo $release->release_title() ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

        <?php endforeach; ?>
      </div>
    </section>

    <section class="mastering-content">
      <div class="container">
        <div class="mastering-description">
          <h3>Mastering</h3>
          <?php echo $page->mastering_info()->kirbytext() ?>
        </div>

        <div class="mastering-index">
          <span><strong>Select mastering credits:</strong></span>
          <ul>
          <?php foreach($credits as $credit) : ?>
            <li><a href="<?php echo $credit->url() ?>"><?php echo $credit->project() ?></a></li>
          <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

  </main>

<?php snippet( 'footer' ) ?>
