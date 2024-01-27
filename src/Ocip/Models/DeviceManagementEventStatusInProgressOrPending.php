<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventStatusInProgressOrPending
 *
 * The status of a device management event.
 *         It can be 'Pending', meaning that it is not yet queued for processing.
 *         It can be 'Queued', waiting to be processed.
 *         It can be 'In Progress', meaning that it is currently being processed.
 *         It can be 'Process On Other Host', meaning that it is currently being 
 *         processed on another host.
 *         It can be 'Stale', meaning that it should currently be queued in
 *         the internal Device Management queue but is not.
 *
 * @method static DeviceManagementEventStatusInProgressOrPending PENDING()
 * @method static DeviceManagementEventStatusInProgressOrPending QUEUED()
 * @method static DeviceManagementEventStatusInProgressOrPending IN_PROGRESS()
 * @method static DeviceManagementEventStatusInProgressOrPending PROCESS_ON_OTHER_HOST()
 * @method static DeviceManagementEventStatusInProgressOrPending STALE()
 * @EnumValueType string
 */
class DeviceManagementEventStatusInProgressOrPending extends \MyCLabs\Enum\Enum
{
    public const PENDING = 'Pending';

    public const QUEUED = 'Queued';

    public const IN_PROGRESS = 'In Progress';

    public const PROCESS_ON_OTHER_HOST = 'Process On Other Host';

    public const STALE = 'Stale';
}

