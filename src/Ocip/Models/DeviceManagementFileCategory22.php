<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileCategory22
 *
 * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
 *
 * @method static DeviceManagementFileCategory22 _STATIC()
 * @method static DeviceManagementFileCategory22 DYNAMIC_GROUP()
 * @method static DeviceManagementFileCategory22 DYNAMIC_PROFILE()
 * @method static DeviceManagementFileCategory22 TEMPLATE_ONLY()
 * @EnumValueType string
 */
class DeviceManagementFileCategory22 extends \MyCLabs\Enum\Enum
{
    public const _STATIC = 'Static';

    public const DYNAMIC_GROUP = 'Dynamic Group';

    public const DYNAMIC_PROFILE = 'Dynamic Profile';

    public const TEMPLATE_ONLY = 'Template Only';
}

