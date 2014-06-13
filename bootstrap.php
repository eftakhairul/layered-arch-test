<?php

$loader = require_once  __DIR__ . '/vendor/autoload.php';

$loader->add('voip\\plivo\\', __DIR__);
$loader->add('civicrm\\db\\', __DIR__);
$loader->add('civicrm\\form\\', __DIR__);


$loader->register();