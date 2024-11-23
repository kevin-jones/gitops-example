<?php

function loadEnv() {
    $env_path = ROOT . '/.env';

    if (!is_file($env_path)) {
        return;
    }

    $env = file_get_contents($env_path);

    // Split the file into lines
    $lines = explode("\n", $env);

    // Parse each line
    foreach ($lines as $line) {
        // Skip comments or empty lines
        if (empty($line) || $line[0] === '#') {
            continue;
        }

        list($name, $value) = explode("=", $line, 2);
        $name = trim($name);
        $value = trim($value);
        $_ENV[trim($name)] = trim($value);
        putenv("{$name}={$value}");
    }
}
