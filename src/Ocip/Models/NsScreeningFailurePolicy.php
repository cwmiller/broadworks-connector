<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NsScreeningFailurePolicy
 *
 * How the incomming caller ID should be displayed in the case of an NS screening
 * failure
 *
 * @method static NsScreeningFailurePolicy DISPLAY_RECEIVED_CALLER_ID()
 * @method static NsScreeningFailurePolicy RESTRICT_NUMBER()
 * @method static NsScreeningFailurePolicy RESTRICT_NAME_AND_NUMBER()
 * @ValueType string
 */
class NsScreeningFailurePolicy extends \MyCLabs\Enum\Enum
{

    const DISPLAY_RECEIVED_CALLER_ID = 'Display Received Caller ID';

    const RESTRICT_NUMBER = 'Restrict Number';

    const RESTRICT_NAME_AND_NUMBER = 'Restrict Name And Number';


}

