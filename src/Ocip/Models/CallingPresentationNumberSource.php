<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingPresentationNumberSource
 *
 * Identifies the source of the number used in the Calling Presentation Number
 * field
 *
 * @method static CallingPresentationNumberSource CONFIGURABLE_CLID()
 * @method static CallingPresentationNumberSource DNIS()
 * @method static CallingPresentationNumberSource EMERGENCY()
 * @method static CallingPresentationNumberSource GROUP()
 * @method static CallingPresentationNumberSource TRUNK_GROUP()
 * @method static CallingPresentationNumberSource USER()
 * @method static CallingPresentationNumberSource DEPARTMENT()
 * @EnumValueType string
 */
class CallingPresentationNumberSource extends \MyCLabs\Enum\Enum
{

    const CONFIGURABLE_CLID = 'Configurable CLID';

    const DNIS = 'DNIS';

    const EMERGENCY = 'Emergency';

    const GROUP = 'Group';

    const TRUNK_GROUP = 'Trunk Group';

    const USER = 'User';

    const DEPARTMENT = 'Department';


}

