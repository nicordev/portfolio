<?php

$rootDirectory = dirname(__DIR__);

require "$rootDirectory/src/App.php";

$app = new App\App($rootDirectory);

$app->run();