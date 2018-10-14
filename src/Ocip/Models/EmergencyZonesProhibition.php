<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EmergencyZonesProhibition
 *
 * Emergency zone policy to specify what kind of calls will be prohibited by the
 * service when
 *         originated from outside the home zone.
 *
 * @method static EmergencyZonesProhibition
 * PROHIBIT_ALL_REGISTRATIONS_AND_CALL_ORIGINATIONS()
 * @method static EmergencyZonesProhibition PROHIBIT_EMERGENCY_CALL_ORIGINATIONS()
 * @ValueType string
 */
class EmergencyZonesProhibition extends \MyCLabs\Enum\Enum
{

    const PROHIBIT_ALL_REGISTRATIONS_AND_CALL_ORIGINATIONS = 'Prohibit all registrations and call originations';

    const PROHIBIT_EMERGENCY_CALL_ORIGINATIONS = 'Prohibit emergency call originations';


}

