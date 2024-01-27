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
    public const MULTIPLE_DIALOGS = 'Multiple Dialogs';

    public const MULTIPLE_DIALOGS_WITH_ERROR_CORRECTION = 'Multiple Dialogs With Error Correction';
}

