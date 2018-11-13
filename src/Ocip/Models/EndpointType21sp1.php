<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EndpointType21sp1
 *
 * Types of Endpoints in Broadworks.
 *         
 *         Change History
 *         R21.sp1 - Added Mobility
 *
 * @method static EndpointType21sp1 PRIMARY()
 * @method static EndpointType21sp1 SHARED_CALL_APPEARANCE()
 * @method static EndpointType21sp1 VIDEO_ADD_ON()
 * @method static EndpointType21sp1 PUBLIC_SERVICE_IDENTITY()
 * @method static EndpointType21sp1 MUSIC_ON_HOLD_INTERNAL()
 * @method static EndpointType21sp1 FLEXIBLE_SEATING_GUEST()
 * @method static EndpointType21sp1 MOBILITY()
 * @EnumValueType string
 */
class EndpointType21sp1 extends \MyCLabs\Enum\Enum
{

    const PRIMARY = 'Primary';

    const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    const VIDEO_ADD_ON = 'Video Add On';

    const PUBLIC_SERVICE_IDENTITY = 'Public Service Identity';

    const MUSIC_ON_HOLD_INTERNAL = 'Music On Hold Internal';

    const FLEXIBLE_SEATING_GUEST = 'Flexible Seating Guest';

    const MOBILITY = 'Mobility';


}

