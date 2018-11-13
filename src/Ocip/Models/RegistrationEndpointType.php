<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RegistrationEndpointType
 *
 * Types of Endpoints in Broadworks.
 *
 * @method static RegistrationEndpointType PRIMARY()
 * @method static RegistrationEndpointType SHARED_CALL_APPEARANCE()
 * @method static RegistrationEndpointType VIDEO_ADD_ON()
 * @EnumValueType string
 */
class RegistrationEndpointType extends \MyCLabs\Enum\Enum
{

    const PRIMARY = 'Primary';

    const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    const VIDEO_ADD_ON = 'Video Add On';


}

