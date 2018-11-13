<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LineOrderingMode
 *
 * Line ordering value.
 *
 * @method static LineOrderingMode DYNAMIC()
 * @method static LineOrderingMode _STATIC()
 * @EnumValueType string
 */
class LineOrderingMode extends \MyCLabs\Enum\Enum
{

    const DYNAMIC = 'Dynamic';

    const _STATIC = 'Static';


}

