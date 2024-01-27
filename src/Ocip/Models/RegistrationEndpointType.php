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
    public const PRIMARY = 'Primary';

    public const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    public const VIDEO_ADD_ON = 'Video Add On';
}

