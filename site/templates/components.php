<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <?= snippet('blocks/formcore/styles') ?>
    <title>Components Example</title>
</head>
<body>

    <h1 class="h-full pt-8 pl-8 text-2xl">My First Component</h1>
    <div class="flex flex-wrap p-5">
        <?= $page->card_field()->toComponents() ?>
    </div>

    <h1 class="h-full pt-8 pl-8 text-2xl">Cards From Pages</h1>
    <div class="flex flex-wrap p-5 cards column">
        <?php foreach ($site->pages()->template('team') as $team): ?>
            <?= component('cards/card', $team->content(), ['link' => [$team]]) ?>
        <?php endforeach ?>
    </div>

    <h1 class="h-full pt-8 pl-8 text-2xl">Styled Card</h1>
    <div class="flex flex-wrap p-5">
        <?php $carddata = $page->card_content()->toComponent() ?>
        <?= $page->card_style()->toComponent($carddata) ?>
    </div>

    <h1 class="h-full pt-8 pl-8 text-2xl">Single Block</h1>
    <?= $page->component_block()->toComponent() ?>  

    <h1 class="h-full pt-8 pl-8 text-2xl">Multiple Components</h1>
    <?= $page->blocks()->toComponents() ?>

</body>
</html>