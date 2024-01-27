<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EndpointType
 *
 * Types of Endpoints in Broadworks.
 *
 * @method static EndpointType PRIMARY()
 * @method static EndpointType SHARED_CALL_APPEARANCE()
 * @method static EndpointType VIDEO_ADD_ON()
 * @method static EndpointType PUBLIC_SERVICE_IDENTITY()
 * @method static EndpointType MUSIC_ON_HOLD_INTERNAL()
 * @method static EndpointType FLEXIBLE_SEATING_GUEST()
 * @EnumValueType string
 */
class EndpointType extends \MyCLabs\Enum\Enum
{
    public const PRIMARY = 'Primary';

    public const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    public const VIDEO_ADD_ON = 'Video Add On';

    public const PUBLIC_SERVICE_IDENTITY = 'Public Service Identity';

    public const MUSIC_ON_HOLD_INTERNAL = 'Music On Hold Internal';

    public const FLEXIBLE_SEATING_GUEST = 'Flexible Seating Guest';
}

