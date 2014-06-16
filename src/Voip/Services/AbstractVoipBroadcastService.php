<?php
/**
 * Plivo Service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Voip\Services;


abstract class AbstractVoipBroadcastService
{

    protected $voiceMessageFile;

    abstract public function broadcastVoiceMessage();


    public function getVoiceMessageFile()
    {
        return  $this->voiceMessageFile;
    }
}