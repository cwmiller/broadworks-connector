<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNightForwardingGroupServiceActivationMode
 *
 * Choices for the Group Night Forwarding Service Activation for a group.
 *
 * @method static GroupNightForwardingGroupServiceActivationMode AUTO_ON()
 * @method static GroupNightForwardingGroupServiceActivationMode ON()
 * @method static GroupNightForwardingGroupServiceActivationMode OFF()
 * @ValueType string
 */
class GroupNightForwardingGroupServiceActivationMode extends \MyCLabs\Enum\Enum
{

    const AUTO_ON = 'Auto On';

    const ON = 'On';

    const OFF = 'Off';


}

