<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSNumberType
 *
 * The GETS Reserved Number type.
 *         AN - GETS-AN 
 *         NT - GETS-NT
 *
 * @method static GETSNumberType AN()
 * @method static GETSNumberType NT()
 * @EnumValueType string
 */
class GETSNumberType extends \MyCLabs\Enum\Enum
{
    public const AN = 'AN';

    public const NT = 'NT';
}

