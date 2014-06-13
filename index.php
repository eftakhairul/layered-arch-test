<?php
require_once 'bootstrap.php';





$plivoController = new \voip\plivo\PlivoController(new \civicrm\db\User(),
                                                   new \civicrm\form\Mockup());

$request    = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$response   = $plivoController->doSomething($request);

$response->send();