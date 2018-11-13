<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LegacyAutomaticCallbackLineMatchAction
 *
 * Legacy Automatic Callback line type match action.
 *
 * @method static LegacyAutomaticCallbackLineMatchAction ACCEPT()
 * @method static LegacyAutomaticCallbackLineMatchAction DENY()
 * @EnumValueType string
 */
class LegacyAutomaticCallbackLineMatchAction extends \MyCLabs\Enum\Enum
{

    const ACCEPT = 'Accept';

    const DENY = 'Deny';


}

