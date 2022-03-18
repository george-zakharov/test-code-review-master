<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Application;

$app = new Application();
$app->run();


// TODO: In general it would be better to:
// - Set strict mode in all files `declare(strict_types=1);`
// - Declare return types for all methods (and method parameters also)