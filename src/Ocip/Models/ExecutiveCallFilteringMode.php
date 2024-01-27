<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveCallFilteringMode
 *
 * Executive call filtering mode.
 *
 * @method static ExecutiveCallFilteringMode SIMPLE()
 * @method static ExecutiveCallFilteringMode ADVANCED()
 * @EnumValueType string
 */
class ExecutiveCallFilteringMode extends \MyCLabs\Enum\Enum
{
    public const SIMPLE = 'Simple';

    public const ADVANCED = 'Advanced';
}

