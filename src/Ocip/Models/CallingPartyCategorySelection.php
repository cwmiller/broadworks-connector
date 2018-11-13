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

    const SPECIAL = 'Special';

    const HOSPITAL = 'Hospital';

    const HOTEL = 'Hotel';

    const PRISON = 'Prison';

    const PAYPHONE = 'Payphone';

    const ORDINARY = 'Ordinary';


}

