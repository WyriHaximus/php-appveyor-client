<?php

use React\Cache\ArrayCache;
use WyriHaximus\AppVeyor\Client;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_key.php', [
    'cache' => new ArrayCache(),
]);

echo time(), PHP_EOL;
echo $client->project($argv[1] ?? 'WyriHaximus/php-appveyor-client')->projectId(), PHP_EOL;
echo time(), PHP_EOL;
echo $client->project($argv[1] ?? 'WyriHaximus/php-appveyor-client')->projectId(), PHP_EOL;
echo time(), PHP_EOL;
