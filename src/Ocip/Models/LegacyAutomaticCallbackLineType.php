<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LegacyAutomaticCallbackLineType
 *
 * Legacy Automatic Callback line type.
 *
 * @method static LegacyAutomaticCallbackLineType INDIVIDUAL()
 * @method static LegacyAutomaticCallbackLineType COIN()
 * @method static LegacyAutomaticCallbackLineType SERIES()
 * @method static LegacyAutomaticCallbackLineType HUNT()
 * @method static LegacyAutomaticCallbackLineType UNASSIGNED()
 * @method static LegacyAutomaticCallbackLineType PBX()
 * @method static LegacyAutomaticCallbackLineType MULTIPARTY()
 * @method static LegacyAutomaticCallbackLineType CHOKE()
 * @method static LegacyAutomaticCallbackLineType OOS()
 * @method static LegacyAutomaticCallbackLineType NONSPECIFIC()
 * @method static LegacyAutomaticCallbackLineType TELECAMPUS()
 * @method static LegacyAutomaticCallbackLineType ISDN()
 * @method static LegacyAutomaticCallbackLineType TELEKIBUTZ()
 * @method static LegacyAutomaticCallbackLineType SPARE()
 * @EnumValueType string
 */
class LegacyAutomaticCallbackLineType extends \MyCLabs\Enum\Enum
{
    public const INDIVIDUAL = 'Individual';

    public const COIN = 'Coin';

    public const SERIES = 'Series';

    public const HUNT = 'Hunt';

    public const UNASSIGNED = 'Unassigned';

    public const PBX = 'PBX';

    public const MULTIPARTY = 'Multiparty';

    public const CHOKE = 'Choke';

    public const OOS = 'Oos';

    public const NONSPECIFIC = 'Nonspecific';

    public const TELECAMPUS = 'Telecampus';

    public const ISDN = 'ISDN';

    public const TELEKIBUTZ = 'Telekibutz';

    public const SPARE = 'Spare';
}

