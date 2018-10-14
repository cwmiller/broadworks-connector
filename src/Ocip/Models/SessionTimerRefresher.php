<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionTimerRefresher
 *
 * Choices for Preferred Session Timer Refresher.
 *
 * @method static SessionTimerRefresher LOCAL()
 * @method static SessionTimerRefresher REMOTE()
 * @ValueType string
 */
class SessionTimerRefresher extends \MyCLabs\Enum\Enum
{

    const LOCAL = 'Local';

    const REMOTE = 'Remote';


}

