<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotCallManagerGroupDirectoryDisplaySelection
 *
 * Choices for commPilot call manager group directory display.
 *
 * @method static CommPilotCallManagerGroupDirectoryDisplaySelection DISPLAY()
 * @method static CommPilotCallManagerGroupDirectoryDisplaySelection HIDE()
 * @method static CommPilotCallManagerGroupDirectoryDisplaySelection SEARCH_ONLY()
 * @EnumValueType string
 */
class CommPilotCallManagerGroupDirectoryDisplaySelection extends \MyCLabs\Enum\Enum
{

    const DISPLAY = 'Display';

    const HIDE = 'Hide';

    const SEARCH_ONLY = 'Search Only';


}

