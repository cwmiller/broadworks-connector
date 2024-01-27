<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressVoiceMailGreeting
 *
 * CommPilot Express Voice Messaging Greeting Choices.
 *
 * @method static CommPilotExpressVoiceMailGreeting NO_ANSWER()
 * @method static CommPilotExpressVoiceMailGreeting UNAVAILABLE()
 * @EnumValueType string
 */
class CommPilotExpressVoiceMailGreeting extends \MyCLabs\Enum\Enum
{
    public const NO_ANSWER = 'No Answer';

    public const UNAVAILABLE = 'Unavailable';
}

