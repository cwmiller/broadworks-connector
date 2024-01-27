<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSPriorityClass
 *
 * The GETS r-value .
 *
 * @method static GETSPriorityClass GETS_MANDATORY()
 * @method static GETSPriorityClass GETS()
 * @EnumValueType string
 */
class GETSPriorityClass extends \MyCLabs\Enum\Enum
{
    public const GETS_MANDATORY = 'GETS-Mandatory';

    public const GETS = 'GETS';
}

