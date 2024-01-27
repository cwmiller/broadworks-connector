<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EmergencyZonesProhibition
 *
 * Emergency zone policy to specify what kind of calls will be prohibited by the service when
 *         originated from outside the home zone.
 *
 * @method static EmergencyZonesProhibition PROHIBIT_ALL_REGISTRATIONS_AND_CALL_ORIGINATIONS()
 * @method static EmergencyZonesProhibition PROHIBIT_EMERGENCY_CALL_ORIGINATIONS()
 * @EnumValueType string
 */
class EmergencyZonesProhibition extends \MyCLabs\Enum\Enum
{
    public const PROHIBIT_ALL_REGISTRATIONS_AND_CALL_ORIGINATIONS = 'Prohibit all registrations and call originations';

    public const PROHIBIT_EMERGENCY_CALL_ORIGINATIONS = 'Prohibit emergency call originations';
}

