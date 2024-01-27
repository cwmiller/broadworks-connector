<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LocationCriteria
 *
 * Identifies the location zone criteria to be matched.
 *
 * @method static LocationCriteria IN_OFFICE_ZONE()
 * @method static LocationCriteria IN_PRIMARY_ZONE()
 * @method static LocationCriteria IN_OFFICE_ZONE_OUTSIDE_OF_PRIMARY_ZONE()
 * @method static LocationCriteria OUTSIDE_OF_OFFICE_ZONE()
 * @method static LocationCriteria DISREGARD_ZONES()
 * @EnumValueType string
 */
class LocationCriteria extends \MyCLabs\Enum\Enum
{
    public const IN_OFFICE_ZONE = 'In Office Zone';

    public const IN_PRIMARY_ZONE = 'In Primary Zone';

    public const IN_OFFICE_ZONE_OUTSIDE_OF_PRIMARY_ZONE = 'In Office Zone, Outside of Primary Zone';

    public const OUTSIDE_OF_OFFICE_ZONE = 'Outside of Office Zone';

    public const DISREGARD_ZONES = 'Disregard Zones';
}

