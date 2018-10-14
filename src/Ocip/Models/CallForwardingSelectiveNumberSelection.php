<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallForwardingSelectiveNumberSelection
 *
 * Communication Barring Redirecting Rule
 *
 * @method static CallForwardingSelectiveNumberSelection
 * FORWARD_TO_DEFAULT_NUMBER()
 * @method static CallForwardingSelectiveNumberSelection
 * FORWARD_TO_SPECIFIED_NUMBER()
 * @ValueType string
 */
class CallForwardingSelectiveNumberSelection extends \MyCLabs\Enum\Enum
{

    const FORWARD_TO_DEFAULT_NUMBER = 'Forward To Default Number';

    const FORWARD_TO_SPECIFIED_NUMBER = 'Forward To Specified Number';


}

