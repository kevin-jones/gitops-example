<?php
$version = '0.0.2';
?>
<!doctype html>
<html lang="en">
    <head>
        <title>GitOps Example</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    </head>
    <body>
        <h1>GitOps Example</h1>
        <p>Hello from the GitOps Example PHP Application v<?= $version ?></p>
        <p>It is <?= date("Y-m-d H:i:s") ?></p>
        <p><a href="/info.php">PHP INFO</a></p>
    </body>
</html>
