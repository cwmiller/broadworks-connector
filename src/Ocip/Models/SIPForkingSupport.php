<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPForkingSupport
 *
 * Choices for Forking Support Method
 *
 * @method static SIPForkingSupport SINGLE_DIALOG()
 * @method static SIPForkingSupport SINGLE_DIALOG_WITH_UPDATE()
 * @method static SIPForkingSupport MULTIPLE_DIALOGS_WITH_ERROR_CORRECTION()
 * @method static SIPForkingSupport MULTIPLE_DIALOGS()
 * @method static SIPForkingSupport SINGLE_DIALOG_WITH_UPDATE_IF_ALLOWED()
 * @EnumValueType string
 */
class SIPForkingSupport extends \MyCLabs\Enum\Enum
{
    public const SINGLE_DIALOG = 'Single Dialog';

    public const SINGLE_DIALOG_WITH_UPDATE = 'Single Dialog With UPDATE';

    public const MULTIPLE_DIALOGS_WITH_ERROR_CORRECTION = 'Multiple Dialogs With Error Correction';

    public const MULTIPLE_DIALOGS = 'Multiple Dialogs';

    public const SINGLE_DIALOG_WITH_UPDATE_IF_ALLOWED = 'Single Dialog With UPDATE If Allowed';
}

