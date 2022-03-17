<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Application;

$app = new Application();
$app->run();


// TODO: Глобально было бы неплохо:
// - Выставить везде strict mode `declare(strict_types=1);`
// - Указать у методов типы возвращаемых значений