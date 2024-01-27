<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventQueueType
 *
 * Device Management queues available in the system.
 *         They contain events at various stage of processing.
 *
 * @method static DeviceManagementEventQueueType COMPLETED()
 * @method static DeviceManagementEventQueueType IN_PROGRESS_OR_PENDING()
 * @EnumValueType string
 */
class DeviceManagementEventQueueType extends \MyCLabs\Enum\Enum
{
    public const COMPLETED = 'Completed';

    public const IN_PROGRESS_OR_PENDING = 'In Progress Or Pending';
}

