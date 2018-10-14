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
 * @ValueType string
 */
class SelectiveCallRejectionCriteriaCallTypeSelection extends \MyCLabs\Enum\Enum
{

    const ANY = 'Any';

    const FORWARDED = 'Forwarded';

    const SPECIFIED_ONLY = 'Specified Only';


}

