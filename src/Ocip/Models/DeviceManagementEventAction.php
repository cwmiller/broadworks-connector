<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventAction
 *
 * The action performed by a device management event.
 *
 * @method static DeviceManagementEventAction DELETE()
 * @method static DeviceManagementEventAction DOWNLOAD()
 * @method static DeviceManagementEventAction REBUILD()
 * @method static DeviceManagementEventAction RESET()
 * @method static DeviceManagementEventAction UPLOAD()
 * @EnumValueType string
 */
class DeviceManagementEventAction extends \MyCLabs\Enum\Enum
{
    public const DELETE = 'Delete';

    public const DOWNLOAD = 'Download';

    public const REBUILD = 'Rebuild';

    public const RESET = 'Reset';

    public const UPLOAD = 'Upload';
}

