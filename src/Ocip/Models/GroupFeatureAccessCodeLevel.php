<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeLevel
 *
 * Feature Access Code Level defining group policy how Feature Access Codes will be
 * used by a group.
 *
 * @method static GroupFeatureAccessCodeLevel SERVICE_PROVIDER()
 * @method static GroupFeatureAccessCodeLevel GROUP()
 * @EnumValueType string
 */
class GroupFeatureAccessCodeLevel extends \MyCLabs\Enum\Enum
{

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';


}

