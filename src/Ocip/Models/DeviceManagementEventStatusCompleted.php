<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventStatusCompleted
 *
 * The status of a completed device management event.
 *         It can be 'Canceled', meaning that it was canceled in the middle of processing.
 *         It can be 'Completed', meaning that all its related expanded events have 
 *         been successfully processed.
 *
 * @method static DeviceManagementEventStatusCompleted CANCELED()
 * @method static DeviceManagementEventStatusCompleted COMPLETED()
 * @EnumValueType string
 */
class DeviceManagementEventStatusCompleted extends \MyCLabs\Enum\Enum
{
    public const CANCELED = 'Canceled';

    public const COMPLETED = 'Completed';
}

