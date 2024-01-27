<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SelectiveCallRejectionCriteriaCallTypeSelection
 *
 * Selection criteria for a call type.
 *
 * @method static SelectiveCallRejectionCriteriaCallTypeSelection ANY()
 * @method static SelectiveCallRejectionCriteriaCallTypeSelection FORWARDED()
 * @method static SelectiveCallRejectionCriteriaCallTypeSelection SPECIFIED_ONLY()
 * @EnumValueType string
 */
class SelectiveCallRejectionCriteriaCallTypeSelection extends \MyCLabs\Enum\Enum
{
    public const ANY = 'Any';

    public const FORWARDED = 'Forwarded';

    public const SPECIFIED_ONLY = 'Specified Only';
}

