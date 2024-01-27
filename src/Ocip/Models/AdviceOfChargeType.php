<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdviceOfChargeType
 *
 * Choices for Advice of Charge Type.
 *
 * @method static AdviceOfChargeType DURING_CALL()
 * @method static AdviceOfChargeType END_OF_CALL()
 * @EnumValueType string
 */
class AdviceOfChargeType extends \MyCLabs\Enum\Enum
{
    public const DURING_CALL = 'During Call';

    public const END_OF_CALL = 'End Of Call';
}

