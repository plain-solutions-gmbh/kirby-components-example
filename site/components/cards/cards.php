<?php 
    if ($content->source()->value() === "manual") {
        $sources = $content->card_content()->toComponents();
    } 
    if ($content->source()->value() === "pages") {
        $sources = $content->pages()->toPages();
    }
    $sources ??= [];
?>

<div class="flex flex-wrap p-5 max-w-<?= $content->max_width() ?> mx-auto bg-<?= $content->color() ?>-800"> 
    <?php foreach ($sources as $source): ?>
        <?= $content->type()->toComponent($source)?>
    <?php endforeach ?>
</div>