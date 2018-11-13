<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceConfigRebuildType
 *
 * Choices for the type of rebuild requested.
 *
 * @method static CPEDeviceConfigRebuildType DEVICE_TYPE()
 * @method static CPEDeviceConfigRebuildType DEVICE_PROFILES()
 * @EnumValueType string
 */
class CPEDeviceConfigRebuildType extends \MyCLabs\Enum\Enum
{

    const DEVICE_TYPE = 'Device Type';

    const DEVICE_PROFILES = 'Device Profiles';


}

