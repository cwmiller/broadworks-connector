<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DTMFTransmissionMethod
 *
 * The DTMF transmission method.
 *
 * @method static DTMFTransmissionMethod SIGNALING()
 * @method static DTMFTransmissionMethod RTP()
 * @EnumValueType string
 */
class DTMFTransmissionMethod extends \MyCLabs\Enum\Enum
{
    public const SIGNALING = 'Signaling';

    public const RTP = 'RTP';
}

