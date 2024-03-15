<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Controllers\TestController;

$app = new TestController;
$app->run();

use Carbon\Carbon;

echo Carbon::now();

?>