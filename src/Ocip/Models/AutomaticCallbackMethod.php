<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutomaticCallbackMethod
 *
 * Automatic Callback methods.
 *
 * @method static AutomaticCallbackMethod NOTIFY_ONLY()
 * @method static AutomaticCallbackMethod
 * NOTIFY_IF_POSSIBLE_AND_POLLING_OTHERWISE()
 * @ValueType string
 */
class AutomaticCallbackMethod extends \MyCLabs\Enum\Enum
{

    const NOTIFY_ONLY = 'Notify Only';

    const NOTIFY_IF_POSSIBLE_AND_POLLING_OTHERWISE = 'Notify If Possible And Polling Otherwise';


}

