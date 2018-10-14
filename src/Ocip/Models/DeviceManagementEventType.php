<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventType
 *
 * The type of the device management event.
 *         Automatic means that the event was triggered automatically by the 
 *         system following a provisioning event from the user.
 *         Manual means that the user triggered the event directly.  The event
 *         was not a result of an indirect provisioning event.
 *
 * @method static DeviceManagementEventType AUTOMATIC()
 * @method static DeviceManagementEventType MANUAL()
 * @ValueType string
 */
class DeviceManagementEventType extends \MyCLabs\Enum\Enum
{

    const AUTOMATIC = 'Automatic';

    const MANUAL = 'Manual';


}

