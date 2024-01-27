<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RegistrationEndpointType21sp1
 *
 * Types of Endpoints in Broadworks.
 *         
 *         Change History
 *         R21.sp1 added Mobility
 *
 * @method static RegistrationEndpointType21sp1 PRIMARY()
 * @method static RegistrationEndpointType21sp1 SHARED_CALL_APPEARANCE()
 * @method static RegistrationEndpointType21sp1 VIDEO_ADD_ON()
 * @method static RegistrationEndpointType21sp1 MOBILITY()
 * @EnumValueType string
 */
class RegistrationEndpointType21sp1 extends \MyCLabs\Enum\Enum
{
    public const PRIMARY = 'Primary';

    public const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    public const VIDEO_ADD_ON = 'Video Add On';

    public const MOBILITY = 'Mobility';
}

