<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingPartyCategorySelection
 *
 * Calling Party Category Selection
 *
 * @method static CallingPartyCategorySelection SPECIAL()
 * @method static CallingPartyCategorySelection HOSPITAL()
 * @method static CallingPartyCategorySelection HOTEL()
 * @method static CallingPartyCategorySelection PRISON()
 * @method static CallingPartyCategorySelection PAYPHONE()
 * @method static CallingPartyCategorySelection ORDINARY()
 * @EnumValueType string
 */
class CallingPartyCategorySelection extends \MyCLabs\Enum\Enum
{
    public const SPECIAL = 'Special';

    public const HOSPITAL = 'Hospital';

    public const HOTEL = 'Hotel';

    public const PRISON = 'Prison';

    public const PAYPHONE = 'Payphone';

    public const ORDINARY = 'Ordinary';
}

