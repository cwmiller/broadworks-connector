<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingMessageProcessing
 *
 * Choices to handle a voice message.
 *
 * @method static VoiceMessagingMessageProcessing
 * UNIFIED_VOICE_AND_EMAIL_MESSAGING()
 * @method static VoiceMessagingMessageProcessing DELIVER_TO_EMAIL_ADDRESS_ONLY()
 * @EnumValueType string
 */
class VoiceMessagingMessageProcessing extends \MyCLabs\Enum\Enum
{

    const UNIFIED_VOICE_AND_EMAIL_MESSAGING = 'Unified Voice and Email Messaging';

    const DELIVER_TO_EMAIL_ADDRESS_ONLY = 'Deliver To Email Address Only';


}

