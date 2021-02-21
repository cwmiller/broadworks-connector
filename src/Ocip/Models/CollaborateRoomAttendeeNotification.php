<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomAttendeeNotification
 *
 * Choices for the notification when attendees join or leave the collaborate room session.
 *
 * @method static CollaborateRoomAttendeeNotification PLAY_TONE()
 * @method static CollaborateRoomAttendeeNotification NO_NOTIFICATION()
 * @EnumValueType string
 */
class CollaborateRoomAttendeeNotification extends \MyCLabs\Enum\Enum
{

    const PLAY_TONE = 'Play Tone';

    const NO_NOTIFICATION = 'No Notification';


}

