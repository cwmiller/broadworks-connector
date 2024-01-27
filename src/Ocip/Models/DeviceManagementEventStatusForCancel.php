<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventStatusForCancel
 *
 * The possible status used to cancel a device management event.
 *         It can be 'Pending', meaning that it is not yet queued for processing.
 *         It can be 'Queued', waiting to be processed.
 *         It can be 'In Progress', meaning that it is currently being processed.
 *         It can be 'Stale', meaning that it should currently be queued in
 *         the internal Device Management queue but is not.
 *
 * @method static DeviceManagementEventStatusForCancel PENDING()
 * @method static DeviceManagementEventStatusForCancel QUEUED()
 * @method static DeviceManagementEventStatusForCancel IN_PROGRESS()
 * @method static DeviceManagementEventStatusForCancel STALE()
 * @EnumValueType string
 */
class DeviceManagementEventStatusForCancel extends \MyCLabs\Enum\Enum
{
    public const PENDING = 'Pending';

    public const QUEUED = 'Queued';

    public const IN_PROGRESS = 'In Progress';

    public const STALE = 'Stale';
}

