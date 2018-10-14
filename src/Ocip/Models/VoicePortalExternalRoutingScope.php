<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalExternalRoutingScope
 *
 * Choices for the voice portal's external routing to decide which settings to use.
 *
 * @method static VoicePortalExternalRoutingScope SYSTEM()
 * @method static VoicePortalExternalRoutingScope GROUP()
 * @ValueType string
 */
class VoicePortalExternalRoutingScope extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const GROUP = 'Group';


}

