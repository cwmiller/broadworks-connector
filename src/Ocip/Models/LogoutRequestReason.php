<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LogoutRequestReason
 *
 * Logout request reason.
 *
 * @method static LogoutRequestReason CLIENT_LOGOUT()
 * @method static LogoutRequestReason SERVER_CONNECTION_FAILURE()
 * @method static LogoutRequestReason OPEN_CLIENT_SERVER_FORCED_LOGOUT()
 * @EnumValueType string
 */
class LogoutRequestReason extends \MyCLabs\Enum\Enum
{
    public const CLIENT_LOGOUT = 'Client Logout';

    public const SERVER_CONNECTION_FAILURE = 'Server Connection Failure';

    public const OPEN_CLIENT_SERVER_FORCED_LOGOUT = 'Open Client Server Forced Logout';
}

