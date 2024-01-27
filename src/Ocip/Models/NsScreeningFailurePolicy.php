<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NsScreeningFailurePolicy
 *
 * How the incomming caller ID should be displayed in the case of an NS screening failure
 *
 * @method static NsScreeningFailurePolicy DISPLAY_RECEIVED_CALLER_ID()
 * @method static NsScreeningFailurePolicy RESTRICT_NUMBER()
 * @method static NsScreeningFailurePolicy RESTRICT_NAME_AND_NUMBER()
 * @EnumValueType string
 */
class NsScreeningFailurePolicy extends \MyCLabs\Enum\Enum
{
    public const DISPLAY_RECEIVED_CALLER_ID = 'Display Received Caller ID';

    public const RESTRICT_NUMBER = 'Restrict Number';

    public const RESTRICT_NAME_AND_NUMBER = 'Restrict Name And Number';
}

