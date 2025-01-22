<?php snippet('header') ?>

<div class="flex-container page-informationen">
    <div class="intro-container">
      <?php snippet('article') ?>
    </div>
    
    <?php if ($photographyPage = page('informationen')): ?>
      <div class="cover-container">
      
            <a href="<?= $photographyPage->url() ?>">
              <figure>
                <?php if ($cover = $photographyPage->cover()): ?>
                  <img src="<?= url('content/3_fotoshooting/fotoshooting-image.png') ?>" alt="Picture of Sofia">

                <?php endif ?>
              </figure>
            </a>
    
      </div>
    <?php endif ?>
  </div>

<?php snippet('footer') ?>