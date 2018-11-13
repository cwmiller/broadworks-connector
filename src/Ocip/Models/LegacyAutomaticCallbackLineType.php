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

    const INDIVIDUAL = 'Individual';

    const COIN = 'Coin';

    const SERIES = 'Series';

    const HUNT = 'Hunt';

    const UNASSIGNED = 'Unassigned';

    const PBX = 'PBX';

    const MULTIPARTY = 'Multiparty';

    const CHOKE = 'Choke';

    const OOS = 'Oos';

    const NONSPECIFIC = 'Nonspecific';

    const TELECAMPUS = 'Telecampus';

    const ISDN = 'ISDN';

    const TELEKIBUTZ = 'Telekibutz';

    const SPARE = 'Spare';


}

