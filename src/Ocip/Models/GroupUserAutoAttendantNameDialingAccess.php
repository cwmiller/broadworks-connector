<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserAutoAttendantNameDialingAccess
 *
 * Group's policy for a user's access to the name dialing override fields.
 *
 * @method static GroupUserAutoAttendantNameDialingAccess FULL()
 * @method static GroupUserAutoAttendantNameDialingAccess NONE()
 * @ValueType string
 */
class GroupUserAutoAttendantNameDialingAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

