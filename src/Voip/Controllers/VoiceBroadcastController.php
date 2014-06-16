<?php
/**
 * Plivo Controller
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Voip\Controllers;

use \Symfony\Component\HttpFOundation\Request as HttpRequest;
use \Symfony\Component\HttpFoundation\Response as HttpResponse;

class VoiceBroadcastController
{

    /**
     * @var $voipService
     */
    private $voipService;

    /**
     * @var $form
     */
    private $form;

    /**
     * @var $entity
     */
    private $entity;


    /**
     * Injecting all dependencies
     *
     * @param $voipService
     * @param $entity
     * @param $form
     */
    public function __construct($voipService, $entity, $form)
    {
        $this->voipService = $voipService;
        $this->entity      = $entity;
        $this->form        = $form;
    }

    public function sendMessage(HttpRequest $request)
    {
        $content  = $this->form->getForm(). PHP_EOL;
        $content .= $this->entity->getData() . PHP_EOL;
        $content .= $this->voipService->broadcastVoiceMessage(). PHP_EOL;

        $response = new HttpResponse($content,
                                      HttpResponse::HTTP_OK,
                                      array('content-type' => 'text/html')
                                      );


        $response->setCharset('UTF-8');
        $response->prepare($request);

        return $response;
    }
}