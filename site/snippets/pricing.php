<div class="cover-container">
    <h1 class="h1"><?= $page->headline()->or($page->title())->esc() ?></h1>
    <?php if ($page->subheadline()->isNotEmpty()): ?>
        <div class="intro-container">
            <p class="pricing-subheadline"><?= $page->subheadline()->esc() ?></p>
            
            <?php if ($page->bullets()->isNotEmpty()): ?>
    <ul>
        <?php 
        // Zusätzlichen Text in ein Array umwandeln
        $items = explode('|', $page->bullets()->value());

        // Jedes Item als <li> ausgeben
        foreach ($items as $item): ?>
            <li class="bullets"><?= html($item) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

            <?php if ($page->linktext()->isNotEmpty()): ?>
                <a href="<?= url('informationen') ?>" class="link-cta">
                    <?= $page->linktext()->esc() ?>
                </a>
            <?php endif ?>
        </div>
    <?php endif ?>
</div>
