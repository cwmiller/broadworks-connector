<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPSingleDialogBehavior
 *
 * Choices for Single Dialog Behavior
 *
 * @method static SIPSingleDialogBehavior SINGLE_DIALOG()
 * @method static SIPSingleDialogBehavior SINGLE_DIALOG_WITH_UPDATE()
 * @method static SIPSingleDialogBehavior SINGLE_DIALOG_WITH_UPDATE_IF_ALLOWED()
 * @EnumValueType string
 */
class SIPSingleDialogBehavior extends \MyCLabs\Enum\Enum
{

    const SINGLE_DIALOG = 'Single Dialog';

    const SINGLE_DIALOG_WITH_UPDATE = 'Single Dialog With UPDATE';

    const SINGLE_DIALOG_WITH_UPDATE_IF_ALLOWED = 'Single Dialog With UPDATE If Allowed';


}

