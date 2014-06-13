<?php
/**
 * Plivo Controller
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace voip\plivo;

use \Symfony\Component\HttpFOundation\Request as HttpRequest;
use \Symfony\Component\HttpFoundation\Response as HttpResponse;

class PlivoController
{

    /**
     * @var $userEntity
     */
    private $userEntity;

    /**
     * @var $form
     */
    private $form;

    /**
     * Loading the User Entity and and Form
     *
     * @param $userEntity
     * @param $form
     */
    public function __construct($userEntity, $form)
    {

        $this->userEntity = $userEntity;
        $this->form       = $form;
    }


    /**
     * Plivo do something
     *
     * @param HttpRequest $request
     * @return HttpResponse
     */
    public function doSomething(HttpRequest $request)
    {
        $content  = 'this is a d8 form mockup'. PHP_EOL;
        $content .= $this->userEntity->getUserData() . PHP_EOL;
        $content .= $this->form->get(). PHP_EOL;

        $response  = new HttpResponse($content,
                                      HttpResponse::HTTP_OK,
                                      array('content-type' => 'text/html')
                                      );

        $response->setCharset('ISO-8859-1');
        $response->prepare($request);

        return $response;
    }
}