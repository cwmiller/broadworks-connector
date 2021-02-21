<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthenticationStatus
 *
 * The status of a Device Management File Authentication.
 *         The possible values are:
 *           "Challenge" : authentication is required.
 *           "Need Digest Authntication" : client needs to use digest authentication.
 *           "Need User Password Authntication" : client needs to use user/pass authentication.
 *
 * @method static DeviceManagementFileAuthenticationStatus CHALLENGE()
 * @method static DeviceManagementFileAuthenticationStatus NEED_DIGEST_AUTHENTICATION()
 * @method static DeviceManagementFileAuthenticationStatus NEED_USER_PASSWORD_AUTHENTICATION()
 * @EnumValueType string
 */
class DeviceManagementFileAuthenticationStatus extends \MyCLabs\Enum\Enum
{

    const CHALLENGE = 'Challenge';

    const NEED_DIGEST_AUTHENTICATION = 'Need Digest Authentication';

    const NEED_USER_PASSWORD_AUTHENTICATION = 'Need User Password Authentication';


}

