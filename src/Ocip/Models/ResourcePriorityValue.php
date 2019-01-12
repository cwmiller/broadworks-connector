<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResourcePriorityValue
 *
 * List of valid values to set to the resource priority header. q735.0 indicates
 * the highest priority, q735.4 indicates the lowest priority.
 *
 * @method static ResourcePriorityValue Q735_0()
 * @method static ResourcePriorityValue Q735_1()
 * @method static ResourcePriorityValue Q735_2()
 * @method static ResourcePriorityValue Q735_3()
 * @method static ResourcePriorityValue Q735_4()
 * @EnumValueType string
 */
class ResourcePriorityValue extends \MyCLabs\Enum\Enum
{

    const Q735_0 = 'q735.0';

    const Q735_1 = 'q735.1';

    const Q735_2 = 'q735.2';

    const Q735_3 = 'q735.3';

    const Q735_4 = 'q735.4';


}

