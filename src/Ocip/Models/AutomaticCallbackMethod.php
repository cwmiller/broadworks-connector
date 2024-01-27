<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutomaticCallbackMethod
 *
 * Automatic Callback methods.
 *
 * @method static AutomaticCallbackMethod NOTIFY_ONLY()
 * @method static AutomaticCallbackMethod NOTIFY_IF_POSSIBLE_AND_POLLING_OTHERWISE()
 * @EnumValueType string
 */
class AutomaticCallbackMethod extends \MyCLabs\Enum\Enum
{
    public const NOTIFY_ONLY = 'Notify Only';

    public const NOTIFY_IF_POSSIBLE_AND_POLLING_OTHERWISE = 'Notify If Possible And Polling Otherwise';
}

