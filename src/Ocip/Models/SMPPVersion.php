<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SMPPVersion
 *
 * The SMPP Protocol Version.
 *
 * @method static SMPPVersion _3_3()
 * @method static SMPPVersion _3_4()
 * @method static SMPPVersion _5_0()
 * @EnumValueType string
 */
class SMPPVersion extends \MyCLabs\Enum\Enum
{
    public const _3_3 = '3.3';

    public const _3_4 = '3.4';

    public const _5_0 = '5.0';
}

