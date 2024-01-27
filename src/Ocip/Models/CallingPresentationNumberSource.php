<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingPresentationNumberSource
 *
 * Identifies the source of the number used in the Calling Presentation Number field
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
    public const CONFIGURABLE_CLID = 'Configurable CLID';

    public const DNIS = 'DNIS';

    public const EMERGENCY = 'Emergency';

    public const GROUP = 'Group';

    public const TRUNK_GROUP = 'Trunk Group';

    public const USER = 'User';

    public const DEPARTMENT = 'Department';
}

