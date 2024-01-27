<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IMSCallType
 *
 * The IMS direction for VTR.
 *
 * @method static IMSCallType ORIGINATING()
 * @method static IMSCallType TERMINATING()
 * @EnumValueType string
 */
class IMSCallType extends \MyCLabs\Enum\Enum
{
    public const ORIGINATING = 'Originating';

    public const TERMINATING = 'Terminating';
}

