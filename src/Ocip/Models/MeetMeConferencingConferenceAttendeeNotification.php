<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceAttendeeNotification
 *
 * Choices for the notification when attendees join or leave the conferecne.
 *
 * @method static MeetMeConferencingConferenceAttendeeNotification PLAY_TONE()
 * @method static MeetMeConferencingConferenceAttendeeNotification
 * PLAY_RECORDED_NAME()
 * @method static MeetMeConferencingConferenceAttendeeNotification
 * NO_NOTIFICATION()
 * @ValueType string
 */
class MeetMeConferencingConferenceAttendeeNotification extends \MyCLabs\Enum\Enum
{

    const PLAY_TONE = 'Play Tone';

    const PLAY_RECORDED_NAME = 'Play Recorded Name';

    const NO_NOTIFICATION = 'No Notification';


}

