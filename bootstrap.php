<?php

$loader = require_once  __DIR__ . '/vendor/autoload.php';

$loader->add('Voip', __DIR__ .'/src');
$loader->add('Civicrm', __DIR__ . '/src');



$loader->register();