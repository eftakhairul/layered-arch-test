<?php
/**
 * Plivo Service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Voip\Services;


class PlivoService  extends \Voip\Services\AbstractVoipBroadcastService
{

    /**
     * Send message to user by Plivo API
     *
     *
     * @return string|bool
     */
    public function broadcastVoiceMessage()
    {
        //do lots of thing to send a voice message and then
        //return following message

        return 'voice message is sent';
    }
}