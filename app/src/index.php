<?php

require 'bootstrap.php';

$version = getenv('BUILD_VERSION');
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
        <p style="color:blue">It is <?= date("Y-m-d H:i:s") ?></p>
        <p><a href="/info.php">PHP INFO</a></p>
    </body>
</html>
