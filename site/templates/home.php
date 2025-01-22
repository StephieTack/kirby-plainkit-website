<?php snippet('header') ?>
  <?php snippet('reseda') ?>

  <div class="flex-container">
    <?php if ($photographyPage = page('informationen')): ?>
      <div class="cover-container">
      
            <a href="<?= $photographyPage->url() ?>">
              <figure>
                <?php if ($cover = $photographyPage->cover()): ?>
                  <img src="<?= url('content/home/two-people.png') ?>" alt="Picture of two friends">

                <?php endif ?>
              </figure>
            </a>
    
      </div>
    <?php endif ?>

    <div class="intro-container">
      <?php snippet('article') ?>
    </div>
  </div>

<?php snippet('footer') ?> 

