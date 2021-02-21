<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPMultipleDialogBehavior
 *
 * Choices
 *
 * @method static SIPMultipleDialogBehavior MULTIPLE_DIALOGS()
 * @method static SIPMultipleDialogBehavior MULTIPLE_DIALOGS_WITH_ERROR_CORRECTION()
 * @EnumValueType string
 */
class SIPMultipleDialogBehavior extends \MyCLabs\Enum\Enum
{

    const MULTIPLE_DIALOGS = 'Multiple Dialogs';

    const MULTIPLE_DIALOGS_WITH_ERROR_CORRECTION = 'Multiple Dialogs With Error Correction';


}

