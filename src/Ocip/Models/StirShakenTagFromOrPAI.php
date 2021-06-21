<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * StirShakenTagFromOrPAI
 *
 * Stir Shaken Tag From or PAI headers.
 *
 * @method static StirShakenTagFromOrPAI PAI()
 * @method static StirShakenTagFromOrPAI FROM()
 * @method static StirShakenTagFromOrPAI BOTH()
 * @EnumValueType string
 */
class StirShakenTagFromOrPAI extends \MyCLabs\Enum\Enum
{

    const PAI = 'PAI';

    const FROM = 'From';

    const BOTH = 'Both';


}

