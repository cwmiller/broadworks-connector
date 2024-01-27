<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushToTalkOutgoingConnectionSelection
 *
 * Push to talk outgoing connection type.
 *
 * @method static PushToTalkOutgoingConnectionSelection ONE_WAY()
 * @method static PushToTalkOutgoingConnectionSelection TWO_WAY()
 * @EnumValueType string
 */
class PushToTalkOutgoingConnectionSelection extends \MyCLabs\Enum\Enum
{
    public const ONE_WAY = 'One Way';

    public const TWO_WAY = 'Two Way';
}

