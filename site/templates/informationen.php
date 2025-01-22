<?php if ($page->template() === 'informationen'): ?>
  <link rel="stylesheet" href="<?= url('assets/css/informationen.css') ?>">
<?php endif ?>

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
                  <img src="<?= url('content/2_informationen/sofia.png') ?>" alt="Picture of Sofia">

                <?php endif ?>
              </figure>
            </a>
    
      </div>
    <?php endif ?>
  </div>

<aside class="contact">
  <h2 class="h1">Get in contact</h2>
  <div class="grid" style="--gutter: 1.5rem">
    <section class="column text" style="--columns: 4">
      <h3>Address</h3>
      <?= $page->address() ?>
    </section>
    <section class="column text" style="--columns: 4">
      <h3>Email</h3>
      <p><?= Html::email($page->email()) ?></p>
      <h3>Phone</h3>
      <p><?= Html::tel($page->phone()) ?></p>
    </section>
    <section class="column text" style="--columns: 4">
      <h3>On the web</h3>
      <ul>
        <?php foreach ($page->social()->toStructure() as $social): ?>
        <li><?= Html::a($social->url(), $social->platform()) ?></li>
        <?php endforeach ?>
      </ul>
    </section>
  </div>
</aside>
<hr class="divider">
<?php snippet('footer') ?>