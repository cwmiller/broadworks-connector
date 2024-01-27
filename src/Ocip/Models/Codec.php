<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Codec
 *
 * Codec.
 *
 * @method static Codec CLEAR()
 * @method static Codec G711ALAW()
 * @method static Codec G711ULAW()
 * @method static Codec G722()
 * @method static Codec G723_53()
 * @method static Codec G723_63()
 * @method static Codec G723A_53()
 * @method static Codec G723A_63()
 * @method static Codec G726_16()
 * @method static Codec G726_24()
 * @method static Codec G726_32()
 * @method static Codec G726_40()
 * @method static Codec G728()
 * @method static Codec G729_8()
 * @method static Codec G729B_8()
 * @method static Codec GSMEFR()
 * @method static Codec GSMFR()
 * @method static Codec AMR_WB()
 * @EnumValueType string
 */
class Codec extends \MyCLabs\Enum\Enum
{
    public const CLEAR = 'Clear';

    public const G711ALAW = 'G711alaw';

    public const G711ULAW = 'G711ulaw';

    public const G722 = 'G722';

    public const G723_53 = 'G723-53';

    public const G723_63 = 'G723-63';

    public const G723A_53 = 'G723A-53';

    public const G723A_63 = 'G723A-63';

    public const G726_16 = 'G726-16';

    public const G726_24 = 'G726-24';

    public const G726_32 = 'G726-32';

    public const G726_40 = 'G726-40';

    public const G728 = 'G728';

    public const G729_8 = 'G729-8';

    public const G729B_8 = 'G729B-8';

    public const GSMEFR = 'GSMEFR';

    public const GSMFR = 'GSMFR';

    public const AMR_WB = 'AMR-WB';
}

