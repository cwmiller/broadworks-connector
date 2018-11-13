<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HoldAnnouncementMethodMode
 *
 * Choices for SIP Hold Announcement Method option
 *
 * @method static HoldAnnouncementMethodMode INACTIVE()
 * @method static HoldAnnouncementMethodMode BANDWIDTH_ATTRIBUTES()
 * @EnumValueType string
 */
class HoldAnnouncementMethodMode extends \MyCLabs\Enum\Enum
{

    const INACTIVE = 'Inactive';

    const BANDWIDTH_ATTRIBUTES = 'Bandwidth Attributes';


}

