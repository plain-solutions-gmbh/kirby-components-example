<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <?= css('assets/css/style.css') ?>
</head>
<body class="p-3 py-10 max-w-3xl mx-auto">
<p>Thank you for downloading the Example Project of the <a href="https://github.com/youngcut/kirby-components" target="_blank">Kirby Components Plugin</a>.</p>
    
<p>
Have fun with playing around. You can go now to the <a href="./components">components page</a> or login into the <a href="./panel">panel</a>.</p></br>


<?php 

    $readme = F::read("./README.md");
    echo markdown($readme);
?>

</body>
</html>
