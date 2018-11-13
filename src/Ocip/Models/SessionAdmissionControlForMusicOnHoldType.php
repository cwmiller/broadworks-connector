<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionAdmissionControlForMusicOnHoldType
 *
 * Session Admission Control handling for Music On Hold types.
 *
 * @method static SessionAdmissionControlForMusicOnHoldType DO_NOT_PLAY()
 * @method static SessionAdmissionControlForMusicOnHoldType PLAY_AND_COUNT()
 * @EnumValueType string
 */
class SessionAdmissionControlForMusicOnHoldType extends \MyCLabs\Enum\Enum
{

    const DO_NOT_PLAY = 'Do Not Play';

    const PLAY_AND_COUNT = 'Play And Count';


}

