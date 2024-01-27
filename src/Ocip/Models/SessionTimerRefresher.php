<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionTimerRefresher
 *
 * Choices for Preferred Session Timer Refresher.
 *
 * @method static SessionTimerRefresher LOCAL()
 * @method static SessionTimerRefresher REMOTE()
 * @EnumValueType string
 */
class SessionTimerRefresher extends \MyCLabs\Enum\Enum
{
    public const LOCAL = 'Local';

    public const REMOTE = 'Remote';
}

