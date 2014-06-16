<?php
require_once 'bootstrap.php';




$voipController =  new \Voip\Controllers\VoiceBroadcastController(new \Voip\Services\PlivoService(),
                                                                  new \Civicrm\DAO\VoiceEntity(),
                                                                  new \Civicrm\Form\Mockup());

$request        = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$response       = $voipController->sendMessage($request);

$response->send();