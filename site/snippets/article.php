<div class="cover-container">
    <h1 class="h1"><?= $page->headline()->or($page->title())->esc() ?></h1>
    <?php if ($page->subheadline()->isNotEmpty()): ?>
        <div class="intro-container">
            <p class="article-subheadline"><?= $page->subheadline()->esc() ?></p>
            
            <?php if ($page->linktext()->isNotEmpty()): ?>
                <span class="link-arrow">&#8594;</span>
                <a href="<?= url('informationen') ?>" class="link">
                    <?= $page->linktext()->esc() ?>
                </a>
            <?php endif ?>
        </div>
    <?php endif ?>
</div>