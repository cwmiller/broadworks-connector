<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DTMFTransmissionMethod
 *
 * The DTMF transmission method.
 *
 * @method static DTMFTransmissionMethod SIGNALING()
 * @method static DTMFTransmissionMethod RTP()
 * @ValueType string
 */
class DTMFTransmissionMethod extends \MyCLabs\Enum\Enum
{

    const SIGNALING = 'Signaling';

    const RTP = 'RTP';


}

