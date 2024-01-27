<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNISPriority
 *
 * Choices for DNIS priority.
 *
 * @method static DNISPriority _0_HIGHEST()
 * @method static DNISPriority _1_HIGH()
 * @method static DNISPriority _2_MEDIUM()
 * @method static DNISPriority _3_LOW()
 * @EnumValueType string
 */
class DNISPriority extends \MyCLabs\Enum\Enum
{
    public const _0_HIGHEST = '0 - Highest';

    public const _1_HIGH = '1 - High';

    public const _2_MEDIUM = '2 - Medium';

    public const _3_LOW = '3 - Low';
}

