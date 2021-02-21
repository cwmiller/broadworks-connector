<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdviceOfChargeIncomingAocHandling
 *
 * Choices for method of how the Advice of Charge is processed by the Application Server.
 *
 * @method static AdviceOfChargeIncomingAocHandling IGNORE()
 * @method static AdviceOfChargeIncomingAocHandling CHARGE()
 * @EnumValueType string
 */
class AdviceOfChargeIncomingAocHandling extends \MyCLabs\Enum\Enum
{

    const IGNORE = 'Ignore';

    const CHARGE = 'Charge';


}

