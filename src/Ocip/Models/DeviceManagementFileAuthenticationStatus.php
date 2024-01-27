<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthenticationStatus
 *
 * The status of a Device Management File Authentication.
 *         The possible values are:
 *           "Challenge" : authentication is required.
 *           "Need Digest Authentication" : client needs to use digest authentication.
 *           "Need User Password Authentication" : client needs to use user/pass authentication.
 *           "Need Bearer Authentication" : client needs to use bearer authentication.
 *
 * @method static DeviceManagementFileAuthenticationStatus CHALLENGE()
 * @method static DeviceManagementFileAuthenticationStatus NEED_DIGEST_AUTHENTICATION()
 * @method static DeviceManagementFileAuthenticationStatus NEED_USER_PASSWORD_AUTHENTICATION()
 * @method static DeviceManagementFileAuthenticationStatus NEED_BEARER_AUTHENTICATION()
 * @EnumValueType string
 */
class DeviceManagementFileAuthenticationStatus extends \MyCLabs\Enum\Enum
{
    public const CHALLENGE = 'Challenge';

    public const NEED_DIGEST_AUTHENTICATION = 'Need Digest Authentication';

    public const NEED_USER_PASSWORD_AUTHENTICATION = 'Need User Password Authentication';

    public const NEED_BEARER_AUTHENTICATION = 'Need Bearer Authentication';
}

