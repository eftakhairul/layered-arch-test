<?php
/**
 * Twilio service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Voip\Services;



class TwilioService  extends AbstractVoipBroadcastService
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